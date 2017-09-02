@include('inc.admin.header')

    <div class="container">

      <div class="row">

        @yield('content')

        @include('inc/admin/sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

   @include('inc.admin.footer')