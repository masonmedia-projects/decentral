# **Decentral Inc.**

This is a repo for the original build of decentral.ca, the home website of Decentral Inc., a Canadian Blockchain Wallet company. The README outlines the frameworks, languages, approaches, and steps I used in the building and maintenance of the site.

## **SWUP**

Similar to jaxx.io, this version of decentral.ca uses the [SWUP](https://github.com/gmrchk/swup) library for AJAX page transitions, and the addition of entrance/exit animation classes. This gives the site an app-like user experience: pages do not reload, load time and view changes are fast, and it is easily extensible with simple (or complex) css and js animations.

SWUP works by wrapping the main page content with an `id="swup"`. This alone works to swap content in and out without reload via ajax. The addition of `.transition-` and `.is-animating` classes then offers wide flexibility in creating custom animation options for page transitions and individual element animations (refer the SWUP API). The base class for fading in and out is `.transition-fade`. See more below under **CSS**.

SWUP allows for the use of other JS libraries, however they need to be reinitialized via `document.addEventListener('swup:contentReplaced', function () { -- functions, inits, etc. here -- }`. Previously, GSAP, Scroll Magic, and AOS libraries were used for scroll-based and timeline animations. These scripts are still in the `footer.php` file, however are not currently active due to management requirement to remove scroll animations.  Should these be required in the future, GSAP JS functions and config are still in the `main.js` file [see `function gsapScrollAnimations(); `], and all that is needed is the addition of CSS classes (and/or new animations can be easily developed).  See individual library home sites for more info.

## **Layout and Frameworks**

The site uses Bootstrap 4.1. Layout uses native Bootstrap classes, and [atomic css](https://css-tricks.com/lets-define-exactly-atomic-css/). "Atomic CSS is the approach to CSS architecture that favors small, single-purpose classes with names based on visual function." Bootstrap began this approach with version 4, including the use of flexbox. Classes are reusable and target most every styling and layout component individually (alignment, spacing, color, bg-color, width, height, etc.) and allow for fast scaffolding, consistency in layout/design, low code repetition, and minimal stylesheet bloat. The downside is that the HTML can get dense with classes, and can make editing or changing styles less global. See **CSS** below for more details.

## **PHP**

decentral.ca is built with PHP, primarily for its `includes` and `variables` functionality. It was also used as an alternative to static HTML: in the previous decentral.ca architecture, header, menu, and footer content existed on every page. This required inefficient and repetitive manual editing.

### **includes folder**

The header (`header.php`) and footer (`footer.php`) files are contained in the `includes` folder.

### **header.php**

The header contains all meta and OG social tags, JSON-LD/google structured data, the [Cookies Consent Banner](https://cookieconsent.osano.com/download/) for GDPR compliance, as well as the site menu/navigation.

##### **SEO**

The meta `title` and `description` tags are important for SEO and may need ongoing updating contingent on Decentral SEO strategy. The `keyword` meta tag is generally ignored by Google, so while keeping it is advised, it's not essential.

##### **> JSON-LD ~ Schema Micro Data ~ Google Structured Data**

This is JSON code located in a script tag in the `header.php` file. It is added data which is supposed to faciliate rich-snippet search results (image and post carousels, videos, social accounts/icons, images, etc). Currently `decentral.ca` gets much of its SERP content from a wikipedia page that was commissioned by a third party, in addition to a `google my business` page. Because of these it is difficult to discern whether (like jaxx.io) the JSON-LD structured data is having an effect. For more information on format and syntax check [here](https://developers.google.com/search/docs/guides/intro-structured-data) and [here](https://schema.org/docs/gs.html), and it can be validated using [this tool](https://search.google.com/structured-data/testing-tool/u/0/).

##### **> Cookies Consent Widget**

As GSPR requires, decentral.ca has a [cookies consent widget](https://cookieconsent.osano.com/download/) that requires user ineraction to remove. Currently it is configured to inform users that we collect cookies/info for tracking (google analytics for example), but users cannot decline the use of these cookies. It requires its own css and js files (in the header and footer respectively), and it can be thoroughly customizable via options:

```html
    <script>            
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#fff",
              "text": "#000"
            },
            "button": {
              "background": "transparent",
              "text": "#000",
              "border": "#000"
            }
          },
          "position": "bottom-left",
            "content": {
            "message": "Like most websites, we use analytics cookies to understand how this site is used — as long as your browser is set to accept them.",
            "dismiss": "Start exploring",
            "link": "Find out more.",
            "href": "https://jaxx.io/legal/thirdparties-current"
          },
        })});
    </script>
```

### **footer.php**

The footer contains all of decentral.ca's internal page links that are not available in the main menu (i.e. about, legal pages, social media accounts). It also houses all scripts and google gtag/analytics tracking code.

#### **Lazy Loading**

*Included here is a note on lazy loading. Below I outline the use of `recliner.js`, a lazy loading library. It works by adding the class `.lazy` to any `<img>` tag, and adding `data-src` to the img `src` attribute. With the `.lazy` and `.lazy-loaded` CSS classes that recliner adds, **ALL** images by default have their `opacity` set to 0. This is obviously unwanted default behaviour, but since 95% of the site images are indeed intended to be lazy-loaded, it was easier to create a css class to counter this behaviour: i.e. `.opacity-full`.  Add this to any image you DO NOT want to be lazy loaded. See below and/or their [home website](https://sourcey.com/recliner/) for more info.

## **Images**

All of decentral.ca image assets live in the /assets/img folder. As this repo has housed numerous versions of decentral.ca, there is a wide variety of images, logos, icons, and graphics.

#### **> Image Optimizing + Performance**

For best performance, all images are optimized in both dimensions and file size (using photoshop). Ideal width for main/large/banner images is `=> 1500px`, and ideal file size is `<= 150kb`.  With recliner.js (lazy load library), we can get away with larger file sizes as they are only loaded when in the viewport. Still however, it is best if these sizes not exceed `250-300kb` max. I generally reserve these for page banner images that require best resolution.

## **CSS**

1. Functional [Atomic] css: the site employs the atomic css approach where small, single purpose classes are used based on visual function. Classes are referenced once in the CSS then used repeatedly in the HTML for DRY code and the lightest possible stylesheets. See #4 for class order convention.

2. One stylesheet is used with an effort at organizing structure vertically based on relationship to HTML and page/section order. It starts with resets and global elements, proceeding to more specific styles, and ending with `@media` queries.

3. Naming conventions: 

    - titles and headings: `.site-title`, `.page-title`, `.section-title`
    - p description subheadings and CTAs: `.p-big`, `.p-btn`
    - fonts: `Helvetica Neue` is the primary theme font.
    - background images: `.bg--...`
    - background colors: `.bg-...`
    - logos and icons: `.decentral-logo`

4. Class order conventions:

    - With layout elements, classes generally proceed in the same order (with some variation depending on when edits were made or if certain individual elements needed specific treatment):
        - structural element (`.container, .row, .column`)
        - structural alignment (bootstrap flexbox alignment classes i.e. `.d-flex .justify-content-center .align-items-center`, etc.)
        - height (`.min-500` or `h-100`)
        - text alignment (`.text-left`)
        - background image, bg color, text color (`.orange`, `.navy`, `.text-primary`)
        - spacing (margin and padding)
        - shadow
        - animation classes
        
    - With individual tags or text elements, classes generally proceed as:
        - size (`.h1, .h4, .p-big`)
        - color (`.text-dark`)
        - borders (if any)
        - spacing (margin and padding)
        - text shadow (`.ts`)
        - animation classes

         *Please see [Boostrap's home site](https://getbootstrap.com/) for more details.

5. Height units
    - initially `vh` was used throughout for base layout heights, ranging from `.min-100` to `.min-70` and `.min-50` classes. Google Chrome (as of Sept 18, 2018) has a bug (they claim it's intentional) with vh units: on mobile, the browser repaints vh elements causing janky scroll behaviour with images specifically.
    - to accomodate continued use of `min-height: 100vh;` for full page images, I made a flexible `@media` class (`.min--100`) that allowd the `vh` unit to be used on desktop and higher, but changed to a fixed height on mobile to avoid the repaint issue.
    - primarily, heights are controlled by reusable `.min-` classes. Base heights are now `.min-700`, with an `-lg` class added to make 700px ~ 500px `@media max-width: 768px`, `.min-500`, `.min-400`, and `.min-300`, the latter primarily for images. This solves the jank issue and offers good scroll UX.

6. SWUP + CSS Animations

    - As mentioned, SWUP adds an `.is-animating` class that is employed in making elements move when entering and exiting the viewport on page transition.
    - You'll see in the stylesheet under `animations` the various classes that are used, including: `.down`, `.up`, `.left`, `.right`, `.zoom` and more. I've also left a number of CSS keyframe animations that can be cool additions to banner text, images, etc. in the future (`.fade-in-fwd`, `.fade-in-top`, etc).

## **JS**

1. SWUP: swup is an ajax plugin that hijacks http requests, swapping page content out without page reload. It creates an app style view-change experience akin to the angular router, significantly improving "page-load" or view change speed and overall site performance. It also allows for entrance and exit animations.

2. ***No longer in production use** GSAP: Greensock animation platform is a powerful js library for creating timeline and other complex animations. Initially AOS and then Scroll Reveal were used, but GSAP offers more versatility and is open source.

3. ***No longer in production use** Animation approach and syntax: the site uses GSAP and Scroll Magic for scroll animations, and SWUP css classes for page entrances and exits. Sections receive a GSAP trigger class (`.stagger-right`), which then triggers individual text element animations (i.e. `.slide-right`) on entry into the viewport. Structural elements (and page banner text elements) are assigned css SWUP classes (i.e. `.right`, `.right-med`, `.right-slow`) to handle exit animations during page/view changes.

4. Recliner.js: Recliner is a lazy load library for better performance with images. A css `.lazy` class is added to img tags which loads the image only when it comes into the viewport, and also adds a css class (`.lazy-loaded`) which creates an entrance fade animation for smooth UX (via JS).

4. Tilt.js: Tilt is a small js library that produces a perspective-like tilting effect on mouseover. It is used on the site 404 and 403 pages. See more [here](https://gijsroge.github.io/tilt.js/).

## **Google Analytics**
    
1. GA gtag script is added in footer for general analytics, traffic, page views, bounce rate, etc.

## **.htaccess**

1. Multiple .htaccess redirects/301s are employed to point previous .html file extensions to .php, and then to remove .php extensions entirely for pretty urls.
2. Consult Shu Wang on htaccess code (at top of .htaccess file) for countering %2fa malicious script injection via URL.

### **blog.decentral.ca redirect**

1. A note on the Decentral blog. Currently this blog is [live](https://blog.decentral.ca), but inactive. The last published article was from July 1, 2018, when Jaxx Liberty Beta was first released. For some reason in decentral.ca search results, two links to old decentral blog posts come up appearing as sitemap page links. **These links are not in the sitemap.xml file, and at present I am not clear how/why they are being displayed.  This should be addressed asap.

2. A second consideration is **deactivating this blog altogether**.  As Jaxx Blog is the company's main presence, having a second, unused property with outdated content and old branding/styling adds no value, and in the case of the aforementioned sitemap/SERPs, actually hurts Decentral.

Suggest redirecting this blog to Jaxx Blog using the following or similar in `.htaccess`:

```html
RewriteCond %{HTTP_HOST} ^blog.decentral.ca$ [NC]
RewriteRule ^(.*)$ https://www.blog.jaxx.io%{REQUEST_URI} [R=301,NC,L,QSA]
```

## **Development**

### **Local Server**

1. **NOTE FOR LOCAL DEVELOPMENT**: Because `.php` extensions are removed, pages with not load locally. You'll have to either add the extension to the url manually in the browser, or add extensions back into the file during development (and remove them before pushing to production).
2. Mac has a built in php server: `$ php -S localhost:8000` (or use whichever port is desired).

### **dev.decentral.ca**

Currently `dev.decentral.ca` is inactive. Previously this was the decentral dev URL, used for staging and testing. It has since been deactivated, possibly by cloudflare automatically, but please follow up with Shu/Jon for further info.

### **dev branch**

I have been using the `decentral_test_branch` in decentral.ca_reloaded. This branch is still active.

## A note on caching

Decentral's Dreamhost and/or Cloudflare services make use of (or have enabled) **hard caching**. This causes updates to decentral.ca to generally not be viewable unless you/a user does a hard reload, or clears their cache.

To avoid this, I started a practice of adding/updating a random string to the css file in the header.php **with every update to the site**. This breaks the cache and more easily allows changes to be viewed without page refresh:

i.e. `<link rel="stylesheet" href="/assets/css/main.css?=21">`