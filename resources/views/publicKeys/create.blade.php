@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add new public key</div>

				<div class="panel-body">
					{!! Form::open(array('url' => 'public-key/create')) !!}
					{!!	Form::text('owner'); !!}
					{!!	Form::text('key'); !!}
					{!!	Form::submit('Add'); !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection