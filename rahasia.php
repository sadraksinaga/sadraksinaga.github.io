<?php include("inc_footer1.php")?>
<?php 
if($_SESSION['members_email'] == ''){//dia belum login
   header("location:login.php");
   exit();
}
?>
   <div style="background-color: red;font-size:large;padding:50px;color:#FFFFFF;">
      Selamat datang <?php echo $_SESSION['members_nama_lengkap']?> di halaman rahasia, hanya yang sudah login yang dapat mengakses halaman ini.
   </div>

<?php include("inc_footer.php")?>