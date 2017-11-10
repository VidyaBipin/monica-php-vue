@extends('layouts.skeleton')

@section('content')
  <div class="people-show introductions">

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
                <a href="/people">{{ trans('app.breadcrumb_list_contacts') }}</a>
              </li>
              <li>
                <a href="{{ route('people.show', $contact) }}">{{ $contact->getCompleteName(auth()->user()->name_order) }}</a>
              </li>
              <li>
                {{ trans('app.breadcrumb_edit_introductions') }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="main-content central-form">
      <div class="{{ Auth::user()->getFluidLayout() }}">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <h2>{{ trans('people.introductions_title_edit', ['name' => $contact->getFirstName()]) }}</h2>

              <form method="POST" action="{{ route('people.introductions.update', $contact) }}">
                {{ csrf_field() }}

                @include('partials.errors')

                {{-- How did they meet --}}
                <div class="form-group">
                  <label for="first_met_additional_info">{{ trans('people.introductions_additional_info') }}</label>
                  <textarea class="form-control" id="first_met_additional_info" name="first_met_additional_info" rows="3">{{ old('first_met_additional_info') ?? $contact->first_met_additional_info }}</textarea>
                </div>

                <div class="form-group">
                  <label for="metThroughId">{{ trans('people.introductions_edit_met_through') }}</label>
                  <select class="form-control" name="metThroughId" id="metThroughId">
                    <option value="0">{{ trans('people.introductions_no_met_through') }}</option>
                    @foreach (auth()->user()->account->contacts()->real()->get() as $metThroughContact)

                      @if ($metThroughContact->id != $contact->id)
                      <option value="{{ $metThroughContact->id }}" {{ (is_null($contact->first_met_through_contact_id)) ? '' : (($metThroughContact->id == $contact->first_met_through_contact_id) ? 'selected' : '') }}>
                        {{ $metThroughContact->getCompleteName(auth()->user()->name_order) }}
                      </option>
                      @endif

                    @endforeach
                  </select>
                </div>

                <label>{{ trans('people.introductions_first_met_date') }}</label>
                <fieldset class="form-group dates">

                  {{-- You don't know the date you've met --}}
                  <div class="form-check">
                    <label class="form-check-label" for="is_first_met_date_unknown">
                      <input type="radio" class="form-check-input" name="is_first_met_date_known" id="is_first_met_date_unknown" value="unknown"
                      v-model="date_met_the_contact" value="unknown"
                      {{ (is_null($contact->first_met)) ? 'checked' : '' }}
                      >

                      <div class="form-inline">
                        {{ trans('people.introductions_no_first_met_date') }}
                      </div>
                    </label>
                  </div>

                  {{-- You know the date you've met --}}
                  <div class="form-check">
                    <label class="form-check-label" for="is_first_met_date_known">
                      <input type="radio" class="form-check-input" name="is_first_met_date_known" id="is_first_met_date_known" value="known" v-model="date_met_the_contact" value="known"
                      {{ (! is_null($contact->first_met)) ? 'checked' : '' }}
                      >

                      <span class="form-inline">
                        {{ trans('people.introductions_first_met_date_known') }}
                        <input type="date" name="first_met" class="form-control" id="specificDate"
                        value="{{ old('first_met') ?? (! is_null($contact->first_met) ? $contact->first_met->format('Y-m-d') : \Carbon\Carbon::now(auth()->user()->timezone)->format('Y-m-d')) ?? '' }}"
                        min="{{ \Carbon\Carbon::now(Auth::user()->timezone)->subYears(120)->format('Y-m-d') }}"
                        max="{{ \Carbon\Carbon::now(Auth::user()->timezone)->format('Y-m-d') }}">
                      </span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="form-group" v-if="date_met_the_contact == 'known'">
                  <label class="form-check-inline real-contact-checkbox" for="addReminder">
                    <input type="checkbox" class="form-check-input" name="addReminder" id="addReminder">
                    {{ trans('people.introductions_add_reminder') }}
                  </label>
                </fieldset>

                <div class="form-group actions">
                  <button type="submit" class="btn btn-primary">{{ trans('app.save') }}</button>
                  <a href="{{ route('people.show', $contact) }}" class="btn btn-secondary">{{ trans('app.cancel') }}</a>
                </div>
              </form>

            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
