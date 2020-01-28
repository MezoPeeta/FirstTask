@extends('layouts.app')

@section('content')
<h1>Edit Profile</h1>
    {!! Form::open(['action' => ['profile@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('id', 'id')}}
            {{Form::integar('id', $user->id, ['class' => 'form-control', 'placeholder' => 'ID'])}}
        </div>
        <div class="form-group">
            {{Form::label('id', 'id')}}
            {{Form::integar('id', $user->country, ['class' => 'form-control', 'placeholder' => 'ID'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
