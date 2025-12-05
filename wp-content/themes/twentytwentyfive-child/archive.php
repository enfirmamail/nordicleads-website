<?php
/**
 * Archive Template - Blog Posts
 * Description: Clean blog archive for NordicLeads
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" role="main">

    <!-- Blog Hero -->
    <section class="nl-blog-hero">
        <div class="nl-container">
            <div class="nl-blog-hero-content">
                <h1 class="nl-blog-hero-title">Blog</h1>
                <p class="nl-blog-hero-subtitle">
                    Tips, guides og indsigt om B2B lead generation, GDPR-compliance og salgsstrategier.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="nl-blog-section">
        <div class="nl-container">
            <?php if (have_posts()) : ?>
                <div class="nl-blog-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="nl-blog-card" itemscope itemtype="https://schema.org/BlogPosting">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="nl-blog-card-image">
                                    <a href="<?php the_permalink(); ?>" aria-label="Læs <?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail('large', array('class' => 'nl-blog-thumbnail', 'itemprop' => 'image')); ?>
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="nl-blog-card-image nl-blog-card-image-placeholder">
                                    <a href="<?php the_permalink(); ?>" aria-label="Læs <?php the_title_attribute(); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 250" class="nl-blog-placeholder-svg">
                                            <rect width="400" height="250" fill="#f3f4f6"/>
                                            <g opacity="0.3">
                                                <circle cx="200" cy="100" r="30" fill="#0066cc"/>
                                                <path d="M170 130h60M180 145h40" stroke="#0066cc" stroke-width="3" stroke-linecap="round"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="nl-blog-card-content">
                                <div class="nl-blog-card-meta">
                                    <time datetime="<?php echo get_the_date('c'); ?>" class="nl-blog-date" itemprop="datePublished">
                                        <?php echo get_the_date('d. M Y'); ?>
                                    </time>
                                    <span class="nl-blog-read-time">
                                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                            <path d="M12 6v6l4 2" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                        <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> min
                                    </span>
                                </div>
                                
                                <h2 class="nl-blog-card-title" itemprop="headline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <?php if (has_excerpt()) : ?>
                                    <p class="nl-blog-card-excerpt" itemprop="description"><?php the_excerpt(); ?></p>
                                <?php else : ?>
                                    <p class="nl-blog-card-excerpt" itemprop="description"><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                                <?php endif; ?>
                                
                                <a href="<?php the_permalink(); ?>" class="nl-blog-card-link" itemprop="url">
                                    Læs artikel
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                            <meta itemprop="author" content="NordicLeads">
                            <meta itemprop="publisher" content="NordicLeads">
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <!-- Pagination -->
                <div class="nl-blog-pagination">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '← Forrige',
                        'next_text' => 'Næste →',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <div class="nl-blog-empty">
                    <h2>Ingen indlæg fundet</h2>
                    <p>Der er ingen blogindlæg at vise endnu.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php
get_footer();
?>

