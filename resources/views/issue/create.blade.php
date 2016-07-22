@extends('issue.app')

@section('title','From Create New Issue')

@section('content')
<h1>Create New Issue.</h1>
<hr/>

{!! Form::open(['url' => url('issue')])!!}
	

	{!! Form::label('requester_detail_issue', 'ระบุปัญหาการใข้งาน : ') !!}
	{!! Form::textarea('requester_detail_issue', null, ['rows' => 5, 'cols' => 50]) !!}<br><br>

	{!! Form::submit('Add New Issue')!!}

{!! Form::close()!!}
@endsection
