<h2>Publications</h2>
@php $catquery = new WP_Query( array( 'cat' => '12', 'posts_per_page' => '2' ) ); @endphp <!-- convert to Blade syntax -->
<div class="grid-x">
  @while($catquery->have_posts()) @php $catquery->the_post(); @endphp
    <article class="small-6 large-12">
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