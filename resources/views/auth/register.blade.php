@extends('layouts.app')

@section('content')
  <div class="panel">
    <p class="panel-heading">
      Register
    </p>
    <div class="panel-tabs">
    </div>
  </div>
  <div class="columns is-mobile">
    <div class="column is-one-third is-offset-one-third">

      <form action="{{ route('register') }}" method="post">
        {{ csrf_field() }}

        <div class="field {{ $errors->has('name') ? ' has-error' : '' }}">
          <label class="label">Name</label>
          <div class="control has-icons-left">
            <input type="text" id="name" name="name"
            class="input is-primary" placeholder="name"
            value="{{ old('name') }}" required>
            @if ($errors->has('name'))
                <p class="help is-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </p>
            @endif
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
          </div>
        </div>

        <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="label">Email</label>
          <div class="control has-icons-left">
            <input type="email" name="email" id="email"
            class="input is-primary" placeholder="name@example.com"
            value="{{ old('email') }}" required>
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
        </div>

        <div class="columns">
          <div class="column">
            <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" name="password" id="password"
                class="input is-primary" placeholder="password" required>
                @if ($errors->has('password'))
                    <p class="help is-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </p>
                @endif
                <span class="icon is-small is-left">
                  <i class="fa fa-key"></i>
                </span>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="field">
              <label class="label">Confirmed Password</label>
              <div class="control has-icons-left">
                <input type="password" name="password_confirmation" id="password-confirm"
                class="input is-primary" placeholder="confirm password" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-key"></i>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="field m-t-20">
          <div class="control">
            <button type="submit" name="button" class="button is-link is-outlined is-fullwidth">
              Register
            </button>
          </div>
        </div>
      </form>

      <div class="control has-text-centered m-t-10">
            <a href="{{ route('login') }}">
              <span class="icon is-small is-left">
                <i class="fa fa-unlock-alt"></i>
              </span>
              Already have an Account?
            </a>
      </div>
    </div>
  </div>
@endsection
