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
  <!-- About Newsletters -->
  <div class="content-section">
    <h2>About the Newsletter</h2> <!-- Replace with ACF plugin -->
    @php $image = get_field('sidebar-news_about'); @endphp
  </div>

  <!-- Contributions -->
  <div class="content-section">
    <h2>Contributions</h2> <!-- Replace with ACF plugin -->
    @php $image = get_field('sidebar-news_contribute'); @endphp
  </div>

  <!-- Recent Newsletters -->
  <div class="content-section sidebar-posts-menu">
    <h2>Newsletters by Year</h2>
    <!--<ul class="recent-posts-menu vertical menu" data-accordion-menu>
      @php $catquery = new WP_Query( array( 'cat' => '2', 'posts_per_page' => '6') ); @endphp
      @while($catquery->have_posts()) @php $catquery->the_post(); @endphp
      <li class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></li>
      @endwhile
    </ul>-->
  </div>
@endsection