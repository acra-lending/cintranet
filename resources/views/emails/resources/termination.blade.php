@component('mail::message')

# Employee Termination Request from Cintranet
<hr/>

<strong>Effective Date:</strong> {{ $data['requestDueDate'] }}

# Employee Info:

{{ $data['name'] }}<br/>
{{ $data['email'] }}<br/> 
{{ $data['position'] }}<br/>

<strong>Status:</strong> {{ $data['status'] }}<br/>

<strong>Email Forwarding:</strong> {{ $data['emailForward'] }}<br/>

<strong>Forwarding Email:</strong> {{ $data['email2'] }} <br/>

<hr/>

# Special Instructions:

{{ $data['specialInstructions'] }}<br/>

<hr/>

# Additional Information:

<strong>Submitted By:</strong> {{ $data['submittedBy'] }}<br/>

<strong>Submitter's Email:</strong> {{ $data['email3'] }} <br/>

<strong>Additional Recipient Email:</strong> {{ $data['email4'] }} <br/>

<strong>Additional Recipient Email (2):</strong> {{ $data['email5'] }} <br/>

<hr/>

<br/>
~<em>{{ 'CSC Webmaster' }}</em>
@endcomponent
