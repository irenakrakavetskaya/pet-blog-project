<!-- Date From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_from', 'Date From:') !!}
    {!! Form::date('date_from', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Till Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_till', 'Date Till:') !!}
    {!! Form::date('date_till', null, ['class' => 'form-control']) !!}
</div>

<!-- Expenses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expenses', 'Expenses:') !!}
    {!! Form::number('expenses', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- City Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_id', 'City Id:') !!}
    {!! Form::number('city_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('durations.index') !!}" class="btn btn-default">Cancel</a>
</div>
