<?php
if ($_GET['hal'] == '') {
  include 'pages/dash.php';
} else if ($_GET['hal'] == 'formulir') {
  include 'pages/form.php';
} elseif ($_GET['hal'] == 'antrian') {
  include 'pages/antrian.php';
} elseif ($_GET['hal'] == 'user') {
  include 'pages/user.php';
} elseif ($_GET['hal'] == 'admin') {
  include 'pages/admin.php';
}
