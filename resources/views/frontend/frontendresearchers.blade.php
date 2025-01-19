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
                        <a href="/resources/researchers" class="cen-breadcrumbs">For Researchers</a>
                </span>

            </div>
            </div>
            </div>

            <div class="container-fluid">
            <div class="container">
                <div class="row my-2">
                    <div class="journal-item">
                        <div class="row my-4 ">
                                <h2 class="fw-bold fs-1">Essential Readings for Researchers</h2>
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
                        <div class="row  my-4">
                            <p>{{$item->page_description}} </p>
                            <p><span class="fw-bold">Link:</span> <a href="{{$item->page_url}}" target="_blank">{{$item->page_url}}</a> </p>
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

        <div class="row my-5">

            <!-- Journal Profile-->
            <div class="journal-item">
                <div class="row my-4 ">
                    <h2 class="fw-bold fs-1">Essential Readings for Researcher</h2>
                </div>
            </div>


            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOe" aria-expanded="false" aria-controls="collapseOe">
                            <span class="fw-bold text-danger"> Title Lorem ipsum dolor sit amet, consectetur </span>
                        </button>
                    </h2>
                    <div id="collapseOe" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <h2><span class="fw-bold text-danger"> Title Lorem ipsum dolor sit amet, consectetur </span></h2>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.                <p>
                            </p><p> <span class="fw-bold">Link: </span> <a href="https://www.icmje.org/journals-following-the-icmje-recommendations/">https://www.icmje.org/journals-following-the-icmje-recommendations/</a> </p>

                        </div>

                        <div class="accordion-body">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.                <p>
                            </p><p> <span class="fw-bold">Link: </span> <a href="https://www.icmje.org/journals-following-the-icmje-recommendations/">https://www.icmje.org/journals-following-the-icmje-recommendations/</a> </p>

                        </div>

                        <div class="accordion-body">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.                <p>
                            </p><p> <span class="fw-bold">Link: </span> <a href="https://www.icmje.org/journals-following-the-icmje-recommendations/">https://www.icmje.org/journals-following-the-icmje-recommendations/</a> </p>

                        </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <span class="fw-bold text-danger"> Title Lorem ipsum dolor sit amet, consectetur </span>
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.                    <p>
                            </p><p> <span class="fw-bold">Link: </span> <a href="https://www.icmje.org/journals-following-the-icmje-recommendations/">https://www.icmje.org/journals-following-the-icmje-recommendations/</a> </p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <span class="fw-bold text-danger">Title Lorem ipsum dolor sit amet, consectetur  </span>
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.                    <p>
                            </p><p> <span class="fw-bold">Link: </span> <a href="https://www.icmje.org/journals-following-the-icmje-recommendations/">https://www.icmje.org/journals-following-the-icmje-recommendations/</a> </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
