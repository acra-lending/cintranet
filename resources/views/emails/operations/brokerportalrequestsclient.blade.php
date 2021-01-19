@component('mail::message')

# Thank you for signing up!
<hr/>

# Credential Details:

<strong>Registered Email:</strong> {{ $data[0]['email'] }}<br/>
<strong>Username:</strong> {{ $data['username'] }}<br/>
<p>Your account is now active.</p><br/>
<div style="padding: 10px 0 50px 0;">
    <a href="https://acralending.com/password-reset" 
        style="background: #0033a1;color: #fff;padding: 12px 30px;text-decoration: none;border-radius: 3px;letter-spacing: 0.3px;">
        Click here to set your password
    </a>
</div>
<br/>
<p>If you have any questions, please contact <a href="mailto:webupdates@citadelservicing.com">Acra Lending Webmaster</a>
{{-- <strong>Temporary Password:</strong> {{ $data['tempPassword'] }}<br/> --}}
{{-- <strong>Type:</strong> {{ $data[0]['selectType'] }}<br/> --}}

<hr/>

<br/>
~<em>{{ 'The Acra Lending Team' }}</em>
@endcomponent
