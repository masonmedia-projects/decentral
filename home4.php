<?php

$title = "Jaxx Liberty | Home";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";

include 'includes/header.php';

?>

<!--banner-->

<div role="banner" class="container-fluid">
    <div class="spacer pt-5 mt-3"></div>
    
    <div class="row min-700-lg bg--home-banner-4 py-4 scene_element scene_element--fadein"> 
       <div class="offset-lg-6"></div>       
        <div class="col-lg-6 d-flex justify-content-center align-items-center p-3 o-12 scene_element scene_element--fadeindown">
           <div class="wrap bg-white-op p-5 shadow-lg rounded">
                <h1 class="h4 text-secondary scene_element scene_element--fadeinright">Jaxx Liberty</h1>
                <h2 class="section-title font-weight-bold scene_element scene_element--fadeindown">Your all-in-one digital asset wallet.</h2>
                <hr class="hr-big border-0 mt-2 bg-orange scene_element scene_element--fadeinleft">
                <p class="p-big pt-0 m-0 scene_element scene_element--fadeinleft">Securely manage and exchange more than 85 digital assets including Bitcoin, Ethereum, Litecoin, and Dash, all for free.</p>
                <div class="row d-flex scene_element scene_element--fadeinup p-3">
                    <div class="col-xs-6 mr-1">
                        <a href="/downloads.php" class="btn btn-lg btn-orange mt-3">Download</a>
                    </div>
                    <div class="col-xs-6">
                        <a href="#sec-1" class="btn btn-lg btn-outline-orange mt-3">Learn More</a>
                    </div>
                </div><!--end button nest container-->
            </div>
        </div>
    </div>
</div>

<!--main body-->

<div id="sec-1" class="container-fluid p-0 bg-black text-light scene_element scene_element--fadein">
    <div class="row d-flex min-700-lg p-0">
        <div class="col-lg-5 banner-left bg-black p-5 o-12" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
                <h2 class="h4">Jaxx Liberty</h2>
                <h3 class="h1 font-weight-bold text-light">Transforming the way you manage your digital assets.</h3>
                <hr class="hr-big border-0 bg-orange">
                <p class="p-big pt-0 m-0">Manage your digital assets and move value safely and securely without leaving Jaxx Liberty.</p>
                <a href="/features.php" class="btn btn-lg btn-orange mt-3">Learn More</a>
        </div>
        <div class="col-lg-7 d-flex bg--home-1 min-300 shadow-lg" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
        </div>
    </div><!--end row-->
    
    <!--features-->
    <div class="row d-flex min-700-lg">
        <div class="col-lg-7 min-300 bg--home-features shadow-lg" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000"></div>
        <div class="col-lg-5 banner-left bg-black p-5 o-12" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
                <h2 class="h4">Features</h2>
                <h3 class="h1 font-weight-bold text-light">See why people love Jaxx Liberty.</h3>
                <hr class="hr-big border-0 bg-orange">
                <p class="p-big pt-0 m-0 text-orange">With Jaxx Liberty you can get the latest headline news, real-time market data, check your portfolio, and exchange between digital assets all in one place.</p>
                <a class="btn btn-lg btn-orange mt-3" href="/features.php">Explore</a>  
        </div>
        
    </div><!--end row-->
    
<!--security-->
    <div class="row d-flex min-700-lg text-light">
        <div class="col-lg-5 banner-left bg-black p-5 o-12" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">
            <h2 class="h4">Security</h2>
            <h3 class="h1 font-weight-bold">You deserve the best.</h3>
            <hr class="hr-big border-0 bg-orange">
            <p class="p-big pt-0 m-0">Jaxx Liberty keeps your information private, secure, and hidden (even from us).</p>
            <a class="btn btn-lg btn-orange mt-3" href="/security.php">Find Out</a>
        </div>
        <div class="col-lg-7 bg--security-banner min-300 p-0 shadow-lg" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1000"></div>
    </div><!--end row-->
    
    <!--multi platform + download-->
    <div class="row d-flex min-700-lg bg-white text-light">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-center bg--home-platform-2 min-300 p-0" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
        </div>
        <div class="col-lg-5 banner-left bg-black p-5 o-12" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <h2 class="h4">Multi-platform</h2>
            <h3 class="h1 font-weight-bold">Use on your favourite device.</h3>
            <hr class="hr-big border-0 bg-orange">
            <p class="p-big pt-0 m-0">Download Jaxx Liberty for Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.</p>
            <div class="btn-group">
                <button id="download" type="button" class="btn btn-lg btn-orange dropdown-toggle mt-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Start Now</button>
                <div class="dropdown-menu" >
                <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank" onclick="googleAnalyticsTrigger('Android', 'Home_Section2')">Android</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank">iOS</a>
                 <div class="dropdown-divider"></div>
                <!--chrome extension-->
                <a class="dropdown-item" role="button" onclick="googleAnalyticsTrigger('Desktop', 'Home_Section2')" href="/downloads.php">Desktop</a>
                <div class="dropdown-divider"></div>
                <!--chrome extension-->
                <a class="dropdown-item" role="button" onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank">Chrome</a>
                </div>
            </div>
        </div>
    </div><!--end row-->
    
    <!--testimonials-->
    <div id="testimonials" class="row d-flex min-700-lg m-3">
      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center text-light min-500 bg--home-testimonials p-5 o-12" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <h2 class="h4">Trusted by the best</h2>
            <h3 class="section-title text-light">You're in good company.</h3>
            <hr class="hr-big border-0 bg-orange">
            <p class="p-big pt-0 pb-3">What blockchain leaders are saying about Jaxx Liberty.</p>       
            
        <!--cards-->
           
        <div class="card-deck text-secondary">
              <div class="card border-0 mx-2 shadow-lg">
                <img class="card-img-top" src="/assets/img/jaxx-digibyte.jpeg" alt="Card image cap">
                <div class="card-body p-4 banner-left">
                    <i class="fa fa-quote-right p-0 fa--stroke fa--stroke-o"></i>
                    <hr class="hr-big border-0 bg-lightgrey">
                    <p class="border-right border-orange pr-3">"I look forward to seeing the new Jaxx Liberty and how the broader DigiByte community will use it."</p>
                    <p  class="font-weight-bold">Josiah Spackman</p>
                </div>
                <div class="card-footer blockquote-footer bg-light font-weight-bold orange p-3">Ambassador, DigiByte Foundation</div>
              </div>
              <div class="card border-0 mx-2 shadow-lg">
                <img class="card-img-top" src="/assets/img/jaxx-polymath.png" alt="Card image cap">
                <div class="card-body p-4 banner-left">
                    <i class="fa fa-quote-right p-0 fa--stroke fa--stroke-o"></i>
                    <hr class="hr-big border-0 bg-lightgrey">
                    <p class="border-right border-orange pr-3">"Polymath welcomes the launch of Jaxx Liberty. We chose Jaxx Liberty as our go-to wallet for the POLY token community."</p>
                    <p class="font-weight-bold">Trevor Koverko</p>
                </div>
                <div class="card-footer blockquote-footer bg-light font-weight-bold orange p-3">Co-Founder & CEO, Polymath</div>
              </div>
              <div class="card border-0 mx-2 shadow-lg">
                <img class="card-img-top" src="assets/img/jaxx-rsk.png" alt="Card image cap">
                <div class="card-body p-4 banner-left">
                    <i class="fa fa-quote-right p-0 fa--stroke fa--stroke-o"></i>
                    <hr class="hr-big border-0 bg-lightgrey">
                    <p class="border-right border-orange pr-3">"We’re very happy to partner with Jaxx, a highly-secure and easy-to-use wallet that is the first to support RSK"</p>
                    <p class="font-weight-bold">Diego Gutierrez Zaldivar</p>
                </div>
                <div class="card-footer blockquote-footer bg-light font-weight-bold orange p-3">CEO & Co-Founder, RSK Labs</div>
              </div>
              <div class="card border-0 mx-2 shadow-lg">
                <img class="card-img-top" src="assets/img/jaxx-wax.jpg" alt="Card image cap">
                <div class="card-body p-4 banner-left">
                    <i class="fa fa-quote-right p-0 fa--stroke fa--stroke-o"></i>
                    <hr class="hr-big border-0 bg-lightgrey">
                    <p class="border-right border-orange pr-3">“Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve and support our expanding ecosystem.”</p>
                    <p class="font-weight-bold">Malcolm CasSelle</p>
                </div>
                <div class="card-footer blockquote-footer bg-light font-weight-bold orange p-3">President, WAX / CIO, OPSkins</div>
              </div>
          </div><!--end card deck-->
      </div>
    </div>
    <!--end row-->
    
    <!--end testimonials-->

    <!--Ecosystem-->

    <div class="row d-flex bg-black text-light min-700-lg">
        <div class="col-lg-5 banner-left min-400 p-5 o-12" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <h2 class="h4">Community</h2>
            <h3 class="h1 font-weight-bold">The Jaxx Liberty Ecosystem</h3>
            <hr class="hr-big border-0 bg-orange">
            <p class="p-big pt-0 m-0">Jaxx Liberty brings together over 85 digital assets and communities, working together to unite blockchain projects around the globe.</p>
            <a class="btn btn-lg btn-orange mt-3" href="/community.php">Join Us</a>
        </div>
        <div class="col-lg-7 bg--home-friends min-300 p-0" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000"></div>
    </div><!--end row-->
    
    <!--card grid-->

   <div class="row d-flex min-50 m-3 rounded">
       <div class="card-deck px-2" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
         <div class="card border-0 shadow-lg text-secondary mx-2 my-1">
            <img class="card-img-top" src="/assets/img/jaxx-support-banner-redux.jpg" alt="Jaxx Liberty Support">
              <div class="card-body text-left p-5">
                  <h4 class="h3 card-title font-weight-bold">Jaxx Support</h4>
                  <hr class="hr-big border-0 bg-lightgrey">
                  <p class="card-text text-muted">Need help? Our User Success Team is available 24/7 to answer all of your questions through our written channels.</p>
                  <a class="btn btn-lg btn-outline-orange mt-3" href="https://support.decentral.ca/hc/en-us" target="_blank">Get Help</a>
            </div>
          </div><!--end card-->

          <div class="card border-0 shadow-lg text-secondary mx-2 my-1" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <img class="card-img-top" src="/assets/img/jaxx-home-banner-redux.jpg" alt="Jaxx Liberty Blog">
            <div class="card-body text-left p-5">
              <h4 class="h3 card-title font-weight-bold">Jaxx Blog</h4>
              <hr class="hr-big border-0 bg-lightgrey"> 
              <p class="card-text">Read the latest posts and find articles about Jaxx Liberty, integrations, blockchain news, our partners, and more.</p>
              <a class="btn btn-lg btn-outline-orange mt-3" href="https://blog.jaxx.io/" target="_blank">Read More</a>
            </div>
          </div><!--end card-->

          <div class="card border-0 shadow-lg text-secondary mx-2 my-1" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <img class="card-img-top" src="/assets/img/jaxx-people-2.jpg" alt="About Decentral Inc., the makers of Jaxx Liberty">
            <div class="card-body text-left p-5">
              <h4 class="h3 card-title font-weight-bold">About Decentral</h4>
              <hr class="hr-big border-0 bg-lightgrey">
              <p class="card-text text-muted">Jaxx Liberty was developed by Anthony Di Iorio, co-founder of Ethereum, and founder and CEO of Decentral Inc.</p>
              <a class="btn btn-lg btn-outline-orange mt-3" href="/about.php">Find Out</a>
            </div>
          </div><!--end card-->
        </div><!--end card deck-->
    </div><!--end row-->

    <!-- social-->
    <div id="sec-5" class="row d-flex min-700-lg text-light bg-black">
        <div class="col-lg-5 banner-left min-300 p-5 o-12" data-aos="fade-up" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <h2 class="h4 scene_element scene_element--fadeinright">Get Social</h2>
            <h3 class="h1 font-weight-bold">Join the Jaxx Liberty community today.</h3>
            <hr class="hr-big border-0 bg-orange">
            <div class="container-fluid p-0">
                <div class="row d-flex justify-content-center align-items-center p-0">
                    <div class="col-xs-3">
                        <a href="https://www.facebook.com/JaxxWallet/" target="_blank" onclick="googleAnalyticsTrigger('Facebook', 'Community_Page')">
                        <i class="fa fa-facebook orange"></i>
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="https://twitter.com/jaxx_io?lang=en" target="_blank" onclick="googleAnalyticsTrigger('Twitter', 'Community_Page')">
                        <i class="fa fa-twitter orange"></i>
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="https://www.instagram.com/jaxx_io/" target="_blank" onclick="googleAnalyticsTrigger('Instagram', 'Community_Page')">
                        <i class="fa fa-instagram orange"></i>
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="https://www.youtube.com/user/decentralTV" target="_blank" onclick="googleAnalyticsTrigger('Youtube', 'Community_Page')">
                        <i class="fa fa-youtube orange"></i>
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="https://t.me/jaxxliberty" target="_blank" onclick="googleAnalyticsTrigger('Telegram', 'Community_Page')">
                        <i class="fa fa-telegram orange"></i>
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="https://www.reddit.com/r/jaxx/" target="_blank" onclick="googleAnalyticsTrigger('Reddit', 'Community_Page')">
                        <i class="fa fa-reddit orange"></i>
                        </a>
                    </div>
                </div>
            </div><!--end social container-->
        </div>
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-center bg--home-social min-300 p-0" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
        </div>
    </div><!--end row-->

    <!--download-->
    <div id="sec-2" class="row d-flex min-700-lg text-light">
        <div class="col-lg-7 bg--home-download min-300 p-0" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000"></div>
        <div class="col-lg-5 banner-left min-300 p-5 o-12" data-aos="fade-up" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <h2 class="h4">Download</h2>
            <h3 class="h1 font-weight-bold">Try Jaxx Liberty for yourself.</h3>
            <hr class="hr-big border-0 bg-orange">
            <p class="p-big pt-0 m-0">Take control of your digital life. Download Jaxx Liberty. It’s 100% free.</p>
            <a href="/downloads.php" onclick="googleAnalyticsTrigger('Downloads_Page', 'Features_CTA')">
            <button class="btn btn-lg btn-orange my-3">Start Now</button>
            </a>
        </div>
    </div><!--end row-->       
</div><!--end container-->

<?php

include 'includes/footer.php';

?>