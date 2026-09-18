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

  <section class="section-space bg-slate-50 border-t border-slate-200">
    <div class="container-site">
      @include('components.ui.section-title', [
          'eyebrow' => 'ARTICLES & INSIGHTS',
          'title' => 'Read Our',
          'accent' => 'Latest Articles',
          'description' => 'Answers to the real questions worried families search for, framed to reduce stigma and provide clear guidance.',
          'align' => 'left'
      ])

      <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @php
          $articles = [
            'How to talk to a family member about their drinking',
            'What actually happens during detox - a plain explanation',
            'Depression vs. "just being stressed": how to tell the difference',
            'Recognizing early signs of relapse',
            'Supporting a loved one through treatment without enabling',
            'Understanding dual diagnosis: when addiction and mental illness occur together',
            'What to expect in the first week at Repose'
          ];
        @endphp

        @foreach($articles as $article)
          <a href="#" class="block group rounded-xl border border-slate-200 bg-white overflow-hidden transition hover:shadow-xl hover:-translate-y-1">
            <div class="h-40 bg-slate-200 relative overflow-hidden">
                <div class="absolute inset-0 bg-green-900/10 group-hover:bg-transparent transition duration-500"></div>
                <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                </div>
            </div>
            <div class="p-6">
              <span class="text-xs font-bold uppercase tracking-widest text-yellow-600">Recovery & Family</span>
              <h3 class="mt-3 text-lg font-bold text-slate-900 leading-snug group-hover:text-green-700 transition">{{ $article }}</h3>
              <div class="mt-6 flex items-center text-sm font-bold text-green-600">
                Read Article
                <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>
@endsection
