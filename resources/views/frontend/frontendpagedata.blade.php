<!doctype html>
<html lang="en">
        <!---head codes for css, bootstrap-->
        @include('frontend.partials.frontendhead')
    <body>
        <!---header code -->
        @include('frontend.partials.frontendheader')

     <!---main body-->

   <!---main body-->
<main>
    <div class="container-fluid cen-page-header">
      <div class="container">
        <div class="row" >
          <div class="page-header">
            <h1>{{ $PageData[0]->page_title }}</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span>
            <a href="/" class="cen-breadcrumbs"> Home</a> »
            <a href="/newsannouncements" class="cen-breadcrumbs">News / Announcements </a> »
        </span>
      </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row my-2">
            <div class="journal-item">
            @foreach( $PageData as $key => $item)
                    <div class="row my-4 ">
                        <div class="col-md-4">
                            <a href="#"><img src="/upload/admin_images/{{ $item->page_image_path }}"  alt="{{ $item->page_title }}"  class="w-100"></a>
                        </div>
                    </div>
                </div>

                    <!-- About -->
                    <div class="cen-about">
                        <div class="row my-4">
                                <h5 class="text-danger fw-bold">Description</h5>
                        </div>
                        <div class="row  my-4">
                            <p>{{ $item->page_description }}</p>
                        </div>
                    </div>
                    <!-- About -->

                    <!-- website -->
                    <div class="cen-about">
                        <div class="row my-4">
                            <h5 class="text-danger fw-bold">More information</h5>
                        </div>
                        <div class="row  my-4">
                            <p><span class="p-bold"> Article Website: </span>
                            <a href="{{ $item->page_url }}">{{ $item->page_url }}</a></p>
                        </div>
                    </div>
                    <!-- website -->
                @endforeach
          </div>
        </div>
    </div>
</main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
