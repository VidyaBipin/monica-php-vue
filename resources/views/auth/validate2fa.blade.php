@extends('marketing.skeleton')

@section('content')
  <body class="marketing register">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">

          <div class="signup-box">
            <img class="logo" src="/img/small-logo.png" alt="">
            <h2>{{ trans('auth.2fa_title') }}</h2>

            @include ('partials.errors')

            <form class="" action="/validate2fa" method="post">
              {{ csrf_field() }}

              @if ($errors->has('totp'))
                <span class="help-block">
                  <strong>{{ $errors->first('totp') }}</strong>
                </span>
              @endif
              <div class="form-group">
                <label for="one_time_password">{{ trans('auth.2fa_one_time_password') }}</label>
                <input type="number" class="form-control" id="one_time_password" name="one_time_password" required />
              </div>

              <div class="form-group checkbox">
                <input type="checkbox" name="remember" id="remember" />
                <label for="remember">Remember me on this browser</label>
              </div>

              <div class="form-group actions">
                <button type="submit" class="btn btn-primary">{{ trans('app.verify') }}</button>
                <a href="/logout" class="btn">{{ trans('app.cancel') }}</a>
              </div>

              <div class="form-group">
                 {{ trans('auth.2fa_recuperation_code') }}
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
