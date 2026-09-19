<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Repose Healing Center — Website Under Construction" />
    <title>Under Construction — Repose Healing Center</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="apple-touch-icon" href="/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* ── Crane pendulum (pivot at top-right of arm) ── */
        @keyframes pendulum {
            0%   { transform: rotate(-8deg); }
            50%  { transform: rotate(8deg);  }
            100% { transform: rotate(-8deg); }
        }
        /* ── Sign natural hang (slightly offset from crane) ── */
        @keyframes signSwing {
            0%   { transform: translateX(-4px) rotate(-3deg); }
            50%  { transform: translateX(4px)  rotate(3deg);  }
            100% { transform: translateX(-4px) rotate(-3deg); }
        }
        /* ── Gear spin ── */
        @keyframes spin {
            from { transform: rotate(0deg);   }
            to   { transform: rotate(360deg); }
        }
        /* ── Screen soft flicker ── */
        @keyframes flicker {
            0%,100% { opacity:1;    }
            45%     { opacity:.97;  }
            50%     { opacity:.88;  }
            55%     { opacity:.97;  }
        }
        /* ── Animated progress fill ── */
        @keyframes progressFill {
            0%   { width: 0px;   }
            100% { width: 140px; }
        }
        /* ── Floating particles ── */
        @keyframes float1 { 0%,100%{transform:translate(0,0) scale(1);}  50%{transform:translate(12px,-18px) scale(1.1);} }
        @keyframes float2 { 0%,100%{transform:translate(0,0) scale(1);}  50%{transform:translate(-10px,-22px) scale(.9);} }
        @keyframes float3 { 0%,100%{transform:translate(0,0) scale(1);}  50%{transform:translate(8px,-14px) scale(1.05);}  }
        @keyframes float4 { 0%,100%{transform:translate(0,0) scale(1);}  50%{transform:translate(-14px,-10px) scale(.95);}  }
        @keyframes float5 { 0%,100%{transform:translate(0,0) scale(1);}  50%{transform:translate(6px,-20px) scale(1.08);}  }
        /* ── Badge pulse ── */
        @keyframes badgePulse {
            0%,100% { box-shadow:0 0 0 0 rgba(245,158,11,.4); }
            50%     { box-shadow:0 0 0 8px rgba(245,158,11,0); }
        }
        /* ── Slide-up fade in ── */
        @keyframes slideUp {
            from { opacity:0; transform:translateY(24px); }
            to   { opacity:1; transform:translateY(0);    }
        }
        /* ── Dots blinking ── */
        @keyframes blink {
            0%,80%,100%{ opacity:0; }
            40%        { opacity:1; }
        }

        .crane-pivot   { transform-origin: 358px 108px; animation: pendulum 5s cubic-bezier(.4,0,.6,1) infinite; }
        .sign-group    { animation: signSwing 5s cubic-bezier(.4,0,.6,1) infinite; animation-delay:.3s; }
        .gear-spin     { transform-origin: 230px 262px; animation: spin 6s linear infinite; }
        .gear-spin-rev { transform-origin: 188px 248px; animation: spin 4s linear infinite reverse; }
        .screen-flicker{ animation: flicker 8s ease-in-out infinite; }
        .progress-fill { animation: progressFill 3s ease-out forwards; animation-delay:.8s; }

        .p1 { animation: float1 6s ease-in-out infinite; }
        .p2 { animation: float2 7s ease-in-out infinite; animation-delay:.8s; }
        .p3 { animation: float3 5s ease-in-out infinite; animation-delay:1.5s; }
        .p4 { animation: float4 8s ease-in-out infinite; animation-delay:.4s; }
        .p5 { animation: float5 6.5s ease-in-out infinite; animation-delay:2s; }

        .badge-anim { animation: badgePulse 2s ease-in-out infinite; }

        .fade-up-1 { animation: slideUp .7s ease both; animation-delay:.1s; }
        .fade-up-2 { animation: slideUp .7s ease both; animation-delay:.25s; }
        .fade-up-3 { animation: slideUp .7s ease both; animation-delay:.4s; }
        .fade-up-4 { animation: slideUp .7s ease both; animation-delay:.55s; }

        .dot { display:inline-block; animation: blink 1.4s infinite both; }
        .dot:nth-child(2){ animation-delay:.2s; }
        .dot:nth-child(3){ animation-delay:.4s; }
    </style>
</head>
<body class="min-h-screen bg-white flex flex-col" style="font-family:'Outfit',sans-serif;">

    {{-- ══ NAVBAR ══ --}}
    <nav class="w-full px-6 sm:px-10 lg:px-16 py-5 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="/images/logo.png" alt="Repose Healing Center" class="h-14 w-auto object-contain">
        </a>

    </nav>

    {{-- ══ HERO ══ --}}
    <main class="flex-1 flex items-center">
        <div class="w-full max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 py-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- LEFT --}}
            <div class="flex flex-col gap-7">

                {{-- Badge --}}
                <span class="fade-up-1 badge-anim inline-flex items-center gap-2 self-start bg-yellow-400/20 text-yellow-700 text-xs font-semibold px-3 py-1.5 rounded-full border border-yellow-400/50 uppercase tracking-wider">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                    </svg>
                    Work in progress
                </span>

                {{-- Heading --}}
                <h1 class="fade-up-2 text-4xl sm:text-5xl font-extrabold text-slate-800 leading-tight">
                    Website Is<br>
                    <span class="text-green-600">Under Construction</span>
                </h1>

                {{-- Body copy with animated dots --}}
                <p class="fade-up-3 text-slate-500 text-base leading-relaxed max-w-md">
                    We're working hard to bring you a better experience. Our team at Repose Healing Center is putting the final touches on something wonderful. Stay tuned — we'll be live very soon<span class="dot">.</span><span class="dot">.</span><span class="dot">.</span>
                </p>

                {{-- Socials --}}
                <div class="fade-up-4 flex items-center gap-4">
                    <a href="https://www.facebook.com/ligi.nghopefully26/" target="_blank" rel="noopener" aria-label="Facebook"
                       class="w-10 h-10 rounded-full border-2 border-slate-200 flex items-center justify-center text-slate-400 hover:text-green-600 hover:border-green-500 hover:scale-110 transition-all duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.522-4.478-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.988H7.898V12h2.54V9.797c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@livi.hope26" target="_blank" rel="noopener" aria-label="TikTok"
                       class="w-10 h-10 rounded-full border-2 border-slate-200 flex items-center justify-center text-slate-400 hover:text-green-600 hover:border-green-500 hover:scale-110 transition-all duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.32 6.32 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.18 8.18 0 0 0 4.78 1.52V6.75a4.85 4.85 0 0 1-1.01-.06z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/livi.nghope26/" target="_blank" rel="noopener" aria-label="Instagram"
                       class="w-10 h-10 rounded-full border-2 border-slate-200 flex items-center justify-center text-slate-400 hover:text-green-600 hover:border-green-500 hover:scale-110 transition-all duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- RIGHT — Animated SVG Illustration --}}
            <div class="relative flex items-center justify-center select-none">

                {{-- Background glow circle --}}
                <div class="absolute w-72 h-72 sm:w-96 sm:h-96 rounded-full"
                     style="background:radial-gradient(circle, #dbeafe 0%, #eff6ff 60%, transparent 80%);"></div>

                {{-- Floating particles --}}
                <div class="absolute inset-0 pointer-events-none overflow-hidden rounded-full">
                    <span class="p1 absolute top-12 left-16 w-3 h-3 rounded-full bg-yellow-400/60"></span>
                    <span class="p2 absolute top-24 right-12 w-2 h-2 rounded-full bg-green-400/50"></span>
                    <span class="p3 absolute bottom-20 left-10 w-4 h-4 rounded-full bg-blue-300/40"></span>
                    <span class="p4 absolute bottom-10 right-20 w-2.5 h-2.5 rounded-full bg-yellow-300/70"></span>
                    <span class="p5 absolute top-1/2 left-4 w-2 h-2 rounded-full bg-green-300/60"></span>
                </div>

                <svg viewBox="0 0 460 430" xmlns="http://www.w3.org/2000/svg"
                     class="relative w-full max-w-sm sm:max-w-md" aria-hidden="true">

                    {{-- ══ CRANE (full group pivots) ══ --}}
                    <g class="crane-pivot">
                        {{-- Vertical tower --}}
                        <rect x="339" y="116" width="20" height="246" fill="#374151" rx="3"/>
                        {{-- Tower highlight stripe --}}
                        <rect x="344" y="116" width="4" height="246" fill="#4B5563" rx="1"/>
                        {{-- Cross braces --}}
                        <line x1="339" y1="145" x2="359" y2="172" stroke="#6B7280" stroke-width="1.5"/>
                        <line x1="359" y1="145" x2="339" y2="172" stroke="#6B7280" stroke-width="1.5"/>
                        <line x1="339" y1="188" x2="359" y2="215" stroke="#6B7280" stroke-width="1.5"/>
                        <line x1="359" y1="188" x2="339" y2="215" stroke="#6B7280" stroke-width="1.5"/>
                        <line x1="339" y1="231" x2="359" y2="258" stroke="#6B7280" stroke-width="1.5"/>
                        <line x1="359" y1="231" x2="339" y2="258" stroke="#6B7280" stroke-width="1.5"/>
                        <line x1="339" y1="274" x2="359" y2="301" stroke="#6B7280" stroke-width="1.5"/>
                        <line x1="359" y1="274" x2="339" y2="301" stroke="#6B7280" stroke-width="1.5"/>
                        {{-- Horizontal boom arm --}}
                        <rect x="205" y="106" width="154" height="16" fill="#1F2937" rx="4"/>
                        <rect x="205" y="106" width="154" height="5"  fill="#374151" rx="4"/>
                        {{-- Boom diagonal stays --}}
                        <line x1="358" y1="122" x2="290" y2="158" stroke="#6B7280" stroke-width="2"/>
                        <line x1="358" y1="122" x2="240" y2="158" stroke="#6B7280" stroke-width="1.5"/>
                        <line x1="358" y1="122" x2="215" y2="158" stroke="#6B7280" stroke-width="1.5"/>
                        {{-- Counterweight block --}}
                        <rect x="347" y="94" width="38" height="26" fill="#111827" rx="4"/>
                        <rect x="350" y="97" width="32" height="4"  fill="#374151" rx="2"/>
                        {{-- Hook cable (dashed) --}}
                        <line x1="253" y1="122" x2="253" y2="196" stroke="#9CA3AF" stroke-width="1.5" stroke-dasharray="5 3"/>
                        {{-- Hook shape --}}
                        <path d="M247 196 Q253 210 259 196" stroke="#6B7280" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                        <circle cx="253" cy="196" r="3" fill="#9CA3AF"/>
                    </g>

                    {{-- ══ UNDER CONSTRUCTION SIGN (separate swing) ══ --}}
                    <g class="sign-group" style="transform-origin:253px 210px;">
                        {{-- Drop shadow --}}
                        <rect x="181" y="216" width="144" height="56" rx="8" fill="rgba(0,0,0,0.12)"/>
                        {{-- Sign body --}}
                        <rect x="181" y="212" width="144" height="56" rx="8" fill="#F59E0B"/>
                        {{-- Diagonal warning stripes --}}
                        <clipPath id="signClip">
                            <rect x="181" y="212" width="144" height="56" rx="8"/>
                        </clipPath>
                        <g clip-path="url(#signClip)">
                            <rect x="181" y="212" width="16" height="56" fill="#D97706" opacity=".5"/>
                            <rect x="309" y="212" width="16" height="56" fill="#D97706" opacity=".5"/>
                            <line x1="197" y1="212" x2="181" y2="268" stroke="#D97706" stroke-width="3" opacity=".3"/>
                            <line x1="309" y1="212" x2="325" y2="268" stroke="#D97706" stroke-width="3" opacity=".3"/>
                        </g>
                        {{-- Warning triangle --}}
                        <polygon points="312,220 330,250 294,250" fill="#1F2937"/>
                        <text x="312" y="245" text-anchor="middle" font-size="16" font-weight="900" fill="#FCD34D">!</text>
                        {{-- Sign text --}}
                        <text x="240" y="234" text-anchor="middle" font-size="13" font-weight="900" fill="#1F2937" letter-spacing="2.5">UNDER</text>
                        <text x="240" y="253" text-anchor="middle" font-size="8.5" font-weight="700" fill="#292524" letter-spacing="2">CONSTRUCTION</text>
                        {{-- Corner bolts --}}
                        <circle cx="191" cy="220" r="3" fill="#B45309"/>
                        <circle cx="317" cy="220" r="3" fill="#B45309"/>
                        <circle cx="191" cy="260" r="3" fill="#B45309"/>
                        <circle cx="317" cy="260" r="3" fill="#B45309"/>
                    </g>

                    {{-- ══ MONITOR ══ --}}
                    {{-- Stand base --}}
                    <rect x="175" y="382" width="110" height="11" rx="5.5" fill="#CBD5E1"/>
                    {{-- Stand neck --}}
                    <rect x="222" y="356" width="16" height="28" rx="4" fill="#94A3B8"/>
                    {{-- Monitor outer body --}}
                    <rect x="94"  y="200" width="272" height="160" rx="14" fill="#1E293B"/>
                    {{-- Monitor inner bezel --}}
                    <rect x="106" y="212" width="248" height="136" rx="7" fill="#0F172A"/>
                    {{-- Screen --}}
                    <rect x="110" y="216" width="240" height="128" rx="5" fill="#F8FAFC" class="screen-flicker"/>

                    {{-- Screen UI: top bar --}}
                    <rect x="110" y="216" width="240" height="16" rx="5" fill="#E2E8F0"/>
                    <circle cx="122" cy="224" r="3.5" fill="#FC8181"/>
                    <circle cx="133" cy="224" r="3.5" fill="#FBD38D"/>
                    <circle cx="144" cy="224" r="3.5" fill="#68D391"/>

                    {{-- Screen UI: URL bar --}}
                    <rect x="158" y="219" width="172" height="10" rx="3" fill="#CBD5E1"/>
                    <text x="244" y="227" text-anchor="middle" font-size="5.5" fill="#94A3B8" font-family="Outfit,sans-serif">reposehealingcenter.com</text>

                    {{-- Primary gear (spinning) --}}
                    <g class="gear-spin">
                        <circle cx="230" cy="262" r="26" fill="#E2E8F0"/>
                        <circle cx="230" cy="262" r="17" fill="#94A3B8"/>
                        <circle cx="230" cy="262" r="7"  fill="#F1F5F9"/>
                        {{-- Gear teeth --}}
                        <rect x="228" y="231" width="4" height="10" rx="2" fill="#CBD5E1"/>
                        <rect x="228" y="283" width="4" height="10" rx="2" fill="#CBD5E1"/>
                        <rect x="199" y="260" width="10" height="4" rx="2" fill="#CBD5E1"/>
                        <rect x="251" y="260" width="10" height="4" rx="2" fill="#CBD5E1"/>
                        <rect x="209" y="239" width="4" height="10" rx="2" fill="#CBD5E1" transform="rotate(45 211 244)"/>
                        <rect x="247" y="275" width="4" height="10" rx="2" fill="#CBD5E1" transform="rotate(45 249 280)"/>
                        <rect x="209" y="275" width="4" height="10" rx="2" fill="#CBD5E1" transform="rotate(-45 211 280)"/>
                        <rect x="247" y="239" width="4" height="10" rx="2" fill="#CBD5E1" transform="rotate(-45 249 244)"/>
                    </g>

                    {{-- Secondary small gear (reverse spin) --}}
                    <g class="gear-spin-rev">
                        <circle cx="188" cy="248" r="14" fill="#E2E8F0"/>
                        <circle cx="188" cy="248" r="9"  fill="#94A3B8"/>
                        <circle cx="188" cy="248" r="4"  fill="#F1F5F9"/>
                        <rect x="186" y="231" width="4" height="7" rx="2" fill="#CBD5E1"/>
                        <rect x="186" y="258" width="4" height="7" rx="2" fill="#CBD5E1"/>
                        <rect x="171" y="246" width="7" height="4" rx="2" fill="#CBD5E1"/>
                        <rect x="198" y="246" width="7" height="4" rx="2" fill="#CBD5E1"/>
                    </g>

                    {{-- Progress bar track --}}
                    <rect x="130" y="306" width="200" height="9" rx="4.5" fill="#E2E8F0"/>
                    {{-- Animated fill --}}
                    <rect x="130" y="306" width="0"   height="9" rx="4.5" fill="#16A34A" class="progress-fill"/>
                    {{-- Progress label --}}
                    <text x="130" y="325" font-size="6.5" fill="#94A3B8" font-family="Outfit,sans-serif">Building something great • 70% complete</text>

                    {{-- ══ KEYBOARD ══ --}}
                    <rect x="126" y="394" width="208" height="24" rx="5" fill="#CBD5E1"/>
                    <rect x="132" y="399" width="196" height="14" rx="3" fill="#E2E8F0"/>
                    {{-- Key row 1 --}}
                    <rect x="136" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="153" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="170" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="187" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="204" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="221" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="238" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="255" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="272" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="289" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    <rect x="306" y="401" width="13" height="8" rx="2" fill="#F1F5F9"/>
                    {{-- Space bar --}}
                    <rect x="170" y="411" width="120" height="0" rx="0" fill="none"/>
                </svg>
            </div>

        </div>
    </main>

    {{-- ══ FOOTER ══ --}}
    <footer class="w-full px-6 py-6 border-t border-slate-100 flex flex-col items-center justify-center gap-3">
        <img src="/images/logo.png" alt="Repose Healing Center" class="h-12 w-auto object-contain">
        <p class="text-center text-xs text-slate-400">
            &copy; {{ date('Y') }} Repose Healing Center. All rights reserved. &mdash; Entebbe, Uganda.
        </p>
    </footer>

</body>
</html>
