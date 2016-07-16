<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
</head>
<body>
    <h1>Edit {{$issues->id}} Data.</h1>
    {!! Form::model($issues,['method' => 'PATCH', 'url' => 'issue' . $issues->id]) !!}

        @include('issue._formedit')

        {!! Form::submit('Save') !!}
    {!! Form::close() !!}

</body>
</html>