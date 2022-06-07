<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $school->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipolicencia') }}
            {{ Form::text('tipolicencia', $school->tipolicencia, ['class' => 'form-control' . ($errors->has('tipolicencia') ? ' is-invalid' : ''), 'placeholder' => 'Tipolicencia']) }}
            {!! $errors->first('tipolicencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso') }}
            {{ Form::text('uso', $school->uso, ['class' => 'form-control' . ($errors->has('uso') ? ' is-invalid' : ''), 'placeholder' => 'Uso']) }}
            {!! $errors->first('uso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('preciobase') }}
            {{ Form::text('preciobase', $school->preciobase, ['class' => 'form-control' . ($errors->has('preciobase') ? ' is-invalid' : ''), 'placeholder' => 'Preciobase']) }}
            {!! $errors->first('preciobase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('incremento') }}
            {{ Form::text('incremento', $school->incremento, ['class' => 'form-control' . ($errors->has('incremento') ? ' is-invalid' : ''), 'placeholder' => 'Incremento']) }}
            {!! $errors->first('incremento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $school->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>