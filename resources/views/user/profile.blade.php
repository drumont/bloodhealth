@extends('layouts.app')

<style type="text/css">
    .profile-img{
        max-width: 100px;
        border: 5px solid #FFFFFF;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }
</style>

@section('content')
<div class="row">
    <div class="col-md-offset-3 col-md-6">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img class="profile-img" src="{{ asset('/img/h.jpg') }}">
                <h1>{{ $user->name }}</h1>
                <h5>{{ $user->email }}</h5>
                <h3>{{ $center->name}}</h3>
                <h5>Since {{ $user->created_at->format('l j F')}} ({{ $user->created_at->day }} days ago )</h5>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-3 col-md-6">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <h4><a href="/blood/create">Add a blood bag</a></h4>
                <h4><a href="/blood">Blood bank</a></h4>
                @if($user->admin)
                    <h4><a href="/list">List of users</a></h4>
                    <h4><a href="/register ">Add a user</a></h4>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection


