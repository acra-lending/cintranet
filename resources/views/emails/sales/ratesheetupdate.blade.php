@component('mail::message')

# Jumbo Prime Ratesheet Update
<hr/>

# Date: {{ date('m-d-Y') }}

<p>Today's Jumbo Prime ratesheet has been updated.</p>
<p>Click the link below to view latest ratesheet<p><br/>
    <div style="padding: 10px 0 50px 0;">
        <a href="https://acralending.com/ratesheets#jumbo" 
            style="background: #0033a1;color: #fff;padding: 12px 30px;text-decoration: none;border-radius: 3px;letter-spacing: 0.3px;">
            View Ratesheets
        </a>
    </div>

{{-- <strong>First Name:</strong> {{ $data[0]['firstname'] }}<br/>
<strong>Last Name:</strong> {{ $data[0]['lastname'] }}<br/>
<strong>Email:</strong> {{ strtolower($data[0]['email']) }}<br/>
<strong>Username:</strong> {{ $data['username'] }}<br/>
<strong>Temporary Password:</strong> {{ $data['tempPassword'] }}<br/> --}}
{{-- <strong>Type:</strong> {{ $data[0]['selectType'] }}<br/> --}}

<hr/>

<br/>
~<em>{{ 'Marketing' }}</em>
@endcomponent