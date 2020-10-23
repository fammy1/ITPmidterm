@extends('layouts.app')
@section('content')
<div class="container ">

    <div class="card mt-4 mx-auto text-center text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header"><h2>Main Menu</h2></div>
        <div class="card-body">
            <a type="button" href="{{ url('/') }}"      class="btn btn-light btn-lg btn-block">Home</a>
            <a type="button" href="{{ url('/users') }}" class="btn btn-light btn-lg btn-block">Users</a>
            <a type="button" href="{{ url('/accounts') }}" class="btn btn-light btn-lg btn-block">Account</a>
        </div>
      </div>
</div>
@endsection
