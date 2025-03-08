<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
Order=10
[END_COT_EXT]
==================== */

/**
 * Cloudflare Turnstile CAPTCHA plugin for Cotonti Siena
 *
 * @package turnstile
 * @author Ali Çömez
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

require_once cot_langfile('turnstile', 'plug');

global $cot_captcha;
$cot_captcha[] = 'turnstile';

/**
 * Generates Cloudflare Turnstile widget HTML
 *
 * @return string HTML output
 */
function turnstile_generate()
{
    global $cfg, $usr;

    $sitekey = $cfg['plugin']['turnstile']['sitekey'];
    if (empty($sitekey)) {
        // Display warning message only for admins
        if ($usr['isadmin']) {
            return '<strong style="color:red;">Turnstile Site Key is not set!</strong>';
        }
        return '';
    }

    $html  = '<div class="cf-turnstile" data-sitekey="' . htmlspecialchars($sitekey) . '"></div>';
    $html .= '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>';
    
    return $html;
}

/**
 * Validates Turnstile token from submitted forms
 *
 * @param string $token
 * @return bool
 */
function turnstile_validate($token)
{
    global $cfg;

    $secret = $cfg['plugin']['turnstile']['secret'];
    if (empty($secret) || empty($token)) {
        return false;
    }

    $post_data = http_build_query([
        'secret'   => $secret,
        'response' => $token,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ]);

    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n" .
                         "Content-Length: " . strlen($post_data) . "\r\n",
            'content' => $post_data
        ]
    ];

    $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $response = @file_get_contents($url, false, stream_context_create($options));

    if ($response === false) {
        // API request failed, consider invalid for safety
        return false;
    }

    $result = json_decode($response, true);

    return !empty($result['success']) && $result['success'] === true;
}
