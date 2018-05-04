<!-- Name Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::textarea('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Site Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site_id', 'Site Id:') !!}
    {!! Form::number('site_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Hotel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel_id', 'Hotel Id:') !!}
    {!! Form::number('hotel_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('galleries.index') !!}" class="btn btn-default">Cancel</a>
</div>
