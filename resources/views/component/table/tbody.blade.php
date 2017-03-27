<tbody>
	@foreach($tbody as $tr)
		<tr>
		@foreach($tr as $tb)
			@if(is_array($tb))
				@if(isset($tb['input.text']))
					<td>
						@component('component.input.text')
						@slot('slot', $tb['input.text'])
						@endcomponent
					</td>
				@elseif(isset($tb['input.mail']))
					<td>
						@component('component.input.mail')
						@slot('slot', $tb['input.mail'])
						@endcomponent
					</td>
				@elseif(isset($tb['select.select']))
					<td>
						@component('component.select.select')
						@slot('slot', $tb['select.select'])
						@endcomponent
					</td>
				@elseif(isset($tb['buttom']))
					<td>
						@component('component.buttom.buttom', $tb['buttom'])
						@endcomponent
					</td>
				@else
				@endif
			@else
				<td>{{ $tb }}</td>
			@endif
		@endforeach
		</tr>
	@endforeach
</tbody>