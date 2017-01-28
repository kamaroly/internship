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
         <a href="{{ route('resumes.create') }}" class="btn btn-primary oc-icon-plus pull-left">
            Add resume    
        </a>
    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                  name="q" value=" {{ trim(request()->get('q')) }}" autofocus="" placeholder="Type anything to search for resume">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Search resume
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
</div>

<div class="row">
    {!! $resumes->render() !!}
        @include('resumes.table')
    {!! $resumes->render() !!}
    
</div>
@stop