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
                        <div class="row my-4">
                                <h5 class="text-danger fw-bold">{{$item->page_title}}</h5>
                        </div>

                        <div class="col-sm-2">
                            <img src="{{$item->page_image_path}}" alt="{{$item->page_title}}" class="w-200 h-100">
                        </div>

                        <div class="row my-4">
                            <p>{{$item->page_description}} </p>
                            <p><span class="fw-bold">Link:</span>
                            <a href="{{$item->page_url}}" target="_blank">{{$item->page_url}}</a> </p>
                        </div>
                        <div class="row  my-4">
                            <hr/>
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
