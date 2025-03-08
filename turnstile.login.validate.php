<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.auth.check.done
Order=10
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL.');

global $cfg, $usr;

if ($cfg['plugin']['turnstile']['enable_login'] && $usr['id'] == 0)
{
    $token = cot_import('cf-turnstile-response', 'P', 'TXT');
    if (!cot_captcha_validate($token)) {
        cot_error('captcha_verification_failed', 'rverify');
    }
}
