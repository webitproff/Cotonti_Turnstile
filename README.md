# Cotonti Cloudflare Turnstile Plugin

Cloudflare Turnstile CAPTCHA integration for Cotonti Siena (0.9.x). Protect your site effectively from spam, bots, and automated submissions with Cloudflare's advanced CAPTCHA alternative.

##  Features
- Protects user registration, login, and comments from spam bots.
- Simple integration into existing Cotonti forms.
- Admin-configurable through Cotonti admin panel.
- Modern and secure user verification without compromising user experience.

##  Requirements
- Cotonti Siena v0.9.25 or later
- Cloudflare Turnstile Site Key and Secret Key ([Get keys here](https://dash.cloudflare.com))

##  Installation
1. Upload the plugin folder `turnstile` into your Cotonti plugins directory:
Setup is very simple, just add the following validation field to login and input fields like register, comment.

            <!-- Cloudflare Turnstile Captcha -->
            <!-- IF {USERS_AUTH_VERIFYIMG} -->
            <tr>
                <td colspan="2" class="textcenter">
                    {USERS_AUTH_VERIFYIMG}
                    {USERS_AUTH_VERIFYINPUT}
                </td>
            </tr>
            <!-- ENDIF -->


Compatible with Cotonti Siena v0.9.25+

## Cotonti Cloudflare Turnstile Plugin

- [@Cotonti Cloudflare Turnstile Plugin](https://rootali.net/cloudflare-turnstile-plugin-for-cotonti-siena.slw) Cotonti Cloudflare Turnstile Plugin

  


