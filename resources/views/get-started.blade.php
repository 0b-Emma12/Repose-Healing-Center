@extends('layouts.app')

@section('title', 'Start Your Enquiry | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'CONFIDENTIAL ENQUIRY',
      'title' => 'Start Your',
      'accent' => 'Enquiry',
      'description' => 'Complete this brief assessment to help our admissions team understand your situation before your first conversation.',
      'hideSeparator' => true
  ])

  <section class="section-space bg-slate-50 relative">
    <div class="container-site max-w-3xl relative z-10 lg:-mt-24">
      <div class="bg-white p-6 shadow-xl sm:p-12 border border-slate-200 rounded-xl">
        @include('components.forms.interactive-enquiry')
      </div>
    </div>
  </section>
@endsection
