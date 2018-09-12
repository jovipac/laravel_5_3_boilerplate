@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Form Categories
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($formCategories, ['route' => ['formCategories.update', $formCategories->id], 'method' => 'patch']) !!}

                        @include('form_categories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection