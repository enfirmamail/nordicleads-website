/**
 * NordicLeads App.js
 * Main JavaScript for frontpage functionality
 * Includes: Consent Mode v2, Analytics, Form Handling, Accessibility
 * 
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

// =================================================================
// Configuration
// =================================================================
const CFG = {
    GA_MEASUREMENT_ID: "G-XXXXXXXXXX",      // Replace with your Google Analytics 4 ID
    GTM_ID: "GTM-XXXXXXX",                  // Replace with your Google Tag Manager ID
    META_PIXEL_ID: "000000000000000",       // Replace with your Meta Pixel ID
    LINKEDIN_PID: "0000000",                // Replace with your LinkedIn Partner ID
    USE_GTM: true,                          // Set to false to use GA4 directly
    CONSENT_DEFAULT: "granted",             // Default consent state (now true)
    FORM_ENDPOINT: "",                      // Leave empty to use WordPress AJAX
    COOKIE_CONSENT_KEY: "nordicleads_cookie_consent",
    COOKIE_EXPIRY_DAYS: 365
};

// =================================================================
// Consent Mode v2 Implementation (Google)
// =================================================================
const ConsentManager = {
    /**
     * Initialize default consent state (before user interaction)
     */
    init: function() {
        // Set default consent to denied
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        window.gtag = gtag;
        
        gtag('consent', 'default', {
            'ad_storage': CFG.CONSENT_DEFAULT,
            'ad_user_data': CFG.CONSENT_DEFAULT,
            'ad_personalization': CFG.CONSENT_DEFAULT,
            'analytics_storage': CFG.CONSENT_DEFAULT,
            'functionality_storage': 'granted',  // Always allowed
            'personalization_storage': CFG.CONSENT_DEFAULT,
            'security_storage': 'granted',        // Always allowed
            'wait_for_update': 500
        });

        // Check if user has already consented
        const savedConsent = this.getSavedConsent();
        if (savedConsent) {
            this.updateConsent(savedConsent === 'accepted');
            this.hideBanner();
        } else {
            if (CFG.CONSENT_DEFAULT === 'granted') {
                Analytics.loadScripts();
            }
            this.showBanner();
        }
    },
    
    /**
     * Update consent state after user interaction
     */
    updateConsent: function(accepted) {
        const consentValue = accepted ? 'granted' : 'denied';
        
        gtag('consent', 'update', {
            'ad_storage': consentValue,
            'ad_user_data': consentValue,
            'ad_personalization': consentValue,
            'analytics_storage': consentValue,
            'personalization_storage': consentValue
        });
        
        // Save consent preference
        this.saveConsent(accepted ? 'accepted' : 'rejected');
        
        // Load analytics if accepted
        if (accepted) {
            Analytics.loadScripts();
        }
        
        console.log('[ConsentManager] Consent updated:', consentValue);
    },
    
    /**
     * Show cookie consent banner
     */
    showBanner: function() {
        const banner = document.getElementById('cookie-consent');
        if (banner) {
            setTimeout(() => {
                banner.style.display = 'block';
                setTimeout(() => {
                    banner.classList.add('show');
                }, 10);
            }, 2000); // Show after 2 seconds
        }
    },
    
    /**
     * Hide cookie consent banner
     */
    hideBanner: function() {
        const banner = document.getElementById('cookie-consent');
        if (banner) {
            banner.classList.remove('show');
            setTimeout(() => {
                banner.style.display = 'none';
            }, 300);
        }
    },
    
    /**
     * Save consent preference to localStorage
     */
    saveConsent: function(value) {
        try {
            const expiryDate = new Date();
            expiryDate.setDate(expiryDate.getDate() + CFG.COOKIE_EXPIRY_DAYS);
            
            localStorage.setItem(CFG.COOKIE_CONSENT_KEY, JSON.stringify({
                value: value,
                expiry: expiryDate.getTime()
            }));
        } catch (e) {
            console.error('[ConsentManager] Failed to save consent:', e);
        }
    },
    
    /**
     * Get saved consent preference
     */
    getSavedConsent: function() {
        try {
            const saved = localStorage.getItem(CFG.COOKIE_CONSENT_KEY);
            if (!saved) return null;
            
            const { value, expiry } = JSON.parse(saved);
            
            // Check if expired
            if (new Date().getTime() > expiry) {
                localStorage.removeItem(CFG.COOKIE_CONSENT_KEY);
                return null;
            }
            
            return value;
        } catch (e) {
            console.error('[ConsentManager] Failed to get saved consent:', e);
            return null;
        }
    }
};

// =================================================================
// Analytics Integration (GTM, GA4, Meta Pixel, LinkedIn)
// =================================================================
const Analytics = {
    loaded: false,
    
    /**
     * Load all analytics scripts
     */
    loadScripts: function() {
        if (this.loaded) return;
        
        if (CFG.USE_GTM) {
            this.loadGTM();
        } else {
            this.loadGA4();
        }
        
        this.loadMetaPixel();
        this.loadLinkedInInsight();
        
        this.loaded = true;
        console.log('[Analytics] Scripts loaded');
    },
    
    /**
     * Load Google Tag Manager
     */
    loadGTM: function() {
        if (!CFG.GTM_ID || CFG.GTM_ID === 'GTM-XXXXXXX') return;
        
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;
            j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer',CFG.GTM_ID);
        
        console.log('[Analytics] GTM loaded:', CFG.GTM_ID);
    },
    
    /**
     * Load Google Analytics 4 (Direct)
     */
    loadGA4: function() {
        if (!CFG.GA_MEASUREMENT_ID || CFG.GA_MEASUREMENT_ID === 'G-XXXXXXXXXX') return;
        
        const script = document.createElement('script');
        script.async = true;
        script.src = `https://www.googletagmanager.com/gtag/js?id=${CFG.GA_MEASUREMENT_ID}`;
        document.head.appendChild(script);
        
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', CFG.GA_MEASUREMENT_ID);
        
        console.log('[Analytics] GA4 loaded:', CFG.GA_MEASUREMENT_ID);
    },
    
    /**
     * Load Meta Pixel (Facebook)
     */
    loadMetaPixel: function() {
        if (!CFG.META_PIXEL_ID || CFG.META_PIXEL_ID === '000000000000000') return;
        
        !function(f,b,e,v,n,t,s) {
            if(f.fbq) return;
            n=f.fbq=function(){
                n.callMethod ? n.callMethod.apply(n,arguments) : n.queue.push(arguments)
            };
            if(!f._fbq) f._fbq=n;
            n.push=n;
            n.loaded=!0;
            n.version='2.0';
            n.queue=[];
            t=b.createElement(e);
            t.async=!0;
            t.src=v;
            s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s);
        }(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        
        fbq('init', CFG.META_PIXEL_ID);
        fbq('track', 'PageView');
        
        console.log('[Analytics] Meta Pixel loaded:', CFG.META_PIXEL_ID);
    },
    
    /**
     * Load LinkedIn Insight Tag
     */
    loadLinkedInInsight: function() {
        if (!CFG.LINKEDIN_PID || CFG.LINKEDIN_PID === '0000000') return;
        
        _linkedin_partner_id = CFG.LINKEDIN_PID;
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        
        (function(l) {
            if (!l){
                window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
                window.lintrk.q=[]
            }
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })(window.lintrk);
        
        console.log('[Analytics] LinkedIn Insight loaded:', CFG.LINKEDIN_PID);
    },
    
    /**
     * Track custom event
     */
    trackEvent: function(eventName, params = {}) {
        // Google Analytics / GTM
        if (window.gtag) {
            gtag('event', eventName, params);
        }
        
        // Meta Pixel
        if (window.fbq) {
            fbq('track', eventName, params);
        }
        
        // LinkedIn
        if (window.lintrk) {
            lintrk('track', { conversion_id: eventName });
        }
        
        console.log('[Analytics] Event tracked:', eventName, params);
    }
};

// =================================================================
// Form Handling
// =================================================================
const FormHandler = {
    init: function() {
        const form = document.getElementById('contact-form');
        if (!form) return;
        
        form.addEventListener('submit', this.handleSubmit.bind(this));
        
        // Real-time validation
        const inputs = form.querySelectorAll('input[required], textarea[required]');
        inputs.forEach(input => {
            input.addEventListener('blur', () => this.validateField(input));
            input.addEventListener('input', () => this.clearError(input));
        });
    },
    
    /**
     * Handle form submission
     */
    handleSubmit: async function(e) {
        e.preventDefault();
        
        const form = e.target;
        const submitBtn = form.querySelector('#submit-btn');
        const successMsg = document.getElementById('form-success');
        
        // Validate all fields
        if (!this.validateForm(form)) {
            return;
        }
        
        // Disable submit button
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sender...';
        
        // Get form data
        const formData = new FormData(form);
        const data = {
            action: 'nordicleads_contact',
            nonce: window.nordicleadsData ? window.nordicleadsData.nonce : '',
            name: formData.get('name'),
            company: formData.get('company'),
            email: formData.get('email'),
            phone: formData.get('phone'),
            message: formData.get('message') || ''
        };
        
        try {
            // Send via WordPress AJAX
            const response = await fetch(window.nordicleadsData.ajaxurl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams(data)
            });
            
            const result = await response.json();
            
            if (result.success) {
                // Show success message
                successMsg.classList.remove('hidden');
                form.style.display = 'none';
                
                // Track conversion
                Analytics.trackEvent('generate_lead', {
                    event_category: 'Form',
                    event_label: 'Contact Form',
                    value: 1
                });
                
                // Scroll to success message
                setTimeout(() => {
                    successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 100);
            } else {
                throw new Error(result.data?.message || 'Der opstod en fejl');
            }
        } catch (error) {
            console.error('[FormHandler] Submission error:', error);
            alert('Der opstod en fejl. Prøv venligst igen eller kontakt os direkte på info@nordicleads.dk');
        } finally {
            // Re-enable submit button
            submitBtn.disabled = false;
            submitBtn.textContent = '📞 Send og book opkald';
        }
    },
    
    /**
     * Validate entire form
     */
    validateForm: function(form) {
        const inputs = form.querySelectorAll('input[required]');
        let isValid = true;
        
        inputs.forEach(input => {
            if (!this.validateField(input)) {
                isValid = false;
            }
        });
        
        return isValid;
    },
    
    /**
     * Validate single field
     */
    validateField: function(field) {
        const value = field.value.trim();
        const errorDiv = document.getElementById(`${field.id}-error`);
        let isValid = true;
        let errorMessage = '';
        
        // Check if empty
        if (field.required && !value) {
            isValid = false;
            errorMessage = 'Dette felt er påkrævet';
        }
        
        // Email validation
        if (field.type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                errorMessage = 'Indtast venligst en gyldig e-mail';
            }
        }
        
        // Phone validation (basic)
        if (field.type === 'tel' && value) {
            const phoneRegex = /^[\d\s\+\-\(\)]+$/;
            if (!phoneRegex.test(value)) {
                isValid = false;
                errorMessage = 'Indtast venligst et gyldigt telefonnummer';
            }
        }
        
        // Update UI
        if (!isValid) {
            field.classList.add('error', 'border-red-500');
            if (errorDiv) {
                errorDiv.textContent = errorMessage;
                errorDiv.classList.remove('hidden');
            }
            field.setAttribute('aria-invalid', 'true');
        } else {
            this.clearError(field);
        }
        
        return isValid;
    },
    
    /**
     * Clear field error
     */
    clearError: function(field) {
        field.classList.remove('error', 'border-red-500');
        const errorDiv = document.getElementById(`${field.id}-error`);
        if (errorDiv) {
            errorDiv.classList.add('hidden');
        }
        field.setAttribute('aria-invalid', 'false');
    }
};

// =================================================================
// FAQ Accordion
// =================================================================
const FAQ = {
    init: function() {
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all other items (accordion behavior)
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                });
                
                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                    question.setAttribute('aria-expanded', 'true');
                }
            });
        });
    }
};

// =================================================================
// Mobile Menu
// =================================================================
const MobileMenu = {
    init: function() {
        const toggle = document.getElementById('mobile-menu-toggle');
        const menu = document.getElementById('mobile-menu');
        
        if (!toggle || !menu) return;
        
        toggle.addEventListener('click', () => {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
            
            toggle.setAttribute('aria-expanded', !isExpanded);
            menu.classList.toggle('hidden');
            
            // Update label
            toggle.setAttribute('aria-label', isExpanded ? 'Åbn navigation' : 'Luk navigation');
        });
        
        // Close menu when clicking a link
        const menuLinks = menu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Åbn navigation');
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Åbn navigation');
            }
        });
    }
};

// =================================================================
// Smooth Scrolling
// =================================================================
const SmoothScroll = {
    init: function() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Ignore links with just "#"
                if (href === '#') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    
                    const headerHeight = document.querySelector('.site-header')?.offsetHeight || 0;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Focus target for accessibility
                    target.setAttribute('tabindex', '-1');
                    target.focus();
                }
            });
        });
    }
};

// =================================================================
// Scroll Events & Analytics
// =================================================================
const ScrollTracking = {
    tracked: {
        25: false,
        50: false,
        75: false,
        100: false
    },
    
    init: function() {
        window.addEventListener('scroll', this.handleScroll.bind(this), { passive: true });
    },
    
    handleScroll: function() {
        const scrollPercent = (window.scrollY + window.innerHeight) / document.body.scrollHeight * 100;
        
        // Track scroll depth milestones
        [25, 50, 75, 100].forEach(milestone => {
            if (scrollPercent >= milestone && !this.tracked[milestone]) {
                this.tracked[milestone] = true;
                Analytics.trackEvent('scroll', {
                    event_category: 'Engagement',
                    event_label: `${milestone}%`,
                    value: milestone
                });
            }
        });
        
        // Add shadow to header on scroll (premium effect)
        const header = document.getElementById('site-header');
        if (header) {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
                header.style.boxShadow = '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)';
            } else {
                header.classList.remove('scrolled');
                header.style.boxShadow = 'none';
            }
        }
    }
};

// =================================================================
// Click Tracking
// =================================================================
const ClickTracking = {
    init: function() {
        // Track CTA button clicks
        document.querySelectorAll('.btn-primary').forEach(btn => {
            btn.addEventListener('click', () => {
                Analytics.trackEvent('cta_click', {
                    event_category: 'CTA',
                    event_label: btn.textContent.trim(),
                    value: 1
                });
            });
        });
        
        // Track pricing clicks
        document.querySelectorAll('a[href="#priser"], a[href*="pricing"]').forEach(link => {
            link.addEventListener('click', () => {
                Analytics.trackEvent('request_quote', {
                    event_category: 'Pricing',
                    event_label: 'View Pricing',
                    value: 1
                });
            });
        });
        
        // Track phone/email clicks
        document.querySelectorAll('a[href^="tel:"], a[href^="mailto:"]').forEach(link => {
            link.addEventListener('click', () => {
                Analytics.trackEvent('phone_click', {
                    event_category: 'Contact',
                    event_label: link.getAttribute('href'),
                    value: 1
                });
            });
        });
    }
};

// =================================================================
// Accessibility Helpers
// =================================================================
const Accessibility = {
    init: function() {
        // Skip to main content link
        const skipLink = document.querySelector('.skip-link');
        if (skipLink) {
            skipLink.addEventListener('click', (e) => {
                e.preventDefault();
                const mainContent = document.getElementById('main-content');
                if (mainContent) {
                    mainContent.setAttribute('tabindex', '-1');
                    mainContent.focus();
                }
            });
        }
        
        // Keyboard navigation for buttons
        document.querySelectorAll('button, a').forEach(el => {
            el.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.target.click();
                }
            });
        });
        
        // Respect prefers-reduced-motion
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.documentElement.style.scrollBehavior = 'auto';
        }
    }
};

// =================================================================
// Cookie Consent Handlers
// =================================================================
const CookieHandlers = {
    init: function() {
        const acceptBtn = document.getElementById('cookie-accept');
        const rejectBtn = document.getElementById('cookie-reject');
        
        if (acceptBtn) {
            acceptBtn.addEventListener('click', () => {
                ConsentManager.updateConsent(true);
                ConsentManager.hideBanner();
            });
        }
        
        if (rejectBtn) {
            rejectBtn.addEventListener('click', () => {
                ConsentManager.updateConsent(false);
                ConsentManager.hideBanner();
            });
        }
    }
};

// =================================================================
// Hero Rotating Words Animation
// =================================================================
const HeroAnimation = {
    words: ['hurtige', 'sikre', 'relevante', 'kvalificerede', 'målrettede'],
    currentIndex: 0,
    wordElement: null,
    
    init: function() {
        this.wordElement = document.getElementById('rotating-word');
        
        if (this.wordElement) {
            // Start the rotation after initial delay
            setTimeout(() => this.rotateWord(), 2000);
        }
    },
    
    rotateWord: function() {
        if (!this.wordElement) return;
        
        // Fade out current word
        this.wordElement.classList.add('fade-out');
        
        setTimeout(() => {
            // Update to next word
            this.currentIndex = (this.currentIndex + 1) % this.words.length;
            this.wordElement.textContent = this.words[this.currentIndex];
            
            // Fade in new word
            this.wordElement.classList.remove('fade-out');
            this.wordElement.classList.add('fade-in');
            
            // Remove fade-in class after animation
            setTimeout(() => {
                this.wordElement.classList.remove('fade-in');
            }, 400);
            
            // Schedule next rotation
            setTimeout(() => this.rotateWord(), 2000);
        }, 400);
    }
};

// =================================================================
// Initialization
// =================================================================
document.addEventListener('DOMContentLoaded', function() {
    console.log('[NordicLeads] Initializing...');
    
    // Initialize Consent Mode first
    ConsentManager.init();
    
    // Initialize all modules
    FormHandler.init();
    FAQ.init();
    MobileMenu.init();
    SmoothScroll.init();
    ScrollTracking.init();
    ClickTracking.init();
    Accessibility.init();
    CookieHandlers.init();
    HeroAnimation.init();
    
    // Track page view
    Analytics.trackEvent('page_view', {
        page_title: document.title,
        page_location: window.location.href,
        page_path: window.location.pathname
    });
    
    console.log('[NordicLeads] Initialized successfully');
});

// =================================================================
// Export for debugging (Development only)
// =================================================================
if (typeof window !== 'undefined') {
    window.NordicLeads = {
        ConsentManager,
        Analytics,
        FormHandler,
        FAQ,
        MobileMenu,
        ScrollTracking,
        ClickTracking,
        HeroAnimation
    };
}

