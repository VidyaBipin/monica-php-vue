@extends('marketing.skeleton')

@section('content')

  <body class="marketing register">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3">

        <div class="alert alert-danger">
          <h3><i class="fa fa-ban"></i> @lang('auth.not_authorized')</h3>

          @if(isset($exception) && $exception->getMessage())
            <p>{{ $exception->getMessage() }}</p>
          @endif
        </div>

      </div>
    </div>
  </div>
  </body>

@endsection
