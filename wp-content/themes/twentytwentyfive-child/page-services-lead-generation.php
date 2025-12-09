<?php
/**
 * Template Name: Services - Lead Generation
 * Description: Lead Generation service page with detailed product information
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" role="main" class="nl-service-page">

    <!-- Hero Section -->
    <section class="nl-service-hero">
        <div class="nl-container">
            <div class="nl-service-hero-content">
                <span class="nl-service-badge">Services</span>
                <h1 class="nl-service-hero-title">Lead Generation</h1>
                <p class="nl-service-hero-subtitle">
                    Tusindvis af verificerede B2B-leads leveret på under 24 timer med vores avancerede AI-drevne lead generation platform
                </p>
                <div class="nl-service-hero-cta">
                    <a href="#kontakt" class="nl-btn-primary nl-btn-large">Kom i gang nu</a>
                    <a href="#how-it-works" class="nl-btn-secondary nl-btn-large">Se hvordan det virker</a>
                </div>
            </div>
            
            <!-- Hero Image Placeholder -->
            <div class="nl-service-hero-image">
                <svg viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg" class="nl-service-illustration">
                    <defs>
                        <linearGradient id="leadGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0066cc" stop-opacity="0.8"/>
                            <stop offset="100%" stop-color="#003366" stop-opacity="0.9"/>
                        </linearGradient>
                        <linearGradient id="leadGrad2" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#10b981" stop-opacity="0.8"/>
                            <stop offset="100%" stop-color="#059669" stop-opacity="0.9"/>
                        </linearGradient>
                    </defs>
                    
                    <!-- Background -->
                    <rect width="800" height="600" fill="#f8fafc"/>
                    
                    <!-- Database/Server representation -->
                    <rect x="50" y="150" width="200" height="300" rx="20" fill="url(#leadGrad1)" opacity="0.1"/>
                    <circle cx="150" cy="200" r="40" fill="url(#leadGrad1)"/>
                    <circle cx="150" cy="300" r="40" fill="url(#leadGrad1)" opacity="0.7"/>
                    <circle cx="150" cy="400" r="40" fill="url(#leadGrad1)" opacity="0.5"/>
                    
                    <!-- AI Processing (center) -->
                    <circle cx="400" cy="300" r="80" fill="url(#leadGrad2)"/>
                    <text x="400" y="310" font-family="Inter, sans-serif" font-size="32" font-weight="700" fill="#ffffff" text-anchor="middle">AI</text>
                    
                    <!-- Output/Results -->
                    <rect x="550" y="150" width="200" height="300" rx="20" fill="url(#leadGrad1)" opacity="0.1"/>
                    
                    <!-- Lead cards -->
                    <rect x="570" y="180" width="160" height="60" rx="10" fill="#ffffff" stroke="url(#leadGrad1)" stroke-width="2"/>
                    <rect x="570" y="260" width="160" height="60" rx="10" fill="#ffffff" stroke="url(#leadGrad1)" stroke-width="2"/>
                    <rect x="570" y="340" width="160" height="60" rx="10" fill="#ffffff" stroke="url(#leadGrad1)" stroke-width="2"/>
                    
                    <!-- Connection lines -->
                    <line x1="190" y1="200" x2="320" y2="300" stroke="url(#leadGrad1)" stroke-width="3" opacity="0.3" stroke-dasharray="5,5"/>
                    <line x1="190" y1="300" x2="320" y2="300" stroke="url(#leadGrad1)" stroke-width="3" opacity="0.3" stroke-dasharray="5,5"/>
                    <line x1="190" y1="400" x2="320" y2="300" stroke="url(#leadGrad1)" stroke-width="3" opacity="0.3" stroke-dasharray="5,5"/>
                    
                    <line x1="480" y1="300" x2="570" y2="210" stroke="url(#leadGrad2)" stroke-width="3" opacity="0.3"/>
                    <line x1="480" y1="300" x2="570" y2="290" stroke="url(#leadGrad2)" stroke-width="3" opacity="0.3"/>
                    <line x1="480" y1="300" x2="570" y2="370" stroke="url(#leadGrad2)" stroke-width="3" opacity="0.3"/>
                    
                    <!-- Checkmarks -->
                    <path d="M 580 205 L 590 215 L 610 190" stroke="#10b981" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M 580 285 L 590 295 L 610 270" stroke="#10b981" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M 580 365 L 590 375 L 610 350" stroke="#10b981" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="nl-service-features">
        <div class="nl-container">
            <div class="nl-section-header">
                <h2>Vores In-House Developed Lead Generation Platform</h2>
                <p>Bygget af vores team med avanceret AI-teknologi og multi-source datahentning</p>
            </div>
            
            <div class="nl-features-grid">
                <div class="nl-feature-card">
                    <div class="nl-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                    <h3>AI-Powered Multi-Source Scraping</h3>
                    <p>Vores proprietære AI-system indsamler leads fra over 50+ kilder: CVR-registret, Google Maps, LinkedIn, brancheregistre, firmahjemmesider, sociale medier, og offentlige databaser. Alt køres automatisk gennem vores advanced machine learning pipeline.</p>
                </div>
                
                <div class="nl-feature-card">
                    <div class="nl-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                    <h3>Real-Time Verification & Validation</h3>
                    <p>Hver enkelt email og telefonnummer verificeres i real-time gennem vores AI-verification engine. Vi bruger advanced pattern recognition, SMTP validation, og social proof algorithms for at garantere 95%+ accuracy rate på alle kontakter.</p>
                </div>
                
                <div class="nl-feature-card">
                    <div class="nl-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3>Intelligent Lead Scoring System</h3>
                    <p>Vores AI-lead-scoring algoritme analyserer over 100+ datapunkter per lead: company size, industry relevance, decision-maker identification, engagement likelihood, conversion probability og historical performance data for at ranke hver lead.</p>
                </div>
                
                <div class="nl-feature-card">
                    <div class="nl-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>100% GDPR Compliance Engine</h3>
                    <p>Alle leads håndteres gennem vores GDPR-compliance system med built-in legitim interesse vurdering (Art. 6(1)(f)), automatic DNC-screening, opt-out management, og full audit trail. EU-hosted på danske servere.</p>
                </div>
                
                <div class="nl-feature-card">
                    <div class="nl-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <h3>Advanced Data Enrichment</h3>
                    <p>Vores AI enrichment system tilføjer 30+ extra datapunkter til hver lead: company revenue estimates, employee count, technology stack, social media presence, funding status, growth signals, og industry-specific metrics.</p>
                </div>
                
                <div class="nl-feature-card">
                    <div class="nl-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/>
                            <polyline points="7 10 12 15 17 10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                    </div>
                    <h3>Instant Export & Integration</h3>
                    <p>Export leads instant til CSV, Excel, eller JSON. Native integration med alle major CRM-systemer (HubSpot, Salesforce, Pipedrive), email marketing tools (Mailchimp, SendGrid), og custom API endpoints. Vores team har bygget seamless data pipelines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="nl-service-process">
        <div class="nl-container">
            <div class="nl-section-header">
                <h2>Sådan Virker Vores System</h2>
                <p>Fra dataindsamling til levering af verificerede leads på under 24 timer</p>
            </div>
            
            <div class="nl-process-steps">
                <div class="nl-process-step">
                    <div class="nl-process-number">1</div>
                    <h3>Multi-Source Data Aggregation</h3>
                    <p>Vores AI-crawler system scanner 50+ kilder simultant: CVR, Google Maps API, LinkedIn Sales Navigator, industry databases, company websites, social media platforms og public records. Alt køres through advanced web scraping og API integration pipelines.</p>
                </div>
                
                <div class="nl-process-step">
                    <div class="nl-process-number">2</div>
                    <h3>AI-Driven Verification & Cleaning</h3>
                    <p>Hver lead processeres through vores machine learning verification engine: email validation via SMTP, phone number verification, duplicate detection algorithms, data normalization, og spam-trap identification. 95%+ accuracy guaranteed.</p>
                </div>
                
                <div class="nl-process-step">
                    <div class="nl-process-number">3</div>
                    <h3>Intelligent Filtering & Segmentation</h3>
                    <p>AI-powered segmentation based on: industry classification, company size brackets, geographic targeting, decision-maker role identification, firmographic data, og behavioral signals. Hyper-targeted lead lists custom-built til din niche.</p>
                </div>
                
                <div class="nl-process-step">
                    <div class="nl-process-number">4</div>
                    <h3>Real-Time Delivery & Support</h3>
                    <p>Instant access til din lead database via secure download portal eller API integration. Full customer success support fra vores team, der har udviklet systemet. Ongoing updates og refresh cycles inkluderet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="nl-service-tech">
        <div class="nl-container">
            <div class="nl-section-header">
                <h2>Built by Our Team med Cutting-Edge Technology</h2>
                <p>Samme team der driver din lead generation platform</p>
            </div>
            
            <div class="nl-tech-grid">
                <div class="nl-tech-item">
                    <h4>AI & Machine Learning</h4>
                    <p>TensorFlow, PyTorch, scikit-learn, NLP processing, neural networks</p>
                </div>
                <div class="nl-tech-item">
                    <h4>Data Processing</h4>
                    <p>Apache Spark, Pandas, NumPy, Redis caching, real-time pipelines</p>
                </div>
                <div class="nl-tech-item">
                    <h4>Web Scraping</h4>
                    <p>Scrapy, Selenium, BeautifulSoup, proxy rotation, anti-detection</p>
                </div>
                <div class="nl-tech-item">
                    <h4>Infrastructure</h4>
                    <p>AWS/Azure cloud, Kubernetes, Docker, CI/CD, EU-hosted servers</p>
                </div>
                <div class="nl-tech-item">
                    <h4>Security & Compliance</h4>
                    <p>End-to-end encryption, GDPR engines, audit logs, ISO compliance</p>
                </div>
                <div class="nl-tech-item">
                    <h4>API Integration</h4>
                    <p>RESTful APIs, GraphQL, webhooks, OAuth, CRM connectors</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="nl-service-results">
        <div class="nl-container">
            <div class="nl-section-header">
                <h2>Resultater Der Taler For Sig Selv</h2>
            </div>
            
            <div class="nl-results-grid">
                <div class="nl-result-stat">
                    <div class="nl-stat-number">10M+</div>
                    <div class="nl-stat-label">Verificerede leads i database</div>
                </div>
                <div class="nl-result-stat">
                    <div class="nl-stat-number">95%</div>
                    <div class="nl-stat-label">Email verification accuracy</div>
                </div>
                <div class="nl-result-stat">
                    <div class="nl-stat-number">24h</div>
                    <div class="nl-stat-label">Gennemsnitlig leveringstid</div>
                </div>
                <div class="nl-result-stat">
                    <div class="nl-stat-number">50+</div>
                    <div class="nl-stat-label">Datakilder integreret</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="kontakt" class="nl-service-cta">
        <div class="nl-container">
            <div class="nl-service-cta-content">
                <h2>Klar Til at Skalere Din Lead Generation?</h2>
                <p>Få adgang til vores AI-drevne platform og start med at generere kvalificerede B2B-leads i dag. Vores team står klar til at hjælpe dig.</p>
                <div class="nl-service-cta-buttons">
                    <a href="#kontakt-form" class="nl-btn-primary nl-btn-large">Book en demo</a>
                    <a href="mailto:info@nordicleads.dk" class="nl-btn-secondary nl-btn-large">Kontakt os</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>

