@extends('layouts.app')

@section('content')
<h1>Customers</h1>

<ul>
    @foreach ($users as $user)

    <div style="font-size:150%; padding:10px;">

        <a href="/profile/{{$user->id}}" style="text-decoration:none; color:black;">

            {{ $user->name }}
        </a>
    </div>
    @endforeach
</ul>
@endsection
