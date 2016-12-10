<div class="row">
    <div class="box-body">
        <div class="form-group">
        {{Form::label('title', 'Title')}}
         {{ ($errors->has('title') ? $errors->first('title') : '') }}
        {{Form::text('title',null,array('class' => 'form-control', 'placeholder'=>'Title'))}}
        </div>
        <div class="form-group {{ ($errors->has('file')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="file" name="file" value="" type="file">
                {{ ($errors->has('file') ?  $errors->first('file') : '') }}
        </div>

        <div class="form-group">
        {{Form::label('resume', 'Resume')}}
     {{ ($errors->has('resume') ? $errors->first('resume') : '') }}
        {{Form::textarea('resume',null,array('class' => 'form-control', 'placeholder'=>'Content', 'id' => 'resume'))}}
        </div>
        <div class="form-group">
        {{Form::submit('Publish Resume',array('class' => 'btn btn-primary btn-sm'))}} 
       </div>
    </div>
</div>