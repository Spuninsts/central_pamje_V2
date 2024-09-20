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
            <h1>Journal</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
      <div class="row my-3">
        <span><a href="/" class="cen-breadcrumbs"> Home</a> »
                <a href="/journals/alphabet?val=all" class="cen-breadcrumbs">Journals</a> »

      </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row my-2">

            <!-- Journal Profile 'ArticleData','UserData','$EntityData','OrgData' -->
            <div class="journal-item">
            @foreach( $ArticleData as $key => $item)
                <div class="row my-4 ">
                    <div class="col-sm-2">
                        <a href="#"><img src="{{ $item->photo }}"  alt="{{ $item->full_title }}"  class="w-100"></a>
                    </div>
                    <div class="col-sm-10 my-2" >
                        <h2 class="fw-bold fs-1">{{ $item->full_title }}</h2>

                        <p><span class="p-bold"> Website: </span>
                        <a href="{{ $item->link }}">{{ $item->link }}</a></p>

                        <p><span class="p-bold"> Contact: </span>{{ $item->article_contact }}</p>
                        <p>
                        <span class="p-bold">Organization:</span> {{ $OrgData[0]['org_title'] }}
                        </p>

                        <p>
                        <span class="p-bold">Email:</span> {{ $item->email }}
                        </p>

                        <p>
                        <span class="p-bold">Mobile No:</span> {{ $item->contact_number }}
                        </p>
                    </div>
                </div>

                </div>

                <!-- About -->
                <div class="cen-about">
                <div class="row my-4">
                        <h5 class="text-danger fw-bold">About</h5>
                </div>

                <div class="row  my-4">
                    <p>
                    {{ $item->about }}
                    </p>
                </div>

                </div>

                <!-- Aims and Scope-->
                <div class="cen-aims">
                <div class="row my-4">
                        <h5 class="text-danger fw-bold">Aims and Scope</h5>
                </div>

                <div class="row  my-4">
                    <p>
                    {{ $item->aims_scope }}
                    </p>
                </div>

                </div>
                <!-- Article Pub Policy -->
                <div class="cen-article">
                <div class="row my-4">
                        <h5 class="text-danger fw-bold">Article Publication Policy</h5>
                </div>

                <div class="row  my-4">
                    <p>
                    {{ $item->policy }}
                    </p>
                </div>

                </div>
            @endforeach


            <!-- Indexing -->
            <div class="cen-indexing">
              <div class="row my-4">
                    <h5 class="text-danger fw-bold">Indexing</h5>
              </div>

              <div class="row  my-4">
              @foreach($EntityData as $key => $item)
                    @if ($item->ent_type == 'index')
                    <p> {{ $item->ent_name }}</p>
                    @endif
               @endforeach
              </div>
            </div>

            <!-- Publisher -->
            <div class="cen-indexing">
              <div class="row my-4">
                    <h5 class="text-danger fw-bold">Publisher</h5>
              </div>

              <div class="row  my-4">
              @foreach($EntityData as $key => $item)
                    @if ($item->ent_type == 'publisher')
                    <p> {{ $item->ent_name }}</p>
                    @endif
              @endforeach
              </div>
            </div>
            <!-- Poster
            <div class="cen-indexing">
              <div class="row my-5">
              <img src="https://via.placeholder.com/885x436"  alt="#"  class="w-100">

            </div>
            -->


            <!-- Editorial Team-->

                <div class="cen-editorial text-center">
                    <div class="row my-4">
                        <h3 class="fw-bold text-danger">Editorial Team</h3>
                    </div>
                    <div class="row my-4"></div>

                    @foreach($role_array as $role)
                    <div class="row my-4">
                        <h5 class="fw-bold">{{ $role }}</h5>
                        @foreach($AssociateData as $key => $item)
                            @if($item->association_role == $role)
                                @foreach($UserData as $key1 => $item1)
                                    @if($item->association_id == $item1->user_id)
                                        <p>{{ $item1->title }} {{ $item1->fname }} {{ $item1->mname }} {{ $item1->lname }}</p>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                    @endforeach

                         <!--   <div class="row my-4"></div>

                            <div class="row my-4">
                                <h5 class="fw-bold">Associate Editors</h5>
                        @foreach($UserData as $key => $item)
                            <p> {{ $item->title }} {{ $item->fname }} {{ $item->mname }} {{ $item->lname }} </p>
                        @endforeach
                            </div>

                             <div class="row my-4"></div>

                            <div class="row my-4">
                                <h5 class="fw-bold">Managing Editor</h5>
                                <p>Erasmo Gonzalo DV. Llanes MD, DNP</p>
                            </div>

                            <div class="row my-4"></div>

                            <div class="row my-4">
                                <h5 class="fw-bold">Editorial Advisory Board</h5>
                                <p>Jose M. Acuin, MD, MSC</p>
                                <p>Robert G. Berkowitz, MBBS, MD</p>
                                <p>Charlotte M. Chiong, MD, PhP</p>
                                <p>Jose Angelito U. Hardillo, MD, PhD</p>
                                <p>KJ Lee, MD</p>
                            </div>

                            <div class="row my-4"></div>

                            <div class="row my-4">
                                <h5 class="fw-bold">Editorial Assistant</h5>
                                <p>April Christine E. Dagame</p>
                            </div> -->

                </div>


        </div>
      </div>
    </div>
</main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
