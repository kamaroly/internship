<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form method="POST" action="{{ route('resumes.store') }}" accept-charset="UTF-8" id="register-form">

            <h2>Register New resume</h2>

            <div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="title" name="title" type="text" value="{{ Request::old('title') }}">
                {{ ($errors->has('title') ? $errors->first('title') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('resume')) ? 'has-error' : '' }}">
            
                <textarea class="form-control" name="resume" type="text">
{{ Request::old('resume') }}
                </textarea>
                {{ ($errors->has('resume') ? $errors->first('resume') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('file')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="file" name="file" value="" type="file">
                {{ ($errors->has('file') ?  $errors->first('file') : '') }}
            </div>

            <input name="_token" value="{{ csrf_token() }}" type="hidden">
            <input class="btn btn-primary" value="Register" type="submit">

        </form>
    </div>
</div>