@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Users</h1>
    <table class="table table-bordered">
        <thead class="bg-primary">
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($get as $item => $value)
            <tr>
                <td><h5>{{ $value-> id }}</h5></td>
                <td><h5>{{ $value-> lname }}</h5></td>
                <td><h5>{{ $value-> fname }}</h5></td>
                <td><h5>{{ $value-> address }}</h5></td>
              </tr>
            @endforeach


        </tbody>
      </table>
</div>

@endsection
