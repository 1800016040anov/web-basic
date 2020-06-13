
<!DOCTYPE html>
<html>
<head>
	<title> latihan </title>
</head>
<body >


<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>NIM</th>
		<td><?php echo $_POST["NIM"]; ?></td>
	</tr>
	<tr>	
			<th>nama</th>
			<td><?php echo $_POST["NAMA"]; ?></td>
	</tr>
	<tr>
		<th>
			jenis kelamin
		</th>
		<td><?php echo $_POST["KELAMIN"] ; ?></td>
	</tr>
	<tr>
		<th> Alamat </th>
		<td><?php echo $_POST["ALAMAT"]; ?></td>
	</tr>
	<tr>
		<th>
			Prodi
		</th>
		<td>
			<?php echo $_POST["PRODI"]; ?>
		</td>
	</tr>
	 <tr>
       <th>Bahasa Pemrograman yang dikuasai        </th>
    <td><?php if (isset($_POST['prog'])) {

        $prog=$_POST['prog'];
		echo "";
        for ($i=0; $i < count($prog) ; $i++){
            echo $prog[$i]."<br>";
        }
    }
	?></td>h
</table>



</body>
</html>h