<nav>
    <ul class="navbar">
      <li class="navbar__logo"><a href="/">Shopaholic</a></li>
      <li class="navbar__item"><a href="/">Home</a></li>
      <li class="navbar__item"><a href="/about">About</a></li>
      <li class="navbar__item"><a href="/contact">Contact</a></li>
      <?php if (Helper::isGuest()) :?>
        <li class="navbar__item user"><a href="/sign"><span><i class="fas fa-user-plus"></i></span></a></li>
      <?php else :?>
        <li class="navbar__item user"><a href="/profile"><i class="fas fa-address-card"></i></a></li>
        <li class="navbar__item user"><a href="/logout"><i class="fas fa-sign-out-alt"></i></a></li>
      <?php endif;?>

      <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
      <li class="shopping__cart">
        <a href="#"><i class="fas fa-cart-plus"></i> <span class="shopping__cart-items">0</span></a>
      </li>
    </ul>

  </nav>