@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
 Show resume
@stop

@section('nav-left')
    <!-- Side Navigation -->
    @include('resumes.nav-left')
@endsection
{{-- Content --}}
@section('content')

<div class="row">

    <div class="col-md-8 col-md-offset-2">
    <div class="pull-left">
         <h2>
          {!! $resume->user->first_name !!}  {!! $resume->user->last_name !!} Resume
         </h2>
    </div>
    <div class="pull-right">
               <a href="{{ route('resumes.favorites.add',$resume->id) }}" class="btn btn-sm btn-success"
                style="{{ $inFavorite ? 'background-color: green;' : ''}}">
           <i class="icon-star" style="color:#fff;"></i>
                        <span class="nav-label">Add to Favorite</span>
          </a>
    </div>
    </div>
        <div class="col-md-8 col-md-offset-2">

                <h3>{{ $resume->title  }}</h3>
        <p style="color:#000;">
              {!! trim($resume->resume) !!}
        </p>
    </div>
    </div>
@stop