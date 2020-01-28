@extends('layouts.app')
@section('content')

<form action="/usertype" method="post">

    <label for="add">Add UserType:</label> <br>

    <input type="text" name="name" id=""> <br>

    <label for="Parent">Parent: </label> <br>
    
    <select name="parent" id=""> 
        <option value="0">None</option>
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option> 
             
        @endforeach
        <input type="submit" value="submit"> 

    </select>
    @csrf

    @method('POST')

</form>

@endsection