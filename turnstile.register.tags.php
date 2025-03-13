<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.tags
Tags=users.register.tpl:{USERS_REGISTER_VERIFY_IMG};users.register.tpl:{USERS_REGISTER_VERIFY_INPUT}
Order=10
[END_COT_EXT]
==================== */

/**
 * Cloudflare Turnstile Plugin - Adds widget to the registration form
 *
 * @package turnstile
 * @author Ali Çömez
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if ($usr['id'] === 0 && $cfg['captchamain'] === 'turnstile') {
    $t->assign([
        'USERS_REGISTER_VERIFY_IMG'   => cot_captcha_generate('turnstile'),
        'USERS_REGISTER_VERIFY_INPUT' => ''  
    ]);
}

