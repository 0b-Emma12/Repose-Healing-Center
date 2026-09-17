@extends('layouts.app')

@section('content')
  @include('components.sections.hero')
  @include('components.sections.services-preview')
  @include('components.sections.why-choose-us')
  @include('components.sections.about-preview')
  @include('components.sections.faq-preview')
  @include('components.sections.cta-section')
  @include('components.sections.contact-section')
  @include('components.sections.resources-preview')
@endsection
