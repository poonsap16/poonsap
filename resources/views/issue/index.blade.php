<html>
<head>
	<title>List Issues</title>
</head>
<body>
	<h1>Issues index</h1>
	<!-- <a href="/poonsap16/staffs/create">List Issues</a> -->
	
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>requster</th>
				<th>requester_detail_issue</th>
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
					<td>{{$issue->requster}}</td>
					<td>{{$issue->requester_detail_issue}}</td>
					<td><a href="/issues/{{$issue->id}}/edit">Edit</a></td>
				</tr>
			@endforeach
		</tbody>


	</table>

</body>
</html>
