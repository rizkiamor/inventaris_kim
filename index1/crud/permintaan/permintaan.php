<div id="isia"></div>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
      <li class="active">User</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><b>Permintaan Keluar</b></div>
  <button type="button" class="btn btn-danger pull-right" onclick="permintaan_tam()" >+</button>
  <button type="button" class="btn btn-danger pull-right" onclick="permintaan()" ><i class="fa fa-refresh"></i></button>
  <table class="table">
    <tr><td><center><b>Nomor Permintaan</b></td><td><center><b>Tanggal Permintaan</b></td><td>
      <center><b>Nama Pemakai</b></td><td><center><b>Kode Barang</b></td><td><center><b>Jumlah</b></center></td>
    </tr>
    <?php require_once"../conn.php";
$pdo=$saripdo->prepare("select*from tb_permintaan order by No_permintaan ASC");
$pdo->execute();
while($tampil=$pdo->fetch()){
?>
    <tr>
    <td><a href="#" class="list-group-item"><?php echo $tampil['No_permintaan']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Tanggal_permintaan']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Nama_pemakai']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Kode_barang']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Jumlah']; echo $tampil['Satuan']; ?></a></td>
</tr>
  <?php } ?>
  </table>
</div>
<!--  <button style="margin-left:5%" onclick="print(this.value);" value="<?php echo "bagus"; ?>">Print Document</button> -->
<div id="aksi">
  .
</div>
