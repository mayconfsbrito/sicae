<div class="form-group">
	@component('component.label')
		{{ $label or null }}
	@endcomponent
	<div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      <input
      	type="text"
      	class="form-control"
      	id="datepicker"
      	value="{{ $value or null }}">
    </div>
</div>