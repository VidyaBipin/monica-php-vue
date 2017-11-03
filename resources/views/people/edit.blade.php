@extends('layouts.skeleton')

@section('content')
  <div class="people-show">

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
                {{ trans('people.edit_contact_information') }}
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
            <form method="POST" action="/people/{{ $contact->id }}/update" enctype="multipart/form-data">
              {{ csrf_field() }}

              @include('partials.errors')

              <h2>{{ trans('people.information_edit_title', ['name' => $contact->getFirstName()]) }}</h2>

              <p class="delete-contact">
                {{ trans('people.people_delete_message') }}
                <a href="#" onclick="if (confirm('{{ trans('people.people_delete_confirmation') }}')) { $('#contact-delete-form').submit(); } return false;">{{ trans('people.people_delete_click_here') }}</a>.
              </p>

              {{-- Gender --}}
              <label>{{ trans('people.people_add_gender') }}</label>

              <fieldset class="form-group">
                <label class="form-check-inline" for="genderNone">
                  @if ($contact->gender == 'none')
                  <input type="radio" class="form-check-input" name="gender" id="genderNone" value="none" checked>
                  @else
                  <input type="radio" class="form-check-input" name="gender" id="genderNone" value="none">
                  @endif
                  {{ trans('app.gender_none') }}
                </label>

                <label class="form-check-inline" for="genderMale">
                  @if ($contact->gender == 'male')
                  <input type="radio" class="form-check-input" name="gender" id="genderMale" value="male" checked>
                  @else
                  <input type="radio" class="form-check-input" name="gender" id="genderMale" value="male">
                  @endif
                  {{ trans('app.gender_male') }}
                </label>

                <label class="form-check-inline" for="genderFemale">
                  @if ($contact->gender == 'female')
                  <input type="radio" class="form-check-input" name="gender" id="genderFemale" value="female" checked>
                  @else
                  <input type="radio" class="form-check-input" name="gender" id="genderFemale" value="female">
                  @endif
                  {{ trans('app.gender_female') }}
                </label>
              </fieldset>

              {{-- Avatar --}}
              <div class="form-group">
                <label for="avatar">{{ trans('people.information_edit_avatar') }}</label>
                <input type="file" class="form-control-file" name="avatar" id="avatar">
                <small id="fileHelp" class="form-text text-muted">{{ trans('people.information_edit_max_size', ['size' => 10]) }}</small>
              </div>

              {{-- This check is for the cultures that are used to say the last name first --}}
              @if (auth()->user()->name_order == 'firstname_first')

              {{-- First name --}}
              <div class="form-group">
                <label for="firstname">{{ trans('people.information_edit_firstname') }}</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="{{ $contact->getFirstName() }}" autofocus required>
              </div>

              {{-- Last name --}}
              <div class="form-group">
                <label for="lastname">{{ trans('people.information_edit_lastname') }}</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="{{ $contact->getLastName() }}">
              </div>

              @else

              {{-- Last name --}}
              <div class="form-group">
                <label for="lastname">{{ trans('people.information_edit_lastname') }}</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="{{ $contact->getLastName() }}">
              </div>

              {{-- First name --}}
              <div class="form-group">
                <label for="firstname">{{ trans('people.information_edit_firstname') }}</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="{{ $contact->getFirstName() }}" autofocus required>
              </div>

              @endif

              {{-- Address --}}
              <div class="form-group">
                <label for="street">{{ trans('people.information_edit_street') }}</label>
                <input type="text" class="form-control" name="street" id="street" value="{{ $contact->street }}" autofocus>
                <label for="city">{{ trans('people.information_edit_city') }}</label>
                <input type="text" class="form-control" name="city" id="city" value="{{ $contact->city }}">
                <label for="province">{{ trans('people.information_edit_province') }}</label>
                <input type="text" class="form-control" name="province" id="province" value="{{ $contact->province }}">
                <label for="postalcode">{{ trans('people.information_edit_postalcode') }}</label>
                <input type="text" class="form-control" name="postalcode" id="postalcode" value="{{ $contact->postal_code }}">
                <label for="country">{{ trans('people.information_edit_country') }}</label>

                @include('partials.components.country-select',['selectionID'=>$contact->country_id])

              </div>

              {{-- Email address --}}
              <div class="form-group">
                <label for="email">{{ trans('people.information_edit_email') }}</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $contact->email }}">
              </div>

              {{-- Phone --}}
              <div class="form-group">
                <label for="phone">{{ trans('people.information_edit_phone') }}</label>
                <input class="form-control" name="phone" id="phone" value="{{ $contact->phone_number }}">
              </div>

              {{-- Facebook --}}
              <div class="form-group">
                <label for="facebook">{{ trans('people.information_edit_facebook') }}</label>
                <input class="form-control" name="facebook" id="facebook" value="{{ $contact->facebook_profile_url }}" placeholder="https://facebook.com/john.doe">
              </div>

              {{-- Twitter --}}
              <div class="form-group">
                <label for="twitter">{{ trans('people.information_edit_twitter') }}</label>
                <input class="form-control" name="twitter" id="twitter" value="{{ $contact->twitter_profile_url }}" placeholder="https://twitter.com/john.doe">
              </div>

              {{-- Birthdate --}}
              <fieldset class="form-group dates">

                {{-- Don't know the birthdate --}}
                <div class="form-check">
                  <label class="form-check-label" for="birthdateApproximate_unknown">
                    <input type="radio" class="form-check-input" name="is_birthdate_approximate" id="birthdateApproximate_unknown" value="unknown" {{ ($contact->is_birthdate_approximate == 'unknown')?'checked':'' }}>

                    <div class="form-inline">
                      {{ trans('people.significant_other_add_unknown') }}
                    </div>
                  </label>
                </div>

                {{-- Approximate birthdate --}}
                <div class="form-check">
                  <label class="form-check-label" for="birthdateApproximate_approximate">
                    <input type="radio" class="form-check-input" name="is_birthdate_approximate" id="birthdateApproximate_approximate" value="approximate" {{ ($contact->is_birthdate_approximate == 'approximate')?'checked':'' }}>

                    <div class="form-inline">
                      {{ trans('people.information_edit_probably') }}

                      <input type="number" class="form-control" name="age" id="age"
                              value="{{ (is_null($contact->getAge())) ? 1 : $contact->getAge() }}"
                              min="0"
                              max="99">

                      {{ trans('people.information_edit_probably_yo') }}
                    </div>
                  </label>
                </div>

                {{-- Exact birthdate --}}
                <div class="form-check">
                  <label class="form-check-label" for="birthdateApproximate_exact">
                      <input type="radio" class="form-check-input" name="is_birthdate_approximate" id="birthdateApproximate_exact" value="exact" {{ ($contact->is_birthdate_approximate == 'exact')?'checked':'' }}>

                      <div class="form-inline">
                        {{ trans('people.information_edit_exact') }}

                        <input type="date" id="specificDate" name="specificDate" class="form-control"
                              value="{{ (is_null($contact->birthdate)) ? \Carbon\Carbon::now(Auth::user()->timezone)->format('Y-m-d') : $contact->birthdate->format('Y-m-d') }}"
                              min="{{ \Carbon\Carbon::now(Auth::user()->timezone)->subYears(120)->format('Y-m-d') }}"
                              max="{{ \Carbon\Carbon::now(Auth::user()->timezone)->format('Y-m-d') }}">
                      </div>
                  </label>
                </div>
                <p class="help">{{ trans('people.information_edit_help') }}</p>
              </fieldset>

              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" v-model="is_deceased">
                    Mark this person as deceased
                  </label>
                </div>
                <div class="form-check" v-if="is_deceased">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" v-model="date_deceased_known">
                    I know the date this person died
                  </label>
                </div>
                <div class="form-check" v-if="date_deceased_known">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="">
                    Add a reminder for this date
                  </label>
                </div>
              </div>

              <div class="form-group actions">
                <button type="submit" class="btn btn-primary">{{ trans('app.save') }}</button>
                <a href="{{ route('people.show', $contact) }}" class="btn btn-secondary">{{ trans('app.cancel') }}</a>
              </div> <!-- .form-group -->
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  <form method="POST" action="{{ action('PeopleController@delete', $contact) }}" id="contact-delete-form" class="hidden">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
  </form>
@endsection
