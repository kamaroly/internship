@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
 Resumes
@stop

@section('nav-left')
    <!-- Side Navigation -->
    @include('resumes.nav-left')
@endsection

{{-- Content --}}
@section('content')
        <form method="POST" action="{{ route('resumes.store') }}" accept-charset="UTF-8" id="register-form">
			{{csrf_field()}}            
			@include('resumes.form')
		</form>
@stop