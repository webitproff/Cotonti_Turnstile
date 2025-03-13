<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.auth.tags
Tags=users.auth.tpl:{USERS_AUTH_VERIFY_IMG};users.auth.tpl:{USERS_AUTH_VERIFY_INPUT}
Order=10
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL.');

global $cfg, $usr, $t;

if ($cfg['plugin']['turnstile']['enable_login'] && $usr['id'] == 0)
{
    $t->assign([
        'USERS_AUTH_VERIFY_IMG'   => cot_captcha_generate('turnstile'),
        'USERS_AUTH_VERIFY_INPUT' => ''
    ]);
}
