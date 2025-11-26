<?php
/**
 * Template Name: Front Page
 * Description: NordicLeads Frontpage - Ultra-professional design
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" role="main" class="bg-white">

    <!-- Hero Section - Sales-Ready, Premium 2025 -->
    <section id="leads" class="relative overflow-hidden pt-16 pb-20 sm:pt-20 sm:pb-24 lg:pt-24 lg:pb-28" style="background: radial-gradient(ellipse 80% 50% at 50% -20%, rgba(59, 130, 246, 0.15), transparent), linear-gradient(to bottom, #0f172a, #1e293b);" aria-labelledby="hero-heading">
        
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: linear-gradient(rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,1) 1px, transparent 1px); background-size: 48px 48px;"></div>
        
        <!-- Glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-blue-500/20 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 text-center">
            
            <!-- SEO -->
            <div class="sr-only">NordicLeads: 50-250 verificerede B2B-leads med emails, telefonnumre og adresser fra CVR. 100% GDPR-compliant via legitimate interest.</div>
            
            <!-- Badge -->
            <div class="hero-animate inline-flex items-center gap-2 px-3 py-1.5 mb-6 bg-emerald-500/10 border border-emerald-500/20 rounded-full">
                <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium text-emerald-400">GDPR-compliant • Offentlige kilder</span>
            </div>
            
            <!-- H1 -->
            <h1 id="hero-heading" class="hero-animate delay-100 text-[2.5rem] sm:text-5xl lg:text-[3.5rem] font-bold text-white leading-[1.1] tracking-tight">
                Få adgang til 50–250<br/>
                <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">relevante B2B-leads</span><br/>
                på få minutter
            </h1>
            
            <!-- Subtitle -->
            <p class="hero-animate delay-200 mt-5 text-base sm:text-lg text-slate-300/90 max-w-xl mx-auto leading-relaxed">
                Verificerede emails, telefonnumre og adresser fra CVR. 
                GDPR-sikker via <strong class="text-white">legitimate interest</strong> – klar til eksport.
            </p>
            
            <!-- Bullets -->
            <div class="hero-animate delay-300 flex flex-wrap justify-center gap-x-5 gap-y-2.5 mt-7 text-sm text-slate-300">
                <span class="inline-flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    Emails & direkte tlf
                </span>
                <span class="inline-flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    CVR-verificeret
                </span>
                <span class="inline-flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    DNC-screenet
                </span>
                <span class="inline-flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    CSV/Excel eksport
                </span>
            </div>
            
            <!-- CTAs -->
            <div class="hero-animate delay-400 flex flex-col sm:flex-row justify-center gap-3 mt-9">
                <a href="#kontakt" class="group inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold text-slate-900 bg-white rounded-xl shadow-xl shadow-white/20 hover:shadow-2xl hover:shadow-white/30 hover:-translate-y-0.5 transition-all duration-300">
                    Få leads nu
                    <svg class="ml-2 w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </a>
                <a href="#kontakt" class="inline-flex items-center justify-center px-7 py-3.5 text-sm font-medium text-white/90 border border-white/20 rounded-xl hover:bg-white/5 hover:text-white transition-all duration-300">
                    Kontakt os
                </a>
            </div>
            
            <!-- Trust -->
            <div class="hero-animate delay-500 flex flex-wrap justify-center gap-2.5 mt-10">
                <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-lg text-xs font-medium text-slate-400">GDPR Art. 6(1)(f)</span>
                <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-lg text-xs font-medium text-slate-400">Legitimate interest</span>
                <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-lg text-xs font-medium text-slate-400">DNC-screenet</span>
            </div>
            
            <!-- Upsell -->
            <p class="hero-animate delay-500 mt-6 text-sm text-slate-500">
                Brug for outreach? <a href="#hvordan" class="text-blue-400 hover:text-blue-300 underline underline-offset-2 transition-colors">Vi sender også dine kampagner</a>
            </p>
        </div>
    </section>

    <!-- Social Proof / Stats Section -->
    <section class="py-20 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-blue-900 mb-2">40%</div>
                    <div class="text-sm text-gray-600 font-medium">Flere kunder i snit</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-blue-900 mb-2">50-250</div>
                    <div class="text-sm text-gray-600 font-medium">Nye leads/måned</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-blue-900 mb-2">2 uger</div>
                    <div class="text-sm text-gray-600 font-medium">Til første resultater</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-blue-900 mb-2">100%</div>
                    <div class="text-sm text-gray-600 font-medium">GDPR-compliant</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works - Clean 3-Step -->
    <section id="hvordan-virker-det" class="py-24 bg-gray-50" aria-labelledby="how-heading">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 id="how-heading" class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Sådan virker det
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Tre enkle trin fra leads til bookinger – vi håndterer det hele
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Step 1 -->
                <div class="relative group">
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-xl hover:border-blue-100 transition-all duration-300 h-full">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-bold text-white">1</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Vi finder leads
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Fra offentlige kilder som CVR, Google Maps og firmahjemmesider. 
                            100% GDPR-compliant og målrettet din branche.
                        </p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative group">
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-xl hover:border-blue-100 transition-all duration-300 h-full">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-bold text-white">2</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Sender personaliserede emails
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Professionelle kolde emails på dansk med DNC-screening, 
                            compliance-checks og unsubscribe-funktionalitet.
                        </p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="relative group">
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-xl hover:border-blue-100 transition-all duration-300 h-full">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-bold text-white">3</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Du får bookede leads
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Varme leads leveret direkte til dig. Alt du skal gøre er 
                            at lukke salget – vi klarer resten.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GDPR Trust Section - Professional -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                        Hvorfor er vi GDPR-sikre?
                    </h2>
                    <p class="text-lg text-gray-600">
                        Vi tager databeskyttelse alvorligt og følger alle retningslinjer
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-100">
                        <div class="w-10 h-10 bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Legitim interesse
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Vi anvender GDPR Artikel 6(1)(f) til B2B-outreach med gensidig 
                            forretningsmæssig fordel for begge parter.
                        </p>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-100">
                        <div class="w-10 h-10 bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Kun offentlige kilder
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Alle data fra CVR-registret, Google Maps og offentlige 
                            firmahjemmesider. Ingen køb af tredjeparts-data.
                        </p>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-100">
                        <div class="w-10 h-10 bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            DNC-screening
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Løbende screening mod Do-Not-Contact-lister og compliance-
                            assessments. Unsubscribe i hver email.
                        </p>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-8 border border-gray-100">
                        <div class="w-10 h-10 bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            EU-hosting & support
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Data gemmes sikkert på EU-servere i Danmark. 
                            Dansk support der forstår lokal lovgivning.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section - Clean Cards -->
    <section id="priser" class="py-24 bg-gray-50" aria-labelledby="pricing-heading">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 id="pricing-heading" class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Transparente priser
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Vælg den pakke der passer til din virksomhed. Ingen skjulte omkostninger.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Starter -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-200 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Starter</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">2.500 kr</span>
                        <span class="text-gray-600">/måned</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">50-100 leads/måned</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">GDPR-compliant outreach</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">Email support</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">Månedlig rapport</span>
                        </li>
                    </ul>
                    <a href="#kontakt" class="block w-full text-center px-6 py-3 bg-gray-100 text-gray-900 font-semibold rounded-lg hover:bg-gray-200 transition-colors duration-200">
                        Kom i gang
                    </a>
                </div>
                
                <!-- Pro (Highlighted) -->
                <div class="relative bg-white rounded-2xl p-8 shadow-xl border-2 border-blue-900 transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-blue-900 text-white text-sm font-semibold px-4 py-1 rounded-full">
                            Mest populær
                        </span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Pro</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">4.500 kr</span>
                        <span class="text-gray-600">/måned</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">150-250 leads/måned</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">Alt fra Starter +</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">Personaliserede kampagner</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">30 dages garanti</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">Prioriteret support</span>
                        </li>
                    </ul>
                    <a href="#kontakt" class="block w-full text-center px-6 py-3 bg-blue-900 text-white font-semibold rounded-lg hover:bg-blue-800 transition-colors duration-200">
                        Vælg Pro
                    </a>
                </div>
                
                <!-- Enterprise -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-200 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Enterprise</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">Custom</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">250+ leads/måned</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">Alt fra Pro +</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">Dedikeret account manager</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">Multi-kanal outreach</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">Custom integrations</span>
                        </li>
                    </ul>
                    <a href="#kontakt" class="block w-full text-center px-6 py-3 bg-gray-100 text-gray-900 font-semibold rounded-lg hover:bg-gray-200 transition-colors duration-200">
                        Kontakt os
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section - Accordion -->
    <section id="faq" class="py-24 bg-white" aria-labelledby="faq-heading">
        <div class="max-w-3xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 id="faq-heading" class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Ofte stillede spørgsmål
                </h2>
                <p class="text-lg text-gray-600">
                    Få svar på dine spørgsmål om GDPR, resultater og processen
                </p>
            </div>
            
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors" aria-expanded="false">
                        <span class="text-lg font-semibold text-gray-900">Er det spam at sende kolde emails?</span>
                        <svg class="faq-icon w-6 h-6 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Nej, ikke når det gøres rigtigt. Vi sender kun B2B-emails baseret på legitim interesse 
                            (GDPR Art. 6(1)(f)) med gensidig forretningsmæssig fordel. Alle emails inkluderer 
                            unsubscribe, og vi screener mod DNC-lister. Det er professionel business development.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors" aria-expanded="false">
                        <span class="text-lg font-semibold text-gray-900">Hvordan sikrer I GDPR-compliance?</span>
                        <svg class="faq-icon w-6 h-6 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Vi bruger legitim interesse (GDPR Art. 6(1)(f)) for B2B med mutual benefit. Alle leads er 
                            fra offentlige kilder (CVR, Google Maps), screenet mod DNC-lister, med compliance-assessments 
                            og unsubscribe i hver email. Data gemmes sikkert på EU-servere.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors" aria-expanded="false">
                        <span class="text-lg font-semibold text-gray-900">Hvor hurtigt kan jeg forvente resultater?</span>
                        <svg class="faq-icon w-6 h-6 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            De fleste kunder ser første leads inden for 2-3 uger. Vi starter med at scrape og kvalificere leads, 
                            sender kampagner og optimerer baseret på respons. Pro-pakken har 30 dages garanti.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors" aria-expanded="false">
                        <span class="text-lg font-semibold text-gray-900">Kan jeg opsige når som helst?</span>
                        <svg class="faq-icon w-6 h-6 text-gray-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Ja, alle pakker er månedlige uden binding. Du kan opsige eller pause med 30 dages varsel. 
                            Vi tror på at du bliver fordi du ser resultater – ikke fordi du er låst fast.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section - Professional -->
    <section id="kontakt" class="py-24 bg-gradient-to-br from-gray-900 to-gray-800" aria-labelledby="contact-heading">
        <div class="max-w-3xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 id="contact-heading" class="text-3xl lg:text-4xl font-bold text-white mb-4">
                    Book et gratis opkald
                </h2>
                <p class="text-lg text-gray-300">
                    Vi kontakter dig inden for 24 timer og hjælper dig med at komme i gang
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-8 shadow-2xl">
                <!-- Success Message -->
                <div id="form-success" class="hidden mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-green-900">Tak for din henvendelse!</p>
                            <p class="text-sm text-green-700 mt-1">Vi har modtaget din besked og kontakter dig inden for 24 timer.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <form id="contact-form" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">
                                Navn <span class="text-red-600">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                required 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent transition-all outline-none"
                                placeholder="Dit navn"
                            >
                            <div id="name-error" class="hidden mt-2 text-sm text-red-600">Indtast venligst dit navn</div>
                        </div>
                        
                        <div>
                            <label for="company" class="block text-sm font-semibold text-gray-900 mb-2">
                                Virksomhed <span class="text-red-600">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="company" 
                                name="company" 
                                required 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent transition-all outline-none"
                                placeholder="Din virksomhed"
                            >
                            <div id="company-error" class="hidden mt-2 text-sm text-red-600">Indtast venligst din virksomhed</div>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">
                                E-mail <span class="text-red-600">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                required 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent transition-all outline-none"
                                placeholder="din@email.dk"
                            >
                            <div id="email-error" class="hidden mt-2 text-sm text-red-600">Indtast venligst en gyldig e-mail</div>
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-900 mb-2">
                                Telefon <span class="text-red-600">*</span>
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                required 
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent transition-all outline-none"
                                placeholder="+45 XX XX XX XX"
                            >
                            <div id="phone-error" class="hidden mt-2 text-sm text-red-600">Indtast venligst dit telefonnummer</div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-900 mb-2">
                            Besked (valgfri)
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="4"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent transition-all outline-none resize-none"
                            placeholder="Fortæl os kort om din virksomhed og dine mål..."
                        ></textarea>
                    </div>
                    
                    <button 
                        type="submit" 
                        id="submit-btn"
                        class="w-full px-8 py-4 bg-gradient-to-r from-blue-900 to-blue-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200"
                    >
                        Send besked
                    </button>
                    
                    <p class="text-xs text-gray-500 text-center">
                        Ved at indsende accepterer du vores 
                        <a href="#" class="text-blue-900 hover:underline">privatlivspolitik</a>. 
                        Vi behandler dine data i henhold til GDPR.
                    </p>
                </form>
            </div>
            
            <div class="text-center mt-8">
                <p class="text-gray-400">
                    Eller kontakt os direkte: 
                    <a href="mailto:info@nordicleads.dk" class="text-white font-semibold hover:underline">info@nordicleads.dk</a>
                </p>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
