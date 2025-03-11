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
        <div class="row" >
          <div class="page-header">
            <h1>Journal</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span><a href="#" class="cen-breadcrumbs"> Home</a> »
                <a href="#" class="cen-breadcrumbs">Journals</a> »
                <a href="#" class="cen-breadcrumbs">Alphabetical</a></span>
      </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row my-5">
          <h2>Alphabetical list of our partner journals</h2>
            <div class="my-2">
                      <a href="#" class="cen-letters" >A</a>
                &nbsp;
                      <a href="#" class="cen-letters">B</a>
                &nbsp;
                      <a href="#" class="cen-letters">C</a>
                &nbsp;
                      <a href="#" class="cen-letters" >D</a>
                &nbsp;
                      <a href="#" class="cen-letters" >E</a>
                &nbsp;
                      <a href="#" class="cen-letters" >F</a>
                &nbsp;
                      <a href="#" class="cen-letters" >G</a>
                &nbsp;
                      <a href="#" class="cen-letters" >H</a>
                &nbsp;
                      <a href="#" class="cen-letters" >I</a>
                &nbsp;
                      <a href="#" class="cen-letters" >J</a>
                &nbsp;
                      <a href="#" class="cen-letters" >K</a>
                &nbsp;
                      <a href="#" class="cen-letters" >L</a>
                &nbsp;
                      <a href="#" class="cen-letters" >M</a>
                &nbsp;
                      <a href="#" class="cen-letters">N</a>
                &nbsp;
                      <a href="#" class="cen-letters">O</a>
                &nbsp;
                      <a href="/journals/p" class="cen-letters">P</a>
                &nbsp;
                      <a href="#" class="cen-letters">Q</a>
                &nbsp;
                      <a href="#" class="cen-letters">R</a>
                &nbsp;
                      <a href="#" class="cen-letters">S</a>
                &nbsp;
                      <a href="#" class="cen-letters">T</a>
                &nbsp;
                      <a href="/journals/ulist" class="cen-letters">U</a>
                &nbsp;
                      <a href="#" class="cen-letters">V</a>
                &nbsp;
                      <a href="#" class="cen-letters">W</a>
                &nbsp;
                      <a href="#" class="cen-letters">X</a>
                &nbsp;
                      <a href="#" class="cen-letters">Y</a>
                &nbsp;
                      <a href="#" class="cen-letters">Z</a>

                <hr class="cen-hr">
            </div>
            <!-- Always loads journal item that starts with A-->
            @foreach( $ArticleData as $key => $item)
                @if(str_starts_with($item->full_title,'U') || str_starts_with($item->full_title,'u'))
                <div class="journal-item">
                <div class="row my-4">
                        <h2>{{ $item->full_title }} | {{ $item->short_title }}</h2>
                </div>

                <div class="row  my-4">
                    <div class="col-sm-2 ">
                        <a href="#"><img src="img/journals_logo/phil-journal-pathology.jpg"  alt="#"  class="w-100"></a>
                    </div>
                    <div class="col-sm-10" >
                    <p>
                    <span class="p-bold"> Website: </span>
                    <a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a>
                    </p>
                    @foreach( $JournalData as $k => $j )
                        @if($item->journal_mid == $j->journal_id)
                    <p> <span class="p-bold"> Editor in Chief:</span> {{ $j->journal_value }} </p>
                        @endif
                    @endforeach
                    <p><span class="p-bold">Pointh Person:</span> {{ $item->article_contact }}</p>
                    <p><span class="p-bold">Email:</span> {{ $item->email }}</p>
                    <p><a href="#" >View more Information</a></p>
                    </div>
                </div>
                <hr>
                </div>
                @endif
            @endforeach
            <!-- journal item 1-->


        </div>
      </div>
    </div>


    </main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
