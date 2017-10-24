@extends('layouts.app')

@section('content')
<div class="panel">
  <p class="panel-heading">
    Reset Password
  </p>
  <div class="panel-tabs">
  </div>
</div>
<div class="columns is-mobile">
  <div class="column is-one-third is-offset-one-third">

    <form action="{{ route('register') }}" method="post">
      {{ csrf_field() }}

      <input type="hidden" name="token" value="{{ $token }}">

      <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="label">Email Address</label>
        <div class="control has-icons-left">
          <input type="email" name="email" id="email"
          class="input is-primary" placeholder="name@example.com"
          value="{{ $email or old('email') }}" required>
          <span class="icon is-small is-left">
            <i class="fa fa-envelope"></i>
          </span>
        </div>
        @if ($errors->has('email'))
            <p class="help is-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </p>
        @endif
      </div>

      <div class="columns">
        <div class="column">
          <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="label">New Password</label>
            <div class="control has-icons-left">
              <input type="password" name="password"
              id="password" class="input is-primary"
              placeholder="password" required>
              <span class="icon is-small is-left">
                <i class="fa fa-key"></i>
              </span>
            </div>
            @if ($errors->has('password'))
                <p class="help is-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                </p>
            @endif
          </div>
        </div>

        <div class="column">
          <div class="field {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label class="label">Confirm Password</label>
            <div class="control has-icons-left">
              <input type="password" name="password_confirmation"
                id="password-confirm" class="input is-primary"
                placeholder="confirm password" required>
              <span class="icon is-small is-left">
                <i class="fa fa-key"></i>
              </span>
            </div>
            @if ($errors->has('password_confirmation'))
                <p class="help is-danger">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </p>
            @endif
          </div>
        </div>
      </div>

      <div class="field m-t-20">
        <div class="control">
          <button type="submit" name="button"
          class="button is-success is-outlined is-fullwidth">
            Reset Password
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
