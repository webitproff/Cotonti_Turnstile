<strong>Files to Update &amp; New Code</strong></h3>

<p>You need to add these codes to the following <strong>template files</strong>:</p>

<ul>
	<li><strong>Login Form</strong> → <code>users.auth.tpl</code></li>
	<li><strong>Registration Form</strong> → <code>users.register.tpl</code></li>
	<li><strong>Comment Form</strong> → <code>comments.tpl</code></li>
	<li><strong>Contact Form</strong> → <code>contact.tpl</code></li>
</ul>

<hr>
<h3><strong>Login Form (<code>users.auth.tpl</code>)</strong></h3>

<p>Old code:</p>

<pre><code class="language-html">{USERS_AUTH_VERIFYIMG}
{USERS_AUTH_VERIFYINPUT}
</code></pre>

<p>Updated code:</p>

<pre><code class="language-html">&lt;!-- Cloudflare Turnstile Captcha --&gt;
&lt;!-- IF {USERS_AUTH_VERIFY_IMG} --&gt;
&lt;tr&gt;
    &lt;td colspan="2" class="textcenter"&gt;
        {USERS_AUTH_VERIFY_IMG}
        {USERS_AUTH_VERIFY_INPUT}
    &lt;/td&gt;
&lt;/tr&gt;
&lt;!-- ENDIF --&gt;
</code></pre>

<p>Add this code at the bottom of the <strong>login form</strong> inside the <code>users.auth.tpl</code> file.</p>

<hr>
<h3><strong>Registration Form (<code>users.register.tpl</code>)</strong></h3>

<p>Old code:</p>

<pre><code class="language-html">{USERS_REGISTER_VERIFYIMG}
{USERS_REGISTER_VERIFYINPUT}
</code></pre>

<p>Updated code:</p>

<pre><code class="language-html">&lt;!-- Cloudflare Turnstile Captcha --&gt;
&lt;!-- IF {USERS_REGISTER_VERIFY_IMG} --&gt;
&lt;tr&gt;
    &lt;td colspan="2" class="textcenter"&gt;
        {USERS_REGISTER_VERIFY_IMG}
        {USERS_REGISTER_VERIFY_INPUT}
    &lt;/td&gt;
&lt;/tr&gt;
&lt;!-- ENDIF --&gt;
</code></pre>

<p>Add this code at the bottom of the <strong>registration form</strong> inside the <code>users.register.tpl</code> file.</p>

<hr>
<h3><strong>Comment Form (<code>comments.tpl</code>)</strong></h3>

<p>Old code:</p>

<pre><code class="language-html">{COMMENTS_FORM_VERIFYIMG}
{COMMENTS_FORM_VERIFYINPUT}
</code></pre>

<p>Updated code:</p>

<pre><code class="language-html">&lt;!-- Cloudflare Turnstile Captcha --&gt;
&lt;!-- IF {COMMENTS_FORM_VERIFY_IMG} --&gt;
&lt;tr&gt;
    &lt;td colspan="2" class="textcenter"&gt;
        {COMMENTS_FORM_VERIFY_IMG}
        {COMMENTS_FORM_VERIFY_INPUT}
    &lt;/td&gt;
&lt;/tr&gt;
&lt;!-- ENDIF --&gt;
</code></pre>

<p>Add this code inside the <strong>comment form</strong> inside the <code>comments.tpl</code> file.</p>

<hr>
<h3><strong>Contact Form (<code>contact.tpl</code>)</strong></h3>

<p>Old code:</p>

<pre><code class="language-html">{CONTACT_FORM_VERIFY}
</code></pre>

<p>Updated code:</p>

<pre><code class="language-html">&lt;!-- Cloudflare Turnstile Captcha --&gt;
&lt;!-- IF {CONTACT_FORM_VERIFY_INPUT} --&gt;
&lt;tr&gt;
    &lt;td colspan="2" class="textcenter"&gt;
        {CONTACT_FORM_VERIFY_INPUT}
    &lt;/td&gt;
&lt;/tr&gt;
&lt;!-- ENDIF --&gt;
</code></pre>

<p>Add this code at the bottom of the <strong>contact form</strong> inside the <code>contact.tpl</code> file.</p>

<hr>
<p>&nbsp;</p>

<table>
	<thead>
		<tr>
			<th>File Name</th>
			<th>Old Tags</th>
			<th>New Tags</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>users.auth.tpl</code> (Login Form)</td>
			<td><code>{USERS_AUTH_VERIFYIMG}</code>, <code>{USERS_AUTH_VERIFYINPUT}</code></td>
			<td><code>{USERS_AUTH_VERIFY_IMG}</code>, <code>{USERS_AUTH_VERIFY_INPUT}</code></td>
		</tr>
		<tr>
			<td><code>users.register.tpl</code> (Registration Form)</td>
			<td><code>{USERS_REGISTER_VERIFYIMG}</code>, <code>{USERS_REGISTER_VERIFYINPUT}</code></td>
			<td><code>{USERS_REGISTER_VERIFY_IMG}</code>, <code>{USERS_REGISTER_VERIFY_INPUT}</code></td>
		</tr>
		<tr>
			<td><code>comments.tpl</code> (Comment Form)</td>
			<td><code>{COMMENTS_FORM_VERIFYIMG}</code>, <code>{COMMENTS_FORM_VERIFYINPUT}</code></td>
			<td><code>{COMMENTS_FORM_VERIFY_IMG}</code>, <code>{COMMENTS_FORM_VERIFY_INPUT}</code></td>
		</tr>
		<tr>
			<td><code>contact.tpl</code> (Contact Form)</td>
			<td><code>{CONTACT_FORM_VERIFY}</code></td>
			<td><code>{CONTACT_FORM_VERIFY_INPUT}</code></td>
		</tr>
	</tbody>
</table>





