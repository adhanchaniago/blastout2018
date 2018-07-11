<div class="main-w3layouts-form">
		<!-- main-w3layouts-form -->
		
			<center><span style="color:red">

                    <?php  
                    if (isset($pesan)){

                    	 echo $pesan;
                    } 
                    ?>
                                	
                    </span>
            </center>
		<form action="#" method="post">
            <!-- <?php echo form_open(base_url()."pengumuman/cari") ?> -->
            <?php echo form_open(base_url() . 'pengumuman', ['class' => ' wow fadeInUp']); ?>

			<div class="fields-w3-agileits">
				<span class="fa fa-pencil fa-fw" aria-hidden="true"></span>
				<input type="text" name="no_peserta" required="" placeholder="Nomor Peserta" />
			</div>
			<div class="fields-w3-agileits">
				<span class="fa fa-user" aria-hidden="true"></span>
				<input type="text" name="nama_lju" required="" placeholder="Nama LJU" />
			</div>
			<div class="remember-section-wthree">

			<input type="submit" name="cari" value="Cari"></input>
			<!-- <a href="<?php echo base_url('pengumuman/cari'); ?>"> next </a> -->
		</form>
             <?php echo form_close(); ?>
	</div>