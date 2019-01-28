<?php

$title = "Jaxx Liberty | Home";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";

include 'includes/header.php';

?>

<!--banner iso-->

<div role="banner" class="container-fluid">
    <div class="spacer mt-5"></div>
    <div class="row d-flex bg--home-banner-desktop min-700-lg pb-5 scene_element scene_element--fadein">        
        <div class="col-lg-12 d-flex flex-column justify-content-end align-items-center text-center p-5 o-12 scene_element scene_element--fadeindown">
            <h1 class="h4 text-light ts scene_element scene_element--fadeinright">Jaxx Liberty</h1>
            <h2 class="page-title text-light ts font-weight-bold">Your all-in-one digital asset wallet.</h2>
            <hr class="hr-big border-0 my-2 bg-orange scene_element scene_element--fadeinleft">
            <div class="row d-flex scene_element scene_element--fadeinup p-3">
                <div class="col-xs-6 mr-1">
                    <a href="/downloads.php" class="btn btn-lg btn-orange">Download</a>
                </div>
                <div class="col-xs-6">
                    <a href="#sec-1" class="btn btn-lg btn-outline-light">Learn More</a>
                </div>
            </div><!--end button nest container-->
        </div>
    </div>
</div>

<!--main body-->

<div id="sec-1" class="container-fluid p-0 text-secondary">        
    
    <div class="card-deck m-3">
      <div class="card bg-lightgrey m-2 border-0 shadow rounded-right-top">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-sm-12 bg--home-1 min-300 rounded-right-top"></div>
                   <div class="col-sm-12 banner-left bg-lightgrey p-5 min-300">
                       <h2 class="h4">Jaxx Liberty</h2>
                        <h3 class="h1 font-weight-bold text-dark">Transforming the way you manage your digital assets.</h3>
                        <hr class="hr-big border-0 my-3 bg-orange">
                        <p class="p-big pt-0 m-0 text-secondary">Securely manage and exchange more than 85 digital assets including Bitcoin, Ethereum, Litecoin, and Dash, all for free.</p>
                        <a class="font-weight-bold mt-3" href="/features.php"><p class="orange">Learn more &#8594;</p></a>
                   </div>
               </div>
           </div>
      </div>
      <div class="card bg-lightgrey m-2 border-0 shadow rounded-right-top">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-sm-12 bg--home-features min-300 rounded-right-top"></div>
                   <div class="col-sm-12 banner-left p-5">
                       <h2 class="h4">Features</h2>
                        <h3 class="h1 font-weight-bold text-dark">See what Jaxx Liberty can do for you.</h3>
                        <hr class="hr-big border-0 bg-orange">
                        <p class="p-big pt-0 m-0 text-orange">Get the latest blockchain headline news, real-time market data, check your portfolio, and exchange between digital assets all in one place.</p>
                       <a class="font-weight-bold mt-3" href="/features.php"><p class="orange">Explore &#8594;</p></a> 
                   </div>
               </div>
           </div>
      </div>
    </div>
   
    <!--download-->
    <div class="row bg--downloads-banner text-secondary min-700-lg shadow-lg rounded-right-top mx-4 my-0 p-0">
            <div class="offset-lg-1"></div>
            <div class="col-lg-10 d-flex flex-column justify-content-center align-items-center text-center p-5 m-0">
                <h2 class="h4 orange">Download</h2>
                <h3 class="section-title text-dark font-weight-bold scene_element scene_element--fadeinleft scene_element--delayed">Start Your Journey</h3>
                <hr class="hr-big border-0 bg-orange scene_element scene_element--fadeinright scene_element--delayed"> 
                <p class="p-big pt-0 m-0 text-secondary">Join thousands of users who already trust Jaxx Liberty. Download it for free on Android, iOS, Mac OS X, Windows, Linux, or Google Chrome extension.</p>               
                <div class="row downloads-badge-container pt-3 scene_element scene_element--fadeinup">
                    <!--jaxx liberty google store-->
                    <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Downloads_Mobile')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img title="Play Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-google-play.png" alt="Google Store Button"/></a>
                    <!--jaxx liberty itunes-->
                    <a onclick="googleAnalyticsTrigger('iOS', 'Downloads_Mobile')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank"><img title="iTunes Store Button" class="store-badge mr-1 mt-1" src="/assets/img/jaxx-app-store.png" alt="iTunes Store Button"/></a>
                    <!--jaxx liberty chrome-->
                    <a onclick="googleAnalyticsTrigger('iOS', 'Downloads_Mobile')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank"><img title="iTunes Store Button" class="store-badge mt-1" src="/assets/img/jaxx-chrome-store.png" alt="Chrome Web Store"/></a>
                </div><!--end button nest row--> 
                
                <!--desktop dropdown--> 
                <div class="btn-group scene_element scene_element--fadeinup">
                  <h4 class="dropdown-toggle mr-2 pt-4" href="#" data-toggle="modal" data-target="#desktopModal">Desktop Versions</h4>
                </div><!--end button group-->
            </div><!--end col-->
            <div class="offset-lg-1"></div>
        </div><!--end row-->
        
        <!--nested container for modals-->
        <div class="row p-0">
           <!--jaxx liberty linux 32 bit modal-->
            <div class="modal fade" id="desktopModal" tabindex="-1" role="dialog" aria-labelledby="desktopModal" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-light border-bottom-0 p-0">
                    <button type="button" class="close font-weight-light ml-auto mt-2 mr-2" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>
                  <div class="modal-body bg-light px-5 pb-5">
                       <div class="container-fluid">
                           <div class="row">
                                <div class="col-sm-12 d-flex flex-column justify-content-start align-items-start text-left w-100">
                                    <h2 class="section-title orange m-0 font-weight-bold">Jaxx Liberty for Desktop</h2>
                                </div>
                                <div class="col-sm-12 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <p class="pt-4 m-0 border-top">The checksums below are a simple way for you to double-check the copy of Jaxx you are installing is genuine. You can match the checksum in your instance of Jaxx with the data below.</p>
                               </div>
                              <!--mac desktop-->
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">*Mac OSX</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx requires OS X 10.9 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ sha1sum Jaxx Liberty-2.1.0.dmg</p>
                                    <p class="word-break">2e5c28adae3f561b31d7d8517d1654573cea334e</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Mac_Modal', 'Downloads_Desktop_Liberty_Mac')" href="https://github.com/Decentralca/Jaxx-Liberty/releases/download/v2.1.0/Jaxx.Liberty-2.1.0.dmg">Download Mac</a>
                               </div><!--end mac-->
                               <!--windows desktop-->
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Windows</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx requires Windows 7 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ sha1sum Jaxx Liberty-setup-2.1.0.exe</p>
                                    <p class="word-break">9203b0e675f1d16eeb0ae4a8432b70efca653d9e</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Windows_Modal', 'Downloads_Desktop_Liberty_Windows')" href="https://github.com/Decentralca/Jaxx-Liberty/releases/download/v2.1.0/Jaxx-Liberty-setup-2.1.0.exe">Download Windows</a>
                               </div><!--end windows-->
                                <!--linux 32 desktop-->
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                   <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Linux 32</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx requires Ubuntu 12.04, Fedora 21, or Debian 8 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ sha1sum com.liberty.jaxx-2.1.0-i386.AppImage</p>
                                    <p class="word-break">1db39b70645a2f65e3525d64aea480fda2a4294f</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Linux_Modal', 'Downloads_Desktop_Liberty_32')" href="https://github.com/Decentralca/Jaxx-Liberty/releases/download/v2.1.0/com.liberty.jaxx-2.1.0-i386.AppImage">Download Linux 32</a>
                               </div><!--end linux 32-->
                               <!--linux 64 desktop-->
                               <div class="col-xl-6 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                   <h3 class="h1 w-100 font-weight-light text-secondary py-3 mb-3 border-bottom border-top">Linux 64</h3>
                                    <h5 class="pb-4 m-0 border-bottom">Jaxx requires Ubuntu 12.04, Fedora 21, or Debian 8 (or later)</h5>
                                    <p class="pt-3 font-weight-bold">$ sha1sum com.liberty.jaxx-2.1.0-x86_64.AppImage</p>
                                    <p class="word-break">e22adc1edb35d2ed46cbfc6fa4962d98a55c90e1</p>
                                    <a role="button" class="btn btn-orange mt-3" onclick="googleAnalyticsTrigger('Linux_Modal', 'Downloads_Desktop_Liberty_64')" href="https://github.com/Decentralca/Jaxx-Liberty/releases/download/v2.1.0/com.liberty.jaxx-2.1.0-x86_64.AppImage">Download Linux 64</a>
                               </div><!--end linux 64-->
                                <div class="col-sm-12 d-flex flex-column justify-content-start align-items-start text-left p-3">
                                    <p class="pt-4 m-0 border-top"><b>*Mac OS X Note: </b>Depending on your system settings, the system might warn you that "Jaxx can't be opened because it comes from an unidentified developer." You can either change your system settings to allow apps from unknown developers in your "Security & Privacy" settings, or simply right click Jaxx -> Open (as administrator), which will prompt you with a warning.</p>
                               </div><!--end Mac desktop note-->
                           </div><!--end row-->
                       </div><!--end container-->
                    </div><!--end modal body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
              </div>
            </div><!--end desktop modal-->
          </div><!--end row-->     
          
    <!--security + community-->   
    
     <div class="card-deck m-3">
      <div class="card bg-lightgrey m-2 border-0 shadow rounded-right-top">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-sm-12 bg--home-security min-300 rounded-right-top"></div>
                   <div class="col-sm-12 banner-left bg-lightgrey p-5 min-300">
                        <h2 class="h4">Security</h2>
                        <h3 class="h1 font-weight-bold text-dark">More power to you.</h3>
                        <hr class="hr-big border-0 mt-2 bg-orange">
                        <p class="p-big pt-0 m-0 text-secondary">Jaxx Liberty keeps your 12-word backup phrase, password, and private keys hidden, even from us.</p>
                        <a class="font-weight-bold mt-3" href="/security.php"><p class="orange">Discover &#8594;</p></a>
                   </div>
               </div>
           </div>
      </div>
      <div class="card bg-lightgrey m-2 border-0 shadow rounded-right-top">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-sm-12 bg--home-community min-300 rounded-right-top"></div>
                   <div class="col-sm-12 banner-left p-5">
                        <h2 class="h4">Community</h2>
                        <h3 class="h1 font-weight-bold text-dark">The Jaxx Liberty ecosystem.</h3>
                        <hr class="hr-big border-0 mt-2 bg-orange">
                        <p class="p-big pt-0 m-0 text-secondary">Working together to unite blockchain projects around the globe.</p>
                        <a class="font-weight-bold mt-3" href="/community.php"><p class="orange">Join us &#8594;</p></a> 
                   </div>
               </div>
           </div>
      </div>
    </div>
    
    <!--testimonials-->
    <div id="testimonials" class="row d-flex min-700-lg bg--home-testimonials mx-4 my-0 rounded-right-top shadow-lg">
      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center text-light min-500 p-5 o-12" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
        <h2 class="h4">Trusted by the best</h2>
        <h3 class="section-title text-light">You're in good company.</h3>
        <hr class="hr-big border-0 bg-orange">
        <p class="p-big pt-0 pb-4">What blockchain leaders are saying about Jaxx Liberty.</p>       
            
        <!--cards-->
           
        <div class="card-deck text-secondary">
              <div class="card rounded-right-top border-0 mx-2 shadow-lg">
                <img class="card-img-top rounded-right-top" src="/assets/img/jaxx-digibyte.jpeg" alt="Card image cap">
                <div class="card-body banner-left p-4">
                    <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                    <p class="border-right border-orange pr-3">"I look forward to seeing the new Jaxx Liberty and how the broader DigiByte community will use it."</p>
                    <p  class="font-weight-bold">Josiah Spackman</p>
                    <footer class="blockquote-footer font-weight-bold orange mb-3">Ambassador, DigiByte Foundation</footer>
                </div>
              </div>
              <div class="card rounded-right-top border-0 mx-2 shadow-lg">
                <img class="card-img-top rounded-right-top" src="/assets/img/jaxx-polymath.png" alt="Card image cap">
                <div class="card-body p-4 banner-left">
                    <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                    <p class="border-right border-orange pr-3">"Polymath welcomes the launch of Jaxx Liberty. We chose Jaxx Liberty as our go-to wallet for the POLY token community."</p>
                    <p class="font-weight-bold">Trevor Koverko</p>
                    <footer class="blockquote-footer font-weight-bold orange mb-3">Co-Founder & CEO, Polymath</footer>
                </div>
              </div>
              <div class="card rounded-right-top border-0 mx-2 shadow-lg">
                <img class="card-img-top rounded-right-top" src="assets/img/jaxx-rsk.png" alt="Card image cap">
                <div class="card-body p-4 banner-left">
                    <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                    <p class="border-right border-orange pr-3">"We’re very happy to partner with Jaxx, a highly-secure and easy-to-use wallet that is the first to support RSK"</p>
                    <p class="font-weight-bold">Diego Gutierrez Zaldivar</p>
                    <footer class="blockquote-footer font-weight-bold orange mb-3">CEO & Co-Founder, RSK Labs</footer>
                </div>
              </div>
              <div class="card rounded-right-top border-0 mx-2 shadow-lg">
                <img class="card-img-top rounded-right-top" src="assets/img/jaxx-wax.jpg" alt="Card image cap">
                <div class="card-body p-4 banner-left">
                    <i class="fa fa-quote-right p-0 pb-3 mb-3 fa--stroke fa--stroke-o border-bottom"></i>
                    <p class="border-right border-orange pr-3">“Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve and support our expanding ecosystem.”</p>
                    <p class="font-weight-bold">Malcolm CasSelle</p>
                    <footer class="blockquote-footer font-weight-bold orange mb-3">President, WAX / CIO, OPSkins</footer>
                </div>
              </div>
          </div><!--end card deck-->
      </div>
    </div>
    <!--end row-->
    
    <!--end testimonials-->

    <!--Our friends-->

    <div class="row d-flex bg--home-friends rounded-right-top m-4 min-700-lg shadow-lg" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center min-400 py-5">
            <h2 class="section-title text-light ts m-0" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">Our Friends</h2>
            <hr class="hr-big border-0 bg-orange" data-aos="fade-down" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <p class="p-big text-light ts pt-2 m-0" data-aos="fade-right" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">Jaxx Liberty brings together over 85 digital assets and communities.</p>
            <a href="/community.php"><p class="text-light ts font-weight-bold"><p class="p-btn text-light mt-3">Learn more &#8594;</p></a>
            <img class="partner-logos-laptop mt-4" src="/assets/img/jaxx-laptop-partners.png" alt="Jaxx Liberty Partners and Friends" data-aos="fade-up" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
        </div>
    </div><!--end row-->

    <!--card grid-->

   <div class="row d-flex min-50 m-4">
       <div class="card-deck px-2" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
         <div class="card border-0 rounded-right-top shadow-lg text-secondary mx-2 my-1">
            <img class="card-img-top rounded-right-top" src="/assets/img/jaxx-support-jump.jpeg" alt="Jaxx Liberty Support">
              <div class="card-body text-left p-5">
                  <h4 class="h3 card-title font-weight-bold">Jaxx Support</h4>
                  <hr class="hr-big border-0 bg-orange">
                  <p class="card-text text-muted">Need help? Our User Success Team is available 24/7 to answer all of your questions through our written channels.</p>
                  <a class="mt-3" href="https://support.decentral.ca/hc/en-us" target="_blank"><p class="orange">Get Help &#8594;</p></a>
            </div>
          </div><!--end card-->

          <div class="card border-0 rounded-right-top shadow-lg text-secondary mx-2 my-1" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <img class="card-img-top rounded-right-top" src="/assets/img/jaxx-macbook-iphone-headphones-desk-blog.jpg" alt="Jaxx Liberty Blog">
            <div class="card-body text-left p-5">
              <h4 class="h3 card-title font-weight-bold">Jaxx Blog</h4>
              <hr class="hr-big border-0 bg-orange"> 
              <p class="card-text">Read the latest posts and find articles about Jaxx Liberty, integrations, blockchain news, our partners, and more.</p>
                <a class="mt-3" href="https://blog.jaxx.io/" target="_blank"><p class="orange">Read More &#8594;</p></a>
            </div>
          </div><!--end card-->

          <div class="card border-0 rounded-right-top shadow-lg text-secondary mx-2 my-1" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <img class="card-img-top rounded-right-top" src="/assets/img/jaxx-people-2.jpg" alt="About Decentral Inc., the makers of Jaxx Liberty">
            <div class="card-body text-left p-5">
              <h4 class="h3 card-title font-weight-bold">About Decentral</h4>
              <hr class="hr-big border-0 bg-orange">
              <p class="card-text text-muted">Jaxx Liberty was developed by Anthony Di Iorio, co-founder of Ethereum, and founder and CEO of Decentral Inc.</p>
              <a class="mt-3" href="/about.php"><p class="orange">Find out &#8594;</p></a>
            </div>
          </div><!--end card-->
        </div><!--end card deck-->
    </div><!--end row-->

    <!-- social-->
    <div id="sec-5" class="row d-flex min-700-lg text-secondary bg-light m-4 shadow-lg rounded-right-top">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center min-300 p-5 o-12" data-aos="fade-up" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
            <h2 class="h4 scene_element scene_element--fadeinright">Get Social</h2>
            <h3 class="section-title m-0">Join the Jaxx Liberty community today.</h3>
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
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg--home-social min-300 p-4 rounded-right-top" data-aos="fade" data-aos-easing="ease-in-out-quart" data-aos-duration="1000"></div>
    </div><!--end row-->

    <!--download-->
           
    <div id="sec-2" class="row d-flex min-700-lg bg--home-download text-secondary mx-4 mt-0 mb-4 shadow-lg rounded-right-top" data-aos="fade-up" data-aos-easing="ease-in-out-quart" data-aos-duration="1000">
        <div class="offset-lg-5"></div>
        <div class="col-lg-7 d-flex banner-left min-300 p-5 o-12">
            <div class="wrap bg-white-op p-5 rounded shadow-lg">
                <h2 class="h4">Download</h2>
                <h3 class="section-title">Try Jaxx Liberty for yourself.</h3>
                <hr class="hr-big border-0 bg-orange">
                <p class="p-big pt-0 m-0">Take control of your digital life. Download Jaxx Liberty. It’s 100% free.</p>
                <a href="/downloads.php" onclick="googleAnalyticsTrigger('Downloads_Page', 'Features_CTA')">
                <p class="p-btn my-4">Start Now &#8594;</p>
                </a>
            </div>
        </div>
    </div><!--end row-->
    
                  
</div><!--end container-->

<?php

include 'includes/footer.php';

?>