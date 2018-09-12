<!-- Template Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('template_category_id', 'Template Category Id:') !!}
    {!! Form::select('template_category_id', ['1' => 'public', '2' => 'private'], null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('formCategories.index') !!}" class="btn btn-default">Cancel</a>
</div>
