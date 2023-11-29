@component('mail::message')

# Employee Termination Request from Cintranet
<hr/>

<strong>Effective Date:</strong> {{ $data[0]['requestDueDate'] }}

# Employee Info:

{{ $data[0]['name'] }}<br/>
{{ $data[0]['email'] }}<br/> 
{{ $data[0]['position'] }}<br/>

<strong>Status:</strong> {{ $data[0]['status'] }}<br/>

<strong>Email Forwarding:</strong> {{ $data[0]['emailForward'] }}<br/>

<strong>Forwarding Email:</strong> {{ $data[0]['email2'] }} <br/>

<strong>Duration:</strong> {{ $data[0]['duration'] }} <br/>

<hr/>

# Special Instructions:

<strong>Designate Access:</strong> {{ $data[0]['designateAccess'] }} <br/>

Please disable access immediately.<br/>
{{ $data[0]['specialInstructions'] }}<br/>

<hr/>

# Additional Information:

<strong>Submitted By:</strong> {{ $data['submittedBy'] }}<br/>

<strong>Submitter's Email:</strong> {{ $data['email3'] }} <br/>

<strong>Additional Recipient Email(s):</strong> {{ $data[0]['email4'] }} <br/>


<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
