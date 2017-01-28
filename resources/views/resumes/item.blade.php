<tr>
	<td class="list-checkbox nolink">
	    <div class="checkbox custom-checkbox nolabel">
	        <input type="checkbox" name="checked[]" id="Lists-checkbox-{{ $resume->id }}" value="{{ $resume->id }}">
	        <label for="Lists-checkbox-{{ $resume->id }}">Check</label>
	    </div>
	</td>
	<td>{{ $resume->user->first_name }} {{ $resume->user->last_name }}</td>
	<td>{{ $resume->title }}</td>
	<td>
	@php
		$user = Sentry::getUser();
	@endphp

	 @if ($user->hasAccess('admin') || $user->hasAccess('interns'))
	  <a href="{{ route('resumes.edit',$resume->id) }}" class="btn btn-sm btn-primary"> <i class="icon-pencil"> </i> Edit</a>
	    <a href="{{ route('resumes.delete',$resume->id) }}" class="btn btn-sm btn-danger"
			onclick="return confirm('Are you sure you want to delete {{ $resume->title}} ? This action cannot be reverted.')" 
	    > <i class="icon-times"> </i> Delete</a>
	 @endif

	 @if ($user->hasAccess('employers'))
	 	<a href="{{ route('resumes.show',$resume->id) }}" class="btn btn-sm btn-success"> <i class="icon-eye"> </i> View</a>
	 @endif
	
	</td>
</tr>