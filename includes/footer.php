 <!--footer-->
        <footer>
            <div class="container-fluid p-0">
                <div class="row d-flex d-flex justify-content-center align-items-end text-secondary bg-light text-secondary px-3 pt-5">
                   <div class="col-lg-3 col-md-6 px-4 py-3 skew">
                        <ul class="list-unstyled w-100">
                            <li class="h4 font-weight-bold slide-down">Company</li>
                            <hr class="hr-big border-0 bg-secondary slide-down">
                            <li class="slide-down"><a href="/about.php">About</a></li>
                            <li class="slide-down"><a href="/partner-network.php">Partner Network</a></li>
                            <li class="slide-down"><a href="/about.php">Team</a></li>
                            <li class="slide-down"><a href="/about.php">History</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 px-4 py-3 skew">
                        <ul class="list-unstyled w-100">
                            <li class="h4 font-weight-bold slide-down">Jaxx Liberty</li>
                            <hr class="hr-big border-0 bg-secondary slide-down">
                            <li class="slide-down"><a href="https://jaxx.io/features">Features</a></li>
                            <li class="slide-down"><a href="https://jaxx.io/community">Community</a></li>
                            <li class="slide-down"><a href="https://support.decentral.ca/hc/en-us" target="_blank">Jaxx Support</a></li>
                            <li class="slide-down"><a href="https://blog.jaxx.io">Blog</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 px-4 py-3 skew">
                        <ul class="list-unstyled w-100">
                            <li class="h4 font-weight-bold slide-down">Download</li>
                            <hr class="hr-big border-0 bg-secondary slide-down">
                            <li class="slide-down"><a href="https://play.google.com/store/apps/details?id=com.liberty.jaxx">Android</a></li>
                            <li class="slide-down"><a href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8">iOS</a></li>
                            <li class="slide-down"><a href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne">Chrome</a></li>
                            <li class="slide-down"><a href="https://jaxx.io/downloads">Desktop</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 px-4 py-3 skew">
                        <ul class="list-unstyled w-100">
                            <li class="h4 font-weight-bold slide-down">Connect</li>
                            <hr class="hr-big border-0 bg-secondary slide-down">
                            <li class="slide-down"><a href="https://www.facebook.com/JaxxWallet" target="_blank">Facebook</a></li>
                            <li class="slide-down"><a href="https://twitter.com/jaxx_io" target="_blank">Twitter</a> / <a href="https://twitter.com/Jaxx_Support" target="_blank">Twitter Support</a></li>
                            <li class="slide-down"><a href="https://www.instagram.com/jaxx_io/" target="_blank">Instagram</a></li>
                            <li class="slide-down"><a href="https://www.reddit.com/r/jaxx/" target="_blank">Reddit</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-12 d-flex justify-content-center text-center py-4 navy slide-down">
                        <p class="font-weight-light m-0"><a href="https://decentral.ca/" target="_blank" onclick="googleAnalyticsTrigger('decentral.ca', 'Legal_Footer')">&copy; Decentral Inc.</a> <img class="footer-leaf mx-1" src="/assets/img/jaxx-maple-leaf-navy-2.png" alt="Decentral inc."> Made with love in Canada</p>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </footer>
        </div><!--end main page-->

    <!-- Scripts -->
    <!--seems to only work with either older jquery or non-slim build-->
    <!--<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>-->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>-->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/swup.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!--aos js-->
    <script src="/assets/js/aos.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- recliner lazy load js-->
    <script src="/assets/js/recliner.js"></script>
    <!--js tilt 404-->
    <script src="/assets/js/tilt.jquery.min.js"></script>
    <script src="/assets/js/cookieconsent.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <!-- Global site tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85893600-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-85893600-1');

    </script>
    
    
    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-85893600-1', 'auto');
        ga('send', 'pageview');

        function googleAnalyticsTrigger(category, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: 'download',
                eventLabel: label
            });
        }

    </script>
  </body>
</html>