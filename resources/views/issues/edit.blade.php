@extends('issues.app')

@section('title','Update สถานะปัญหา')

@section('content')
<h1>Update ปัญหาหมายเลข # {{ $issues->id }} </h1>
<form method = "POST" action = "{{ url('issues/' . $issues->id) }}">
<lable>requester detail issue : </label>
    @include('issues._form')
	<input type="submit" value="อัพเดทข้อมูล">
</form>
@endsection