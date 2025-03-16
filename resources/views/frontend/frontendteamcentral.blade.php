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
                <a href="/teamcentral" class="cen-breadcrumbs">Team Central</a>

      </span></div>
      </div>
    </div>

    <div class="container-fluid mb-5">
      <div class="container">
        <div class="row my-5 text-center">
            <h2>Meet the Team</h2>
        </div>

        <div class="cen-about">
              <div class="row">
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/dr-cecile.webp') }}" alt="Dr. Cecilia Maramba-Lazarte" class="rounded-circle" width="140" height="140">
                        <h5>Dr. Cecilia Nelia C. Maramba-Lazarte</h5>
                        <p class="role">Role</p>
                       
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="text-center">
                      <img src="{{ asset('frontend/img/team-central/dr-palaganas.webp') }}" alt="Dr. Erlinda C. Palaganas" class="rounded-circle" width="140" height="140">
                      <h5>Dr. Erlinda C. Palaganas, PhD, RN</h5>
                      <p class="role">Role</p>
                     
                  </div>
              </div>

                <div class="col-md-3">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/dr-lawag.webp') }}" alt="Dr. Ivan Lawag" class="rounded-circle" width="140" height="140">
                        <h5>Dr. Ivan Lawag, MRSC, MSc, PhD</h5>
                        <p class="role">Role</p>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/user-profile.webp') }}" alt="Dr. Julie Caguiat" class="rounded-circle" width="140" height="140">
                        <h5>Dr. Julie Caguiat</h5>
                        <p class="role">Role</p>
                        
                    </div>
                </div>
              </div>

              <div class="row my-2">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/jaymie-tan.webp') }}" alt="Jaymie Tan" class="rounded-circle" width="140" height="140">
                        <h5>Jaymie Tan</h5>
                        <p class="role">Web Developer</p>
                       
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/user-profile.webp') }}" alt="Salvador Alcantara" class="rounded-circle" width="140" height="140">
                        <h5>Salvador Alcantara</h5>
                        <p class="role">Web Developer</p>
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/team-central/user-profile.webp') }}" alt="Rea Epistola" class="rounded-circle" width="140" height="140">
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
