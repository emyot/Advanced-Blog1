@extends('layouts.manage')

@section('content')
  <div class="container flex-container">
    <div class="columns">
      <div class="column">
        <h4 class="title">Manage Users</h4>
      </div>
      <div class="column">
        <a href="{{ route('users.create') }}" class="button is-primary">
          <i class="fa fa-user m-r-10"></i>
          Create New User
        </a>
      </div><!-- end of column -->
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Date Created</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <th>{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ date('M j, Y h:i a', strtotime($user->created_at)) }}</td>
            <td>
              <a class="button is-outlined" href="{{ route('users.edit', $user->id) }}">Edit</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
