<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=comments.newcomment.tags
Tags=comments.tpl:{COMMENTS_FORM_VERIFY_IMG};comments.tpl:{COMMENTS_FORM_VERIFY_INPUT}
Order=10
[END_COT_EXT]
==================== */

/**
 * Cloudflare Turnstile Plugin - Adds widget to comments form
 *
 * @package turnstile
 * @author Ali Çömez
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if ($usr['id'] === 0 && $cfg['captchamain'] === 'turnstile') {
    $t->assign([
        'COMMENTS_FORM_VERIFY_IMG'   => cot_captcha_generate('turnstile'),
        'COMMENTS_FORM_VERIFY_INPUT' => ''
    ]);
}

