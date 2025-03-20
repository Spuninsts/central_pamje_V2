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
                    <h1>Resources</h1>
                </div>
                </div>
            </div>
            </div>

            <div class="container-fluid">
            <div class="container">
            <div class="row my-3">
                <span><a href="/" class="cen-breadcrumbs"> Home</a>&nbsp;»
                        <a href="#" class="cen-breadcrumbs">Resources</a>&nbsp;»&nbsp;
                        <a href="/resources/authors" class="cen-breadcrumbs">For Authors</a>
                </span>

            </div>
            </div>
            </div>

            <div class="container-fluid">
            <div class="container">
                <div class="row my-2">
                    <div class="journal-item">
                        <div class="row my-4 ">
                                <h2 class="fw-bold fs-1">Essential Readings for Authors</h2>
                        </div>
                    </div>

            <!-- Load author pages from database -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="essential-readings-tab" data-bs-toggle="pill" data-bs-target="#essential-readings" type="button" role="tab" aria-controls="essential-readings" aria-selected="true">Essential Readings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="blogs-report-articles-tab" data-bs-toggle="pill" data-bs-target="#blogs-report-articles" type="button" role="tab" aria-controls="blogs-report-articles" aria-selected="false">Blogs/Report/Articles</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="courses-tab" data-bs-toggle="pill" data-bs-target="#courses" type="button" role="tab" aria-controls="courses" aria-selected="false">Courses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="toolkits-tab" data-bs-toggle="pill" data-bs-target="#toolkits" type="button" role="tab" aria-controls="toolkits" aria-selected="false">Toolkits</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="essential-readings" role="tabpanel" aria-labelledby="essential-readings-tab">

                            <!--Start Essential Readings cards  -->
                            <div class="row row-cols-1 row-cols-md-3 g-4">

                                <!-- Load editor pages from database -->
                                @if (empty($PageData) || count($PageData) == 0)
                                    <p>No Data on this section.</p>
                                @else
                                    @foreach( $PageData as $key => $item )
                                        @if($item->page_subcategory == "Essential Readings")
                                            <div class="col">
                                                <div class="card h-100">
                                                    <!-- <img src="{{ url('upload/pages/'.$item->page_image_path) }}" class="card-img-top" alt="{{substr($item->page_title, 0, 60) . "..."}}"> -->
                                                    <div class="card-header cen-bg-darkblue pt-3">
                                                        <h5 class="card-title fs-5 text-white"><a href="/page/data?val={{$item->page_id}}" class="text-decoration-none text-white">{{substr($item->page_title, 0, 60) . "..."}}</a></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">{{substr($item->page_description, 0, 150) . "..."}}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <small class="text-muted"><span class="fw-bold">Link:</span> <a href="{{$item->page_url}}" class="text-danger" target="_blank">{{$item->page_url}}</a></small>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                            </div> <!-- end of main container for cards -->

                        </div> <!--Start Essential Readings cards  -->

                        <div class="tab-pane fade" id="blogs-report-articles" role="tabpanel" aria-labelledby="blogs-report-articles-tab">

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <!-- Load editor pages from database -->
                                @if (empty($PageData) || count($PageData) == 0)
                                    <p>No Data on this section.</p>
                                @else
                                    @foreach( $PageData as $key => $item )
                                        @if($item->page_subcategory == "Blogs/Reports/Articles")
                                            <div class="col">
                                                <div class="card h-100">
                                                    <div class="card-header cen-bg-darkblue pt-3">
                                                        <h5 class="card-title fs-5 text-white"><a href="/page/data?val={{$item->page_id}}" class="text-decoration-none text-white">{{substr($item->page_title, 0, 60) . "..."}}</a></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">{{substr($item->page_description, 0, 150) . "..."}}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <small class="text-muted"><span class="fw-bold">Link:</span> <a href="{{$item->page_url}}" class="text-danger" target="_blank">{{$item->page_url}}</a></small>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                            </div> <!-- end of main container for cards -->


                        </div>
                        <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <!-- Load editor pages from database -->
                                @if (empty($PageData) || count($PageData) == 0)
                                    <p>No Data on this section.</p>
                                @else
                                    @foreach( $PageData as $key => $item )
                                        @if($item->page_subcategory == "Courses")
                                            <div class="col">
                                                <div class="card h-100">
                                                    <div class="card-header cen-bg-darkblue pt-3">
                                                        <h5 class="card-title fs-5 text-white"><a href="/page/data?val={{$item->page_id}}" class="text-decoration-none text-white">{{substr($item->page_title, 0, 60) . "..."}}</a></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">{{substr($item->page_description, 0, 150) . "..."}}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <small class="text-muted"><span class="fw-bold">Link:</span> <a href="{{$item->page_url}}" class="text-danger" target="_blank">{{$item->page_url}}</a></small>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                            </div> <!-- end of main container for cards -->

                        </div>

                        <div class="tab-pane fade" id="toolkits" role="tabpanel" aria-labelledby="toolkits-tab">

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <!-- Load editor pages from database -->
                                @if (empty($PageData) || count($PageData) == 0)
                                    <p>No Data on this section.</p>
                                @else
                                    @foreach( $PageData as $key => $item )
                                        @if($item->page_subcategory == "Toolkits")
                                            <div class="col">
                                                <div class="card h-100">
                                                    <div class="card-header cen-bg-darkblue pt-3">
                                                        <h5 class="card-title fs-5 text-white"><a href="/page/data?val={{$item->page_id}}" class="text-decoration-none text-white">{{substr($item->page_title, 0, 60) . "..."}}</a></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">{{substr($item->page_description, 0, 150) . "..."}}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <small class="text-muted"><span class="fw-bold">Link:</span> <a href="{{$item->page_url}}" class="text-danger" target="_blank">{{$item->page_url}}</a></small>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                            </div> <!-- end of main container for cards -->


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
