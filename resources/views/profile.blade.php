@extends('layouts.app')

@section('content')

<div>
<h1>{{$user->name}}</h1>
<br>
<h5>{{$user->email}}</h5>
</div>
<hr>
<small> Created at {{$user->created_at}}</small>
<hr>
<a href="/profile/{{$user->id}}/edit" class="btn btn-primary">Edit</a>

@endsection
