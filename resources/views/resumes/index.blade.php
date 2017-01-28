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
<div class="toolbar-widget list-header" id="Toolbar-listToolbar">
    <div class="control-toolbar">

        <!-- Control Panel -->
         <a href="{{ route('resumes.create') }}" class="btn btn-primary oc-icon-plus">
            Add resume    
        </a>

    </div>
</div>

<div class="row">
    {!! $resumes->render() !!}
        @include('resumes.table')
    {!! $resumes->render() !!}
    
</div>
@stop