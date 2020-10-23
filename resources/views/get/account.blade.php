@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Accounts</h1>
    <table class="table table-bordered">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Account #</th>
            <th scope="col">Account Name</th>
            <th scope="col">Initial Investment</th>
            <th scope="col">Date Started</th>
          </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($get_account as $item => $value)
            <tr>
                <td><h5>{{ $value-> id }}</h5></td>
                <td><h5>{{ $value-> acct_name }}</h5></td>
                <td><h5>{{ $value-> init_invest }}</h5></td>
                <td><h5>{{ $value-> start_date }}</h5></td>
              </tr>
            @endforeach


        </tbody>
      </table>
</div>

@endsection
