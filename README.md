# **Decentral Inc. SWUP Version**

The official website of Jaxx Liberty, the leading Multi-Platform Cryptocurrent Wallet created by Anthony Di Iorio, Co-founder of Ethereum and founder and CEO of Decentral and Jaxx.

For more information see [jaxx.io](https://jaxx.io) and [decentral.ca](https://decentral.ca).

## **SWUP**

This version of decentral.ca uses [SWUP](https://github.com/gmrchk/swup) as a framework for AJAX page transitions and the addition of entrance/exit animation classes. This gives the site an app-like user experience, as pages do not reload, view changes are fast, the initial page load is light, and it is easily extensible with simple (or complex) css and js animations.

Compared to smoothstate.js - the library used on an earlier redesign of decentral.ca - SWUP's implementation is much easier, uses less code, and is more flexible in terms of animation, onAfter reinitialization of js and plugins, with simple css animations that can be applied to any element. Smoothstate seemed to be more finnicky and got bogged down in terms of performance when used with large numbers of images, and with animations other than relatively simple fading.

SWUP works by wrapping main page content (any content you want changed without refresh) in a swup id `id="swup"`. This alone works to swap out content without reload. The addition of a `.transition-` class then offers great flexibility in creating custom animation options (refer the SWUP API). The base class for fading in and out is `.transition-fade`.

## **Layout and Frameworks**

The site uses Bootstrap 4.1. Layout uses native Bootstrap classes, flexbox, and functional css.

## **PHP**

PHP is used minimally for header and footer includes.

## **CSS**

1. Functional [Atomic] css: the site employs the atomic css approach where small, single purpose classes are used based on visual function. Classes are referenced once in the CSS then used repeatedly in the HTML so as to avoid class repetition in the stylesheet.

*Note: the HTML can get heavy with classes, specifically when it comes to spacing (padding and margin styles). Effort has been made to keep styles functional as much as possible, with added stylesheet classes only when necessary.*

2. One stylesheet is used with an effort at organizing structure vertically based on relationship to HTML and page/section order. It starts with resets and global elements, proceeding to more specific styles.

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
        - height (`.min-500`)
        - alignment (bootstrap flexbox alignment classes i.e. `.d-flex .justify-content-center`, etc.)
        - text alignment
        - background image, bg color, text color
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

5. Height units
    - initially `vh` was used throughout for base layout heights, ranging from `.min-100` to `.min-70` and `.min-50` classes. Google Chrome (as of Sept 18, 2018) has a bug (they claim it's intentional) with vh units: on mobile, the browser repaints vh elements causing janky scroll behaviour with images specifically.
    - decentral.ca uses fixed min-height classes (flexible in media queries). Base heights are now `.min-700`, with an `-lg` class added to make 700px ~ 500px @media (max-width: 768px), `.min-500`, `.min-400`, and `.min-300`, the latter primarily for images. This solves the jank issue and offers good scroll UX.

## **JS**

**Multiple JS plugins are used on the site.**

1. SWUP: swup is an ajax plugin that hijacks http requests, swapping page content out without page reload. It creates an app style view-change experience akin to the angular router, significantly improving "page-load" or view change speed and overall site performance, in addition to allowing for entrance and exit animations.

2. GSAP: Greensock animation platform is a powerful js library for creating timeline and other complex animations. Initially AOS and then Scroll Reveal were used, but GSAP offers more versatility and is open source.

3. Animation syntax: To achieve exit animations (without delving too deeply into SWUP's extensive API), the site uses GSAP for scroll animations, and SWUP css classes for entrances and exits. Individual text elements are given GSAP scroll classes (i.e. `.slide-right`), while structural elements are assigned css SWUP classes (i.e. `.right`, `.right-med`, `.right-slow`) to handle exiting during view change.

 ## **Google Analytics**
    
1. GA gtag script is added in footer for general analytics, traffic, page views, bounce rate, etc.

2. Onclick events will be been added to all <a>, <button>, and nav links (like jaxx.io) to track user flow through the site.  Tags will be added once a more permanent URL/domain structure is adopted by Decentral (subdomains vs. subdirectories). Tags will be organized by category (destination and/or item i.e. Downloads page or Android), and given a label (location on page i.e. menu, section, footer) for analysis: <onclick="googleAnalyticsTrigger('Downloads_Page', 'Footer')">

## **.htaccess**

1. Multiple .htaccess rewrites are employed to redirect now-defunct pages to current versions (i.e. /history.html --> /about), to redirect previous .html extensions to .php, and then to remove .php extensions for pretty urls.