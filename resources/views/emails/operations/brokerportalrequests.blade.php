@component('mail::message')

# New Broker Portal Request from Cintranet
<hr/>

<strong>Date:</strong> {{ $data['requestDueDate'] }}

# Broker Portal Request Details:

<strong>First Name:</strong> {{ $data['firstname'] }}<br/>
<strong>Last Name:</strong> {{ $data['lastname'] }}<br/>
<strong>Email:</strong> {{ $data['email'] }}<br/>
<strong>Company:</strong> {{ $data['company'] }}<br/>
<strong>NMLS ID:</strong> {{ $data['nmlsid'] }}<br/>
<strong>Type:</strong> {{ $data['selectType'] }}<br/>

<hr/>

# Additional Info:

<strong>Special Instructions:</strong> {{ $data['specialInstructions'] }}<br/>

<hr/>

# Submitter Information:

<strong>Submitted By:</strong> {{ $data['submittedBy'] }}<br/>

<strong>Submitter's Email:</strong> {{ $data['email2'] }} <br/>

<hr/>

<br/>
~<em>{{ 'CSC Webmaster' }}</em>
@endcomponent
