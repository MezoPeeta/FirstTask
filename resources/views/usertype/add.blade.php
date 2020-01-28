@extends('layouts.app')
@section('content')

<form action="/usertype" method="post">

    <label for="add">Add UserType:</label> <br>

    <input type="text" name="UserName" id=""> <br>

    <label for="Parent">Parent: </label> <br>
    <input type="text" name="" id=""> <br>
    <input type="submit" value="submit"> <br> <br>
    
    <select name="usertypes" id="">
        @forelse ($users as $user)

        <option value="{{ $user->id }}">{{ $user->name }}</option>
 
        @empty
        <label for="">No UserTypes Added Yet..</label>
            
        @endforelse
    
    </select>
    @csrf

    @method('POST')

</form>

@endsection