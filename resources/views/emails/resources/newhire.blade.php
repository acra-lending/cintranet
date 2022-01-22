@component('mail::message')

# New Employee Request from Cintranet
<hr/>

<strong>Start Date:</strong> {{ $data[0]['requestDueDate'] }}

# Employee Info:

{{ $data[0]['name'] }}<br/>
{{ $data[0]['email'] }}<br/>

@if(!empty($data[0]['phone']))
<strong>Tel:</strong> {{ $data[0]['phone'] }}<br/> 
@endif
@if(!empty($data[0]['extension']))
<strong>Ext:</strong> {{ $data[0]['extension'] }}<br/>
@endif
<strong>Cel:</strong> {{ $data[0]['cellPhone'] }}<br/> 

@if(!empty($data[0]['territory']))
<strong>Territory:</strong> {{ $data[0]['territory'] }}<br/>
@endif
<strong>Position:</strong> {{ $data[0]['position'] }}<br/> 
<strong>Manager:</strong> {{ $data[0]['manager'] }}<br/>

<strong>Mortgage 101:</strong> {{ $data[0]['mortgage101'] }}<br/>
<strong>Sales Training Enrollment:</strong> {{ $data[0]['training'] }}<br/>
@if(!empty($data[0]['nmls']))
<strong>NMLS:</strong> {{ $data[0]['nmls'] }}<br/> 
@endif

<hr/>

# Access Request:

<strong>Department:</strong> {{ str_replace(array('[', '"', ']',), '',$data[0]['department']) }}<br/> 

<strong>Access Type:</strong> {{ $data[0]['selectAccess'] }}<br/>

@if(!empty($data[0]['fob']))
<strong>FOB #:</strong> {{ $data[0]['fob'] }}<br/>
@endif

<strong>Location:</strong> {{ $data[0]['location'] }}<br/>

@if(!empty($data[0]['remoteLocation']))
<strong>Remote Location:</strong> {{ $data[0]['remoteLocation'] }}<br/>
@endif

<strong>Special Instructions:</strong> New hire effective {{ date("l, F jS Y", strtotime($data[0]['requestDueDate'])) }}.<br/>
{{ $data[0]['specialInstructions'] }}<br/>

<hr/>

# Additional Information:

<strong>Submitted By:</strong> {{ $data['submittedBy'] }}<br/>

<strong>Submitter's Email:</strong> {{ $data['email2'] }} <br/>

<strong>Additional Recipient Email(s):</strong> {{ $data[0]['email3'] }} <br/>

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
