@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
 Resumes
@stop

{{-- Content --}}
@section('content')
<div class="row">
	<div class="page-header">
    <div class="btn-toolbar pull-right">
        <div class="btn-group">
            <a class="btn btn-sm btn-success" href="{{ route('resumes.create') }}">Add resume</a>
        </div>
    </div>
  		    <h1>Current resumes</h1>
</div>
</div>

<div class="row">
	<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Student email</th>
			<th>Title</th>
			<th>Short description</th>
		</tr>
	</thead>

	<tbody>
		@each ('resumes.item', $resumes, 'resume', 'Nothing to show')
	</tbody>
</div>
@stop