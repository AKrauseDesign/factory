<?php

require '../app/start.php';

$pages = $db->query("
  SELECT id, label, title, slug
  FROM pages
  ORDER_BY created DESC
")->fetch(PDO::FETCH_ASSOC);

var_dump($pages);
