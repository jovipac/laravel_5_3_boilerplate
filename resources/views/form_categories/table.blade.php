<table class="table table-responsive" id="formCategories-table">
    <thead>
        <th>Template Category Id</th>
        <th>Name</th>
        <th>Alias</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($formCategories as $formCategories)
        <tr>
            <td>{!! $formCategories->template_category_id !!}</td>
            <td>{!! $formCategories->name !!}</td>
            <td>{!! $formCategories->alias !!}</td>
            <td>
                {!! Form::open(['route' => ['formCategories.destroy', $formCategories->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('formCategories.show', [$formCategories->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('formCategories.edit', [$formCategories->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>