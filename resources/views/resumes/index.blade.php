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
        <div class="toolbar-item toolbar-primary">
        <div data-control="toolbar" data-disposable="">
    <a href="{{ route('resumes.create') }}" class="btn btn-primary oc-icon-plus">
        New resume    
    </a>
    </div>
        </div>

    </div>
</div>

<div class="row">
    @include('resumes.table')
</div>
@stop