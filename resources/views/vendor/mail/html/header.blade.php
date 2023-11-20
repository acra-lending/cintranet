<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Cintranet')
<img src="{{ asset ('img/Acra_Logo_Horizontal.png') }}" class="brand-image img-rounded" alt="Acra Logo" style="width:auto;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
