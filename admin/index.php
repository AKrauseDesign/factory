<?php

require '../app/start.php';

$pages = $db->query("
  SELECT id, label, title, slug
  FROM pages
  ORDER BY created DESC
")->fetchAll(PDO::FETCH_ASSOC);

?>

<?php require 'templates/admin-header.php'; ?>

  <div class='admin-controls'>
    <a href='' class='secondary-btn'>New Post</a>
    <a href='' class='secondary-btn project-btn'>New Project</a>
  </div>

  <ul class='pages'>
    <?php foreach($pages as $page): ?>
      <li>
        <a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['label']; ?></a>
      </li>
    <? endforeach; ?>
  </ul>

<?php require 'templates/admin-footer.php'; ?>
