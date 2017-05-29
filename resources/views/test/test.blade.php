@extends('main')

@section('title', '| Testing Post')

@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Testing A Blog Post 101</h1>
			<hr>

				{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
				{{ Form::label('title', 'Blog Name')}}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))}}
				{{ Form::label('body',"Blog Body")}}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
				{{ Form::submit('Create New Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
				{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection