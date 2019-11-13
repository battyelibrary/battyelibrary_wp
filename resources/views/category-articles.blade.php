@extends('layouts.app')

@section('content')
  @include('partials.category-header')

  @if (!have_posts())
    <div class="noresults alert alert-warning">
      {{ __('Sorry, no results were found. Try searching for what you are looking for below.', 'sage') }}
    </div>
    <div class="noresults-search">
      {!! get_search_form(false) !!}
    </div>
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar-content')
  <!-- Recent Articles -->
  <div class="content-section sidebar-posts-menu">
    <h2>Recent Articles</h2>
    <ul class="vertical menu" data-accordion-menu>
      @php $catquery = new WP_Query( array( 'category_name' => 'articles', 'posts_per_page' => '6') ); @endphp
      @while($catquery->have_posts()) @php $catquery->the_post(); @endphp
      <li class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></li>
      @endwhile
    </ul>
  </div>
@endsection