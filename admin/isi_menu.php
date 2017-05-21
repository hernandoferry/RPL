<?php

include "../../host.php";

if ($_GET[module]=='home'){
	echo"<h2> Selamat Datang</h2>";
}

elseif ($_GET[module]=='user'){
	include "../mod_user/form_usr.php";
}
elseif ($_GET[module]=='kamar'){
  include "mod_kamar/index.php";
}

// Bagian Kategori
elseif ($_GET[module]=='reservasi'){
  include "mod_reservasi/index.php";
}
elseif ($_GET[module]=='fasilitas'){
	include"mod_fasilitas/index.php";

}

// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
