@component('mail::message')
# Facilities Request from Cintranet
<hr/>

<strong>Subject:</strong>
{{ $mail['subject'] }}
<br/>
<strong>Priority:</strong>
{{ $mail['priority'] }}



<hr/>

# Contact Info

{{ $mail['name'] }}<br/>
{{ $mail['email'] }}<br/> 

<hr/>

# Message:

{{ $mail['bodyMessage'] }}<br/>

<hr/>


<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
