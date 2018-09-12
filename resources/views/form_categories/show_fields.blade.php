<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $formCategories->id !!}</p>
</div>

<!-- Template Category Id Field -->
<div class="form-group">
    {!! Form::label('template_category_id', 'Template Category Id:') !!}
    <p>{!! $formCategories->template_category_id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $formCategories->name !!}</p>
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias', 'Alias:') !!}
    <p>{!! $formCategories->alias !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $formCategories->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $formCategories->updated_at !!}</p>
</div>

