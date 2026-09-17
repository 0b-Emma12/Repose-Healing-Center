@extends('layouts.app')

@section('title', 'Page Not Found | Repose Healing Center')

@section('content')
  <div class="flex min-h-[70vh] items-center justify-center bg-slate-50 px-6">
    <div class="text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-auto text-green-600"><path d="m13.5 8.5-5 5"/><path d="m8.5 8.5 5 5"/><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>

      <p class="mt-6 text-sm font-bold tracking-[0.25em] text-green-600">
        PAGE NOT FOUND
      </p>

      <h1 class="mt-3 text-6xl font-black text-slate-900">404</h1>

      <p class="mx-auto mt-5 max-w-lg leading-7 text-slate-600">
        The page you are looking for does not exist or may have been moved.
      </p>

      <a
        href="{{ route('home') }}"
        class="mt-8 inline-flex items-center gap-2 bg-green-600 px-7 py-4 text-sm font-bold uppercase tracking-wide text-white hover:bg-green-700"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        Back Home
      </a>
    </div>
  </div>
@endsection
