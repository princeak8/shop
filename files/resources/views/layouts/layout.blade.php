@include('inc.header')

    <div class="container">

      <div class="row">

        @yield('content')

        @include('inc/sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

   @include('inc.footer')