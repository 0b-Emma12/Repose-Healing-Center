@extends('layouts.app')

@section('title', 'Resources | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'RESOURCES',
      'title' => 'Information For',
      'accent' => 'Better Decisions',
      'description' => 'Useful information and guidance to help you understand support, care, privacy and the healing journey.'
  ])

  <section class="section-space bg-white">
    <div class="container-site">
      @include('components.ui.section-title', [
          'eyebrow' => 'LEARN & UNDERSTAND',
          'title' => 'Resources &',
          'accent' => 'Guidance',
          'description' => 'Explore information designed to help individuals and families approach support with greater understanding.',
          'align' => 'center'
      ])

      <div class="mt-14 grid gap-7 md:grid-cols-3">
        @php
          $resources = [
            [
              'icon' => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>',
              'title' => 'Wellness Information',
              'text' => 'Information to encourage awareness, understanding and informed conversations around wellbeing.'
            ],
            [
              'icon' => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 13h2"/><path d="M12 13.5v-2"/>',
              'title' => 'Support Guidance',
              'text' => 'General guidance for individuals considering rehabilitation, mental wellness or supportive care.'
            ],
            [
              'icon' => '<path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/>',
              'title' => 'Policies & Rights',
              'text' => 'Review information about confidentiality, consent, patient rights, safeguarding and data privacy.'
            ]
          ];
        @endphp

        @foreach($resources as $item)
          <div class="border border-slate-200 p-8 transition hover:-translate-y-1 hover:shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600">
              {!! $item['icon'] !!}
            </svg>
            <h3 class="mt-6 text-xl font-bold text-slate-900">{{ $item['title'] }}</h3>
            <p class="mt-4 leading-7 text-slate-600">{{ $item['text'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
