<?php
/**
 * Template Name: Service Single
 * Description: Single service page template
 */

get_header();
?>

<main id="main-content" class="nl-service-single-page">
    <div class="nl-container py-20">
        <div class="max-w-4xl mx-auto">
            <h1 class="nl-h1 mb-8"><?php the_title(); ?></h1>
            
            <div class="nl-content prose max-w-none">
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>

            <div class="mt-12 text-center">
                <a href="#kontakt" class="nl-btn-primary">Kontakt os</a>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();

