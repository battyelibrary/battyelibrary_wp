<header class="banner" data-sticky-container>
  <div class="container" data-sticky-container>
    <div class="sticky" data-sticky data-options="marginTop:0;">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <nav class="nav-primary float-right">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
