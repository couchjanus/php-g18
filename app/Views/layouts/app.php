<!DOCTYPE html>
<html lang="en">
<?php require_once VIEWS.'/layouts/partials/_head.php'; ?>
<body>
<?php require_once VIEWS.'/layouts/partials/_nav.php'; ?>

<!-- cart -->
  <aside class="sidebar cart-overlay" id="sidebar">
    <div class="cart">
      <a href="#" class="close__btn"><i class="far fa-window-close"></i></a>
      <h2>Your Cart</h2>
      <div class="cart-content">
       
      </div>
      <div class="cart-footer">
        <h3>your total : $<span class="cart-total">0</span></h3>
        <a class="clear-cart btn_card">clear cart</a>
      </div>
    </div>
  </aside>
  <!-- end of cart -->

  <main>
    <?php require_once VIEWS.'/layouts/partials/_flash-message.php'; ?>
    <?php include(VIEWS."/".$template); ?>

  </main>
   
   <div class="overlay"></div>
   <?php require_once VIEWS.'/layouts/partials/_footer.php'; ?>
   <script src="/assets/js/main.js"></script>
</body>
</html>
