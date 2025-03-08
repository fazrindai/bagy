<?php
session_start();
$user=$_POST['txtusername'];
$password1=$_POST['txtpassword'];
include('koneksi.php');
$sql = $pdo->query("SELECT * FROM tb_admin where username='$user' AND password='$password1'");
$qry = $sql->fetch();
$num = $sql->rowCount();
if ($num >0) {
    $_SESSION['USER']=$gry['id_admin'];
    header("location: include/index.php");
}
?>
<script type="text/JavaScript">
    alert('username tidak sesuai');
    document.location='index.php';
</script>
<?php
?>
