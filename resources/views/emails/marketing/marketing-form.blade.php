@component('mail::message')

# Marketing Request from Cintranet
<hr/>

# Contact Info:
{{ $data['name'] }}<br/>
{{ $data['department'] }} Department<br/> 
{{ $data['email'] }}<br/>
Tel: {{ $data['phone'] }}<br/>

<hr/>

# Project Specifications:

<strong>Project Name:</strong> {{$data['projectName'] }}<br/>

<strong>Project Type:</strong> {{ $data['selectProject'] }}<br/>

<strong>Request:</strong> {{ $data['selectRequest'] }}<br/>

<strong>Target Audience:</strong> {{ $data['selectAudience'] }}<br/>

<strong>Message:</strong> {{ $data['bodyMessage'] }}<br/>

<strong>Additional Information:</strong> {{ $data['relevantInfo'] }}<br/>

<hr/>

# Additional Specifications:

<strong>States Distributed:</strong> {{ $data['statesDistributed'] }}<br/>

<strong>Estimated Quantity:</strong> {{ $data['estimatedQuantity'] }}<br/>

<strong>Request Due Date:</strong> {{ $data['requestDueDate'] }} <br/>

<strong>Date Range for Materials:</strong> {{ $data['dateRange'] }}<br/>


<br/>
~<em>{{ 'CSC Webmaster' }}</em>
@endcomponent
