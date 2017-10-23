@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel">
    <p class="panel-heading">
      Register
    </p>
  </div>
  <div class="columns is-mobile">
    <div class="column is-one-third is-offset-one-third">

      <form action="{{ route('register') }}" method="post">
        {{ csrf_field() }}

        <div class="field {{ $errors->has('name') ? ' has-error' : '' }}">
          <label class="label">Name</label>
          <div class="control has-icons-left">
            <input type="text" id="name" name="name" class="input is-primary" placeholder="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
          </div>
        </div>

        <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="label">Email</label>
          <div class="control has-icons-left">
            <input type="email" name="email" id="email" class="input is-primary" value="{{ old('email') }}" required>
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
        </div>

        <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
          <label class="label">Password</label>
          <div class="control has-icons-left">
            <input type="password" name="password" id="password" class="input is-primary" placeholder="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <span class="icon is-small is-left">
              <i class="fa fa-key"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label class="label">Confirmed Password</label>
          <div class="control has-icons-left">
            <input type="password" name="password_confirmation" id="password-confirm" class="input is-primary" placeholder="confirm" required>
            <span class="icon is-small is-left">
              <i class="fa fa-key"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <button type="submit" name="button" class="button is-link">Register</button>
          </div>
        </div>
      </form>
  </div>
</div>
<!--
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  -->
</div>
@endsection
