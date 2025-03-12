<?php include('header.php'); ?>
<!-- Hero Banner Start -->
<div class="banner one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="banner-heading white">
                    <h1 class="mb-3">Everything you need to create a website</h1>
                    <h3 class="mb-3">Get Up to <span style="color:#673de6; font-weight: 700;">63%</span> off Hosting + Reseller Hosting</h3>
                    <p>JetWebHost brings you fast, secure, and scalable hosting solutions tailored to your needs. From Shared Hosting, Wordpress Hosting, Vps Hosting & Reseller Hosting, our flexible plans are designed to help your business grow With 24/7 expert support and top-tier performance.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Get your free domain</li>
                        <li><i class="bi bi-check"></i> Free website migration </li>
                        <li><i class="bi bi-check"></i> 24/7 customer support</li>
                    </ul>
                    <div class=" inline-btn mt-4"> <a class="btns one custom-full-width-mobile" onClick="document.getElementById('Plans').scrollIntoView();">Claim deal</a>
                        <div class="btns two timer custom-full-width-mobile" id="countdown">00:00:00:00</div>
                    </div>
                    <p style="padding-top:10px;"><i class="bi bi-shield-fill-check"></i> 30-day money-back guarantee</p>
                </div>
            </div>
            <div class="col-lg-7  d-lg-block">
                <div class="text-center"> <img src="image/homebanar.gif" alt="Hero banner"> </div>
            </div>
        </div>
    </div>
</div> <!-- Hero Banner End -->
<!-- Search Domain start-->
<?php 
include "./search-domain.php";
?>
<!-- Search Domain End -->
<main>
  <!-- Homepage Plan Section Start -->
  <section class="section-gap" id="Plans">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <div class="section-heading center gap-bottom">
            <h2>Get your perfect plan</h2>
            <p>Get started in complete confidence. Our 30-day money-back guarantee means it's risk-free</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center gy-4 gy-lg-0">

        <div class="col-lg-3 col-md-6 col-12">
          <a class="homepage-plan bg-green" href="shared-hosting.php">
            <div class="inner">
              <div class="icon">
                <!-- <img src="images/shared_hosting2.svg" alt="image"> -->
              </div>
              <h4>Free Hosting<br> </h4>
              <p>Get started with our Free Shared Hosting Plan, one-time payment is required during account verification.</p>
              <h6><i class="bi bi-check"></i> Free domain</h6>
              <h6><i class="bi bi-check"></i> Free website migration</h6>
              <h6><i class="bi bi-check"></i> 24/7 customer support</h6><br>
              <p><s>Anual Renual</s><span style="background-color:#d5dfff; padding: 4px 12px; border-radius:20px; margin-left: 10px;">SAVE 100%</span></p>
              <h6>US$ <span style="font-size: 48px; font-weight: 700;">3</span> /Lifetime</span></h6>
                <p style="color: #673de6;font-weight: 500;"> Without Comitment</p>
                <div class="btnplan">Choose plan</div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <a class="homepage-plan bg-red" href="shared-hosting.php">
            <div class="inner">
              <div class="icon">
                <!-- <img src="images/ram_icon.svg" alt="image"> -->
              </div>
              <h4>Shared Hosting<br></h4>
              <p>Perfect for small websites, blogs, or startups looking to establish their online presence without breaking the bank.</p>
              <h6><i class="bi bi-check"></i> Free domain</h6>
              <h6><i class="bi bi-check"></i> Free website migration</h6>
              <h6><i class="bi bi-check"></i> 24/7 customer support</h6><br>
              <p><s>US$ 3.98</s><span style="background-color:#d5dfff; padding: 4px 12px; border-radius:20px; margin-left: 10px;">SAVE 63%</span></p>
              <h6>US$ <span style="font-size: 48px; font-weight: 900;">1.49</span> /mo</span></h6>
              <p style="color: #673de6;font-weight: 500;"> For 12-month term</p>
              <div class="btnplan">Choose plan</div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <a class="homepage-plan bg-yellow" href="business-hosting.php">
            <div class="inner">
              <div class="icon">
                <!-- <img src="images/deployment.svg" alt="image"> -->
              </div>
              <h4>Businesses Hosting <br></h4>
              <p>Perfect for businesses and e-commerce seeking reliable, scalable, and budget-friendly hosting.</p>
              <h6><i class="bi bi-check"></i> Free domain</h6>
              <h6><i class="bi bi-check"></i> Free website migration</h6>
              <h6><i class="bi bi-check"></i> 24/7 customer support</h6><br>
              <p><s>US$ 6.48</s><span style="background-color:#d5dfff; padding: 4px 12px; border-radius:20px; margin-left: 10px;">SAVE 62%</span></p>
              <h6>US$<span style="font-size: 48px; font-weight: 900;">2.48</span> /mo</span></h6>
              <p style="color: #673de6;font-weight: 500;"> For 12-month term</p>
              <div class="btnplan">Choose plan</div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <a class="homepage-plan bg-orange" href="reseller-hosting.php">
            <div class="inner">
              <div class="icon">
                <!-- <img src="images/high_speed_ssd.svg" alt="image"> -->
              </div>
              <h4>Reseller Hosting <br></h4>
              <p>Ideal for entrepreneurs and agencies starting a hosting business with scalable, white-label reseller hosting.</p>
              <h6><i class="bi bi-check"></i> Free domain</h6>
              <h6><i class="bi bi-check"></i> Free website migration</h6>
              <h6><i class="bi bi-check"></i> 24/7 customer support</h6><br>
              <p><s>US$ 14.88 </s><span style="background-color:#d5dfff; padding: 4px 12px; border-radius:20px; margin-left: 10px;">SAVE 20%</span></p>
              <h6>US$<span style="font-size: 48px; font-weight: 900;">11.90</span> /mo</span></h6>
              <p style="color: #673de6;font-weight: 500;"> For 12-month term</p>
              <div class="btnplan">Choose plan</div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- Homepage Plan Section End -->
<!-- Home Page Features Section Start -->
<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading center gap-bottom">
                    <h2>The Power of Advanced Web Hosting</h2>
                    <p>JetWebHost Technology and Expertise In Your Hands</p>
                </div>
            </div>
        </div>
        <div class="row align-items-strech gy-4 gy-lg-0">
            <div class="col-lg-7">
                <div class="homepage-features bg1">
                    <div class="row gy-4">
                        <div class="col-12">
                            <h4>Unleash the Power of Advanced Web Hosting</h4>
                        </div>
                        <div class="col-12">
                            <p>
                                Elevate your online presence with cutting-edge hosting technology designed for speed, reliability, and scalability. Whether you’re running a small business or managing a large e-commerce site, our hosting
                                solutions ensure optimal performance to help you succeed online.
                            </p>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li>Deliver an exceptional user experience with rapid loading speeds.</li>
                                <li>Keep your site accessible 24/7 with robust, high-performance hosting.</li>
                                <li>Faster websites rank higher in search engines, driving more traffic.</li>
                                <li>Easily adapt to growing business needs and handle increased traffic effortlessly.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="homepage-features bg2">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="images/blazing_fast.svg" alt="Image" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 align-items-strech flex-lg-row-reverse gy-4 gy-lg-0">
            <div class="col-lg-7">
                <div class="homepage-features bg1">
                    <div class="row gy-4">
                        <div class="col-12">
                            <h4>Stronger Website Security, More Peace of Mind</h4>
                        </div>
                        <div class="col-12">
                            <p>
                                Protect your website and data with robust security solutions designed to keep threats at bay and build customer trust. Our advanced security measures ensure your website remains safe and secure, giving you
                                peace of mind.
                            </p>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li>Protect sensitive information with encrypted connections between servers and users.</li>
                                <li>Safeguard your site from distributed denial-of-service attacks.</li>
                                <li>Regular backups to prevent data loss and ensure quick recovery.</li>
                                <li>Continuous scanning and monitoring to detect and remove malicious software.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="homepage-features bg2">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="images/safe_secure_img.svg" alt="Image" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 align-items-strech gy-4 gy-lg-0">
            <div class="col-lg-7">
                <div class="homepage-features bg1">
                    <div class="row gy-4">
                        <div class="col-12">
                            <h4>More Functionality, New Opportunities for Growth</h4>
                        </div>
                        <div class="col-12">
                            <p>Unlock advanced functionality to explore new growth opportunities and drive your business forward. Expand your platform’s capabilities and customize it to meet your unique needs for sustained success.</p>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li>Connect effortlessly with third-party tools and services.</li>
                                <li>Tailor functionalities to fit your specific business requirements.</li>
                                <li>Scale your platform without restrictions.</li>
                                <li>Gain valuable insights to make informed strategic decisions.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="homepage-features bg2">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="images/easy_setup.svg" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Page Features Section End -->


<!-- Home Page migration Section start -->
<section class="section-gap" id="Plans" style="background-color:#1f1346">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <div class="section-heading center gap-bottom">
            <h2 style="color:#fff">Website migration. Made simple</h2>
            <p style="color:#fff">Currently hosting your website elsewhere? Our expert team will handle everything while your site stays up and running throughout. That’s right – no downtime. No data loss. No problem.</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center gy-4 gy-lg-0">
        <div class="col-lg-4 col-md-6 col-12">
          <a class="homepage-migration">
            <div class="inner">
              <div class="icon">
                <i class="bi bi-list-ul"></i>
              </div>
              <h4>3 simple steps<br></h4>
              <p>Simply pick your plan, fill in the migration request form, submit it and then sit back and relax.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
           <a class="homepage-migration">
            <div class="inner">
              <div class="icon">
                <i class="bi bi-lightning-charge-fill"></i>
              </div>
              <h4>Fast and secure<br></h4>
              <p>95% of websites are migrated in under 20 minutes. The other 5% are quicker than the industry average. And, your site stays live the whole time too.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <a class="homepage-migration">
            <div class="inner">
              <div class="icon">
                <i class="bi bi-check-circle-fill"></i>
              </div>
              <h4>Free <br></h4>
              <p>Whether you have 1 website to migrate or 100, migration is free with all of our plans.</p>
            </div>
          </a>
        </div>
          <div class="d-flex justify-content-center mx-auto col-md-3 col-12 inline-btn mt-4">
            <a class="btns one col-md-12 col-6" onClick="document.getElementById('Plans').scrollIntoView();">Get started</a>
          </div>
      </div>
    </div>
  </section>

  <!-- Home Page Domain Search Section Start -->
   <section class="section-gap" id="Plans">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <div class="section-heading center gap-bottom">
            <h2>Why Buy Domain Names at JetWebHost?</h2>
            <p>JetWebHost offers reliable domain registration services with instant activation, dedicated live support, and full DNS management.</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center gy-4 gy-lg-0">
        <div class="col-lg-4 col-md-6 col-12">
          <a class="homepage-domain">
            <div class="inner">
              <div class="icon">
                <i class="bi bi-chat-left"></i>
              </div>
              <h4>24/7 live technical support<br> </h4>
              <p>Our Customer Success team is here for you any time of the day. We've made our domain name registration process as easy as possible, but everyone needs a helping hand sometimes.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
           <a class="homepage-domain">
            <div class="inner">
              <div class="icon">
                <i class="bi bi-shield-shaded"></i>
              </div>
              <h4>Trusted domain Provider<br></h4>
              <p>Jetwebhost is an web host trusted by Thusend of people worldwide. We offer a comprehensive registration service with more than 200 domain extensions so that you can have plenty of choices.</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <a class="homepage-domain">
            <div class="inner">
              <div class="icon">
                <i class="bi bi-pc-display-horizontal"></i>
              </div>
              <h4>Eeasy control <br></h4>
              <p>Once you complete your domain search, we’ll guide you through the website domain registration process. It only takes a few clicks, and no technical knowledge is required.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section class="section-gap homepage-domain-search" style="color: #fff;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading center">
            <h2 style="color: #fff;">Get the Perfect Domain Name for Your Brand</h2>
            <p style="color: #fff;">The first step in your online journey is getting a domain name. Choose from our wide range of top-level domain extensions for your Business.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-lg-10">
          <form class="domain-search-form mt-4 ">
            <input class="inputs" type="text" placeholder="Enter your desired domain...">
            <button class="submit btns one">Search Domains</button>
          </form>
          </div>
        </div>
        <p class="text-center mt-4" style="color: #fff;">Free WHOIS privacy protection is included with every eligible domain registration.</p>
      </div>
    </div>
  </section>
  <!-- Home Page Domain Search Section End -->


  <!-- Testimonial Section Start -->
  <?php include('testimonial.php'); ?>
  <!-- Testimonial Section End -->

</main>
<?php include('footer.php'); ?>
