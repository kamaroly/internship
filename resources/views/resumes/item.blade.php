<tr>
	<td>{{ $resume->id }}</td>
	<td>{{ $resume->user->email }}</td>
	<td>{{ $resume->title }}</td>
	<td>{{ substr($resume->resume,0,15) }}</td>
</tr>