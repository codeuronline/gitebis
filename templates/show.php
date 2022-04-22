<?php require_once 'models.php';
$post=get_post_by_id($_GET['id']);
require 'template/show.php';
