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
		            <a class="btn btn-sm btn-success" href="{{ route('resumes.index') }}">Go back to resumes</a>
		        </div>
		    </div>
		    <h1>Current resumes</h1>
		</div>
	</div>

	@include('resumes.form')
@stop