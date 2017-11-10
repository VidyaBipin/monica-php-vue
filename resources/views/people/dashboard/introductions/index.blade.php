<div class="sidebar-box introductions">

  <p class="sidebar-box-title">
    <strong>{{ trans('people.introductions_sidebar_title') }}</strong>
  </p>

  @if(! $contact->hasFirstMetInformation())
    <p class="sidebar-box-paragraph">
      <a href="{{ route('people.introductions.edit', $contact) }}">{{ trans('people.introductions_blank_cta', ['name' => $contact->getFirstName()]) }}</a>
    </p>
  @else
    <ul>
      @if ($contact->getIntroducer())
      <li>
        <i class="fa fa-sign-language"></i>
        {!! trans('people.introductions_met_through', ['id' => $contact->first_met_through_contact_id, 'name' => $contact->getIntroducer()->getCompleteName(auth()->user()->name_order)]) !!}
      </li>
      @endif

      @if ($contact->first_met)
      <li>
        <i class="fa fa-hourglass-start"></i>
        {{ trans('people.introductions_met_date', ['date' => \App\Helpers\DateHelper::getShortDate($contact->first_met)]) }}
      </li>
      @endif

      @if ($contact->first_met_additional_info)
      <li>
        <i class="fa fa-id-card-o"></i>
        {{ $contact->first_met_additional_info }}
      </li>
      @endif
    </ul>

    <p class="sidebar-box-paragraph">
      <a href="{{ route('people.introductions.edit', $contact) }}">{{ trans('app.edit') }}</a>
    </p>

  @endif

</div>
