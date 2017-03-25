@if(isset($slot))
	<label for='{{ $id or null }}'>{{ $slot }}</label>
@endif