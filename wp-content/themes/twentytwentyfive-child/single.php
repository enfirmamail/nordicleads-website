<?php
/**
 * Single Post Template - Blog Post
 * Description: Clean single post template for NordicLeads
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" role="main">

    <?php while (have_posts()) : the_post(); ?>
        
        <!-- Breadcrumbs -->
        <nav class="nl-breadcrumbs" aria-label="Breadcrumb">
            <div class="nl-container">
                <ol class="nl-breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="item">
                            <span itemprop="name">Forside</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog')); ?>" itemprop="item">
                            <span itemprop="name">Blog</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name"><?php the_title(); ?></span>
                        <meta itemprop="position" content="3" />
                    </li>
                </ol>
            </div>
        </nav>
        
        <!-- Blog Post -->
        <article class="nl-single-post" itemscope itemtype="https://schema.org/BlogPosting">
            <div class="nl-container nl-single-container">
                <div class="nl-single-post-header">
                    <div class="nl-single-post-meta">
                        <time datetime="<?php echo get_the_date('c'); ?>" class="nl-single-post-date" itemprop="datePublished">
                            <?php echo get_the_date('d. M Y'); ?>
                        </time>
                        <span class="nl-single-read-time">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                <path d="M12 6v6l4 2" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> minutters læsning
                        </span>
                    </div>
                    
                    <h1 class="nl-single-post-title" itemprop="headline"><?php the_title(); ?></h1>
                    
                    <?php if (has_excerpt()) : ?>
                        <div class="nl-single-post-excerpt" itemprop="description">
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="nl-single-post-image">
                        <?php the_post_thumbnail('full', array('class' => 'nl-single-thumbnail', 'itemprop' => 'image')); ?>
                    </div>
                <?php endif; ?>
                
                <div class="nl-single-post-content" itemprop="articleBody">
                    <?php the_content(); ?>
                </div>
                
                <!-- Author Info -->
                <div class="nl-single-author" itemprop="author" itemscope itemtype="https://schema.org/Organization">
                    <div class="nl-author-avatar">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="authorBg" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#0066cc"/>
                                    <stop offset="100%" stop-color="#003366"/>
                                </linearGradient>
                            </defs>
                            <rect width="64" height="64" rx="14" fill="url(#authorBg)"/>
                            <text x="32" y="32" font-family="Inter, sans-serif" font-size="26" font-weight="700" fill="#ffffff" text-anchor="middle" dominant-baseline="central">NL</text>
                        </svg>
                    </div>
                    <div class="nl-author-content">
                        <div class="nl-author-name" itemprop="name">NordicLeads</div>
                        <div class="nl-author-bio">
                            Eksperter i B2B lead generation og GDPR-compliant outreach. Vi hjælper danske virksomheder med at finde og kontakte kvalificerede potentielle kunder.
                        </div>
                    </div>
                    <meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>">
                </div>
                
                <!-- Navigation -->
                <div class="nl-single-post-navigation">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    
                    <?php if ($prev_post) : ?>
                        <a href="<?php echo get_permalink($prev_post); ?>" class="nl-post-nav-item nl-post-nav-prev">
                            <span class="nl-post-nav-label">← Forrige artikel</span>
                            <span class="nl-post-nav-title"><?php echo get_the_title($prev_post); ?></span>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($next_post) : ?>
                        <a href="<?php echo get_permalink($next_post); ?>" class="nl-post-nav-item nl-post-nav-next">
                            <span class="nl-post-nav-label">Næste artikel →</span>
                            <span class="nl-post-nav-title"><?php echo get_the_title($next_post); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                
                <div class="nl-single-post-footer">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog')); ?>" class="nl-btn-back-to-blog">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Tilbage til alle artikler
                    </a>
                </div>
            </div>
            
            <!-- Schema.org metadata -->
            <meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
            <meta itemprop="publisher" content="NordicLeads">
            <meta itemprop="mainEntityOfPage" content="<?php the_permalink(); ?>">
        </article>
        
        <!-- Related CTA -->
        <section class="nl-single-cta">
            <div class="nl-container">
                <div class="nl-single-cta-content">
                    <h2 class="nl-single-cta-title">Klar til at få kvalificerede leads?</h2>
                    <p class="nl-single-cta-text">
                        Få et uforpligtende tilbud og se hvordan vi kan hjælpe din virksomhed med GDPR-sikre B2B-leads.
                    </p>
                    <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="nl-btn-primary">Få leads nu</a>
                </div>
            </div>
        </section>
        
    <?php endwhile; ?>

</main>

<?php
get_footer();
?>

