@if(isset($options) && is_array($options))
	@foreach($options as $op)
		<option>{{$op}}</option>
	@endforeach
@endif