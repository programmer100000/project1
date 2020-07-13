@extends('master')
@section('content')
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
      <div class="title">
        <h3>PLASM.it - 2017</h3>
        <h1>CYCLE</h1>
        <canvas id="canvasdiv"></canvas>
      </div>
      <div class="more-pens">
        <a target="_blank" href="https://codepen.io/plasm/pen/OpZQdB" class="white-mode">
          WATCH THE BALLOONS PARTICLES</a> or
        <a target="_blank" href="https://codepen.io/plasm/" class="white-mode">VIEW OTHER PENS</a>
      </div>
      <!-- Masthead Avatar Image-->
      <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />
      <!-- Masthead Heading-->
      <h1 class="masthead-heading text-uppercase mb-0">Start Bootstrap</h1>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Masthead Subheading-->
      <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
    </div>
  </header>
  <!-- Portfolio Section-->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">
      <!-- Portfolio Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Portfolio Grid Items-->
      <div class="row">
        <!-- Portfolio Item 1-->
        <div class="demo m-auto">
            <div class="container ">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <div class="price-value">
                                    <span class="amount">$10</span>
                                    <span class="month">monthly plan</span>
                                </div>
                            </div>
                            <div class="icon">12</div>
                            <div class="pricing-content">
                                <h3 class="title">Standard</h3>
                                <ul>
                                    <li>50GB Disk Space</li>
                                    <li>50 Email Accounts</li>
                                    <li>50GB Bandwidth</li>
                                    <li>15 Subdomains</li>
                                    <li>20 Domains</li>
                                </ul>
                                <a href="#" class="pricingTable-signup">سفارش</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <div class="price-value">
                                    <span class="amount">$10</span>
                                    <span class="month">monthly plan</span>
                                </div>
                            </div>
                            <div class="icon">9</div>
                            <div class="pricing-content">
                                <h3 class="title">Standard</h3>
                                <ul>
                                    <li>50GB Disk Space</li>
                                    <li>50 Email Accounts</li>
                                    <li>50GB Bandwidth</li>
                                    <li>15 Subdomains</li>
                                    <li>20 Domains</li>
                                </ul>
                                <a href="#" class="pricingTable-signup">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <div class="price-value">
                                    <span class="amount">$10</span>
                                    <span class="month">monthly plan</span>
                                </div>
                            </div>
                            <div class="icon">3</div>
                            <div class="pricing-content">
                                <h3 class="title">Standard</h3>
                                <ul>
                                    <li>50GB Disk Space</li>
                                    <li>50 Email Accounts</li>
                                    <li>50GB Bandwidth</li>
                                    <li>15 Subdomains</li>
                                    <li>20 Domains</li>
                                </ul>
                                <a href="#" class="pricingTable-signup">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricingTable blue">
                            <div class="pricingTable-header">
                                <div class="price-value">
                                    <span class="amount">$20</span>
                                    <span class="month">monthly plan</span>
                                </div>
                            </div>
                            <div class="icon">1</div>
                            <div class="pricing-content">
                                <h3 class="title">Business</h3>
                                <ul>
                                    <li>50GB Disk Space</li>
                                    <li>50 Email Accounts</li>
                                    <li>50GB Bandwidth</li>
                                    <li>15 Subdomains</li>
                                    <li>20 Domains</li>
                                </ul>
                                <a href="#" class="pricingTable-signup">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section-->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
      <!-- About Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- About Section Content-->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
        </div>
      </div>
      <!-- About Section Button-->
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
          <i class="fas fa-download mr-2"></i>
          Free Download!
        </a>
      </div>
    </div>
  </section>
  <!-- Contact Section-->
  <section class="page-section" id="contact">
    <div class="container">
      <!-- Contact Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Contact Section Form-->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br />
            <div id="success"></div>
            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <!-- Footer Location-->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">
            2215 John Daniel Drive
            <br />
            Clark, MO 65243
          </p>
        </div>
        <!-- Footer Social Icons-->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
          <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
          <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
        </div>
        <!-- Footer About Text-->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About Freelancer</h4>
          <p class="lead mb-0">
            Freelance is a free to use, MIT licensed Bootstrap theme created by
            <a href="http://startbootstrap.com">Start Bootstrap</a>
            .
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Copyright Section-->
  <div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © Your Website 2020</small></div>
  </div>
  @endsection