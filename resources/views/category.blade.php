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
