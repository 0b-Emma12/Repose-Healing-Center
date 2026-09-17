@extends('layouts.app')

@section('title', 'Admissions | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'ADMISSIONS',
      'title' => 'Take The',
      'accent' => 'Next Step',
      'description' => 'Begin your conversation with Repose Healing Center in a safe, respectful and confidential environment.'
  ])

  <section class="section-space bg-slate-50">
    <div class="container-site grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
      <div>
        @include('components.ui.section-title', [
            'align' => 'left',
            'eyebrow' => 'START HERE',
            'title' => 'Request',
            'accent' => 'Support',
            'description' => 'Complete the enquiry form and our team can guide you on the appropriate next steps.'
        ])

        <div class="mt-9 space-y-5">
          <div class="flex gap-4 border border-slate-200 bg-white p-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-1 shrink-0 text-green-600"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2-1 4-2 8-4 4 2 6 3 8 4a1 1 0 0 1 1 1v7z"/><path d="m9 12 2 2 4-4"/></svg>
            <div>
              <h3 class="font-bold text-slate-900">Confidential</h3>
              <p class="mt-1 text-sm leading-6 text-slate-600">
                Your enquiry should be handled with appropriate care and respect for privacy.
              </p>
            </div>
          </div>

          <div class="flex gap-4 border border-slate-200 bg-white p-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-1 shrink-0 text-green-600"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <div>
              <h3 class="font-bold text-slate-900">Prefer to call?</h3>
              <a href="tel:+256789728211" class="mt-1 block text-sm font-semibold text-green-600">
                +256 789 728 211
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="border border-slate-200 bg-white p-6 shadow-xl sm:p-9">
        @include('components.forms.admission-form')
      </div>
    </div>
  </section>
@endsection
