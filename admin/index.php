<?php

require '../app/start.php';

$pages = $db->query("
  SELECT id, label, title, slug
  FROM pages
  ORDER BY created DESC
")->fetchAll(PDO::FETCH_ASSOC);

?>

<?php require 'templates/admin-header.php'; ?>
    <ul>
      <?php foreach($pages as $page): ?>
        <li><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['label']; ?></a></li>
      <? endforeach; ?>
    </ul>

<?php require 'templates/admin-footer.php'; ?>
