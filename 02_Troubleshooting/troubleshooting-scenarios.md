# Something Broke. What do you do?

My first response would be try reducing the issue, identify where the flow breaks (frontend, backend, or integration), and confirm whether it is isolated or systemic before making changes.

---

# 1. Contact Form Stopped Working 

When a form stops sending submissions, I first verify whether the issue is real or only at the outside.

### Step 1 — Recreate the problem
- Submit the form from diffrent devices(mobile/laptop) and networks
- Check if the success message still appears
- Confirm whether the issue is affecting just one form or many

**Impact:**  
Understand the problem before making changes and understand its scope.

---

### Step 2 — Inspecting the browser
Using browser DevTools:
- Use Developer Tools to check the Network and Console tabs
- Verify the request is sent and review HTTP status codes and JavaScript errors
- Review payload and response

**Impact:**  
This tells me immediately wether it's client side or server side.

---

### Step 3 — Check backend and integrations
- Verify form processing, CRM/webhook integrations, and email delivery.
- Check for expired API keys, SMTP issues, or failed webhooks.

**Impact:** 
Prevents silent failures where leads are lost before reaching business systems.
---

### Step 4 — Review and fix
- Check recent plugin updates, SSL certificates, hosting status, and third-party service availability
- Resolve the root cause, make end-to-end test submissions, and confirm data reaches the intended destination
- Document the issue

**Impact:** 
Ensures business continuity and reduces the risk of future failures.
---

# 2. Website Became Slow

When performance issues are reported, I start by identifying *what type of slowdown this is* before going for optimization.

---

### Step 1 — Validate pattern
- Test multiple pages (homepage, product pages, landing pages)
- Compare mobile vs. desktop performance
- Check from different browsers or networks if possible

**Impact:** 
Helps to determine whether the issue is global, page-specific, or device-related.
---

### Step 2 — Measure performance
- Check Core Web Vitals (LCP, CLS, TTFB)
- Review Network requests and identify slow-loading assets
- Look for JavaScript errors or render-blocking resources

**Impact:** 
Pinpoints whether the bottleneck is in the frontend, backend, or third-party services.
---

### Step 3 — Check likely sources
I investigate the most common causes of performance issues:
- Server / hosting: CDN or caching misconfiguration
- Frontend assets: unoptimized images or videos, heavy sliders, render-blocking CSS/JavaScript
- Third-party scripts: Google Tag Manager, GA4, Meta Pixel, chat widgets, or other integrations(CRM)
- Recent CMS changes: newly uploaded media, homepage banners, plugin updates, or embedded content

**Impact:** 
This helps isolate whether the slowdown originates from infrastructure, content updates, or external services so the issue can be resolved efficiently.
---

### Step 4 — Optimize and verify

- Optimize: Compress or replace heavy assets
- Defer or remove unnecessary scripts
- Enable or adjust caching and CDN settings
- Re-test performance using Core Web Vitals and document the root cause

**Impact:** 
Restores a fast user experience, improves conversion rates, and reduces visitor drop-off while preventing similar issues in the future.
---

# 3. Mobile Menu Not Opening (Webflow)

When a mobile navigation breaks, I treat it as a front-end interaction failure caused either by structure, styling, or script conflict.

---

### Step 1 — Recreate the issue
- Test on real(physical) mobile devices and different browsers
- Compare the mobile behaviour with desktop
- Check if issue ocurs in one page or many

**Impact:** 
Confirms the scope of the problem and whether it is breakpoint-specific.
---

### Step 2 — Inspecting the Client Side(frontend)
- Check the Console for JavaScript errors
- Verify the hamburger button receives click events
- Inspect the DOM and CSS to ensure the menu is not hidden or blocked

**Impact:** 
Helps determine whether the issue is caused by JavaScript, styling, or interaction logic.
---

### Step 3 — Review changes that causes the issue
I would investigate common production issues such as:
- Navbar changes
- Broken or detached interactions
- Z-index or overlay elements blocking clicks
- Symbol/component detachment in Webflow
- Sections overlapping navigation layer
- Pointer-events disabled on menu or wrapper

**Impact:** 
Focuses on the most common root causes after content updates and isolates the problem quickly.
---

### Step 5 — Fix and verify
- Correct the interaction or layout issue
- Republish the site
- Test across multiple mobile devices and browsers
- Document the root cause and any preventive recommendations

---
