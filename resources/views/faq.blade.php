@extends('layouts.app')

@section('title', 'FAQ | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'FREQUENTLY ASKED QUESTIONS',
      'title' => 'Questions',
      'accent' => 'Answered',
      'description' => 'Find answers to common questions about Repose Healing Center, contact information and accessing support.'
  ])

  <section class="section-space bg-slate-50">
    <div class="container-site max-w-4xl">
      @include('components.ui.section-title', [
          'eyebrow' => 'FAQ',
          'title' => 'How Can We',
          'accent' => 'Help?',
          'description' => 'If your question is not answered here, contact our team directly.',
          'align' => 'center'
      ])

      <div class="mt-14 space-y-4">
        @php
          $faqs = [
            'How can I contact Repose Healing Center?' => 'You can call +256 789 728 211 or +256 703 802 019, email reposehealingcenter@gmail.com, or use the contact form.',
            'Where is Repose Healing Center located?' => 'Repose Healing Center is located on Ssese View Road, Plot 2, Manyago, Entebbe, Uganda.',
            'When is the center open?' => 'The center operates Monday to Saturday, from 8:00 AM to 6:00 PM.',
            'Can I make an enquiry before visiting?' => 'Yes. You can contact the center or submit an admission enquiry to discuss the next steps before visiting.',
            'Is confidentiality important?' => 'Yes. Repose Healing Center places emphasis on safe and confidential care and provides information about confidentiality and data privacy.'
          ];
        @endphp

        @foreach($faqs as $question => $answer)
          <details class="group border border-slate-200 bg-white">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-5 p-6 font-bold text-slate-900">
              <span>{{ $question }}</span>
              <span class="text-2xl text-green-600 transition group-open:rotate-45">+</span>
            </summary>
            <div class="border-t border-slate-100 px-6 pb-6 pt-4 leading-7 text-slate-600">
              {{ $answer }}
            </div>
          </details>
        @endforeach
      </div>

      <div class="mt-10 flex items-center justify-center gap-3 text-sm text-slate-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
        Still need help? Contact us directly.
      </div>
    </div>
  </section>
@endsection
