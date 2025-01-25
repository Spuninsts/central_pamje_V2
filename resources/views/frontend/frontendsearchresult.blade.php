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
                          <h1>Search Result</h1>
                      </div>
                  </div>
              </div>
          </div>

          <div class="container-fluid">
              <div class="container">
                  <div class="row my-3">
                        <span><a href="/" class="cen-breadcrumbs">Home</a>&nbsp;»
                                <a href="#" class="cen-breadcrumbs">Search</a>&nbsp;» &nbsp "{{ $query }}";
                        </span>

                  </div>
              </div>
          </div>

          <div class="container-fluid">
              <div class="container">
                  <div class="row my-2">
                     <!-- <div class="journal-item">
                          <div class="row my-4 ">
                              <h2 class="fw-bold fs-1">Search Result</h2>
                          </div>
                      </div> -->

                      <!-- Search Result -->
                      <ul class="list-group list-group-flush">
                      @foreach($results as $key => $item)
                          @if($item->full_title)
                              <li class="list-group-item"><em>Journal</em>:: <a href="journals/data?val={{$item->journal_mid}}">{{ $item->full_title }}</a> : {{ $item->about }}</li>
                          @endif
                          @if($item->page_title)
                              <li class="list-group-item"><em>Article</em>:: <a href="page/data?val={{$item->page_id}}">{{ $item->page_title }}</a> : {{ $item->page_description }}</li>
                          @endif
                      @endforeach
                      </ul>


                  </div>
              </div>
          </div>



    </main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
