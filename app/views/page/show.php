<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <?php if (!$page): ?>
    <p>No page found, sorry</p>
  <?php else: ?>

    <h2><?php echo e($page['title']); ?></h2>
    <?php echo e($page['body']); ?>
    <p class='faded'>
      Created on <?php echo $page['created']->format('M jS, Y'); ?>
      <?php if($page['updated']): ?>
      </br><small>Last updated <?php echo $page['updated']->format('M jS, Y'); ?></small>
      <?php endif; ?>
    </p>
  <?php endif; ?>

  <!-- link to admin page if the user is signed in -->
  <?php if (!($_SERVER[PHP_AUTH_USER] == NULL)): ?>
    <a href="<?php echo BASE_URL; ?>/admin/index.php">Admin Panel</a>
  <?php endif; ?>

  <!-- link to main page of factory -->
  <a href='<?php echo BASE_URL; ?>'>Go Home</a>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
