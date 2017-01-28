@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
 <i class="fa fa-pencil"> </i> Edit {!! $resume->title !!}
@stop

@section('nav-left')
    <!-- Side Navigation -->
    @include('resumes.nav-left')
@endsection

{{-- Content --}}
@section('content')
        <form method="POST" action="{{ route('resumes.update',$resume->id) }}" accept-charset="UTF-8" id="register-form">
			{{csrf_field()}}            
			@include('resumes.form')
			<input type="hidden" name="resume_id" value="{{ $resume->id }}">
		</form>
@stop