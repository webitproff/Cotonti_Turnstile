<?php
/* ====================
[BEGIN_COT_EXT]
Code=turnstile
Name=Cloudflare Turnstile
Category=security-authentication
Description=Cloudflare Turnstile CAPTCHA integration for spam and bot protection
Version=1.1
Date=2025-03-08
Author=Ali Çömez
Copyright=©2025 Ali Çömez
Notes=BSD License
SQL=
Auth_guests=R
Lock_guests=W12345A
Auth_members=R
Lock_members=12345
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
sitekey=01:string:::Cloudflare Turnstile Site Key
secret=02:string:::Cloudflare Turnstile Secret Key
enable_login=03:radio::0:Use Turnstile on login form (0/No, 1/Yes)
[END_COT_EXT_CONFIG]
==================== */

/**
 * Cloudflare Turnstile Plugin Setup File
 *
 * @package turnstile
 * @author Ali Çömez
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');
