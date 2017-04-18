@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/hotps') }}">Hotp</a> :
@endsection
@section("contentheader_description", $hotp->$view_col)
@section("section", "Hotps")
@section("section_url", url(config('laraadmin.adminRoute') . '/hotps'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Hotps Edit : ".$hotp->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($hotp, ['route' => [config('laraadmin.adminRoute') . '.hotps.update', $hotp->id ], 'method'=>'PUT', 'id' => 'hotp-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'code')
					@la_input($module, 'invoicenr')
					@la_input($module, 'number')
					@la_input($module, 'sentdate')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/hotps') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#hotp-edit-form").validate({
		
	});
});
</script>
@endpush
