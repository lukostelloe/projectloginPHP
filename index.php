<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

if (isset($_GET["status"])) {
  $status = $_GET["status"];
}

if (!empty($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = "homelogin";
}

require_once "parts/header.php";

if (file_exists("./views/{$page}.php")) {
  require_once "./views/{$page}.php";
} else {
  require_once "./views/404.php";
}

require_once "parts/footer.php";