<h1>Universitas Ternak Lele</h1>
<?php 
	include 'koneksi.php';
	// session_start();
	// $query = $_SESSION['search'];
	// session_destroy();
	echo "<a href='showTable.php'>Tampilkan seluruh tabel</a>";

	include 'add.php';
	include 'delete.php';
	include 'search.php';
 ?>
 <table border="1" cellpadding="5px">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>NRP</th>
 			<th>Nama</th>
 			<th>Alamat</th>
 			<th>Nama Jurusan</th>
 		</tr>
 	</thead>

 	<tbody>
 		<?php 
 			$key=1;
 			$ambildata=mysqli_query($koneksi, $query);
 			while ($pecah = mysqli_fetch_array($ambildata)){
 				$data[] = $pecah;
 			}
 			foreach ($data as $value){
 				?>
 				<tr align="ceter">
 					<td><?php echo $key++; ?></td>
 					<td><?php echo $value['NRP']; ?></td>
 					<td><?php echo $value['Nama']; ?></td>
 					<td><?php echo $value['Alamat']; ?></td>
 					<td><?php echo $value['id_jur']; ?></td>
 				</tr>
 				<?php 
 			}?>
 	</tbody>
 </table>

