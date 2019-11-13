<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content grid-x">
        <!-- Main Content -->
        <main class="main cell small-12 large-8">
          @yield('content')
        </main>

        <!-- Sidebar -->
        <aside class="sidebar cell small-12 large-4">
          <!-- Search -->
          <div class="content-section">
            @include('partials.sidebar')
            @yield('sidebar-other')
          </div>
          @yield('sidebar-content')
        </aside>
      </div>
    </div>
    <!-- Footer -->
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
