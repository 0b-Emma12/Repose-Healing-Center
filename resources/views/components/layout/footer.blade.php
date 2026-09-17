<footer class="bg-slate-950 text-slate-300">
  <!-- Newsletter Section -->
  <div class="border-b border-slate-800 bg-slate-900">
    <div class="container-site py-12">
      <div class="flex flex-col items-center justify-between gap-6 lg:flex-row">
        <div class="max-w-xl text-center lg:text-left">
          <h2 class="text-2xl font-bold text-white">Subscribe to our Newsletter</h2>
          <p class="mt-2 text-slate-400">Receive updates, helpful resources and information from Repose Healing Center.</p>
        </div>
        <form class="flex w-full max-w-md gap-3" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Repose Healing Center.');">
          <input 
            type="email" 
            required 
            placeholder="Email address" 
            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-white placeholder:text-slate-500 focus:border-green-500 focus:outline-none focus:ring-1 focus:ring-green-500" 
          />
          <button 
            type="submit" 
            class="shrink-0 rounded-lg bg-green-600 px-6 py-3 font-semibold text-white transition hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-slate-900"
          >
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Main Footer -->
  <div class="container-site py-16 lg:py-20">
    <div class="grid gap-12 lg:grid-cols-4 lg:gap-8">
      
      <!-- Brand & About -->
      <div class="lg:col-span-1">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
          <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-green-600 text-lg font-bold text-white">
            R
          </div>
          <span class="text-xl font-bold text-white">Repose Healing</span>
        </a>
        <p class="mt-6 text-sm leading-relaxed text-slate-400">
          A safe, confidential and supportive environment for rehabilitation, mental wellness, advocacy and care.
        </p>
        <div class="mt-8 flex gap-5">
          <!-- Social Icons -->
          <a href="#" class="text-slate-400 transition hover:text-yellow-500">
            <span class="sr-only">Facebook</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          </a>
          <a href="#" class="text-slate-400 transition hover:text-yellow-500">
            <span class="sr-only">Instagram</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Company</h3>
        <ul class="mt-6 space-y-4">
          <li><a href="{{ route('about') }}" class="text-sm transition hover:text-yellow-500">About Us</a></li>
          <li><a href="{{ route('team.daniel') }}" class="text-sm transition hover:text-yellow-500">Our Team</a></li>
          <li><a href="{{ route('services') }}" class="text-sm transition hover:text-yellow-500">Services</a></li>
          <li><a href="{{ route('admissions') }}" class="text-sm transition hover:text-yellow-500">Admissions</a></li>
          <li><a href="{{ route('careers') }}" class="text-sm transition hover:text-yellow-500">Careers</a></li>
          <li><a href="{{ route('contact') }}" class="text-sm transition hover:text-yellow-500">Contact Us</a></li>
        </ul>
      </div>

      <!-- Legal -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Legal & Policies</h3>
        <ul class="mt-6 space-y-4">
          <li><a href="{{ route('policies.show', 'patient-rights') }}" class="text-sm transition hover:text-yellow-500">Patient Rights</a></li>
          <li><a href="{{ route('policies.show', 'confidentiality') }}" class="text-sm transition hover:text-yellow-500">Confidentiality</a></li>
          <li><a href="{{ route('policies.show', 'safeguarding') }}" class="text-sm transition hover:text-yellow-500">Safeguarding</a></li>
          <li><a href="{{ route('policies.show', 'data-privacy') }}" class="text-sm transition hover:text-yellow-500">Data Privacy</a></li>
          <li><a href="{{ route('policies.show', 'complaints') }}" class="text-sm transition hover:text-yellow-500">Complaints</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Contact Info</h3>
        <ul class="mt-6 space-y-4 text-sm text-slate-400">
          <li class="flex items-start gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-green-500"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            <span>Ssese View Road, Plot 2, Manyago, Entebbe, Uganda</span>
          </li>
          <li class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-green-500"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <div class="flex flex-col space-y-1">
                <a href="tel:+256789728211" class="transition hover:text-yellow-500">+256 789 728 211</a>
                <a href="tel:+256703802019" class="transition hover:text-yellow-500">+256 703 802 019</a>
            </div>
          </li>
          <li class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="shrink-0 text-green-500"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            <a href="mailto:reposehealingcenter@gmail.com" class="break-all transition hover:text-yellow-500">reposehealingcenter@gmail.com</a>
          </li>
        </ul>
      </div>
      
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-slate-800 bg-slate-950 py-8 text-sm text-slate-500">
    <div class="container-site flex flex-col items-center justify-between gap-4 md:flex-row">
      <p>&copy; {{ date('Y') }} Repose Healing Center. All rights reserved.</p>
      <p class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        SSL secured &bull; GDPR-aligned data handling
      </p>
    </div>
  </div>
</footer>
