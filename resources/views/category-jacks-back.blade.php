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

@section('sidebar-other')
  <div class="sidebar-jacks-back">
    <!-- Widgets -->
    @php dynamic_sidebar('sidebar-jacks-back') @endphp

    <!-- Recent Articles -->
    <section class="sidebar-posts-menu">
      <h3>Recent Jack's Back Articles</h3>
      <ul class="vertical menu" data-accordion-menu>
        @php $catquery = new WP_Query( array( 'category_name' => 'jacks-back', 'posts_per_page' => '6') ); @endphp
        @while($catquery->have_posts()) @php $catquery->the_post(); @endphp
        <li class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></li>
        @endwhile
      </ul>
    </section>
  </div>
@endsection