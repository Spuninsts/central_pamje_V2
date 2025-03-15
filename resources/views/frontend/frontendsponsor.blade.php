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
            <h1>Sponsor</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span><a href="/" class="cen-breadcrumbs"> Home</a>&nbsp;»
                <a href="/sponsor" class="cen-breadcrumbs">Sponsor</a>&nbsp;»&nbsp;

      </span></div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row my-5">
            <h2>Sponsor</h2>
        </div>

        <div class="cen-about">
              <div class="row">
                    <h5 class="text-danger fw-bold"> CENTRAL Is funded by the Phlippine Council for Health Research and Development (PCHRD)</h5>
              </div>

              <div class="row my-2">
                <img src="{{ asset('frontend/img/sponsor_logo/DOST-PCHRD-LOGOx800.png') }}" alt="Phlippine Council for Health Research and Developmen" width="150" height="150">
             </div>

        </div>

          <div class="cen-about">
              <div class="row">
              </div>

              <div class="row my-2">
              </div>

          </div>

          <div class="row my-5">
          </div>





        </div>
      </div>

</main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
