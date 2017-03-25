<div class="form-group">
	@if(isset($label))
		@component('component.label')
			{{ $label }}
		@endcomponent
	@endif
	<input
		type="email"
		class="form-control"
		placeholder="{{ isset($slot['placeholder'])
			? $slot['placeholder']
			: (isset($placeholder)
				? $placeholder
				: null) }}"
		name="{{ isset($slot['name'])
			? $slot['name']
			: (isset($name)
				? $name
				: null) }}"
		value="{{ isset($slot['value'])
			? $slot['value']
			: (isset($value)
				? $value
				: null) }}" >
</div>
