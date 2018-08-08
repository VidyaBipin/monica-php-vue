@extends('layouts.skeleton')

@section('title', $contact->name )

@section('content')
    {{-- Breadcrumb --}}
    <section class="ph3 ph5-ns pt4 cf w-100 bg-gray-monica">
        <div class="mw7 center">
            <div class="full-page-modal-header ph4 pv3 bt br bl b--gray-monica">
                <ul>
                    <li class="di"><a href="">Profile of John Doe</a></li>
                    <li class="di ph2">></li>
                    <li class="di">Activities</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Main section --}}
    <section class="ph3 ph5-ns cf w-100 bg-gray-monica mb5">
        <div class="mw8 center full-page-modal pt4">
            <h2 class="tc bb b--gray-monica">Activities report between Marion and you</h2>
            <h2 class="tc pt3 pb4 normal">🚀 You’ve logged {{ $totalActivities }} activities with Roger in total and {{ $activitiesLastTwelveMonths }} in the last 12 months so far.</h2>
            <div class="cf ph2-ns">

                {{-- Left sidebar --}}
                <div class="fl w-100 w-25-ns pa2">
                    <div class="bg-white">
                        <p>Everything you've ever done</p>
                        <ul>
                            @foreach($activitiesPerYear as $activityStatistic)
                            <li class="full-page-modal-year-selector pv2 b selected">
                                <a href="{{ route('people.activities.year', [$contact, $activityStatistic->year]) }}">
                                    <span class="ph3">
                                        {{ $activityStatistic->year }}
                                        <span class="fr mr3">{{ $activityStatistic->count }}</span>
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Right Content --}}
                <div class="fl w-100 w-75-ns pa2">
                    <div class="bg-white">
                        <p class="tc b">🤲 Here is a breakdown of the type of activities you’ve done together in 2018:</p>
                        <ul class="column-list mb4">
                            @foreach($uniqueActivityTypes as $activityType)
                            <li class="mb2 relative">
                                <span class="f2">{{ $activityType['occurences'] }}</span>
                                <span class="relative" style="top: -10px;">{{ $activityType['object']->name }}</span>
                            </li>
                            @endforeach
                        </ul>

                        <p class="tc b">Here is what you two have done in 2018:</p>

                        {{-- Bar chart --}}
                        <ul class="chart">
                            @foreach ($activitiesPerMonthForYear->sortBy('month') as $activityMonth)
                            <li>
                                <span class="f6" style="height: {{ $activityMonth['percent'] }}%" title="{{ \App\Helpers\DateHelper::getShortMonth(\Carbon\Carbon::create(1990, $activityMonth['month'], 1)) }}"></span>
                            </li>
                            @endforeach
                        </ul>

                        {{-- Details about each month --}}
                        @foreach ($activitiesPerMonthForYear as $activityMonth)
                            @if ($activityMonth['occurences'] != 0)

                            <h3 class="f4">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr2">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 14V15H0V0H1V14H16ZM5 13H3V8H5V13ZM9 13H7V3H9V13ZM13 13H11V6H13V13Z" fill="#4CA35A"/>
                                </svg>
                                {{ \Carbon\Carbon::create(2018, $activityMonth['month'], 1)->formatLocalized('%B %Y') }}: {{ $activityMonth['occurences'] }} activities
                            </h3>

                            @foreach ($activityMonth['activities'] as $activity)
                            <div class="pl2 bl b--gray-monica">
                                <div class="pa3 br2 mb3 ml4">
                                    <div class="mb3">
                                        <ul class="mb3 di">
                                            <li class="di relative pr1" style="top:2px">
                                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6308 1H10.6615V2.5C10.6615 2.78 10.4483 3 10.1769 3H8.23846C7.96708 3 7.75385 2.78 7.75385 2.5V1H4.84615V2.5C4.84615 2.78 4.63292 3 4.36154 3H2.42308C2.15169 3 1.93846 2.78 1.93846 2.5V1H0.969231C0.436154 1 0 1.45 0 2V13C0 13.55 0.436154 14 0.969231 14H11.6308C12.1638 14 12.6 13.55 12.6 13V2C12.6 1.45 12.1638 1 11.6308 1ZM11.6308 13H0.969231V4H11.6308V13ZM3.87692 2H2.90769V0H3.87692V2ZM9.69231 2H8.72308V0H9.69231V2ZM4.84615 6H3.87692V5H4.84615V6ZM6.78461 6H5.81538V5H6.78461V6ZM8.72308 6H7.75385V5H8.72308V6ZM10.6615 6H9.69231V5H10.6615V6ZM2.90769 8H1.93846V7H2.90769V8ZM4.84615 8H3.87692V7H4.84615V8ZM6.78461 8H5.81538V7H6.78461V8ZM8.72308 8H7.75385V7H8.72308V8ZM10.6615 8H9.69231V7H10.6615V8ZM2.90769 10H1.93846V9H2.90769V10ZM4.84615 10H3.87692V9H4.84615V10ZM6.78461 10H5.81538V9H6.78461V10ZM8.72308 10H7.75385V9H8.72308V10ZM10.6615 10H9.69231V9H10.6615V10ZM2.90769 12H1.93846V11H2.90769V12ZM4.84615 12H3.87692V11H4.84615V12ZM6.78461 12H5.81538V11H6.78461V12ZM8.72308 12H7.75385V11H8.72308V12Z" fill="#CDCDCD"/>
                                                </svg>
                                            </li>
                                            <li class="di f6 pr3">
                                                {{ $activity->date_it_happened }}
                                            </li>
                                            @if (!is_null($activity->type))
                                            <li class="di relative pr1" style="top:1px">
                                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13 2H7V1C7 0.34 6.69 0 6 0H1C0.45 0 0 0.45 0 1V11C0 11.55 0.45 12 1 12H13C13.55 12 14 11.55 14 11V3C14 2.45 13.55 2 13 2ZM6 2H1V1H6V2Z" fill="#DFDFDF"/>
                                                </svg>
                                            </li>
                                            <li class="di f6">
                                                {{ $activity->type->name }}
                                            </li>
                                            @endif
                                        </ul>
                                        <ul class="fr">
                                            <li class="di relative pr2">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </li>
                                            <li class="di relative">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </li>
                                        </ul>
                                    </div>

                                    <p><strong>{{ $activity->summary }}</strong></p>

                                    <p class="mb0">{{ $activity->description }}</p>
                                </div>
                            </div>
                            {{-- Activities list --}}
                            @endforeach

                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
