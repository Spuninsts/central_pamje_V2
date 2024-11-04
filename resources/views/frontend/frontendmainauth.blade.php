<!doctype html>
<html lang="en">
        <!---head codes for css, bootstrap-->
        @include('frontend.partials.frontendhead')
    <body>
        <!---header code -->
        @include('frontend.partials.frontendheaderauth')

     <!---main body-->

      <main>

        <!-- carousel-->
        @include('frontend.frontendcarousel')


        <!--central features section-->
        @include('frontend.frontendfeatures')


        <!-- Medical Journals Online-->
        @include('frontend.frontendonline')



        <!--News and Announcement-->
        @include('frontend.frontendnews')
    </main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
