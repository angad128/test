<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pllannepal - @yield('title')</title>
  @include('backend/include/header')
  @yield('styles')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('backend/include/sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('backend/include/topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container" id="page-container">
          @include('backend/include/flash-message')
          @yield('contents')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('backend/include/footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{__('key.logout_message_title')}}</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">{{__('key.logout_message_body')}}</div>
        <div class="modal-footer">
          <a class="btn btn-primary" type="button" data-dismiss="modal">{{__('key.close')}}</a>
          <a class="btn btn-primary" href="/logout">{{__('key.logout')}}</a>
        </div>
      </div>
    </div>
  </div>



</body>
@include('backend/include/scripts')
@yield('scripts')

</html>
