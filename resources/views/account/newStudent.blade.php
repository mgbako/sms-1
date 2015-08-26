@extends('layouts.app')
@section('content')
    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Create A Student Account</div>
        <div class="panel-body">
            @include('errors.formError')


            {!! Form::open(['class'=>'form-horizontal', 'role'=>'form']) !!}
              @include('partials.newAccountForm', ['name'=>'Student ID'])

            {!! Form::close() !!}
          </div>
      </div>
    </div>
  </div>
</div>
@stop