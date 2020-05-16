<div class="form-group">
    {{ Form::label('keyCareer', 'Key Career') }}
    {{ Form::text('keyCareer', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('careerName', 'Name Career') }}
    {{ Form::text('careerName', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('careerStatus', 'Status Career') }}
    {{ Form::number('careerStatus', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
</div>