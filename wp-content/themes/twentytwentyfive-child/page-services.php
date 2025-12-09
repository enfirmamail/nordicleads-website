<?php
/**
 * Template Name: Services
 * Description: Services overview page
 */

get_header();
?>

<main id="main-content" class="nl-services-page">
    <div class="nl-container py-20">
        <div class="nl-section-header text-center mb-16">
            <h1 class="nl-h1 mb-4">Vores Services</h1>
            <p class="nl-text-lg text-gray-600 max-w-2xl mx-auto">
                Vi tilbyder skræddersyede løsninger til din virksomhed
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Lead Generation -->
            <div class="nl-card p-8">
                <h2 class="text-2xl font-bold mb-4">Lead Generation</h2>
                <p class="text-gray-600 mb-4">
                    Få kvalificerede B2B-leads direkte til din virksomhed
                </p>
                <a href="<?php echo home_url('/services/lead-generation'); ?>" class="nl-btn-primary inline-block">
                    Læs mere →
                </a>
            </div>

            <!-- Webudvikling -->
            <div class="nl-card p-8">
                <h2 class="text-2xl font-bold mb-4">Webudvikling</h2>
                <p class="text-gray-600 mb-4">
                    Moderne og performante websites til din virksomhed
                </p>
                <a href="<?php echo home_url('/services/webudvikling'); ?>" class="nl-btn-primary inline-block">
                    Læs mere →
                </a>
            </div>

            <!-- AI-Integration & Automation -->
            <div class="nl-card p-8">
                <h2 class="text-2xl font-bold mb-4">AI-Integration & Automation</h2>
                <p class="text-gray-600 mb-4">
                    Automatiser dine processer med AI-teknologi
                </p>
                <a href="<?php echo home_url('/services/ai-integration-automation'); ?>" class="nl-btn-primary inline-block">
                    Læs mere →
                </a>
            </div>

            <!-- Custom Løsninger -->
            <div class="nl-card p-8">
                <h2 class="text-2xl font-bold mb-4">Custom Løsninger</h2>
                <p class="text-gray-600 mb-4">
                    Skræddersyede løsninger til dine specifikke behov
                </p>
                <a href="<?php echo home_url('/services/custom-loesninger'); ?>" class="nl-btn-primary inline-block">
                    Læs mere →
                </a>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();

