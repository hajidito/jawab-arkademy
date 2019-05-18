<?php
	include 'config.php';	
	$data = mysql_query("select id, name 'nama'
	from users");
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>No 6 By Haji</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <h1>Soal No <span>6</span> by <span>Haji</span></h1>

<table class="responstable">
  
  <tr>
    <th colspan="2">
	<form action='insert_programmer.php' method='post' enctype='multipart/form-data'>
		<input name='nama' type='text'  placeholder='tambah programmer'>&nbsp;
		<input type=submit value=Simpan>
	</form>
	</th>
  </tr>
<?php while($hasil = mysql_fetch_array($data)){ 
	$data2 = mysql_query("select name as 'skill'
	from skills where user_id = ".$hasil['id']."");	
?>

  <tr>
    <td><?php echo $hasil['nama']; ?></td>
    <td rowspan="2" >
		<form action='tambah_skill.php?id_user=<?php echo $hasil['id']; ?>' method='post' enctype='multipart/form-data'>
		<input name='skill' type='text' placeholder='tambah skill'>&nbsp;
		<input type=submit value=Simpan>
	</form>
	</td>
  </tr>

  <tr>
    <td ><?php while($hasil2 = mysql_fetch_array($data2)){ echo $hasil2['skill'].","; }?></td>
  </tr>
  
<?php } ?>  
</table>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

  

</body>

</html>
