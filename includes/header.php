<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php 
    if(isset($title) && !empty($title)) { 
       echo $title; 
    } 
    else { 
       echo "Decentral Inc. | Canada's Leading Blockchain Startup"; 
    } ?></title>
    <!--core meta data-->
    <meta name="description" content="<?php

    if(isset($metaD) && !empty($metaD)) { 
       echo $metaD; 
    } 
    else { 
       echo "Decentral is a Toronto-based innovation hub and software company focused on blockchain technologies. Created by Ethereum co-founder and CEO and founder, Anthony Di Iorio.  Decentral Inc. is the maker of Jaxx Liberty, a multi-platform cryptocurrency wallet, was home to Canada’s first two-way Bitcoin ATM, and hosts community driven events in the domains of blockchain and decentralized technologies."; 
    } ?>" />
    <meta name="keywords" content="Decentral,Jaxx Liberty,Blockchain,Cryptocurrency,Anthony Di Iorio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="site.webmanifest">
    <!--icons-->
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="shortcut icon" href="/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- Open Graph Meta Data -->
    <meta property="og:description" content="Decentral is a Toronto-based innovation hub and software company focused on blockchain technologies. Created by Ethereum co-founder and CEO and founder, Anthony Di Iorio.  Decentral Inc. is the maker of Jaxx Liberty, a multi-platform cryptocurrency wallet, was home to Canada’s first two-way Bitcoin ATM, and hosts community driven events in the domains of blockchain and decentralized technologies.">
    <meta property="og:image" content="https://decentral.ca/assets/img/jaxx-android-tablet-pc.jpg">
    <meta property="og:site_name" content="decentral.ca">
    <meta property="og:title" content="Decentral Inc. is Canada's leading blockchain company.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://decentral.ca">
    <!-- Twitter Card Meta Data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://decentral.ca">
    <meta name="twitter:creator" content="Decentral">
    <meta name="twitter:title" content="Decentral Inc. is Canada's leading blockchain company.">
    <meta name="twitter:description" content="Decentral is a Toronto-based innovation hub and software company focused on blockchain technologies. Created by Ethereum co-founder and CEO and founder, Anthony Di Iorio.  Decentral Inc. is the maker of Jaxx Liberty, a multi-platform cryptocurrency wallet, was home to Canada’s first two-way Bitcoin ATM, and hosts community driven events in the domains of blockchain and decentralized technologies.">
    <meta name="twitter:image" content="https://decentral.ca/assets/img/jaxx-android-tablet-pc.jpg">
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.min.css?=10">
    <!--schema structured data-->
    <script type="application/ld+json">
         {
          "@context": "https://schema.org",
            "@type": "Organization",
              "name": "Decentral Inc.",
              "description": "Decentral is a Toronto-based innovation hub and software company focused on blockchain technologies. Created by Ethereum co-founder and CEO and founder, Anthony Di Iorio.  Decentral Inc. is the maker of Jaxx Liberty, a multi-platform cryptocurrency wallet, was home to Canada’s first two-way Bitcoin ATM, and hosts community driven events in the domains of blockchain and decentralized technologies.",
              "@id":"https://decentral.ca",
              "knowsAbout": "Blockchain, Cryptocurrency, Decentralized technologies.",
              "url": "https://www.decentral.ca",
              "sameAs": [
                "https://www.facebook.com/decentralca/",
                "https://twitter.com/decentralca",
                "https://www.youtube.com/channel/UCbRTp8VBYPvNF039IXO2dsg?view_as=subscriber",
                "https://www.instagram.com/decentralproject/",
                "https://www.linkedin.com/company/decentral/",
                "https://support.decentral.ca/hc/en-us",
                "https://jaxx.io",
                "https://blog.jaxx.io"
              ],
              "logo": "https://www.decentral.ca/assets/img/decentral_D_logo.png",
              "image": [
                "https://decentral.ca/assets/img/jaxx-android-tablet-pc.jpg",
                "https://decentral.ca/assets/img/jaxx-iphone-here-look.jpg",
                "https://decentral.ca/assets/img/jaxx-desk-paraphernalia.jpg",
                "https://decentral.ca/assets/img/decentral-anthony-1.jpg",
                "https://decentral.ca/assets/img/jaxx-pc-coffee.png",
                "https://decentral.ca/assets/img/decentral-toronto-flatiron.jpeg"
               ],
              "address":{
                "@type": "PostalAddress",
                "streetAddress": "292 Adelaide St W Suite 401 4th floor",
                "addressLocality": "Toronto",
                "addressRegion": "ON",
                "postalCode": "M5V 1P6",
                "addressCountry": "CA"
              },
              "foundingDate": "2014",
              "foundingLocation": {
                "@type": "Place",
                "name": "Toronto, Canada",
                "image": "https://decentral.ca/assets/img/decentral-map-grey.png"
              },
              "founder": {
                "@type": "Person",
                "name": "Anthony Di Iorio",
                "jobTitle": "Founder, CEO",
                "description": "Anthony Di Iorio is a serial entrepreneur, venture capitalist, community organizer, and thought leader in the field of digital currencies, blockchain and decentralized technologies. Anthony is the Founder and CEO of Decentral Inc.",
                "award": "2018 EY Emerging Entrepreneur of the Year Award (Ontario, Canada), 2018 FinTech Leader of the Year Award, named to Toronto Life’s list of the 50 Most Influential people in 2018.",
                "knowsAbout": "Blockchain, Cryptocurrency, Decentralized technologies, Venture Capital",
                "affiliation": "Co-founder of Ethereum, Adjunct Professor at the University of Toronto Faculty of Law.",
                "url": "https://anthonydiiorio.ca"
              },
              "brand": {
                  "@type": "Product",
                  "name": "Jaxx Liberty",
                  "description": "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.",
                  "url": "https://jaxx.io"
                  },
              "owns": { 
              "@type": "Product",
              "name": "Jaxx Liberty"
              },
              "email": "info@decentral.ca"
            }
    </script>
    <!--cookies banner-->
    <link rel="stylesheet" href="/assets/css/cookieconsent.min.css">
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
            "href": "https://jaxx.io/thirdparties-current.html"
          },
        })});
    </script>
</head>
<body>
    <div id="swup" class="transition-fade">
       <!--nav-->
        <nav id="menu" class="navbar fixed-top navbar-expand-lg down down-med">
            <a class="navbar-brand" href="/">
                <img class="decentral-navbar-brand" src="/assets/img/decentral_D_logo_white.png" alt="Decentral Inc.">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <div class="wrapper-menu">
                  <div class="line-menu half start"></div>
                  <div class="line-menu"></div>
                  <div class="line-menu half end"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jaxxliberty.php">Jaxx Liberty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/partner-network.php">Partner Network</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://blog.jaxx.io/" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--end nav-->