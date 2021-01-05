<?php foreach ($tentang as $a) :?>
	<center>
		<div class="card mt-3" style = "max-width: 540px;">
		<div class="row no-gutters">
		<div class="col-md-4" >
			<img src="<?= base_url(); ?>assets/<?php echo $a['foto'];?>" class="card-img" alt="...">

		</div>

			<div class="col-md-8">
			<div class="card-body">
			<h5 class="card-title">Profile</h5>
			<p class="card-text">Nama : <?php echo $a['nama']; ?></p>
			<p class="card-text">Tanggal Lahir : <?php echo $a['tgl_lhr']; ?></p>
			<p class="card-text">No Hp : <?php echo $a['no_hp']; ?></p>
			<p class="card-text">Alamat : <?php echo $a['alamat']; ?></p>
			
		</div>
		 <!-- <a href="" class="btn btn-primary">Kembali</a> -->
	</div>
	</div>		
	</div>
	</center>
	<?php endforeach; ?>