        <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!} ">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control col-md-4']) !!}
            {!! $errors->first('title', '<span class="help-block">:message</span>' ) !!}
        </div>

        <div class="form-group" {!! $errors->has('body') ? 'has-error' : '' !!} >
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control col-md-6']) !!}
            {!! $errors->first('body', '<span class="help-block">:message</span>' ) !!}
        </div>

        <div class="form-group ">
            {!! Form::label('published_at', 'Published at:') !!}
            {!! Form::date('published_at', date('Y-m-d'), ['class' => 'form-control col-md-6']) !!}
            {!! $errors->first('published_at', '<span class="help-block">:message</span>' ) !!}
        </div>

        <div class="form-group">
            {!! Form::submit($submitbButtonText, ['class' => 'btn btn-primary']) !!}
        </div>
