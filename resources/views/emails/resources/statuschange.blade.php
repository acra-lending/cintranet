@component('mail::message')

# Employee Status Change Request from Cintranet
<hr/>

<strong>Effective Date:</strong> {{ $data['requestDueDate'] }}

# Employee Info:

{{ $data['name'] }}<br/>
{{ $data['position'] }}<br/>

<strong>Promoted:</strong> {{ $data['selectPromotion'] }}<br/>

<hr/>

# Status Change:

<strong>New Position:</strong> {{ $data['newPosition'] }}<br/>

<strong>New Email:</strong> {{ $data['newEmail'] }}<br/> 

<strong>New Tel:</strong> {{ $data['phone'] }}<br/> 
<strong>New Ext:</strong> {{ $data['extension'] }}<br/>
<strong>New Cel:</strong> {{ $data['cellPhone'] }}<br/> 

<strong>New Territory:</strong> {{ $data['territory'] }}<br/>

<strong>New Department:</strong> {{ str_replace(array('[', '"', ']',), '',$data['department']) }}<br/>

<strong>New Manager:</strong> {{ $data['manager'] }}<br/>  

<hr/>

# Access Changes:

<strong>New Access Type:</strong> {{ $data['selectAccess'] }}<br/>

<strong>New FOB #:</strong> {{ $data['fob'] }}<br/>

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
