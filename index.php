<!DOCTYPE html>
<html>
<head>
	<script language='JavaScript'>
	var tulisan=" benvindo mai website riolab.info ";
	var kecepatan=100;var fress=null;function jalan() { document.title=tulisan;
	tulisan=tulisan.substring(1,tulisan.length)+tulisan.charAt(0);
	fress=setTimeout("jalan()",kecepatan);}jalan();
</script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
	h2 {
		color: red;
		text-align: center;
		font-weight: bold;
	}
	hr {
		width: 50%;
		border: 2px  solid #000;
	}
	table {
		margin-left: 150px;
	}
	td {
		text-transform: uppercase;
		color: red;
		font-weight: bold;
		text-align: center;
	}
</style>
</head>
<body>

<div class="menu">
	<ul>
		<li><a href="index.html">home</a></li>
		<li><a href="#pro">profile</a></li>
		<li><a href="#gal">galery</a></li>
		<li><a href="#kont">kontaktu</a></li>
	</ul>
</div>
<div class="header">
	<center><img src="img/iob1.png" width="200px" height="200px"></center>
	<h1>" Benvindo Mai Ha'u Nia Website Simples"</h1>
	<marquee><p>Tugas <strong>TAS</strong> Web Programasaun Semester <strong>IV</strong> </p></marquee>
</div>
<div class="profile" id="pro">
	<h2>PROFILE</h2><hr>
	<center><img src="img/pro.jpg" width="200px" height="200px"></center>
	
	<div class="conten">
		<p>Nre : 1720261123</p>
		<p>Naran Kompleto : Mario Joseferino de Fatima Ximenes Amaral</p>
		<p>Fakuldade : ICT</p>
		<p>Departamentu : Teknika Informatika</p>
		<p>Semeste : IV</p>
	
	</div>
</div>
<div class="galery" id="gal">
	<h2>GALERY</h2><hr>
	<table border="2">
		<tr>
			<td><img src="img/foto2.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
			<td><img src="img/foto1.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
			<td><img src="img/foto2.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
			<td><img src="img/foto3.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
			<td><img src="img/foto4.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
		</tr>
		<tr>
			<td>imagem 1</td>
			<td>imagem 2</td>
			<td>imagem 3</td>
			<td>imagem 4</td>
			<td>imagem 5</td>
		</tr>
		<tr>
			<td><img src="img/foto1.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
			<td><img src="img/foto6.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
			<td><img src="img/foto7.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
			<td><img src="img/foto4.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
			<td><img src="img/foto2.jpg" width="200px" height="200px" style="border: 2px solid red;"></td>
		</tr>
		<tr>
			<td>imagem 6</td>
			<td>imagem 7</td>
			<td>imagem 8</td>
			<td>imagem 9</td>
			<td>imagem 10</td>
		</tr>
	</table>

</div>
<div class="kontaktu" id="kont">
	<h2>KONTAKTU </h2><hr>

	<div class="kon">
		<form action="" method="POST">
			<label for="Naran">Naran Konpletu :</label><br>
			<input id="input"  type="tex" name="Naran_kopleto" id="Naran"><br><br>
			<label for="Email">Email :</label><br><br>
			<input id="input"  type="email" name="email" id="Email"><br><br>
			<label for="nu_tlfn">Nu Telefone:</label><br><br>
			<input id="input"  type="number" name="nu_tlfn" id="nu_tlfn"><br><br>
			<label for="sms">Mensagem</label><br><br>
			<textarea  id="MEN" type="text" name="Mensagem" id="sms" rows="8"></textarea><br><br>
			<input id="si" type="submit" name="rai" value="Haruka">
			<input id="si" type="submit" name="kansela" value="kansela">
		</form>
	</div>
</div>
<div class="footer">
	<p style="color: white; margin-top: 60px; text-align: center;">copyright &copy 2018 by : <a href="http://www.riolab.info" target="blank">RIOLAB</a></p>
</div>
</body>
</html>