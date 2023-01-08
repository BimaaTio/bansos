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