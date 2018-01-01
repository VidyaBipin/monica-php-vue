@extends('layouts.skeleton')

@section('content')

<div class="settings">

  {{-- Breadcrumb --}}
  <div class="breadcrumb">
    <div class="{{ Auth::user()->getFluidLayout() }}">
      <div class="row">
        <div class="col-xs-12">
          <ul class="horizontal">
            <li>
              <a href="/dashboard">{{ trans('app.breadcrumb_dashboard') }}</a>
            </li>
            <li>
              <a href="/settings">{{ trans('app.breadcrumb_settings') }}</a>
            </li>
            <li>
              <a href="/settings/security">{{ trans('app.breadcrumb_settings_security') }}</a>
            </li>
            <li>
              {{ trans('app.breadcrumb_settings_security_2fa') }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="{{ Auth::user()->getFluidLayout() }}">
    <div class="row">

      <div class="col-xs-12 col-md-9">

        <h3 class="with-actions">{{ trans('settings.2fa_title') }}</h3>
        <p>{{ trans('settings.2fa_enable_description') }}</p>

        @include('partials.errors')

        <form action="/settings/security/2fa-enable" method="POST">
          {{ csrf_field() }}

          <div class="panel-body">
            {{ trans('settings.2fa_enable_otp') }}
            <br />
            <img alt="Image of QR barcode" src="{{ $image }}" />
            <br />
            {{ trans('settings.2fa_enable_otp_help') }} <code>{{ $secret }}</code>
            <br />
          </div>

          {{-- code --}}
          <div class="form-group">
            <label for="one_time_password">{{ trans('auth.2fa_one_time_password') }}</label>
            <input type="number" class="form-control" id="one_time_password" name="one_time_password" />
          </div>

          <button type="submit" class="btn btn-primary">{{ trans('settings.2fa_enable_validate') }}</button>
          <a href="/settings/security" class="btn">{{ trans('settings.2fa_enable_cancel') }}</a>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
