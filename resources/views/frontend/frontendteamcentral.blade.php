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
                        <img src="https://via.placeholder.com/150" alt="Marry Hudson">
                        <h5>Marry Hudson</h5>
                        <p class="role">Director of Marketing</p>
                        <div class="divider"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Marry Hudson">
                        <h5>Marry Hudson</h5>
                        <p class="role">Director of Marketing</p>
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Marry Hudson">
                        <h5>Marry Hudson</h5>
                        <p class="role">Director of Marketing</p>
                        <div class="divider"></div>
                    </div>
                </div>
              </div>

              <div class="row my-2">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Marry Hudson">
                        <h5>Marry Hudson</h5>
                        <p class="role">Director of Marketing</p>
                        <div class="divider"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Marry Hudson">
                        <h5>Marry Hudson</h5>
                        <p class="role">Director of Marketing</p>
                        <div class="divider"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="Marry Hudson">
                        <h5>Marry Hudson</h5>
                        <p class="role">Director of Marketing</p>
                        <div class="divider"></div>
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
