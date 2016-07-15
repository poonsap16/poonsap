<html>
<head>
	<meta charset="utf-8">
	<title>Create Issue</title>
</head>
<body>
	<h1>Create New Issue.</h1>
	{!! Form::open(['url' => 'issue']) !!}

		@include('issue._form')

	    {!! Form::submit('Add New Issue') !!}
	{!! Form::close() !!}
</body>
</html>