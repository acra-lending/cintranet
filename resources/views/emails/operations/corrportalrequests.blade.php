@component('mail::message')

# New Correspondent Portal Registration
<hr/>

# Correspondent Portal Request Details:

<strong>First Name:</strong> {{ $data[0]['firstname'] }}<br/>
<strong>Last Name:</strong> {{ $data[0]['lastname'] }}<br/>
<strong>Email:</strong> {{ strtolower($data[0]['email']) }}<br/>
<strong>Username:</strong> {{ $data['username'] }}<br/>
<strong>Temporary Password:</strong> {{ $data['tempPassword'] }}<br/>
{{-- <strong>Type:</strong> {{ $data[0]['selectType'] }}<br/> --}}

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
