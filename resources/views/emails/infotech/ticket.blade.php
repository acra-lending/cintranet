@component('mail::message')

# New System or Folder Access Request from Cintranet
<hr/>

# Effective Date:
{{ $mail['requestDueDate'] }}<br/>

<hr/>

# Contact Info

{{ $mail['name'] }}<br/>
{{ $mail['email'] }}<br/> 
<strong>Postion:</strong> {{ $mail['position'] }}<br/>

# Manager's Info

{{ $mail['manager'] }}<br/>
{{ $mail['managerEmail'] }}<br/>

<hr/>

# Project Specifications:

<strong>Access Request:</strong> {{ $itemRequest }}<br/>

<strong>Admin Access Type:</strong> {{ $mail['adminAccess'] }}<br/>

<strong>Byte Pro:</strong> {{ $mail['bytePro'] }}<br/>

<strong>Doc Velocity:</strong> {{ $mail['docVelocity'] }}<br/>

<strong>Folder Name / Location:</strong> {{ $mail['folderName'] }}<br/>

<hr/>

# Additional Specifications:

<strong>Additional Instructions:</strong> {{ $mail['additionalInfo'] }}<br/>

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
