@extends('layouts.app')

@section('content')
<h1>Edit Profile</h1>
    {!! Form::open(['action' => ['profile@update', $user->id], 'method' => 'POST']) !!}
    
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
        <label for="usertype">UserType: </label> <br>

        <select name="usertype" id="" class="form-control"> 
            <option value="0">None</option>
            @foreach ($usertypes as $usertype)
            <option value="{{ $usertype->id }}">{{ $usertype->name }}</option> 
                 
            @endforeach    
        </select>
    </div>
    <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit', ['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}
    
@endsection
