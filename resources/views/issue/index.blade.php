<html>
<head>
	<title>List Issues</title>
</head>
<body>
	<h1>Issues List index</h1>
	<hr>
	<a href="/issue/create">Add New Issue.</a>
	<hr>
	<table>
		<thead>
			<tr>
				<th style="background:#33CCFF">id</th>
				<th style="background:#33CCFF">requster</th>
				<th style="background:#33CCFF">requester_detail_issue</th>
				<th style="background:#33CCFF">action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($issues as $issue)
				@if($issue->id % 2 == 0)
				<tr style="background-color:#9FF781">
				@else
				<tr style="background-color:#F3F781">
				@endif
					<td>{{$issue->id}}</td>
					<td>{{$issue->requester}}</td>
					<td>{{$issue->requester_detail_issue}}</td>
					<td><a href="/issue/{{$issue->id}}/edit">Edit</a></td>
				</tr>
			@endforeach
		</tbody>


	</table>

</body>
</html>
