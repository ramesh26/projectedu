@extends('layouts.app')
 
@section('content')


<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h4>Create Bulk User</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(array('route' => 'users.bulkuploads','method'=>'post','enctype'=>'multipart/form-data')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::file('name', null, array('placeholder' => 'Name','class' => 'form-control','accept'=>'.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
	</div>
	{!! Form::close() !!}

@endsection