<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.add.first
Order=10
[END_COT_EXT]
==================== */

/**
 * Cloudflare Turnstile Plugin - Validates registration form submission
 *
 * @package turnstile
 * @author Ali Çömez
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if ($cfg['captchamain'] === 'turnstile' && $usr['id'] === 0) {
    $token = cot_import('cf-turnstile-response', 'P', 'TXT');
    if (!cot_captcha_validate($token)) {
        cot_error('captcha_verification_failed', 'rverify');
    }
}
