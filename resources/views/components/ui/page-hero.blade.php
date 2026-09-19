<div class="relative overflow-hidden bg-slate-900 text-white {{ $className ?? '' }}">
  <img
    src="{{ $image ?? 'https://images.unsplash.com/photo-1573164574572-cb89e39749b4?auto=format&fit=crop&w=2000&q=85' }}"
    alt=""
    class="absolute inset-0 h-full w-full object-cover opacity-30"
  />

  <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/80 to-transparent"></div>

  <div class="container-site relative pt-24 pb-20 text-center sm:pb-24 sm:pt-32">
    <div class="mx-auto max-w-3xl">
      <p class="text-sm font-bold uppercase tracking-[0.2em] text-green-400">
        {{ $eyebrow }}
      </p>

      <h1 class="mt-4 text-4xl font-extrabold uppercase leading-[1.1] tracking-tight sm:text-5xl md:text-6xl lg:text-7xl">
        {{ $title }} <span class="text-yellow-500">{{ $accent ?? '' }}</span>
      </h1>

      @if(isset($description))
        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-200 sm:text-xl">
          {{ $description }}
        </p>
      @endif
    </div>
  </div>

  @if(!isset($hideSeparator) || !$hideSeparator)
    @include('components.ui.separator', ['color' => $separatorColor ?? 'text-white'])
  @endif
</div>
