<!DOCTYPE html>
<html>
<head>
	<title>Kartu Anggota</title>
</head>
<body>
<h3>Form Identitas</h3>
<form method="POST" action="proses.php">
<table>
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><input type="text" name="nomor"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
			<select name="jk">
				<option>Pilih Jenis Kelamin</option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tempat"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tanggal"></td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td><input type="submit" name="submit"></td>
	</tr>
</table>
</form>
</body>
</html>