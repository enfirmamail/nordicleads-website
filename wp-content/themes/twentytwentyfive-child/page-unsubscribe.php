<?php
/**
 * Template Name: Unsubscribe / DNC List
 * Description: Unsubscribe and Do-Not-Contact list management page
 */

get_header();
?>

<main id="main-content" class="nl-unsubscribe-page">
    <div class="nl-container">
        <div class="max-w-2xl mx-auto">
            <div class="nl-card text-center">
                <div class="mb-8">
                    <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                    </svg>
                    <h1 class="nl-h1 mb-4">Afmeld nyhedsbrev</h1>
                    <p class="nl-text-lg text-gray-600">
                        Indtast din email adresse for at blive fjernet fra vores mailingliste.
                    </p>
                    <p class="text-sm text-gray-500 mt-2">
                        Din email vil blive tilføjet til vores Do-Not-Contact liste og du vil ikke modtage flere emails fra os.
                    </p>
                </div>
                
                <form id="unsubscribe-form" class="nl-unsubscribe-form max-w-md mx-auto">
                    <div class="nl-form-group mb-6">
                        <label for="unsubscribe-email" class="block text-sm font-semibold text-gray-700 mb-2 text-left">
                            Email adresse <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="unsubscribe-email" 
                            name="email" 
                            required 
                            placeholder="din@email.dk"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                        <div id="unsubscribe-error" class="mt-2 text-sm text-red-600 hidden"></div>
                    </div>
                    
                    <button type="submit" id="unsubscribe-submit" class="nl-btn-primary w-full mb-4">
                        Afmeld mig
                    </button>
                    
                    <p class="text-xs text-gray-500">
                        Ved at indsende bekræfter du, at du ønsker at blive fjernet fra vores mailingliste i henhold til GDPR.
                    </p>
                </form>
                
                <div id="unsubscribe-success" class="hidden max-w-md mx-auto mt-6 p-6 bg-green-50 border border-green-200 rounded-lg">
                    <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-green-800 font-semibold text-lg mb-2">
                        Du er nu afmeldt
                    </p>
                    <p class="text-green-700 text-sm">
                        Din email er blevet tilføjet til vores Do-Not-Contact liste. Du vil ikke modtage flere emails fra os.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>

