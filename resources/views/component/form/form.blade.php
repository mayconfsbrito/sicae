<div class="row">
<!-- left column -->
<div class="col-md-12">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">{{ $fieldset or null }}</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form">
    	<div class="box-body">
    	</div>
	    <div class="box-footer">
	    	@if(isset($buttons) && count($buttons))
	    		@foreach($buttons as $b)
		    		@component('component.buttom.buttom', [
		    			'label' => @$b['label'],
		    			'class' => @$b['class']
		    		])
		    		@endcomponent
		    	@endforeach
	    	@endif
		</div>
    </form>
  </div>
</div>
</div>