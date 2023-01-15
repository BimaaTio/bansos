<?php
require '../config/functions.php';
if(isset($_GET['idf'])){
  hapus("DELETE FROM tb_form WHERE id = '".$_GET['idf']."' ");
  echo "
  <script>
      document.location.href = 'index.php?hal=formulir&oke=1&msg=Berhasil Dihapus';
  </script>
  ";
}
if (isset($_GET['uid'])) {
  hapus("DELETE FROM tb_user WHERE uid = '" . $_GET['uid'] . "' ");
  echo "
  <script>
      document.location.href = 'index.php?hal=user&oke=1&msg=Berhasil Dihapus';
  </script>
  ";
}