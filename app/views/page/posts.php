<div class='posts'>
  <h1>Posts</h1>
  <!-- require quick-facts -->
  <?php if (empty($posts)): ?>
    <p>Sorry, no pages at the moment</p>
  <? else: ?>
    <ul>
      <?php foreach ($posts as $page): ?>
        <li><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['label']; ?></a></li>
      <?php endforeach; ?>
    </ul>
  <? endif; ?>
</div>
