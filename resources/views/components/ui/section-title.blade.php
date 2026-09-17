<div class="{{ isset($align) && $align === 'left' ? 'text-left' : 'mx-auto text-center' }} max-w-3xl">
  <p class="text-sm font-bold uppercase tracking-[0.2em] text-green-600">
    {{ $eyebrow }}
  </p>

  <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-5xl">
    {{ $title }} <span class="text-yellow-500">{{ $accent ?? '' }}</span>
  </h2>

  @if(isset($description))
    <p class="mt-5 leading-7 text-slate-600">
      {{ $description }}
    </p>
  @endif
</div>
