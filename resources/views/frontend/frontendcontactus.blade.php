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
                            <h2 class="fw-bold fs-1">Contact Us</h2>
                        </div>

                        <div class="row my-4">
                            <div class="col-sm-8">
                              <p class="fw-bold cen-font-darkblue">Postal Address:</p>
                              <p >
                                  G/F Administrative Office, Philippine Nurses Association Bldg.  
                                  1663 F.T. Benitez St., Brgy. 695, Zone 75, Malate, Manila 1004 Philippines
                              </p>
                              
                              <p class="fw-bold cen-font-darkblue ">Telephone:</p>
                              <p >
                                  +632 852 109 37 <br>
                                  +632 840 044 30 <br>
                                  +63 955 2652324
                              </p>
                              
                              <p><span class="fw-bold cen-font-darkblue">Fax:</span>  +632 852 515 96</p>

                              
                              <p><span class="fw-bold cen-font-darkblue">Email:</span> <a href="mailto:secretariat@pamje.org" >secretariat@pamje.org</a></p>

                              
                            </div>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="cen-contact-form">
                        <div class="row my-4">
                            <div class="col-sm-8 ">
                                <p>   For inquiries regarding CENTRAL, please contact us using the information below. We aim to provide timely and accurate responses.
                                </p>
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
