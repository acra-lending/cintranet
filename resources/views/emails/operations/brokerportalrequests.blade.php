@component('mail::message')

# New Broker Portal Request from Cintranet
<hr/>

# Broker Portal Request Details:

<strong>First Name:</strong> {{ $data[0]['firstname'] }}<br/>
<strong>Last Name:</strong> {{ $data[0]['lastname'] }}<br/>
<strong>Email:</strong> {{ $data[0]['email'] }}<br/>
<strong>Username:</strong> {{ $data['username'] }}<br/>
<strong>Temporary Password:</strong> {{ $data['tempPassword'] }}<br/>
{{-- <strong>Type:</strong> {{ $data[0]['selectType'] }}<br/> --}}

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
