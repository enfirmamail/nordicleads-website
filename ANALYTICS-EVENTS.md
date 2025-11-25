# Analytics & Event Tracking Documentation

Complete guide to analytics implementation and event tracking for NordicLeads.

## Overview

**Platforms:**
- Google Analytics 4 (GA4)
- Google Tag Manager (GTM) - Recommended
- Meta Pixel (Facebook)
- LinkedIn Insight Tag

**Consent:** Consent Mode v2 (GDPR-compliant)  
**Implementation:** `app.js` with unified tracking function

---

## Configuration

### Setup in app.js

```javascript
const CFG = {
    GA_MEASUREMENT_ID: "G-XXXXXXXXXX",      // Your GA4 ID
    GTM_ID: "GTM-XXXXXXX",                  // Your GTM ID
    META_PIXEL_ID: "000000000000000",       // Your Meta Pixel ID
    LINKEDIN_PID: "0000000",                // Your LinkedIn ID
    USE_GTM: true,                          // Recommended
    CONSENT_DEFAULT: "denied",              // GDPR default
};
```

### Getting Your IDs

#### Google Analytics 4
1. Go to [Google Analytics](https://analytics.google.com)
2. Admin → Data Streams → Web
3. Copy Measurement ID (format: G-XXXXXXXXXX)

#### Google Tag Manager
1. Go to [Google Tag Manager](https://tagmanager.google.com)
2. Create account → Create container (Web)
3. Copy Container ID (format: GTM-XXXXXXX)

#### Meta Pixel
1. Go to [Meta Business Manager](https://business.facebook.com)
2. Business Settings → Data Sources → Pixels
3. Copy Pixel ID (format: 16 digits)

#### LinkedIn Insight Tag
1. Go to [LinkedIn Campaign Manager](https://www.linkedin.com/campaignmanager)
2. Account Assets → Insight Tag
3. Copy Partner ID (format: 7 digits)

---

## Consent Mode v2 Implementation

### Default State (Before User Interaction)
```javascript
gtag('consent', 'default', {
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    'analytics_storage': 'denied',
    'functionality_storage': 'granted',  // Always allowed
    'personalization_storage': 'denied',
    'security_storage': 'granted',        // Always allowed
});
```

### Update on User Consent
```javascript
// User accepts all cookies
gtag('consent', 'update', {
    'ad_storage': 'granted',
    'ad_user_data': 'granted',
    'ad_personalization': 'granted',
    'analytics_storage': 'granted',
    'personalization_storage': 'granted'
});

// User rejects (only necessary)
gtag('consent', 'update', {
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    'analytics_storage': 'denied',
    'personalization_storage': 'denied'
});
```

---

## Event Tracking Map

### 1. page_view
**Description:** Initial page load  
**Trigger:** Automatically on DOMContentLoaded  
**Sent to:** GA4, Meta, LinkedIn

**Parameters:**
```javascript
{
    page_title: document.title,
    page_location: window.location.href,
    page_path: window.location.pathname
}
```

**GA4 Report:** Engagement → Pages and screens  
**Purpose:** Measure overall traffic

---

### 2. scroll
**Description:** User scroll depth milestones  
**Trigger:** At 25%, 50%, 75%, 100% of page scroll  
**Sent to:** GA4 only

**Parameters:**
```javascript
{
    event_category: 'Engagement',
    event_label: '25%' | '50%' | '75%' | '100%',
    value: 25 | 50 | 75 | 100
}
```

**GA4 Report:** Engagement → Events → scroll  
**Purpose:** Measure content engagement depth

---

### 3. cta_click
**Description:** Click on primary CTA buttons  
**Trigger:** Click on any `.btn-primary` element  
**Sent to:** GA4, Meta, LinkedIn

**Parameters:**
```javascript
{
    event_category: 'CTA',
    event_label: button.textContent.trim(),  // e.g., "Book gratis opkald"
    value: 1
}
```

**Tracked Elements:**
- Hero primary CTA
- Header CTA button
- Pricing page CTAs
- Sticky bottom-right CTA

**GA4 Report:** Engagement → Events → cta_click  
**Purpose:** Measure CTA effectiveness

---

### 4. request_quote
**Description:** Interest in pricing  
**Trigger:** Click on pricing section link or "Se priser" button  
**Sent to:** GA4, Meta, LinkedIn

**Parameters:**
```javascript
{
    event_category: 'Pricing',
    event_label: 'View Pricing',
    value: 1
}
```

**GA4 Report:** Engagement → Events → request_quote  
**Purpose:** Measure pricing page interest (micro-conversion)

---

### 5. phone_click
**Description:** Click on phone or email link  
**Trigger:** Click on `tel:` or `mailto:` links  
**Sent to:** GA4, Meta, LinkedIn

**Parameters:**
```javascript
{
    event_category: 'Contact',
    event_label: link.getAttribute('href'),  // e.g., "mailto:info@nordicleads.dk"
    value: 1
}
```

**GA4 Report:** Engagement → Events → phone_click  
**Purpose:** Measure direct contact attempts

---

### 6. generate_lead (PRIMARY CONVERSION)
**Description:** Successful contact form submission  
**Trigger:** Form submitted successfully (AJAX response)  
**Sent to:** GA4, Meta, LinkedIn

**Parameters:**
```javascript
{
    event_category: 'Form',
    event_label: 'Contact Form',
    value: 1
}
```

**GA4 Setup:**
1. Go to Admin → Events
2. Mark as conversion
3. Create conversion in Conversions section

**Meta Setup:**
1. Events Manager → Data Sources → Your Pixel
2. Configure "Lead" standard event

**LinkedIn Setup:**
1. Campaign Manager → Conversions
2. Create "Lead" conversion

**Purpose:** Primary conversion goal (form submission)

---

## Custom Event Implementation

### Adding New Events

To track a new custom event:

```javascript
// In app.js
Analytics.trackEvent('event_name', {
    event_category: 'Category',
    event_label: 'Label',
    value: 1,
    custom_param: 'value'
});
```

### Example: Track Video Play

```javascript
// Find video element
const video = document.querySelector('video');

// Add event listener
video.addEventListener('play', () => {
    Analytics.trackEvent('video_play', {
        event_category: 'Video',
        event_label: video.src,
        value: 1
    });
});
```

---

## GA4 Dashboard Setup

### Recommended Reports

#### 1. Overview Dashboard
- **Traffic Sources:** Where visitors come from
- **Top Pages:** Most viewed pages (should be / only)
- **Conversions:** generate_lead count
- **Bounce Rate:** Single-page sessions

#### 2. Conversion Funnel
Create custom exploration:
1. page_view (all visitors)
2. scroll 50% (engaged visitors)
3. cta_click (interested visitors)
4. generate_lead (converted leads)

#### 3. Custom Report: Lead Quality
Dimensions:
- Traffic source
- Landing page
- Device category

Metrics:
- generate_lead (count)
- cta_click (count)
- Conversion rate

---

## GTM Setup (Recommended)

### Why GTM?
- Centralized tag management
- No code changes for new tags
- Built-in debugging
- Better performance (single container)

### GTM Configuration

#### 1. Install GTM Container
- Already included in `app.js` if `USE_GTM: true`
- Add GTM noscript code to `header.php` (after `<body>`)

#### 2. Create Variables
- **GA4 Configuration** → New Variable → GA4 Configuration → Measurement ID
- **GA4 Measurement ID** → Constant → G-XXXXXXXXXX

#### 3. Create Tags

**Google Analytics 4 Config**
- Tag Type: Google Analytics: GA4 Configuration
- Measurement ID: {{GA4 Measurement ID}}
- Trigger: Initialization - All Pages

**GA4 Event - Form Submission**
- Tag Type: Google Analytics: GA4 Event
- Event Name: generate_lead
- Parameters:
  - event_category: Form
  - event_label: Contact Form
  - value: 1
- Trigger: Custom Event → generate_lead

**Meta Pixel - Base Code**
- Tag Type: Custom HTML
- HTML: Meta Pixel code
- Trigger: All Pages

**LinkedIn Insight Tag**
- Tag Type: Custom HTML
- HTML: LinkedIn Insight code
- Trigger: All Pages

#### 4. Create Triggers
- **All Pages** (built-in)
- **Form Submission** → Custom Event → generate_lead
- **CTA Click** → Click → All Elements → CSS Selector → .btn-primary

#### 5. Test & Publish
- Preview mode → Test all events
- Submit → Publish container

---

## Meta Pixel Events

### Standard Events
We use these standard Meta events:

1. **PageView** (automatic)
2. **Lead** (form submission)
3. **ViewContent** (page_view with parameters)

### Custom Events
Can add custom events for:
- Pricing view
- FAQ interaction
- Testimonial view

### Meta Events Manager
1. Go to Events Manager
2. Test Events → Enter nordicleads.dk
3. Interact with site
4. Verify events appear

---

## LinkedIn Conversion Tracking

### Setup
1. Campaign Manager → Account Assets → Conversions
2. Create Conversion:
   - Name: "Lead Form Submission"
   - Action: Lead
   - Attribution Window: 30 days

### Implementation
Already implemented in `app.js`:
```javascript
lintrk('track', { conversion_id: 'generate_lead' });
```

---

## Testing & Debugging

### Browser Console
Open Developer Tools → Console  
Look for:
```
[Analytics] Scripts loaded
[Analytics] Event tracked: generate_lead {...}
```

### GA4 DebugView
1. GA4 → Configure → DebugView
2. Install Google Analytics Debugger extension
3. Visit site
4. See real-time events in DebugView

### GTM Preview Mode
1. GTM → Preview
2. Enter nordicleads.dk
3. Interact with site
4. See tags firing in real-time

### Meta Pixel Helper
1. Install Meta Pixel Helper extension
2. Visit site
3. Click extension icon
4. Verify pixel fires

### LinkedIn Insight Tag Checker
1. Install Tag Inspector extension
2. Visit site
3. Verify LinkedIn tag loads

---

## Performance Optimization

### Lazy Load Analytics
Analytics scripts only load after user consents:
```javascript
if (consentGranted) {
    Analytics.loadScripts();
}
```

### Minimize Tracking Calls
- Batch events where possible
- Use sampling for high-frequency events (scroll)
- Debounce rapid-fire events

### Async Loading
All scripts load asynchronously:
```javascript
script.async = true;
```

---

## Privacy & Compliance

### GDPR Requirements
✓ Default consent: denied  
✓ User choice: accept/reject  
✓ Cookie banner with clear options  
✓ Privacy policy link  
✓ Data retention settings (GA4: 14 months)

### Data Retention
**GA4:**
- Admin → Data Settings → Data Retention
- Set to 14 months (GDPR-friendly)

**Meta:**
- Events Manager → Data Sources → Settings
- Review data retention settings

---

## Conversion Goals & KPIs

### Primary KPI
**Lead Generation Rate:**
```
Leads / Visitors × 100
Target: ≥ 10%
```

### Secondary KPIs
1. **CTA Click Rate:** cta_click / page_view (Target: ≥ 50%)
2. **Pricing Interest:** request_quote / page_view (Target: ≥ 20%)
3. **Engagement Rate:** scroll 50% / page_view (Target: ≥ 60%)
4. **Avg. Time on Page:** (Target: ≥ 4 minutes)

### Funnel Stages
```
100% → page_view (all visitors)
 60% → scroll 50% (engaged)
 50% → cta_click (interested)
 10% → generate_lead (converted)
```

---

## Reporting Schedule

### Daily
- Check form submissions (generate_lead count)
- Monitor traffic spikes/drops

### Weekly
- Review conversion rate
- Analyze traffic sources
- Check CTA performance

### Monthly
- Full analytics review
- Compare to previous month
- Adjust strategy based on data

---

## Troubleshooting

### Events Not Showing in GA4
1. Wait 24-48 hours for data processing
2. Check DebugView for real-time data
3. Verify Measurement ID is correct
4. Check consent was granted

### Meta Pixel Not Firing
1. Install Meta Pixel Helper extension
2. Check browser console for errors
3. Verify Pixel ID is correct
4. Check ad blockers aren't blocking

### GTM Not Working
1. Check GTM container ID
2. Preview mode to debug
3. Verify triggers are configured
4. Check for JavaScript errors

### Low Conversion Rate
1. Review funnel drop-off points
2. Test form on mobile devices
3. Check email delivery (forms might work but emails fail)
4. A/B test CTA copy

---

## A/B Testing Recommendations

### Test These Elements
1. **Hero CTA copy:** "Book gratis opkald" vs "Få 50-250 leads nu"
2. **Pricing position:** Above vs below fold
3. **Form length:** 5 fields vs 3 fields (remove company, message)
4. **Trust signals:** Different placement of guarantee

### Tools
- Google Optimize (free)
- VWO
- Optimizely

---

## Advanced Tracking (Future)

### Session Recording
Consider adding:
- Hotjar
- Microsoft Clarity (free)
- FullStory

### Heatmaps
- Understand where users click
- Optimize CTA placement

### Form Analytics
- Track field-level interactions
- Identify drop-off points

---

**Last Updated:** 2025-11-24  
**Version:** 1.0.0

