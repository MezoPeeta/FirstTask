@extends('layouts.app')

@section('content')

<div>
<h1>{{$user->name}} ({{$user->id}})</h1>
<br>
<h2>Email: <br> {{$user->email}}</h5>
<hr>
<h3> UserType: <br>{{ $user->usertype->name ?? "None" }}</h3>
</div>
<hr>
<h5> Created At: <br> <small>{{$user->created_at}}</small></h5>
<h5> Updated At: <br> <small>{{$user->updated_at}}</small></h5>
<hr>
<a href="/profile/{{$user->id}}/edit" class="btn btn-primary">Edit</a>

{!!Form::open(['action' => ['profile@destroy', $user->id], 'method' => 'POST'])!!}

    {{Form::hidden('_method','DELETE')}}

    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
{!!form::close()!!}
@endsection
