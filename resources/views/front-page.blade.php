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
          <!-- EVENTS -->
          <section class="content-section home-events">
            <h2>Upcoming Meetings & Events</h2>
            <a href="#" class="button">View events for 2020</a> <!-- use php for dynamic year display -->
          </section>

          <!-- MEMBERSHIP (Mobile Only) -->
          <section class="content-section home-membership hide-for-large">
            @include('partials.home-membership')
          </section>

          <!-- ARTICLES -->
          <section class="content-section home-articles">
            <h2>Latest Articles</h2>
              @php $catquery = new WP_Query( array( 'category_name' => 'articles', 'posts_per_page' => '2') ); @endphp
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
            <a href="#" class="button">View all articles</a>
          </section>

          <!-- PUBLICATIONS (Mobile Only) -->
          <section class="content-section home-publications hide-for-large">
            @include('partials.home-publications')
          </section>

          <!-- READINGS -->
          <section class="content-section home-readings">
            <h2>Further Reading</h2>
            <!-- Bicentennial Dictionary -->
            <div class="grid-x">
              @php $pagequery = new WP_Query( array( 'post-type' => 'page', 'page_id' => '143' ) ); @endphp <!-- convert to Blade syntax -->
              @while($pagequery->have_posts()) @php $pagequery->the_post(); @endphp
                <article class="home-dictionary small-12">
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

            <div class="grid-x">
              <!-- Bibliography of WA History -->
              @php $pagequery = new WP_Query( array( 'post-type' => 'page', 'page_id' => '147' ) ); @endphp <!-- convert to Blade syntax -->
              @while($pagequery->have_posts()) @php $pagequery->the_post(); @endphp
                <article class="home-bibliography small-12 medium-6">
                  <!-- Title --> 
                  <h3 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h3>
                  <!-- Excerpt -->
                  <div class="entry-summary">
                    @php the_excerpt() @endphp
                  </div>
                  <a class="readmore" href="{{ get_permalink() }}">Read More</a>
                </article>
              @endwhile
              
              <!-- Related Links -->
              @php $pagequery = new WP_Query( array( 'post-type' => 'page', 'page_id' => '149' ) ); @endphp <!-- convert to Blade syntax -->
              @while($pagequery->have_posts()) @php $pagequery->the_post(); @endphp
                <article class="home-links small-12 medium-6">
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

          <!-- PROJECTS (Mobile only) -->
          <section class="content-section home-projects hide-for-large">
            @include('partials.home-projects')
          </section>
        </main>

        <!-- SIDEBAR (Desktop only) -->
        <aside class="sidebar show-for-large cell small-12 large-4">
          @include('partials.sidebar')
          <div class="grid-x">
            <!-- Membership -->
            <div class="content-section home-membership cell small-12">
              @include('partials.home-membership')
            </div>
            <!-- Publications -->
            <div class="content-section home-publications cell small-12">
              @include('partials.home-publications')
            </div>
            <!-- Featured Projects -->
            <div class="content-section home-projects cell small-12">
              @include('partials.home-projects')
            </div>
          </div>
        </aside>
      </div>
    </div>
    <!-- Footer -->
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
