<div class="form-group">
	@component('component.label')
		{{ $label }}
	@endcomponent
	<input
		type="text"
		class="form-control"
		placeholder="{{ $plalceholder or null }}"
		name="{{ $name or null }}"
		value="{{ $value or null }}" >
</div>
