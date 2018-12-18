<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function delete(id){
       var r=confirm("Do you want to delete this?")
        if (r==true)
          window.location = url+"index.php/admin/hapus/"+id;
        else
          return false;
        } 
</script>

<div class="container-fluid">

	<div class="row">
		
		<div class="col-sm-3"><a class="btn btn-success" href="<?=base_url(); ?>index.php/admin/tambahpost">Tambah Berita</a></div>
		<div class="col-sm-8">
<a class="btn btn-success" href="<?=base_url(); ?>index.php">Lihat Website</a>


    </div>
	</div>

<br>
</div>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
        
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Berita</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Tanggal</th>
                      <th>Views</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                         <th>No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Tanggal</th>
                      <th>Views</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
             


<?php 
$no=1;

 foreach($hasil as $r) {?>
<tr>
<td><?php  echo $no; ?></td>
  <input type="hidden" name="id" value="<?php echo  $r['id_post'] ?>">
  <td><strong><?php echo substr($r['judul'],0,12)?></strong></td>
    <td><?php echo  substr($r['deskripsi'],0,12)?></td>
      <td><?php echo  $r['tanggal']?></td>
        <td><?php    $r['views']?></td>
          <td><?php echo  $r['status']?></td>
            <td><a href=" <?= base_url();?>index.php/admin/edit/<?php echo  $r['id_post'] ?>" class="btn btn-primary">Update</a>|<a href=" <?= base_url();?>index.php/admin/hapus/<?php echo  $r['id_post'] ?>" class="btn btn-danger">Hapus</a></td>
</tr><?php $no++; ?>
<?php } ?>



                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated ----- at 00:00;00 PM</div>
          </div>

       
        </div>







