<article @php post_class() @endphp>
  <header class="single-header">
    <!-- Featured Image -->
    <!-- This needs to be changed to display only if the featured image exists  -->
    <div class="entry-image">
      @php the_post_thumbnail() @endphp
    </div>
    <!-- Post Title -->
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <!-- Content -->
  <div class="entry-excerpt">
    @php the_excerpt() @endphp
  </div>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <!-- Download -->
  <div class="entry-download">
    <p>Download PDF button here.</p>
  </div>
  <!-- More Articles -->
  <div class="entry-morearticles">
    <p>Show more articles here.</p>
  </div>
</article>
