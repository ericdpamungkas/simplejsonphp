<?php
$json_obj = "{
       
		  'nama_akun': 'aaariasdas',
		  'email': 'aaariasdasd',
		  'password': 'aaariasdasd'
          
     }";

//convert to stdclass object
$emp_data = json_decode($json_obj);

//store the element values into variables
$nama_akun = $emp_data->nama_akun;
$email = $emp_data->email;
$password = $emp_data->password;

$pass = md5($password);


//insert values into mysql database
$hostmysql = "localhost";
$username = "root";
$password = "qweasdzxc";
$database = "sim_pmb";

$conn = mysql_connect($hostmysql,$username,$password);
if (!$conn) die ("Gagal Melakukan Koneksi");
mysql_select_db($database,$conn) or die ("Database Tidak Diketemukan di Server"); 




$sql= mysql_query("INSERT INTO t_akun VALUES('','$nama_akun','$email','$pass',DEFAULT,DEFAULT,DEFAULT)");


print "<script>alert('BERHASIL');

javascript:history.go(-1);</script>";

?>