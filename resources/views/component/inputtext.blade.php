<div class="form-group">
	@if(isset($label))
		<label for='{{ $id or null }}'>{{ $label }}</label>
	@endif
		<input
			type="text"
			class="form-control"
			placeholder="{{ $plalceholder or null }}"
			name="{{ $name or null }}"
			value="{{ $valur or null }}" >
</div>
