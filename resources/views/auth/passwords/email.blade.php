@extends('layouts.app')

@section('content')
<div class="panel">
  <p class="panel-heading">
    Enter Email Address
  </p>
  <div class="panel-tabs">
    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif
  </div>
</div>

<div class="columns">
  <div class="column is-one-third is-offset-one-third">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          Input Email
        </p>
      </header>
      <div class="card-content">
        <form action="{{ route('password.email') }}" method="post">

          <div class="content {{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="label">Email Address</label>
            <div class="control has-icons-left">
              <input type="email" name="email" id="email"
                class="input {{ $errors->has('email') ? 'is-danger': 'is-primary' }}"
                value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <p class="help is-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </p>
                @endif
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
            </div>
          </div>

          <div class="content">
            <div class="control">
              <button type="submit" name="button" class="button is-primary is-outlined is-fullwidth">
                Send Password Reset Link
              </button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- End of Card -->
    <h4 class="has-text-centered m-t-10">
      <a href="{{ route('login') }}">
        <span class="icon is-small is-left">
          <i class="fa fa-caret-left"></i>
        </span>
        Back to Login
      </a>
    </h4>
  </div>
</div>
@endsection
