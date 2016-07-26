@extends('issues.app')

@section('title','ฟอร์มแจ้งปัญหา')

@section('content')
<h1>แจ้งปัญหา</h1>
<form method = "POST" action = "{{ url('issues') }}">
	<input type = "hidden" name = "_token" value = "{{ csrf_token() }}" />
	<textarea name="requester_detail_issue" rows = "5" cols = "50"> {{ $requester_detail_issue or ''}}</textarea> <br><br>

	<input type = "submit" value = "แจ้งปัญหา">
</form>
@endsection