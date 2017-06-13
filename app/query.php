<?php

require 'start.php';

$posts = $db->query("
  SELECT title, slug, label
  FROM pages
")->fetchAll(PDO::FETCH_ASSOC);
