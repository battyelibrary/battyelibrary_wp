<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content grid-x">
        <main class="index-main main cell small-12 large-8">
          <!-- ARTICLES -->
          <section class="content-section lit-articles">
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

          <!-- Newsletters -->
          <section class="content-section lit-newsletters">
            <h2>Latest Newsletters</h2>
              @php $catquery = new WP_Query( array( 'category_name' => 'newsletters', 'posts_per_page' => '2') ); @endphp
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
            <a href="#" class="button">View all newsletters</a>
          </section>

          <!-- JACK'S BACK -->
          <section class="content-section lit-jacks-back">
            <h2>Latest Jack's Back Articles</h2>
              @php $catquery = new WP_Query( array( 'category_name' => 'jacks-back', 'posts_per_page' => '2') ); @endphp
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
            <a href="#" class="button">View all jack's back</a>
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