<?php
if ($_GET['hal'] == '') {
  include 'pages/dash.php';
} else if ($_GET['hal'] == 'formulir') {
  include 'pages/form.php';
}
