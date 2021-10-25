@component('mail::message')

# New Employee Request from Cintranet
<hr/>

<strong>Start Date:</strong> {{ $data[0]['requestDueDate'] }}

# Employee Info:

{{ $data[0]['name'] }}<br/>
{{ $data[0]['email'] }}<br/>

<strong>Tel:</strong> {{ $data[0]['phone'] }}<br/> 
<strong>Ext:</strong> {{ $data[0]['extension'] }}<br/>
<strong>Cel:</strong> {{ $data[0]['cellPhone'] }}<br/> 

<strong>Territory:</strong> {{ $data[0]['territory'] }}<br/>
<strong>Position:</strong> {{ $data[0]['position'] }}<br/> 
<strong>Manager:</strong> {{ $data[0]['manager'] }}<br/>

<strong>Mortgage 101:</strong> {{ $data[0]['mortgage101'] }}<br/>
<strong>Sales Training Enrollment:</strong> {{ $data[0]['training'] }}<br/> 
<strong>NMLS:</strong> {{ $data[0]['nmls'] }}<br/> 

<hr/>

# Access Request:

<strong>Department:</strong> {{ str_replace(array('[', '"', ']',), '',$data[0]['department']) }}<br/> 

<strong>Access Type:</strong> {{ $data[0]['selectAccess'] }}<br/>

<strong>FOB #:</strong> {{ $data[0]['fob'] }}<br/>

<strong>Special Instructions:</strong> {{ $data[0]['specialInstructions'] }}<br/>

<hr/>

# Additional Information:

<strong>Submitted By:</strong> {{ $data['submittedBy'] }}<br/>

<strong>Submitter's Email:</strong> {{ $data['email2'] }} <br/>

<strong>Additional Recipient Email(s):</strong> {{ $data[0]['email3'] }} <br/>

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
