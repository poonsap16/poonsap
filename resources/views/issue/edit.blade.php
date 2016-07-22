@extends('issue.app')

@section('title','Edit Issue')

@section('content')
<h1>Edit Issue {{$issues->id}}.</h1>
<hr/>
{!! Form::model($issues,['method' => 'POST', 'url' => 'issue/' . $issues->id]) !!}

	@include('issue._form')

	{!! Form::submit('Save') !!}

{!! Form::close() !!}
@endsection