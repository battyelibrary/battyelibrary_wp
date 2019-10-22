<footer class="content-info">
  <div class="container grid-x">
    <!-- Text -->
    <div class="footer-txt cell small-12 large-5">
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
    <!-- Menu 1 -->
    <div class="footer-menu cell small-6 large-2 large-offset-1">
      <h3>About</h3>
      <nav>
        @if (has_nav_menu('footer_navigation-about'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation-about', 'menu_class' => 'vertical menu']) !!}
        @endif
      </nav>
    </div>
    <!-- Menu 2 -->
    <div class="footer-menu cell small-6 large-2">
      <h3>Further Reading</h3>
      <nav>
        @if (has_nav_menu('footer_navigation-reading'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation-reading', 'menu_class' => 'vertical menu']) !!}
        @endif
      </nav>
    </div>
    <!-- Menu 3 -->
    <div class="footer-menu cell small-6 large-2">
      <h3>Associates & Contributors</h3>
      <nav>
        @if (has_nav_menu('footer_navigation-contributors'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation-contributors', 'menu_class' => 'vertical menu']) !!}
        @endif
      </nav>
    </div>

    <div class="footer-copyright cell small-12">
      <div class="grid-x">
        <div class="cell small-12 large-6">
          <p>© <?php echo date("Y"); ?> Friends of Battye Library Inc.</p>
        </div>

        <!-- Policies Menu -->
        <div class="cell small-12 large-6 float-right">
          <nav class="footer-menu-policies">
            @if (has_nav_menu('footer_navigation-policies'))
              {!! wp_nav_menu(['theme_location' => 'footer_navigation-policies', 'menu_class' => 'menu align-center']) !!}
            @endif
          </nav>
        </div>
      </div>
    </div> <!-- end .footer-copyright -->
  </div>
</footer>
