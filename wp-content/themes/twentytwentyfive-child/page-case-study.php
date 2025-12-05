<?php
/**
 * Template Name: Case Study
 * Description: Individual case study template for success stories
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
                        <?php 
                        $cases_page = get_pages(array(
                            'meta_key' => '_wp_page_template',
                            'meta_value' => 'page-cases.php'
                        ));
                        $cases_url = !empty($cases_page) ? get_permalink($cases_page[0]->ID) : home_url('/cases');
                        ?>
                        <a href="<?php echo esc_url($cases_url); ?>" itemprop="item">
                            <span itemprop="name">Cases</span>
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
        
        <!-- Case Study -->
        <article class="nl-case-study" itemscope itemtype="https://schema.org/Article">
            
            <!-- Hero Section -->
            <section class="nl-case-hero">
                <div class="nl-container nl-case-container">
                    <div class="nl-case-hero-content">
                        
                        <!-- Company Logo/Name -->
                        <?php if (function_exists('get_field') && get_field('case_company_logo')) : ?>
                            <div class="nl-case-logo">
                                <img src="<?php echo esc_url(get_field('case_company_logo')); ?>" 
                                     alt="<?php echo esc_attr(get_field('case_company_name')); ?> logo"
                                     itemprop="image">
                            </div>
                        <?php elseif (function_exists('get_field') && get_field('case_company_name')) : ?>
                            <div class="nl-case-company-name">
                                <?php echo esc_html(get_field('case_company_name')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Title -->
                        <h1 class="nl-case-hero-title" itemprop="headline">
                            <?php the_title(); ?>
                        </h1>
                        
                        <!-- Subtitle/Excerpt -->
                        <?php if (has_excerpt()) : ?>
                            <p class="nl-case-hero-subtitle" itemprop="description">
                                <?php the_excerpt(); ?>
                            </p>
                        <?php endif; ?>
                        
                        <!-- Stats Bar -->
                        <?php if (function_exists('get_field') && get_field('case_stats')) : ?>
                            <div class="nl-case-stats">
                                <?php 
                                $stats = get_field('case_stats');
                                foreach ($stats as $stat) : ?>
                                    <div class="nl-case-stat">
                                        <div class="nl-case-stat-number"><?php echo esc_html($stat['number']); ?></div>
                                        <div class="nl-case-stat-label"><?php echo esc_html($stat['label']); ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <section class="nl-case-featured-image">
                    <div class="nl-container nl-case-container">
                        <?php the_post_thumbnail('full', array('class' => 'nl-case-image', 'itemprop' => 'image')); ?>
                    </div>
                </section>
            <?php endif; ?>
            
            <!-- Main Content -->
            <section class="nl-case-content-section">
                <div class="nl-container nl-case-container">
                    <div class="nl-case-content" itemprop="articleBody">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            
            <!-- Customer Quote (if exists) -->
            <?php if (function_exists('get_field') && get_field('case_quote') && get_field('case_quote_author')) : ?>
                <section class="nl-case-quote-section">
                    <div class="nl-container nl-case-container">
                        <blockquote class="nl-case-quote-large">
                            <p>"<?php echo esc_html(get_field('case_quote')); ?>"</p>
                            <cite>— <?php echo esc_html(get_field('case_quote_author')); ?>
                                <?php if (get_field('case_quote_role')) : ?>
                                    <span class="nl-case-quote-role">, <?php echo esc_html(get_field('case_quote_role')); ?></span>
                                <?php endif; ?>
                            </cite>
                        </blockquote>
                    </div>
                </section>
            <?php endif; ?>
            
            <!-- Results Section -->
            <?php if (function_exists('get_field') && get_field('case_results')) : ?>
                <section class="nl-case-results-section">
                    <div class="nl-container nl-case-container">
                        <h2 class="nl-case-section-title">Resultater</h2>
                        <div class="nl-case-results-grid">
                            <?php 
                            $results = get_field('case_results');
                            foreach ($results as $result) : ?>
                                <div class="nl-case-result-card">
                                    <div class="nl-case-result-icon">
                                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                        </svg>
                                    </div>
                                    <div class="nl-case-result-number"><?php echo esc_html($result['metric']); ?></div>
                                    <div class="nl-case-result-label"><?php echo esc_html($result['description']); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            
            <!-- CTA Section -->
            <section class="nl-case-cta-section">
                <div class="nl-container nl-case-container">
                    <div class="nl-case-cta-card">
                        <h2 class="nl-case-cta-title">Klar til lignende resultater?</h2>
                        <p class="nl-case-cta-text">
                            Få et uforpligtende tilbud og se hvordan vi kan hjælpe din virksomhed med kvalificerede leads og GDPR-sikker outreach.
                        </p>
                        <div class="nl-case-cta-buttons">
                            <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="nl-btn-primary nl-btn-large">
                                Få leads nu
                            </a>
                            <a href="<?php echo esc_url($cases_url); ?>" class="nl-btn-secondary nl-btn-large">
                                Se flere cases
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Related Cases -->
            <?php
            $current_id = get_the_ID();
            $related_cases = get_pages(array(
                'meta_key' => '_wp_page_template',
                'meta_value' => 'page-case-study.php',
                'exclude' => $current_id,
                'number' => 2,
                'sort_column' => 'menu_order'
            ));
            
            if ($related_cases) :
            ?>
                <section class="nl-case-related">
                    <div class="nl-container">
                        <h2 class="nl-case-related-title">Andre Success Cases</h2>
                        <div class="nl-case-related-grid">
                            <?php foreach ($related_cases as $related) : ?>
                                <a href="<?php echo get_permalink($related->ID); ?>" class="nl-case-related-card">
                                    <?php if (has_post_thumbnail($related->ID)) : ?>
                                        <div class="nl-case-related-image">
                                            <?php echo get_the_post_thumbnail($related->ID, 'medium'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="nl-case-related-content">
                                        <h3><?php echo esc_html($related->post_title); ?></h3>
                                        <?php if ($related->post_excerpt) : ?>
                                            <p><?php echo esc_html($related->post_excerpt); ?></p>
                                        <?php endif; ?>
                                        <span class="nl-case-related-link">Læs case →</span>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            
            <!-- Schema.org metadata -->
            <meta itemprop="datePublished" content="<?php echo get_the_date('c'); ?>">
            <meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
            <meta itemprop="author" content="NordicLeads">
            <meta itemprop="publisher" content="NordicLeads">
        </article>
        
    <?php endwhile; ?>

</main>

<?php
get_footer();
?>

