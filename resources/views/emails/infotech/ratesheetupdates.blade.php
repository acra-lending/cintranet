@component('mail::message')
# New/Update Ratesheet Request
<hr/>

# Effective Date:
{{ $mail['effectiveDate'] }}
<br/>

<hr/>

<strong>Subject:</strong>
{{ $mail['subject'] }}
<br/>
<strong>Priority:</strong>
{{ $mail['priority'] }}
<br/>
<strong>System:</strong>
{{ $systemRequest }}
<br/>

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
