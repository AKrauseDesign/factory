<?php

require '../app/start.php';

$pages = $db->query("
  SELECT id, label, title, slug
  FROM pages
  ORDER BY created DESC
")->fetchAll(PDO::FETCH_ASSOC);

?>

<?php require 'templates/admin-header.php'; ?>
  <?php require 'views/nav.php'; ?>

  <div class="wrapper">





  </div>
<?php require 'templates/admin-footer.php'; ?>
