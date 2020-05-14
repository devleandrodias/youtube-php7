<?php
session_start();

if (isset($_SESSION['mensagem'])) : ?>

  <script>
    window.onload = function() {
      M.toast({
        html: '<?php print $_SESSION['mensagem']; ?>'
      });
    };
  </script>

<?php endif;

session_unset(); ?>
