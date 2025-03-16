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
                    <h1>Latest News and Annoucements</h1>
                </div>
                </div>
            </div>
            </div>

            <div class="container-fluid">
            <div class="container">
            <div class="row my-3">
                <span><a href="/" class="cen-breadcrumbs"> Home</a>&nbsp;»
                        <a href="/newsannouncements" class="cen-breadcrumbs">News & Announcements</a>
                </span>

            </div>
            </div>
            </div>

            <div class="container-fluid">
            <div class="container">
                <div class="row my-2">
                    <div class="journal-item">
                        <div class="row my-4 ">
                                <h2 class="fw-bold fs-1">Stay Informed</h2>
                        </div>
                    </div>

            <!-- Load editor pages from database -->
            @if (empty($PageData) || count($PageData) == 0)
                <p>No Data on this section.</p>
            @else
                @foreach( $PageData as $key => $item )
                    <div class="cen-about">

                        <div class="card mb-3 rounded-0" >
                            <div class="row g-0">
                              <div class="col-md-2">
                                <img src="{{ url('upload/admin_images/'.$item->page_image_path) }}" alt="{{$item->page_title}}" class="w-100">
                              </div>
                              <div class="col-md-10">
                                <div class="card-body">
                                  <h5 class="fw-bold"> <a href="{{$item->page_url}}" class="cen-font-darkblue text-decoration-none cen-link-hover-blue" target="_blank">{{$item->page_title}} </a></h5>

                                  <p class="card-text">{{substr($item->page_description,0,100)}}...</p>

                                  <p class="card-text"><span class="fw-bold text-muted">Link: </span><a href="{{$item->page_url}}" class=" text-danger text-decoration-none cen-link-hover-blue" target="_blank">{{$item->page_url}}</a></p>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                @endforeach
            @endif
                </div>
            </div>
            </div>
        </main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
