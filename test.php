<html>
<head>
	 
<title>passing javascript variable to php</title>


<script type="text/javascript">
 

function cek()
{

cobafungsi();

var namaJS = document.form1.nama.value;
namaJS = "Mas Beneran " + namaJS;
alamatJS = document.form1.alamat.value + " Indonesia";

document.form1.nama.value = namaJS;
document.form1.alamat.value = alamatJS;
}


function cobafungsi()
{
	//document.write("Hello World!");
	return;
}
</script>
</head>
<body>

<?php
$varPHP1 = "";
$varPHP2;
$varPHP4;


if(isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['keperluan']) ){        
    $varPHP1 = $_POST['nama'];
    $varPHP2 = $_POST['alamat'];
    $varPHP4 = $_POST['keperluan'];

    echo "variabel javascript Keperluan telah diisikan ke variabel php : $varPHP4 </br>";
    echo "variabel javascript Nama telah diisikan ke variabel php : $varPHP1 </br>";
    echo "variabel javascript Alamat telah diisikan ke variabel php : $varPHP2 </br>";
 }
?>

<form name="form1" id="form1" method="post" onsubmit="cek()">
<label>Nama   Lengkap :</label>
<input type="text" id="nama" name="nama" size=30 required/><br><br>
<label>Alamat Lengkap :</label>
<input type="text" id="alamat" name="alamat" size=50 required/><br><br>
Keperluan :<br>
<textarea id="keperluan" name="keperluan" rows="5" cols="50"></textarea> <br> 
<br>
<input type="submit" id="submit" name="submit" value="cekcok"/>
</form>

</body>
</html>
