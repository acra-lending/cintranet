<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Cintranet')
<img src="{{ asset ('img/CscLogo-red.png') }}" class="brand-image img-rounded" alt="Citadel Logo" style="width:auto;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
