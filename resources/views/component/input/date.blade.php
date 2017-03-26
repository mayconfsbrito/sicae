<?php
	$options = (isset($options) ? $options : null);
	$value = (isset($value) ? $value : null);
?>

<div class="form-group">
	@component('component.label')
		{{ $label }}
	@endcomponent
	<select class="form-control select2" style="width: 100%;">
		@component('component.select.options', [
			'options' => $options,
			'value' => $value
		])
		@endcomponent
	</select>
</div>