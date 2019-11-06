<article @php post_class() @endphp>
  <header>
    <!-- Featured Image -->
    <!-- This needs to be changed to display only if the featured image exists  -->
    <div class="entry-image">
      <a href="{{ get_permalink() }}">@php the_post_thumbnail() @endphp</a>
    </div>
    <!-- Title -->
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <!-- Excerpt -->
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
