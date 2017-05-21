<?php 

include('../../host.php');
	
	$id_peg =mysql_real_escape_string($_POST['id_pgw']);
	$nama_peg = mysql_real_escape_string($_POST['nm_lkp']);
	$jenis_klmn = mysql_real_escape_string($_POST['username']);
	$pass=md5(mysql_real_escape_string($_POST['pswd']));
	$adr=mysql_real_escape_string($_POST['alamat']);
	$phn=mysql_real_escape_string($_POST['tlp_hp']);
	
		$q=mysql_query("INSERT INTO user(
			USER_ID,
			NAMAUSER,
			JENIS_KELAMIN,
			PASSWORD,
			ALAMAT,
			NO_HP_TLP
			)VALUES(
			'$id_peg',
			'$nama_peg',
			'$jenis_klmn',
			'$pass',
			'$adr',
			'$phn'
			)");//or die(mysqli_error());  
			   
	
	if($q){
		echo "<script type='text/javascript'>alert('Berhasil menyimpan data!');</script>";
			echo "<script>document.location='../tambah_user.php'</script>";
	}
	else
		echo "gagal";
?>