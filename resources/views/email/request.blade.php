<h1>Password ResetConfirmation</h1>
<div>
    You are receiving this email because someone use this email
    address asked for a password, if it's not you, just omit it
    the request will discard in 10 minutes
</div>
<div>
    If you request for password reset, Please Click the link below
    <a href="{{ env('APP_URL') }}/auth/reset?token={{ $passwordReset->token }}">Reset Password</a>
</div>

<div>NEUOJ</div>
