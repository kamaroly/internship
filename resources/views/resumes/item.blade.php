<tr>
	<td class="list-checkbox nolink">
	    <div class="checkbox custom-checkbox nolabel">
	        <input type="checkbox" name="checked[]" id="Lists-checkbox-{{ $resume->id }}" value="{{ $resume->id }}">
	        <label for="Lists-checkbox-{{ $resume->id }}">Check</label>
	    </div>
	</td>
	<td>{{ $resume->user->email }}</td>
	<td>{{ $resume->title }}</td>
	<td>{{ substr($resume->resume,0,15) }}</td>
</tr>