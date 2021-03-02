<!DOCTYPE html>
<html>
<head>
	<title>kalkulator online</title>
</head>
<style>

	body {
		background-color: #333;
	}
	
	.hasil {
		border: 2px solid white;
		width: 200px;
		height: 200px;
		padding: 20px;
		color: white;
		font-size: 20px;
		background-color: rgba(58 57 57);
	}
	h1 {
		color: white;
	}

	input {
		text-align: center;
		width: 250px;
		height: 50px;
		border-radius: 10px;
	}
	button {
		background-color: white;
		text-align: center;
		width: 150px;
		height: 50px;
		color: black;
		border-radius: 10px;
	}
	select {
		left: 20px;
		background-color: none;
		text-align: center;
		display: block;
   		width: 150px;
  		height: 34px;
 		padding: none;
 	   	font-size: 14px;
	     border: 1px solid #ccc;
	     border-radius: 4px;
	}
	.box {
		background-image: url(https://i.postimg.cc/C5wtGrf1/bg1.png);
	}
	

</style>
<body>
<center><br><div class="box"><br><br><br><br><br>
	<font style="font-family: arial; font-size: 50px; color: white; text-shadow: 1px 0px 10px white;">Kalkulator online</font><br><br>
	<div>
	<form method="post" action="">
		<input type="text" name="input1" placeholder="Masukan angka pertama" pertama><br><br>

		<select name="operator">
			<option value="tambah"> Tambah</p></option>
			<option value="kurang"> Kurang</option>
			<option value="kali"> Kali</option>
			<option value="bagi"> Bagi</option>
		</select><br><br>
		<input type="text" name="input2" placeholder="Masukan angka kedua"><br><br>
		<button type="submit" name="submit"><font size="6px" color="black">=</font></button>
	</form><br>
	<h1>Hasil</h1>
	<div class="hasil">
	<?php 
	if (isset($_POST['submit'])) {

		$angka1 = $_POST['input1'];
		$angka2 = $_POST['input2'];
		$operator = $_POST['operator'];

		if ($operator == "tambah") {
			$hasil = $angka1 + $angka2;
		} elseif ($operator == "kurang"){
			$hasil = $angka1 - $angka2;
		} elseif ($operator == "kali"){
			$hasil = $angka1 * $angka2;

	} elseif ($operator == "bagi"){
		$hasil = $angka1 / $angka2;
	}
	
	echo $hasil;
	}
	?>

	</div><br>
	</div>	
</center>
</div>
</body>
</html>
