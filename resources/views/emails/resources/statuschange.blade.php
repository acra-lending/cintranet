@component('mail::message')

# Employee Status Change Request from Cintranet
<hr/>

<strong>Effective Date:</strong> {{ $data[0]['requestDueDate'] }}

# Employee Info:

{{ $data[0]['name'] }}<br/>
{{ $data[0]['position'] }}<br/>

<strong>Promoted:</strong> {{ $data[0]['selectPromotion'] }}<br/>

<hr/>

# Status Change:

<strong>New Position:</strong> {{ $data[0]['newPosition'] }}<br/>

<strong>New Email:</strong> {{ $data[0]['newEmail'] }}<br/> 

<strong>New Tel:</strong> {{ $data[0]['phone'] }}<br/> 
<strong>New Ext:</strong> {{ $data[0]['extension'] }}<br/>
<strong>New Cel:</strong> {{ $data[0]['cellPhone'] }}<br/> 

<strong>New Territory:</strong> {{ $data[0]['territory'] }}<br/>

<strong>New Department:</strong> {{ str_replace(array('[', '"', ']',), '',$data[0]['department']) }}<br/>

<strong>New Manager:</strong> {{ $data[0]['manager'] }}<br/>  

<hr/>

# Access Changes:

<strong>New Access Type:</strong> {{ $data[0]['selectAccess'] }}<br/>

<strong>New FOB #:</strong> {{ $data[0]['fob'] }}<br/>

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
