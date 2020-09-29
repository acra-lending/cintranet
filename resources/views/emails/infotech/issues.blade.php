@component('mail::message')
# Phone or Computer Issues Request from Cintranet
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
~<em>{{ 'CSC Webmaster' }}</em>
@endcomponent