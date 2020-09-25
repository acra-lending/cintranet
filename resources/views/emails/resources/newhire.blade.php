@component('mail::message')

# New Employee Request from Cintranet
<hr/>

# Employee Info:

{{ $data['name'] }}<br/>
{{ $data['email'] }}<br/>

<strong>Tel:</strong> {{ $data['phone'] }}<br/> 
<strong>Ext:</strong> {{ $data['extension'] }}<br/>
<strong>Cel:</strong> {{ $data['cellPhone'] }}<br/> 

<strong>Territory:</strong> {{ $data['territory'] }}<br/>
<strong>Position:</strong> {{ $data['position'] }}<br/> 
<strong>Manager:</strong> {{ $data['manager'] }}<br/>  

<hr/>

# Access Request:

<strong>Department:</strong> {{ str_replace(array('[', '"', ']',), '',$data['department']) }}<br/> 

<strong>Access Type:</strong> {{ $data['selectAccess'] }}<br/>

<strong>FOB #:</strong> {{ $data['fob'] }}<br/>

<strong>Special Instructions:</strong> {{ $data['specialInstructions'] }}<br/>

<hr/>

# Additional Information:

<strong>Submitted By:</strong> {{ $data['submittedBy'] }}<br/>

<strong>Submitter's Email:</strong> {{ $data['email2'] }} <br/>

<strong>Additional Recipient Email:</strong> {{ $data['email3'] }} <br/>

<strong>Additional Recipient Email (2):</strong> {{ $data['email4'] }} <br/>

<hr/>

<br/>
~<em>{{ 'CSC Webmaster' }}</em>
@endcomponent
