@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @php the_content() @endphp
  @endwhile
@endsection

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content grid-x">
        <!-- Intro -->
        <section class="homeintro grid-x">
          <div class="cell small-12 large-9">
            @while(have_posts()) @php the_post() @endphp
              @php the_content() @endphp
            @endwhile          
          </div>
        </section>

        <!-- Main Content -->
        <main class="main cell small-12 large-9">
          <section>
            Events
          </section>
          <section>
            Articles
          </section>
          <section>
            Further reading
          </section>
        </main>

        <!-- Sidebar -->
        <aside class="sidebar cell small-12 large-3">
          @include('partials.sidebar')
        </aside>
      </div>
    </div>
    <!-- Footer -->
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
