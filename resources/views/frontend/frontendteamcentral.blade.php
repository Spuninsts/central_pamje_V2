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
            <h1>Team Central</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span><a href="/" class="cen-breadcrumbs"> Home</a>&nbsp;»
                <a href="/team-central" class="cen-breadcrumbs">Team Central</a>&nbsp;»&nbsp;

      </span></div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row my-5">
            <h2>Meet the Team</h2>
        </div>

        <div class="cen-about">
              <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/dr-cecile.webp') }}" alt="Dr. Cecilia Maramba-Lazarte" class="rounded-circle" >
                        <h5>Dr. Cecilia Nelia C. Maramba-Lazarte</h5>
                        <p class="role">Role</p>
                       
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/dr-lawag.webp') }}" alt="Dr. Ivan Lawag" class="rounded-circle">
                        <h5>Dr. Ivan Lawag, MRSC, MSc, PhD</h5>
                        <p class="role">Role</p>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Dr Julie" class="rounded-circle">
                        <h5>Dr. Julie</h5>
                        <p class="role">Role</p>
                        
                    </div>
                </div>
              </div>

              <div class="row my-2">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/jaymie-tan.webp') }}" alt="Jaymie Tan" class="rounded-circle">
                        <h5>Jaymie Tan</h5>
                        <p class="role">Web Developer</p>
                       
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Salvador Alcantara" class="rounded-circle">
                        <h5>Salvador Alcantara</h5>
                        <p class="role">Web Developer</p>
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Rea Epistola" class="rounded-circle">
                        <h5>Rea Epistola</h5>
                        <p class="role">Role</p>
                        
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
