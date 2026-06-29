<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MS Muurprint Studio — Direct op de muur. Jarenlang scherp.</title>
    <meta name="description" content="MS Muurprint Studio print afbeeldingen direct op uw muur met UV-LED technologie. Naadloos, duurzaam en exclusief. Geen behang, geen naden.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-canvas text-ink font-body antialiased">

    {{-- ============================================================ --}}
    {{-- NAVIGATIE --}}
    {{-- ============================================================ --}}
    <nav class="fixed top-3 inset-x-0 z-50 hero-nav-animate">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="px-4 sm:px-6 py-3.5 flex items-center justify-between bg-white/90 backdrop-blur-md rounded-[12px] border border-line relative">
                {{-- Logo / Merknaam --}}
                <a href="/" class="flex items-center gap-3 group">
                    <img src="logo.png" alt="De Muurprint Studio" class="max-h-10">
                </a>

                {{-- Desktop navigatie --}}
                <div class="hidden lg:flex items-center gap-6 text-sm font-medium">
                    {{-- Diensten mega menu --}}
                    <div class="nav-item">
                        <button class="text-soft hover:text-ink transition-colors flex items-center gap-1 py-2">
                            Diensten
                            <svg class="w-3.5 h-3.5 nav-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                        </button>
                        <div class="nav-dropdown absolute left-0 right-0 top-full pt-3 z-50">
                            <div class="bg-white rounded-xl border border-line shadow-md p-4">
                                <div class="grid grid-cols-3 gap-1">
                                    <a href="#diensten" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-canvas transition-colors">
                                        <svg class="w-5 h-5 text-ink mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                                        <div>
                                            <span class="font-medium text-ink text-sm">Particulier interieur</span>
                                            <span class="block text-xs text-muted mt-0.5">Woonkamer, slaapkamer & meer</span>
                                        </div>
                                    </a>
                                    <a href="#diensten" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-canvas transition-colors">
                                        <svg class="w-5 h-5 text-cyan mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.15c0 .415.336.75.75.75z"/></svg>
                                        <div>
                                            <span class="font-medium text-ink text-sm">Zakelijk & retail</span>
                                            <span class="block text-xs text-muted mt-0.5">Winkels, horeca & kantoren</span>
                                        </div>
                                    </a>
                                    <a href="#diensten" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-canvas transition-colors">
                                        <svg class="w-5 h-5 text-yellow mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/></svg>
                                        <div>
                                            <span class="font-medium text-ink text-sm">Buitenmuren & gevels</span>
                                            <span class="block text-xs text-muted mt-0.5">UV-bestendig, weerbestendig</span>
                                        </div>
                                    </a>
                                    <a href="#diensten" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-canvas transition-colors">
                                        <svg class="w-5 h-5 text-bronze mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/></svg>
                                        <div>
                                            <span class="font-medium text-ink text-sm">Muurschilderingen</span>
                                            <span class="block text-xs text-muted mt-0.5">Kunst & creatieve ontwerpen</span>
                                        </div>
                                    </a>
                                    <a href="#diensten" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-canvas transition-colors">
                                        <svg class="w-5 h-5 text-soft mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0"/></svg>
                                        <div>
                                            <span class="font-medium text-ink text-sm">Kantoorinrichting</span>
                                            <span class="block text-xs text-muted mt-0.5">Branding & sfeer op de werkvloer</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Informatie dropdown --}}
                    <div class="nav-item">
                        <button class="text-soft hover:text-ink transition-colors flex items-center gap-1 py-2">
                            Informatie
                            <svg class="w-3.5 h-3.5 nav-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                        </button>
                        <div class="nav-dropdown absolute left-0 right-0 top-full pt-3 z-50">
                            <div class="bg-white rounded-xl border border-line shadow-md p-4">
                                <div class="grid grid-cols-5 gap-1">
                                    <a href="#werkwijze" class="block px-4 py-2.5 rounded-lg hover:bg-canvas transition-colors text-ink">Werkwijze</a>
                                    <a href="#waarom" class="block px-4 py-2.5 rounded-lg hover:bg-canvas transition-colors text-ink">Waarom muurprint</a>
                                    <a href="#faq" class="block px-4 py-2.5 rounded-lg hover:bg-canvas transition-colors text-ink">Veelgestelde vragen</a>
                                    <a href="#" class="block px-4 py-2.5 rounded-lg hover:bg-canvas transition-colors text-ink">Over ons</a>
                                    <a href="#" class="block px-4 py-2.5 rounded-lg hover:bg-canvas transition-colors text-ink">Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#contact" class="text-soft hover:text-ink transition-colors py-2">Contact</a>

                    {{-- Divider --}}
                    <div class="w-px h-5 bg-line"></div>

                    {{-- Social media --}}
                    <div class="flex items-center gap-1">
                        <a href="#" class="p-1.5 text-muted hover:text-ink transition-colors" aria-label="Instagram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" class="p-1.5 text-muted hover:text-ink transition-colors" aria-label="Facebook">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="p-1.5 text-muted hover:text-ink transition-colors" aria-label="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="p-1.5 text-muted hover:text-ink transition-colors" aria-label="YouTube">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>

                    {{-- CTA --}}
                    <a href="#contact" class="inline-flex items-center px-5 py-2 bg-bronze text-white text-sm font-semibold rounded-lg hover:bg-bronze/90 transition-colors">
                        Offerte aanvragen
                    </a>
                </div>

                {{-- Mobile menu toggle --}}
                <button id="mobile-menu-btn" class="lg:hidden p-2 -mr-2 text-ink" aria-label="Menu openen">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

    </nav>

    {{-- ============================================================ --}}
    {{-- FULLSCREEN MOBILE MENU --}}
    {{-- ============================================================ --}}
    <div id="mobile-menu" class="fixed inset-0 z-[60] lg:hidden">
        {{-- Backdrop --}}
        <div class="mobile-menu-backdrop absolute inset-0 bg-ink/60"></div>

        {{-- Panel --}}
        <div class="mobile-menu-panel absolute inset-0 bg-white flex flex-col">
            {{-- Header: logo + close --}}
            <div class="flex items-center justify-between px-6 py-5">
                <a href="/" class="flex items-center gap-3">
                    <img src="logo.png" alt="De Muurprint Studio" class="max-h-10">
                </a>
                <button id="mobile-menu-close" class="p-2 -mr-2 text-ink" aria-label="Menu sluiten">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Nav links --}}
            <div class="flex-1 overflow-y-auto px-6 pb-6">
                {{-- Diensten groep --}}
                <p class="text-xs font-mono font-medium text-muted uppercase tracking-wider pt-4 pb-2">Diensten</p>
                <a href="#diensten" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Particulier interieur</a>
                <a href="#diensten" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Zakelijk & retail</a>
                <a href="#diensten" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Buitenmuren & gevels</a>
                <a href="#diensten" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Muurschilderingen</a>
                <a href="#diensten" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Kantoorinrichting</a>

                {{-- Informatie groep --}}
                <p class="text-xs font-mono font-medium text-muted uppercase tracking-wider pt-6 pb-2">Informatie</p>
                <a href="#werkwijze" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Werkwijze</a>
                <a href="#waarom" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Waarom muurprint</a>
                <a href="#faq" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Veelgestelde vragen</a>
                <a href="#" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Over ons</a>
                <a href="#" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Portfolio</a>

                {{-- Contact --}}
                <p class="text-xs font-mono font-medium text-muted uppercase tracking-wider pt-6 pb-2">Contact</p>
                <a href="#contact" class="block py-3 text-lg text-ink font-medium border-b border-line/50">Neem contact op</a>
            </div>

            {{-- Footer: socials + CTA --}}
            <div class="px-6 py-5 border-t border-line">
                <a href="#contact" class="flex items-center justify-center w-full px-6 py-3.5 bg-bronze text-white text-sm font-semibold rounded-xl hover:bg-bronze/90 transition-colors">
                    Offerte aanvragen
                </a>
                <div class="flex items-center justify-center gap-5 mt-4">
                    <a href="#" class="text-muted hover:text-ink transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class="text-muted hover:text-ink transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-muted hover:text-ink transition-colors" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="#" class="text-muted hover:text-ink transition-colors" aria-label="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- HERO --}}
    {{-- ============================================================ --}}
    <section class="min-h-screen bg-white relative overflow-hidden flex items-center pt-24 pb-12 md:pt-0 md:pb-0">
        {{-- Achtergrond: dikke curved lijnen (los, zodat je ze apart kan roteren/verplaatsen) --}}
        <svg class="absolute top-0 left-0 w-full h-full pointer-events-none rotate-[45deg]" viewBox="0 0 1440 900" fill="none" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <path class="hero-stroke hero-stroke-delay-1" d="M-100 200 C200 100, 400 400, 700 250 S1100 500, 1500 300" stroke="#0B96C9" stroke-width="120" stroke-linecap="round" opacity="0.07"/>
        </svg>
        <svg class="absolute top-0 -left-[60%] w-full h-full pointer-events-none rotate-[300deg]" viewBox="0 0 1440 900" fill="none" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <path class="hero-stroke hero-stroke-delay-2" d="M-200 500 C100 650, 500 300, 800 550 S1200 200, 1600 450" stroke="#DD046C" stroke-width="100" stroke-linecap="round" opacity="0.07"/>
        </svg>
        <svg class="absolute top-0 left-0 w-full h-full pointer-events-none rotate-[-25deg]" viewBox="0 0 1440 900" fill="none" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <path class="hero-stroke hero-stroke-delay-3" d="M-50 750 C300 600, 600 850, 900 650 S1300 800, 1550 600" stroke="#F9C636" stroke-width="90" stroke-linecap="round" opacity="0.07"/>
        </svg>
        <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 relative">
            <div class="flex flex-col items-center justify-center">
                <div class="hero-animate hero-delay-1">
                    <h1 class="font-display font-bold text-center text-3xl sm:text-4xl md:text-5xl lg:text-[3.5rem] tracking-tight">
                        Foto's, logo's en designs <br class="hidden md:block"><span class="text-bronze">direct op uw muur geprint</span>
                    </h1>
                </div>
                <p class="mt-4 sm:mt-5 text-soft text-base sm:text-lg leading-relaxed max-w-xl text-center hero-animate hero-delay-2">
                    Met onze UV-LED printrobot printen wij uw beeld rechtstreeks op de muur, binnen of buiten. Zonder behang, zonder naden. In één dag klaar.
                </p>
            </div>
            <div class="w-full grid grid-cols-2 md:grid-cols-5 gap-3 sm:gap-6 mt-8 sm:mt-10 hero-animate hero-delay-3">
                <div class="col-span-2 md:col-span-3 h-40 sm:h-56 rounded-2xl overflow-hidden"><img src="{{ asset('scenarios/5.png') }}" alt="3D muurprint in woonkamer" class="w-full h-full object-cover"></div>
                <div class="col-span-2 md:col-span-2 h-40 sm:h-56 rounded-2xl overflow-hidden"><img src="{{ asset('scenarios/22.png') }}" alt="Adelaar muurprint" class="w-full h-full object-cover"></div>
                <div class="col-span-1 md:col-span-2 h-40 sm:h-56 rounded-2xl overflow-hidden"><img src="{{ asset('scenarios/8.png') }}" alt="Walvis muurprint" class="w-full h-full object-cover"></div>
                <div class="col-span-1 md:col-span-3 h-40 sm:h-56 rounded-2xl overflow-hidden"><img src="{{ asset('scenarios/15.png') }}" alt="Viking schip muurprint" class="w-full h-full object-cover"></div>
            </div>
            <div class="flex gap-0 h-0.5 my-6 sm:my-8 rounded-full overflow-hidden hero-animate hero-delay-4" aria-hidden="true">
                <div class="flex-1 bg-cyan/40"></div>
                <div class="flex-1 bg-magenta/40"></div>
                <div class="flex-1 bg-yellow/40"></div>
                <div class="flex-1 bg-ink/20"></div>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mt-4 sm:mt-6 hero-animate hero-delay-5">
                <a href="#contact" class="inline-flex items-center justify-center px-7 py-3.5 sm:py-4 bg-bronze text-white font-semibold rounded-full hover:bg-bronze/90 transition-colors text-sm flex-1 sm:flex-none">
                    Vraag een offerte aan
                </a>
                <a href="#werkwijze" class="inline-flex items-center justify-center px-7 py-3.5 sm:py-4 bg-canvas border border-line text-ink font-semibold rounded-full hover:border-muted transition-colors text-sm flex-1 sm:flex-none">
                    Bekijk onze werkwijze
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- DIENSTEN --}}
    {{-- ============================================================ --}}
    <section id="diensten" class="py-16 md:py-28 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            {{-- Header --}}
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 mb-10 md:mb-14">
                <div>
                    <p class="text-sm font-mono font-medium text-bronze uppercase tracking-wider mb-3">Onze diensten</p>
                    <h2 class="font-display font-bold text-2xl sm:text-3xl md:text-4xl tracking-tight">Wat we voor u kunnen doen</h2>
                </div>
                <p class="text-soft text-base sm:text-lg leading-relaxed max-w-md lg:text-right">Van woonkamer tot bedrijfspand — wij printen op elke muur, binnen of buiten.</p>
            </div>

            {{-- Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Particulier interieur --}}
                <div class="group bg-white rounded-2xl border border-line hover:border-bronze/30 hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col">
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="{{ asset('scenarios/5.png') }}" alt="Muurprint in woonkamer" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="font-display font-semibold text-lg mb-2">Particulier interieur</h3>
                        <p class="text-soft text-sm leading-relaxed flex-1">Geef uw woonkamer, slaapkamer of kinderkamer een unieke uitstraling met een gepersonaliseerde muurprint.</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-bronze hover:text-bronze/80 transition-colors mt-4">
                            Meer info
                            <svg class="ml-1.5 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Zakelijk & retail --}}
                <div class="group bg-white rounded-2xl border border-line hover:border-bronze/30 hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col">
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="{{ asset('scenarios/3.png') }}" alt="Muurprint in winkel" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="font-display font-semibold text-lg mb-2">Zakelijk & retail</h3>
                        <p class="text-soft text-sm leading-relaxed flex-1">Versterk uw merkbeleving in winkels, restaurants of kantoren met opvallende muurdecoraties.</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-bronze hover:text-bronze/80 transition-colors mt-4">
                            Meer info
                            <svg class="ml-1.5 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Buitenmuren & gevels --}}
                <div class="group bg-white rounded-2xl border border-line hover:border-bronze/30 hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col">
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="{{ asset('scenarios/12.png') }}" alt="Buitenmuur print" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="font-display font-semibold text-lg mb-2">Buitenmuren & gevels</h3>
                        <p class="text-soft text-sm leading-relaxed flex-1">UV-bestendige prints die weer en wind doorstaan. Ideaal voor gevels, tuinmuren en buitenreclame.</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-bronze hover:text-bronze/80 transition-colors mt-4">
                            Meer info
                            <svg class="ml-1.5 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Muurschilderingen --}}
                <div class="group bg-white rounded-2xl border border-line hover:border-bronze/30 hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col">
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="{{ asset('scenarios/8.png') }}" alt="Artistieke muurschildering" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="font-display font-semibold text-lg mb-2">Muurschilderingen</h3>
                        <p class="text-soft text-sm leading-relaxed flex-1">Van kunstwerk tot illustratie — wij brengen elk ontwerp met fotorealistische kwaliteit op uw muur.</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-bronze hover:text-bronze/80 transition-colors mt-4">
                            Meer info
                            <svg class="ml-1.5 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Kantoorinrichting --}}
                <div class="group bg-white rounded-2xl border border-line hover:border-bronze/30 hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col">
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="{{ asset('scenarios/6.png') }}" alt="Kantoor muurprint" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="font-display font-semibold text-lg mb-2">Kantoorinrichting</h3>
                        <p class="text-soft text-sm leading-relaxed flex-1">Breng uw bedrijfsidentiteit tot leven op de werkvloer met logo's, visuals en sfeerbeelden.</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-bronze hover:text-bronze/80 transition-colors mt-4">
                            Meer info
                            <svg class="ml-1.5 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Iets anders --}}
                <div class="group bg-white rounded-2xl border border-line hover:border-bronze/30 hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col items-center justify-center text-center p-10">
                    <div class="w-14 h-14 rounded-2xl bg-bronze/10 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-bronze" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                    </div>
                    <h3 class="font-display font-semibold text-lg mb-2">Iets anders?</h3>
                    <p class="text-soft text-sm leading-relaxed mb-5">Heeft u een uniek project in gedachten? Neem contact op en we denken graag mee.</p>
                    <a href="#contact" class="inline-flex items-center justify-center px-5 py-2.5 bg-bronze text-white text-sm font-semibold rounded-full hover:bg-bronze/90 transition-colors">
                        Neem contact op
                    </a>
                </div>
            </div>

            {{-- CTA's --}}
            <div class="flex flex-col sm:flex-row gap-4 mt-14">
                <a href="#contact" class="inline-flex items-center justify-center px-7 py-3.5 bg-bronze text-white font-semibold rounded-full hover:bg-bronze/90 transition-colors text-sm">
                    <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                    Offerte aanvragen
                </a>
                <a href="tel:+31685546200" class="inline-flex items-center justify-center px-7 py-3.5 bg-white border border-line text-ink font-semibold rounded-full hover:border-muted transition-colors text-sm">
                    <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                    Bel ons direct
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- WERKWIJZE --}}
    {{-- ============================================================ --}}
    <section id="werkwijze" class="py-16 md:py-28 bg-canvas">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            {{-- Header --}}
            <div class="text-center max-w-2xl mx-auto mb-10 md:mb-16">
                <p class="text-sm font-mono font-medium text-bronze uppercase tracking-wider mb-3">Werkwijze</p>
                <h2 class="font-display font-bold text-2xl sm:text-3xl md:text-4xl tracking-tight">Van idee tot muurprint in 4 stappen</h2>
                <p class="mt-4 text-soft text-base sm:text-lg leading-relaxed">Een helder en persoonlijk proces — zodat u precies weet wat u kunt verwachten.</p>
            </div>

            {{-- Steps --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="relative">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-10 h-10 rounded-full bg-ink text-white font-display font-bold text-sm flex items-center justify-center shrink-0">01</span>
                        <div class="hidden lg:block flex-1 h-px bg-line"></div>
                    </div>
                    <h3 class="font-display font-semibold text-base mb-2">Kennismaking</h3>
                    <p class="text-soft text-sm leading-relaxed">U neemt contact op met uw idee. We bespreken de mogelijkheden, het formaat en de locatie.</p>
                </div>

                <div class="relative">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-10 h-10 rounded-full bg-ink text-white font-display font-bold text-sm flex items-center justify-center shrink-0">02</span>
                        <div class="hidden lg:block flex-1 h-px bg-line"></div>
                    </div>
                    <h3 class="font-display font-semibold text-base mb-2">Ontwerp & offerte</h3>
                    <p class="text-soft text-sm leading-relaxed">We maken een visualisatie van het eindresultaat en sturen u een vrijblijvende offerte.</p>
                </div>

                <div class="relative">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-10 h-10 rounded-full bg-ink text-white font-display font-bold text-sm flex items-center justify-center shrink-0">03</span>
                        <div class="hidden lg:block flex-1 h-px bg-line"></div>
                    </div>
                    <h3 class="font-display font-semibold text-base mb-2">Printen op locatie</h3>
                    <p class="text-soft text-sm leading-relaxed">Onze printrobot komt bij u langs en print het beeld direct op de muur. Meestal in één dag klaar.</p>
                </div>

                <div class="relative">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-10 h-10 rounded-full bg-bronze text-white font-display font-bold text-sm flex items-center justify-center shrink-0">04</span>
                    </div>
                    <h3 class="font-display font-semibold text-base mb-2">Genieten</h3>
                    <p class="text-soft text-sm leading-relaxed">Uw muur is klaar. De inkt is direct uitgehard en u kunt meteen genieten van het resultaat.</p>
                </div>
            </div>

            {{-- CTA's --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-14">
                <a href="#contact" class="inline-flex items-center justify-center px-7 py-3.5 bg-bronze text-white font-semibold rounded-full hover:bg-bronze/90 transition-colors text-sm">
                    <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
                    Start uw project
                </a>
                <a href="#diensten" class="inline-flex items-center justify-center px-7 py-3.5 bg-white border border-line text-ink font-semibold rounded-full hover:border-muted transition-colors text-sm">
                    <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/></svg>
                    Bekijk onze diensten
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- WAAROM MUURPRINT --}}
    {{-- ============================================================ --}}
    <section id="waarom" class="py-16 md:py-28 bg-ink text-white relative overflow-hidden">
        {{-- Achtergrond decoratie --}}
        <svg class="absolute top-0 left-0 w-full h-full pointer-events-none" viewBox="0 0 1440 600" fill="none" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <path d="M-100 150 C300 80, 600 250, 900 150 S1300 300, 1600 100" stroke="#D4B379" stroke-width="1.5" opacity="0.06"/>
            <path d="M-50 400 C350 500, 700 350, 1050 450 S1350 300, 1550 420" stroke="#0B96C9" stroke-width="1" opacity="0.05"/>
        </svg>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                {{-- Linkerkolom: tekst --}}
                <div>
                    <p class="text-sm font-mono font-medium text-bronze uppercase tracking-wider mb-3">Waarom muurprint</p>
                    <h2 class="font-display font-bold text-2xl sm:text-3xl md:text-4xl tracking-tight">Geen behang. Geen naden. Geen compromis.</h2>
                    <p class="mt-4 text-white/60 text-base sm:text-lg leading-relaxed">UV-LED muurprint biedt voordelen die geen enkel alternatief kan evenaren.</p>

                    <div class="mt-10 space-y-6">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/8 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-bronze" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-display font-semibold text-sm mb-1">Naadloos resultaat</h4>
                                <p class="text-white/50 text-sm leading-relaxed">Direct op de muur geprint — geen randen, geen luchtbellen, geen verkleuringen bij naden.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/8 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-display font-semibold text-sm mb-1">UV-bestendig & duurzaam</h4>
                                <p class="text-white/50 text-sm leading-relaxed">Inkt wordt direct uitgehard door UV-licht. Het resultaat is krasbestendig, waterbestendig en kleurvast.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/8 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-display font-semibold text-sm mb-1">Snel & schoon</h4>
                                <p class="text-white/50 text-sm leading-relaxed">De meeste projecten zijn binnen een dag afgerond. Geen rommel, geen droogtijd, direct klaar.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/8 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v14.25c0 .828.672 1.5 1.5 1.5z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-display font-semibold text-sm mb-1">Elk beeld mogelijk</h4>
                                <p class="text-white/50 text-sm leading-relaxed">Foto's, logo's, patronen, illustraties — alles in fotorealistische kwaliteit tot 1440 dpi.</p>
                            </div>
                        </div>
                    </div>

                    {{-- CTA's --}}
                    <div class="flex flex-col sm:flex-row gap-4 mt-10">
                        <a href="#contact" class="inline-flex items-center justify-center px-7 py-3.5 bg-bronze text-white font-semibold rounded-full hover:bg-bronze/90 transition-colors text-sm">
                            <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            Gratis offerte aanvragen
                        </a>
                        <a href="#portfolio" class="inline-flex items-center justify-center px-7 py-3.5 bg-white/10 text-white font-semibold rounded-full hover:bg-white/15 transition-colors text-sm border border-white/10">
                            <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v14.25c0 .828.672 1.5 1.5 1.5z"/></svg>
                            Bekijk resultaten
                        </a>
                    </div>
                </div>

                {{-- Rechterkolom: beeld --}}
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden">
                        <img src="{{ asset('scenarios/22.png') }}" alt="Muurprint resultaat — scherpe details op de muur" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                    {{-- Stats overlay --}}
                    <div class="absolute -bottom-4 left-4 sm:-bottom-6 sm:-left-6 bg-white rounded-xl sm:rounded-2xl p-3 sm:p-5 shadow-lg border border-line">
                        <div class="flex items-center gap-3 sm:gap-6">
                            <div class="text-center">
                                <p class="font-display font-bold text-lg sm:text-2xl text-ink">1440</p>
                                <p class="text-muted text-[10px] sm:text-xs mt-0.5">dpi resolutie</p>
                            </div>
                            <div class="w-px h-10 bg-line"></div>
                            <div class="text-center">
                                <p class="font-display font-bold text-lg sm:text-2xl text-ink">1 dag</p>
                                <p class="text-muted text-[10px] sm:text-xs mt-0.5">doorlooptijd</p>
                            </div>
                            <div class="w-px h-10 bg-line"></div>
                            <div class="text-center">
                                <p class="font-display font-bold text-lg sm:text-2xl text-ink">10+ jr</p>
                                <p class="text-muted text-[10px] sm:text-xs mt-0.5">kleurvast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- PORTFOLIO / RESULTATEN --}}
    {{-- ============================================================ --}}
    <section id="portfolio" class="py-16 md:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            {{-- Header --}}
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 mb-10 md:mb-14">
                <div>
                    <p class="text-sm font-mono font-medium text-bronze uppercase tracking-wider mb-3">Resultaten</p>
                    <h2 class="font-display font-bold text-2xl sm:text-3xl md:text-4xl tracking-tight">Recente projecten</h2>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="inline-flex items-center justify-center px-7 py-3.5 bg-bronze text-white font-semibold rounded-full hover:bg-bronze/90 transition-colors text-sm">
                        <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                        Uw project bespreken
                    </a>
                    <a href="#werkwijze" class="inline-flex items-center justify-center px-7 py-3.5 bg-canvas border border-line text-ink font-semibold rounded-full hover:border-muted transition-colors text-sm">
                        <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                        Hoe werkt het?
                    </a>
                </div>
            </div>

            {{-- Masonry-achtige grid --}}
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
                <div class="rounded-xl sm:rounded-2xl overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('scenarios/5.png') }}" alt="3D muurprint in woonkamer" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="rounded-xl sm:rounded-2xl overflow-hidden aspect-[4/3] lg:aspect-auto lg:row-span-2">
                    <img src="{{ asset('scenarios/15.png') }}" alt="Viking schip muurprint" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="rounded-xl sm:rounded-2xl overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('scenarios/8.png') }}" alt="Walvis muurprint" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="rounded-xl sm:rounded-2xl overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('scenarios/22.png') }}" alt="Adelaar muurprint" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="rounded-xl sm:rounded-2xl overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('scenarios/10.png') }}" alt="Printrobot in actie" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- CTA / CONTACT --}}
    {{-- ============================================================ --}}
    <section id="contact" class="py-16 md:py-28 bg-canvas">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="bg-ink rounded-2xl sm:rounded-3xl p-6 sm:p-10 md:p-16 relative overflow-hidden">
                {{-- Achtergrond decoratie --}}
                <svg class="absolute top-0 right-0 w-[500px] h-[500px] pointer-events-none" viewBox="0 0 500 500" fill="none" aria-hidden="true">
                    <circle cx="400" cy="100" r="200" stroke="#D4B379" stroke-width="1" opacity="0.08"/>
                    <circle cx="400" cy="100" r="280" stroke="#0B96C9" stroke-width="0.5" opacity="0.05" stroke-dasharray="6 10"/>
                </svg>

                <div class="grid lg:grid-cols-2 gap-12 items-center relative">
                    {{-- Linker tekst --}}
                    <div>
                        <p class="text-sm font-mono font-medium text-bronze uppercase tracking-wider mb-3">Neem contact op</p>
                        <h2 class="font-display font-bold text-2xl sm:text-3xl md:text-4xl tracking-tight text-white">Klaar om uw muur te transformeren?</h2>
                        <p class="mt-4 text-white/50 text-base sm:text-lg leading-relaxed">Vertel ons over uw project en ontvang binnen 24 uur een vrijblijvende offerte. We denken graag mee over de mogelijkheden.</p>

                        <div class="flex flex-col sm:flex-row gap-4 mt-8">
                            <a href="mailto:info@msmuurprint.nl" class="inline-flex items-center justify-center px-6 py-3.5 bg-bronze text-white font-semibold rounded-full hover:bg-bronze/90 transition-colors text-sm">
                                <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                                Stuur een bericht
                            </a>
                            <a href="tel:+31685546200" class="inline-flex items-center justify-center px-6 py-3.5 bg-white/10 text-white font-semibold rounded-full hover:bg-white/15 transition-colors text-sm border border-white/10">
                                <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                                +31 6 85546200
                            </a>
                        </div>
                    </div>

                    {{-- Rechter contactinfo --}}
                    <div class="space-y-4">
                        <div class="bg-white/5 rounded-2xl p-5 border border-white/8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-white/8 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-bronze" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white text-sm font-semibold">Locatie</p>
                                    <p class="text-white/50 text-sm">Regio Zuid-Holland, Nederland</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/5 rounded-2xl p-5 border border-white/8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-white/8 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white text-sm font-semibold">Bereikbaar</p>
                                    <p class="text-white/50 text-sm">Ma – Vr: 08:00 – 18:00</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/5 rounded-2xl p-5 border border-white/8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-white/8 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white text-sm font-semibold">Reactietijd</p>
                                    <p class="text-white/50 text-sm">Binnen 24 uur een reactie</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- FAQ --}}
    {{-- ============================================================ --}}
    <section class="py-16 md:py-28 relative overflow-hidden">
        {{-- Achtergrond decoratie --}}
        <svg class="absolute -top-32 -right-48 w-[900px] h-[900px] pointer-events-none" viewBox="0 0 900 900" fill="none" aria-hidden="true">
            <circle cx="450" cy="450" r="200" stroke="#0B96C9" stroke-width="2" opacity="0.08"/>
            <circle cx="450" cy="450" r="280" stroke="#DD046C" stroke-width="2" opacity="0.07"/>
            <circle cx="450" cy="450" r="360" stroke="#F9C636" stroke-width="2" opacity="0.09"/>
            <circle cx="450" cy="450" r="130" stroke="#27282A" stroke-width="1.5" opacity="0.06"/>
            <circle cx="450" cy="450" r="440" stroke="#0B96C9" stroke-width="1" stroke-dasharray="10 14" opacity="0.06"/>
        </svg>
        <svg class="absolute -bottom-40 -left-40 w-[700px] h-[700px] pointer-events-none" viewBox="0 0 700 700" fill="none" aria-hidden="true">
            <circle cx="350" cy="350" r="160" stroke="#F9C636" stroke-width="2" opacity="0.09"/>
            <circle cx="350" cy="350" r="240" stroke="#DD046C" stroke-width="1.5" opacity="0.07"/>
            <circle cx="350" cy="350" r="320" stroke="#27282A" stroke-width="1" stroke-dasharray="8 12" opacity="0.05"/>
        </svg>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                {{-- Linkerkolom: titel, beschrijving & vragen --}}
                <div>
                    <p class="text-sm font-mono font-medium text-bronze uppercase tracking-wider mb-3">Veelgestelde vragen</p>
                    <h2 class="font-display font-bold text-2xl sm:text-3xl md:text-4xl tracking-tight">
                        Wat u wilt weten
                    </h2>
                    <p class="mt-4 text-soft text-base sm:text-lg leading-relaxed max-w-xl">
                        Hieronder vindt u antwoorden op de meest gestelde vragen over ons printproces, de techniek en wat u kunt verwachten. Staat uw vraag er niet bij? Neem gerust contact met ons op.
                    </p>

                    <div class="mt-10 space-y-4">
                        <details class="group bg-white rounded-[12px] border border-line transition-shadow duration-300">
                            <summary class="flex items-center justify-between px-4 sm:px-6 py-4 sm:py-5 cursor-pointer font-display font-medium text-sm sm:text-base select-none">
                                Op welke oppervlakken kan er geprint worden?
                                <svg class="w-5 h-5 text-muted shrink-0 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                            </summary>
                            <div class="faq-content">
                                <div>
                                    <div class="px-4 sm:px-6 pb-4 sm:pb-5 text-soft text-sm sm:text-base leading-relaxed">
                                        Onze printrobot kan printen op vlakke en licht gestructureerde oppervlakken zoals glad stucwerk, beton, hout, glas en kunststof. We adviseren u graag over de mogelijkheden voor uw specifieke muur.
                                    </div>
                                </div>
                            </div>
                        </details>

                        <details class="group bg-white rounded-[12px] border border-line transition-shadow duration-300">
                            <summary class="flex items-center justify-between px-4 sm:px-6 py-4 sm:py-5 cursor-pointer font-display font-medium text-sm sm:text-base select-none">
                                Hoe lang blijft de print mooi?
                                <svg class="w-5 h-5 text-muted shrink-0 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                            </summary>
                            <div class="faq-content">
                                <div>
                                    <div class="px-4 sm:px-6 pb-4 sm:pb-5 text-soft text-sm sm:text-base leading-relaxed">
                                        Door het gebruik van UV-bestendige inkt die direct wordt uitgehard, blijft uw print jarenlang levendig en scherp. Zowel binnen als buiten behoudt de afbeelding zijn kwaliteit.
                                    </div>
                                </div>
                            </div>
                        </details>

                        <details class="group bg-white rounded-[12px] border border-line transition-shadow duration-300">
                            <summary class="flex items-center justify-between px-4 sm:px-6 py-4 sm:py-5 cursor-pointer font-display font-medium text-sm sm:text-base select-none">
                                Welke bestandseisen gelden er?
                                <svg class="w-5 h-5 text-muted shrink-0 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                            </summary>
                            <div class="faq-content">
                                <div>
                                    <div class="px-4 sm:px-6 pb-4 sm:pb-5 text-soft text-sm sm:text-base leading-relaxed">
                                        Wij vragen een minimale resolutie van <span class="font-mono text-ink">300 dpi</span> op het werkelijke printformaat. Wij controleren uw bestand altijd technisch voordat we printen, zodat u zeker weet dat het resultaat scherp en levendig wordt.
                                    </div>
                                </div>
                            </div>
                        </details>

                        <details class="group bg-white rounded-[12px] border border-line transition-shadow duration-300">
                            <summary class="flex items-center justify-between px-4 sm:px-6 py-4 sm:py-5 cursor-pointer font-display font-medium text-sm sm:text-base select-none">
                                Hoeveel ruimte heeft de printer nodig?
                                <svg class="w-5 h-5 text-muted shrink-0 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                            </summary>
                            <div class="faq-content">
                                <div>
                                    <div class="px-4 sm:px-6 pb-4 sm:pb-5 text-soft text-sm sm:text-base leading-relaxed">
                                        De printer heeft ongeveer <span class="font-mono text-ink">1,5 tot 2 meter</span> vrije ruimte voor de muur nodig. Dit bespreken wij altijd vooraf bij het locatiebezoek, zodat u nooit voor verrassingen komt te staan.
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>

                    {{-- CTA's onder de FAQ --}}
                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 bg-bronze text-white font-semibold rounded-full hover:bg-bronze/90 transition-colors text-sm">
                            <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            Stel uw vraag
                        </a>
                        <a href="tel:+31600000000" class="inline-flex items-center justify-center px-6 py-3 bg-white border border-line text-ink font-semibold rounded-full hover:border-muted transition-colors text-sm">
                            <svg class="mr-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                            Bel ons direct
                        </a>
                    </div>
                </div>

                {{-- Rechterkolom: foto --}}
                <div class="relative hidden lg:block lg:sticky lg:top-24">
                    <div class="rounded-2xl overflow-hidden shadow-md border border-line">
                        <img src="{{ asset('scenarios/10.png') }}" alt="Printrobot in actie — naadloze muurprint in een woonkamer" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- FOOTER --}}
    {{-- ============================================================ --}}
    <footer class="bg-ink text-white relative overflow-hidden">
        {{-- Decoratieve achtergrondlijnen --}}
        <svg class="absolute top-0 left-0 w-full h-full pointer-events-none" viewBox="0 0 1440 800" fill="none" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <path d="M-100 80 C300 30, 500 180, 800 100 S1200 230, 1600 60" stroke="#0B96C9" stroke-width="1" opacity="0.08"/>
            <path d="M-50 300 C250 400, 600 250, 900 350 S1300 230, 1550 370" stroke="#DD046C" stroke-width="1" opacity="0.06"/>
            <path d="M0 550 C400 500, 700 600, 1100 530 S1400 570, 1500 510" stroke="#F9C636" stroke-width="0.8" opacity="0.07"/>
            <path d="M-200 700 C200 650, 600 750, 1000 680 S1300 720, 1600 660" stroke="#0B96C9" stroke-width="0.6" opacity="0.05" stroke-dasharray="8 12"/>
        </svg>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">

            {{-- Nieuwsbrief balk --}}
            <div class="py-10 flex flex-col lg:flex-row items-center justify-between gap-6 border-b border-white/10">
                <div class="text-center lg:text-left">
                    <h3 class="font-display font-bold text-xl tracking-tight">Blijf op de hoogte</h3>
                    <p class="text-white/50 text-sm mt-1">Ontvang inspiratie, projecten en tips in uw inbox. Geen spam, beloofd.</p>
                </div>
                <form class="flex w-full lg:w-auto gap-2">
                    <input type="email" placeholder="Uw e-mailadres" class="flex-1 lg:w-72 px-5 py-3 bg-white/8 rounded-full text-sm text-white placeholder:text-white/40 border border-white/10 outline-none focus:border-white/25 focus:bg-white/10 transition-colors">
                    <button type="submit" class="px-6 py-3 bg-bronze text-white text-sm font-semibold rounded-full hover:bg-bronze/90 transition-colors shrink-0">
                        Aanmelden
                    </button>
                </form>
            </div>

            {{-- Hoofdgedeelte --}}
            <div class="pt-12 pb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">
                {{-- Kolom 1: Merk + beschrijving --}}
                <div class="lg:col-span-4">
                    <a href="/" class="inline-block mb-5">
                        <img src="logo.png" alt="MS Muurprint Studio" class="max-h-10 brightness-0 invert">
                    </a>
                    <p class="text-white/50 text-sm leading-relaxed max-w-xs">
                        Wij printen foto's, logo's en designs direct op uw muur met UV-LED technologie. Geen behang, geen naden — jarenlang scherp.
                    </p>
                    {{-- Social media --}}
                    <div class="flex items-center gap-2.5 mt-6">
                        <a href="#" class="w-9 h-9 rounded-full bg-white/8 flex items-center justify-center text-white/50 hover:bg-white/15 hover:text-white transition-colors" aria-label="Instagram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/8 flex items-center justify-center text-white/50 hover:bg-white/15 hover:text-white transition-colors" aria-label="Facebook">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/8 flex items-center justify-center text-white/50 hover:bg-white/15 hover:text-white transition-colors" aria-label="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/8 flex items-center justify-center text-white/50 hover:bg-white/15 hover:text-white transition-colors" aria-label="YouTube">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-white/8 flex items-center justify-center text-white/50 hover:bg-white/15 hover:text-white transition-colors" aria-label="TikTok">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Kolom 2: Diensten --}}
                <div class="lg:col-span-2">
                    <h4 class="font-display font-semibold text-sm mb-5">Diensten</h4>
                    <ul class="space-y-2.5">
                        <li><a href="#diensten" class="text-white/50 text-sm hover:text-white transition-colors">Particulier interieur</a></li>
                        <li><a href="#diensten" class="text-white/50 text-sm hover:text-white transition-colors">Zakelijk & retail</a></li>
                        <li><a href="#diensten" class="text-white/50 text-sm hover:text-white transition-colors">Buitenmuren & gevels</a></li>
                        <li><a href="#diensten" class="text-white/50 text-sm hover:text-white transition-colors">Muurschilderingen</a></li>
                        <li><a href="#diensten" class="text-white/50 text-sm hover:text-white transition-colors">Kantoorinrichting</a></li>
                    </ul>
                </div>

                {{-- Kolom 3: Informatie --}}
                <div class="lg:col-span-2">
                    <h4 class="font-display font-semibold text-sm mb-5">Informatie</h4>
                    <ul class="space-y-2.5">
                        <li><a href="#werkwijze" class="text-white/50 text-sm hover:text-white transition-colors">Werkwijze</a></li>
                        <li><a href="#waarom" class="text-white/50 text-sm hover:text-white transition-colors">Waarom muurprint</a></li>
                        <li><a href="#faq" class="text-white/50 text-sm hover:text-white transition-colors">Veelgestelde vragen</a></li>
                        <li><a href="#" class="text-white/50 text-sm hover:text-white transition-colors">Over ons</a></li>
                        <li><a href="#" class="text-white/50 text-sm hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="#" class="text-white/50 text-sm hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>

                {{-- Kolom 4: Contact --}}
                <div class="lg:col-span-4">
                    <h4 class="font-display font-semibold text-sm mb-5">Contact</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-white/30 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                            <span class="text-white/50 text-sm">Regio Zuid-Holland, Nederland</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-white/30 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                            <a href="tel:+31685546200" class="text-white/50 text-sm hover:text-white transition-colors">+31 6 85546200</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-white/30 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            <a href="mailto:info@msmuurprint.nl" class="text-white/50 text-sm hover:text-white transition-colors">info@msmuurprint.nl</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-white/30 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="text-white/50 text-sm">Ma – Vr: 08:00 – 18:00</span>
                        </li>
                    </ul>

                    {{-- CTA --}}
                    <a href="#contact" class="mt-6 inline-flex items-center px-5 py-2.5 bg-bronze text-white text-sm font-semibold rounded-full hover:bg-bronze/90 transition-colors">
                        Offerte aanvragen
                        <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Kenmerken balk --}}
            <div class="py-8 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
                    </div>
                    <div>
                        <p class="text-white text-xs font-semibold">UV-bestendig</p>
                        <p class="text-white/40 text-xs">Jarenlang kleurvast</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    </div>
                    <div>
                        <p class="text-white text-xs font-semibold">In 1 dag klaar</p>
                        <p class="text-white/40 text-xs">Snelle uitvoering</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"/></svg>
                    </div>
                    <div>
                        <p class="text-white text-xs font-semibold">Fotokwaliteit</p>
                        <p class="text-white/40 text-xs">Tot 1440 dpi resolutie</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-bronze" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                    </div>
                    <div>
                        <p class="text-white text-xs font-semibold">100% tevreden</p>
                        <p class="text-white/40 text-xs">Garantie op resultaat</p>
                    </div>
                </div>
            </div>

            {{-- CMYK lijn --}}
            <div class="flex gap-0 h-px rounded-full overflow-hidden" aria-hidden="true">
                <div class="flex-1 bg-cyan/40"></div>
                <div class="flex-1 bg-magenta/40"></div>
                <div class="flex-1 bg-yellow/40"></div>
                <div class="flex-1 bg-white/10"></div>
            </div>

            {{-- Onderste balk --}}
            <div class="py-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-white/25 text-xs">&copy; {{ date('Y') }} MS Muurprint Studio. Alle rechten voorbehouden.</p>
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-xs">
                    <a href="#" class="text-white/25 hover:text-white/50 transition-colors">Privacybeleid</a>
                    <a href="#" class="text-white/25 hover:text-white/50 transition-colors">Algemene voorwaarden</a>
                    <a href="#" class="text-white/25 hover:text-white/50 transition-colors">Cookiebeleid</a>
                    <a href="#" class="text-white/25 hover:text-white/50 transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>


    <script>
        // ── Fullscreen mobile menu ──
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuClose = document.getElementById('mobile-menu-close');
        const menuBackdrop = mobileMenu.querySelector('.mobile-menu-backdrop');

        function openMobileMenu() {
            mobileMenu.classList.add('is-open');
            document.body.style.overflow = 'hidden';
            menuBtn.setAttribute('aria-expanded', 'true');
        }

        function closeMobileMenu() {
            mobileMenu.classList.remove('is-open');
            document.body.style.overflow = '';
            menuBtn.setAttribute('aria-expanded', 'false');
        }

        menuBtn.addEventListener('click', openMobileMenu);
        menuClose.addEventListener('click', closeMobileMenu);
        menuBackdrop.addEventListener('click', closeMobileMenu);

        // Sluit mobiel menu bij klik op een link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // ── FAQ details: open- én sluit-animatie ──
        document.querySelectorAll('details').forEach(detail => {
            const content = detail.querySelector('.faq-content');
            if (!content) return;
            let isAnimating = false;

            detail.querySelector('summary').addEventListener('click', (e) => {
                e.preventDefault();
                if (isAnimating) return;

                if (detail.open) {
                    // Sluiten: animeer dicht, verwijder daarna open
                    isAnimating = true;
                    content.classList.remove('is-active');
                    detail.classList.remove('is-open');

                    content.addEventListener('transitionend', () => {
                        detail.removeAttribute('open');
                        isAnimating = false;
                    }, { once: true });
                } else {
                    // Openen: zet open (render bij 0fr), animeer dan naar 1fr
                    isAnimating = true;
                    detail.setAttribute('open', '');

                    // Forceer een reflow zodat de 0fr-staat geregistreerd wordt
                    content.getBoundingClientRect();

                    // Volgende frame: activeer de transitie naar 1fr
                    requestAnimationFrame(() => {
                        content.classList.add('is-active');
                        detail.classList.add('is-open');
                        content.addEventListener('transitionend', () => {
                            isAnimating = false;
                        }, { once: true });
                    });
                }
            });
        });

        // ── Hero SVG stroke-draw animatie ──
        document.querySelectorAll('.hero-stroke').forEach(path => {
            const len = path.getTotalLength();
            path.style.setProperty('--stroke-len', len);
            // Trigger draw na korte pauze
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    path.classList.add('is-drawn');
                });
            });
        });

        // ── Navbar shadow bij scrollen ──
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 20);
        }, { passive: true });
    </script>

    {{-- ============================================================ --}}
    {{-- WHATSAPP CHAT WIDGET --}}
    {{-- ============================================================ --}}
    <div class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-50 flex flex-col items-end gap-3">
        {{-- Chat window --}}
        <div id="wa-chat" class="wa-chat-window w-[calc(100vw-2rem)] sm:w-80 max-w-80 h-[380px] sm:h-[420px] flex flex-col bg-white rounded-2xl shadow-lg border border-line overflow-hidden">
            {{-- Header --}}
            <div class="bg-ink px-5 py-3.5 flex items-center gap-3 shrink-0">
                <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-white font-display font-semibold text-xs">MS Muurprint Studio</p>
                    <p class="text-white/50 text-xs">Meestal binnen 1 uur een reactie</p>
                </div>
                <button id="wa-close" class="text-white/50 hover:text-white transition-colors p-1" aria-label="Chat sluiten">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            {{-- Chat body --}}
            <div class="flex-1 px-4 py-4 bg-canvas overflow-y-auto">
                <div class="bg-white rounded-xl rounded-tl-none px-3.5 py-2.5 shadow-sm border border-line max-w-[85%]">
                    <p class="text-xs text-ink leading-relaxed">Hoi! Hoe kunnen we u helpen? Stel uw vraag en we reageren zo snel mogelijk.</p>
                    <p class="text-xs text-muted mt-1">MS Muurprint Studio</p>
                </div>
            </div>

            {{-- Input --}}
            <form id="wa-form" class="px-3 py-2.5 border-t border-line flex items-center gap-2 shrink-0">
                <input id="wa-input" type="text" placeholder="Typ uw bericht..." class="flex-1 px-3.5 py-2 bg-canvas rounded-full text-xs text-ink placeholder:text-muted border-none outline-none focus:ring-2 focus:ring-bronze/20">
                <button type="submit" class="w-8 h-8 bg-bronze rounded-full flex items-center justify-center text-white hover:bg-bronze/90 transition-colors shrink-0" aria-label="Verstuur bericht">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/></svg>
                </button>
            </form>
        </div>

        {{-- Toggle button --}}
        <button id="wa-toggle" class="w-14 h-14 bg-ink rounded-full flex items-center justify-center text-white shadow-lg hover:bg-ink/90 transition-colors wa-btn-pulse" aria-label="Open chat">
            <svg id="wa-icon-chat" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
            <svg id="wa-icon-close" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <script>
        // ── WhatsApp chat widget ──
        const waToggle = document.getElementById('wa-toggle');
        const waClose = document.getElementById('wa-close');
        const waChat = document.getElementById('wa-chat');
        const waForm = document.getElementById('wa-form');
        const waInput = document.getElementById('wa-input');
        const waIconChat = document.getElementById('wa-icon-chat');
        const waIconClose = document.getElementById('wa-icon-close');

        function toggleWaChat() {
            const isOpen = waChat.classList.toggle('is-open');
            waIconChat.classList.toggle('hidden', isOpen);
            waIconClose.classList.toggle('hidden', !isOpen);
            waToggle.classList.toggle('wa-btn-pulse', !isOpen);
            if (isOpen) waInput.focus();
        }

        waToggle.addEventListener('click', toggleWaChat);
        waClose.addEventListener('click', toggleWaChat);

        waForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const msg = waInput.value.trim();
            const phone = '31685546200';
            const url = `https://wa.me/${phone}` + (msg ? `?text=${encodeURIComponent(msg)}` : '');
            window.open(url, '_blank');
        });
    </script>
</body>
</html>
