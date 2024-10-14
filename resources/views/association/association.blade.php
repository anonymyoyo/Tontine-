@include('association.head')

    <body>
        <!-- Page wrapper start -->
        <div class="page-wrapper">

          <!-- App header starts -->
            @include('association.header')

          <!-- App header ends -->

          <!-- Main container start -->
          <div class="main-container">

            <!-- Sidebar wrapper start -->
            @include('association.sidebar')
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            @include('association.container')
            <!-- App container ends -->

          </div>
          <!-- Main container end -->

        </div>
        <!-- Page wrapper end -->

   @include('association.script')
