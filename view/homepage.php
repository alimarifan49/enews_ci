
<hr>





<?php  foreach($hasil as $r) {?>


            <div class="col-sm-12 blog-main" style="font-style: normal;background-color: #FBFBF8;border-radius: 5px;padding: 18px;border:1px solid #C7C7C7;margin-top: 10px;">
<div class="thumbnail">
          <div class="blog-post">
                  <h1 class=""><a  style="text-decoration: none;font-style: normal;font-size: 25pt;" href=" <?= base_url(); ?>index.php/home/detail?id=<?php echo $r['id_post']; ?>"><?php echo  $r['judul'];?></a></h1>
            <p class="blog-post-meta"><?php echo  $r['tanggal']?>  by <a href="#">None</a></p>
            
           <div>
           	
           	<h5><?php echo  $r['deskripsi']?></h5>
           </div><hr>

           <div class="row">
             <div class="col-sm-4"><img src="<?= base_url(); ?>/assets/img/bg-img/19.jpg" height="10px" width="220px"/></div>

            <div class="col-sm-8">
            
            <?php echo substr($r['isi'],0,200)?>
           </div>

           </div>
          
        </div>
     </div>
</div><hr>


<?php } ?>
