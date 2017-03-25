<div class="form-group">
	@if(isset($label))
		@component('component.label')
			{{ $label }}
		@endcomponent
	@endif
	<input
		type="text"
		class="form-control"
		placeholder="{{ $plalceholder or null }}"
		name="{{ $name or null }}"
		value="{{ $value or null }}" >
</div>
