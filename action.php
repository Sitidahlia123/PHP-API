<?php
$conn = mysqli_connect("localhost","root","","php-api1");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$Id = $_GET['Id'];
$sql_delete=("DELETE FROM users WHERE Id='$Id' ");
mysqli_query($conn,$sql_delete)or die(mysqli_error($conn));
echo '<script>
alert("Data Berhasil Disimpan");
location="index.php?"
</script>';
?>
