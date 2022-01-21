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

@if(!empty($data[0]['newPosition']))
<strong>New Position:</strong> {{ $data[0]['newPosition'] }}<br/>
@endif

@if(!empty($data[0]['newEmail']))
<strong>New Email:</strong> {{ $data[0]['newEmail'] }}<br/> 
@endif

@if(!empty($data[0]['phone']))
<strong>New Tel:</strong> {{ $data[0]['phone'] }}<br/> 
@endif
@if(!empty($data[0]['extension']))
<strong>New Ext:</strong> {{ $data[0]['extension'] }}<br/>
@endif
@if(!empty($data[0]['cellPhone']))
<strong>New Cel:</strong> {{ $data[0]['cellPhone'] }}<br/> 
@endif

@if(!empty($data[0]['territory']))
<strong>New Territory:</strong> {{ $data[0]['territory'] }}<br/>
@endif

@if(!empty($data[0]['department']))
<strong>New Department:</strong> {{ str_replace(array('[', '"', ']',), '',$data[0]['department']) }}<br/>
@endif

@if(!empty($data[0]['manager']))
<strong>New Manager:</strong> {{ $data[0]['manager'] }}<br/>  
@endif

<hr/>

# Access Changes:

<strong>New Access Type:</strong> {{ $data[0]['selectAccess'] }}<br/>

@if(!empty($data[0]['fob']))
<strong>New FOB #:</strong> {{ $data[0]['fob'] }}<br/>
@endif

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
