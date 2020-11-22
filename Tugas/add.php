<h2>Data Mahasiswa Universitas Ternak Lele</h2>
<p>[---------------------------------------------]</p>

<form action="addProcess.php" method="post">
	
	<table>
		<tr>
			<td>NRP</td>
			<td>:</td>
			<td ><input type="text" name="NRP" required></td>	
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td ><input type="text" name="Nama" required></td>	
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td ><input type="text" name="Alamat" required></td>	
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><select name="id_jur" required>
				<option value="TB">Teknik Budidaya Lele</option>
				<option value="TR">Teknik Reproduksi Lele</option>
				<option value="TP">Teknik Panen Lele</option>
				<option value="TJ">Teknik Jual Lele</option>
			</select> </td>
		</tr>
	</table>
	<button type="submit" name="add">Tambah</button>
</form>