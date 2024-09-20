<!doctype html>
<html lang="en">
        <!---head codes for css, bootstrap-->
        @include('frontend.partials.frontendhead')
    <body>
        <!---header code -->
        @include('frontend.partials.frontendheader')

     <!---main body-->

     <main>
    <div class="container-fluid cen-page-header">
      <div class="container">
        <div class="row">
          <div class="page-header">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span><a href="/" class="cen-breadcrumbs"> Home</a>&nbsp;»
                <a href="/contactus" class="cen-breadcrumbs">Contact Us</a>&nbsp;»&nbsp;

        </span>

      </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row my-2">

             <!-- Contact-->
             <div class="cen-contact">

                <div class="row my-4 ">

                    <h2 class="fw-bold fs-1">How to contact Central?</h2>

                </div>

              </div>

            <!-- Form -->
            <div class="cen-contact-form">
              <div class="row my-4">
                <div class="col-sm-8 ">
                  <p>   "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;   </p>

                  <p>   "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;   </p>
                </div>
              </div>

              <div class="row  my-4">
                <div class="col-sm-8 ">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control cen-bg-darkgrey" id="name" placeholder="Your Name" required="">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control cen-bg-darkgrey" name="email" id="email" placeholder="Your Email" required="">
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control cen-bg-darkgrey" name="subject" id="subject" placeholder="Subject" required="">
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control cen-bg-darkgrey" name="message" rows="5" placeholder="Message" required=""></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary ">Send Message</button>
                  </div>
                </form>
                </div>
              </div>

            </div>



        </div>
      </div>
    </div>
</main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
