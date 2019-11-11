<h2>Featured Projects</h2>
@php $catquery = new WP_Query( array( 'cat' => '10' ) ); @endphp <!-- convert to Blade syntax -->
<div class="grid-x">
  @while($catquery->have_posts()) @php $catquery->the_post(); @endphp
    <article class="small-12">
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