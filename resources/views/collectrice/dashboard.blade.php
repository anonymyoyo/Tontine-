@include('admin.head')

    <body>
        <!-- Page wrapper start -->
        <div class="page-wrapper">

          <!-- App header starts -->
            @include('admin.header')

          <!-- App header ends -->

          <!-- Main container start -->
          <div class="main-container">

            <!-- Sidebar wrapper start -->
            @include('admin.sidebar')
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            @include('admin.container')
            <!-- App container ends -->

          </div>
          <!-- Main container end -->

        </div>
        <!-- Page wrapper end -->

   @include('admin.script')
