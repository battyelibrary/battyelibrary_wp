<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content grid-x">
        <!-- Intro -->
        <section class="home-intro grid-x">
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
        <main class="index-main main cell small-12 large-8">
          <section class="content-section home-events">
            <h2>Upcoming Meetings & Events</h2>

          </section>
          <section class="content-section home-articles">
            <h2>Latest Articles</h2>
              @php $catquery = new WP_Query( array( 'cat' => '2' ) ); @endphp
            <div class="grid-x">
              @while($catquery->have_posts()) @php $catquery->the_post(); @endphp
                <article class="small-12 large-6">
                  <!-- Featured Image -->
                  <div class="entry-image">
                    <a href="{{ get_permalink() }}">@php the_post_thumbnail() @endphp</a>
                  </div>
                  <!-- Title --> 
                  <h3 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h3>
                  <!-- Excerpt -->
                  <div class="entry-summary">
                    @php the_excerpt() @endphp
                  </div>
                  <a class="readmore" href="{{ get_permalink() }}">Read More</a>
                </article>
              @endwhile           
            </div>
          </section>
          <section class="content-section home-readings">
            <h2>Further Reading</h2>
            Display link to Bicentennial Dictionary
            <br>Display link to Bibliography of WA History
            <br>Display link to Past Newsletters
            <br>Display link to Jack's Back
            <br>Display link to Related Links
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
