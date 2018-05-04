<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Name En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_en', 'Name En:') !!}
    {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- General Information Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('general_information', 'General Information:') !!}
    {!! Form::textarea('general_information', null, ['class' => 'form-control']) !!}
</div>

<!-- Personal Opinion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('personal_opinion', 'Personal Opinion:') !!}
    {!! Form::textarea('personal_opinion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cities.index') !!}" class="btn btn-default">Cancel</a>
</div>
