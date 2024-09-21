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
            <h1>About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span><a href="/" class="cen-breadcrumbs"> Home</a>&nbsp;»
                <a href="/aboutus" class="cen-breadcrumbs">About Us</a>&nbsp;»&nbsp;

      </span></div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row my-5">
            <h2>Title Header </h2>
        </div>

        <div class="cen-about">
              <div class="row">
                    <h5 class="text-danger fw-bold">Subtitle</h5>
              </div>

              <div class="row my-2">
                <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                <div class="m-4">
                  <ul>
                    <li><a href="#">Link (1)</a></li>
                    <li><a href="#">Link (1)</a></li>
                    <li><a href="#">Link (1)</a></li>
                  </ul>
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
