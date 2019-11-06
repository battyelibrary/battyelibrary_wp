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
          <div class="intro-txt cell small-12 large-8">
            @while(have_posts()) @php the_post() @endphp
              @php the_content() @endphp
            @endwhile          
          </div>
          <div class="intro-img cell small-12 large-4">
            Intro image goes here
          </div>
        </section>

        <!-- Main Content -->
        <main class="main cell small-12 large-8">
          <section>
            Events go here
          </section>
          <section>
            Articles go here
          </section>
          <section>
            Further reading goes here
          </section>
        </main>

        <!-- Sidebar -->
        <aside class="sidebar cell small-12 large-4">
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
