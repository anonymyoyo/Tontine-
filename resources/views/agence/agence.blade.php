@include('agence.head')

    <body>
        <!-- Page wrapper start -->
        <div class="page-wrapper">

          <!-- App header starts -->
            @include('agence.header')

          <!-- App header ends -->

          <!-- Main container start -->
          <div class="main-container">

            <!-- Sidebar wrapper start -->
            @include('agence.sidebar')
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            @include('agence.container')
            <!-- App container ends -->

          </div>
          <!-- Main container end -->

        </div>
        <!-- Page wrapper end -->

   @include('agence.script')
