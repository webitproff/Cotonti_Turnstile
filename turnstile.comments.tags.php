<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=comments.newcomment.tags
Tags=comments.tpl:{COMMENTS_FORM_VERIFYIMG};comments.tpl:{COMMENTS_FORM_VERIFYINPUT}
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
        'COMMENTS_FORM_VERIFYIMG'   => cot_captcha_generate('turnstile'),
        'COMMENTS_FORM_VERIFYINPUT' => ''
    ]);
}
