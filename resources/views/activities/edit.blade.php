@extends('layouts.skeleton')

@section('content')
  <div class="people-show activities">

    {{-- Breadcrumb --}}
    <div class="breadcrumb {{ htmldir() }}">
      <div class="{{ Auth::user()->getFluidLayout() }}">
        <div class="row">
          <div class="col-xs-12">
            <ul class="horizontal">
              <li>
                <a href="{{ route('dashboard.index') }}">{{ trans('app.breadcrumb_dashboard') }}</a>
              </li>
              <li>
                <a href="{{ route('people.index') }}">{{ trans('app.breadcrumb_list_contacts') }}</a>
              </li>
              <li>
                {{ $contact->name }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Page header -->
    @include('people._header')

    <!-- Page content -->
    <div class="main-content central-form">
      <div class="{{ Auth::user()->getFluidLayout() }}">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-sm-offset-3-right">
            @include('activities.form', [
              'method' => 'PUT',
              'action' => route('activities.update', [$activity, $contact])
            ])
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
