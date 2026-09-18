@extends('layouts.app')

@section('title', 'Start Your Enquiry | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'CONFIDENTIAL ENQUIRY',
      'title' => 'Start Your',
      'accent' => 'Enquiry',
      'description' => 'Complete this brief assessment to help our admissions team understand your situation before your first conversation.'
  ])

  <section class="section-space bg-slate-50 relative">
    <div class="container-site max-w-3xl relative z-10 lg:-mt-24">
      @include('components.forms.interactive-enquiry')
    </div>
  </section>
@endsection
