<?php

	$this->load->view('user/head');

?>

<body> 

<div id="load-screen">

	<div id="loading"></div>

	<div id="loading1"></div>

</div>

<!-- <div class="loader"></div> -->

<div class="main-agile">

	<!-- banner -->

	<div id="home" class="w3ls-banner"> 

		<!-- banner-text -->

		<div class="slider">

			<div class="callbacks_container">

				<ul class="rslides callbacks callbacks1" id="slider4">

					<li>

						<div class="w3layouts-banner-top">

							<div class="agileits-banner-info">

								<div class="w3layouts-posi-1">

								</div>

								<div class="w3layouts-posi-2">

								</div>

								<h4>Are You Ready ?</h4>

								<h3>BLASTOUT2018</h3>

								<h5>"Feel The Real"</h5>

								<div class="w3layouts-posi-3">

								</div>

								<div class="w3layouts-posi-4">

								</div>

								<div class="thim-click-to-bottom">

									<a href="#maintop" class="scroll">

										<i class="fa fa-long-arrow-down" aria-hidden="true"></i>

									</a>

								</div>

							</div>	

						</div>

					</li>

					<li>

						<div class="w3layouts-banner-top t2">

						</div>

					</li>
				</ul>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>	

	<!-- //banner --> 

</div>	

<!-- header --> 

<div class="header" id="maintop">

	<nav class="navbar navbar-default">

		<div class="navbar-header navbar-left">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

				<span class="sr-only">Toggle navigation</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

			</button>

			<h1><a class="navbar-brand"><span>B</span>lastOut</a></h1>

		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->

		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

			<nav class="cl-effect-6" id="cl-effect-6">

				<ul class="nav navbar-nav">

					<li class="active"><a href="#home" class="scroll">Home</a></li>

					<li><a href="#about" class="scroll">Tentang</a></li>

					<li><a href="#services" class="scroll">Manfaat</a></li>

					<li><a href="#team" class="scroll">Tim</a></li>

					<li><a href="#testimoni" class="scroll">Testimoni</a></li>

					<li><a href="#gallery" class="scroll">Galeri</a></li>

					<li><a href="#" class="sign" data-toggle="modal" data-target="#mymodal"><i class="fa fa-sign-in" aria-hidden="true"></i> Daftar</a></li>

				</ul>

			</nav>

		</div>

	</nav>



	<div class="clearfix"></div>

</div>

<!-- //header --> 

	<!-- modal -->

<div class="modal fade" id="mymodal"  role="dialog">

	<div class="main-agileinfo"> 

			<div class="agileui-forms">

				<div class="container-form">

					<div class="form-item log-in"><!-- login form-->

						<div class="w3table agileinfo"> 

							<div class="w3table-cell register"> 

								<div class="w3table-tophead">

									<h2>Masuk</h2>

								</div>

								<!-- <form action="#" name="login_form" method="post">  -->
								<?php echo form_open(base_url(),['name'=>'login_form'] );?>
									<div class="fields-grid">

										<div class="styled-input agile-styled-input-top">

											<input type="text" name="Username" required=""> 

											<label>Username</label>

											<span></span>

										</div>

										<div class="styled-input">

											<input type="Password" name="Password" required="">

											<label>Password</label>

											<span></span>

										</div>

										<div class="form-group">
										<label>Masukan Captcha : </label>
										<span><?php echo $cap;?></span>
										<input type="text" name="captcha" required>
										<?php echo $captcha_return; ?>
										</div>									

										<input type="submit" id ="butlog" name="login" value="login"> 

									</div>

								<!-- </form> -->
								<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>

								<?php echo form_close()?>  

							</div>

						</div>

					</div>

					<div class="form-item sign-up"><!-- sign-up form-->

						<div class="w3table w3-agileits">

							<div class="w3table-cell register">   

									<h3>Daftar</h3>

								<?php echo form_open(base_url(),['name'=>'register_form'] );?>

								<!-- <form action="" method="post"> -->

									<div class="fields-grid">

										<div class="styled-input agile-styled-input-top">

											<input type="text" name="nama" required=""> 

											<label>Nama</label>

											<span></span>

										</div>

										<div class="styled-input">

											<input type="tel" name="phone" required="">

											<label>No HP</label>

											<span></span>

										</div>

										<div class="styled-input">

											<input type="text" name="sekolah" required="">

											<label>Sekolah</label>

											<span></span>

										</div>

										<div class="styled-input">

											<span style="padding-left: 10px">Jurusan : </span>

											<span style="padding-left: 10px"><input type="radio" name="jurusan" value="Saintek" required="">Saintek</span>

											<span style="padding-left: 10px"><input type="radio" name="jurusan" value="Soshum" required="">Soshum</span>

										</div>

										<!-- <div class="styled-input" id="recaptchareg">

											

										</div> -->

										<div class="clear"> </div>

									</div>

									<input type="submit" name="register" value="register">

								<!-- </form> -->

								<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>

								<?php echo form_close()?>



							</div>

						</div>

					</div>

				</div>

				<div class="container-info">

					<div class="info-w3lsitem">

						<div class="w3table">

							<div class="w3table-cell">

								<p> Sudah Punya Akun ? </p>

								<div class="btn"> Masuk </div>

							</div>

						</div>

					</div>

					<div class="info-w3lsitem">

						<div class="w3table">

							<div class="w3table-cell">

								<p> Ingin Mendaftar ?</p>

								<div class="btn">Daftar</div>

							</div>

						</div>

					</div>

					<div class="clear"> </div>

				</div> 				

			</div> 

		</div>	

</div>

					 

<!-- //modal -->

<!-- About -->

<div class="content-agileits" id="about">

	<div class="welcome-w3">

		<div class="container">

			<h3 class="w3_tittle">"Apa itu Blastout"</h3>

			<div class="welcome-grids">

				<div class="col-md-5 wel-grid1">

					<div class="port-7 effect-2">

						<div class="image-box">

							<img src="<?php echo base_url('assets/images/ketua.jpeg')?>" alt="Image-2">

						</div>

						<div class="text-desc">

							<h4>Cahyo Ramadhan</h4>

							<p>Diploma Teknik Mesin - 2017</p>

						</div>

					</div>

				</div>

				<div class="col-md-7 wel-grid">

					<h4>Balairung Klass Try Out</h4>

					<p>BLASTOUT  adalah sebuah perhelatan akbar persembahan Balairung Klaten Association yang akan menghadirkan suasana 'Feel The Real' sbmptn mulai dari pendaftaran,pelaksanana,hingga pengumuman. Semua itu guna memberikan pengalaman adik-adik peserta akan Sbmptn sebenarnya dan juga adik2 peserta bisa mengukur kemampuan diri masing2 dengan adanya perangkingan secara nasional dan regional. Selain itu BlasOut 2018 juga akan memberikan gambaran adik2 peserta mengenai dunia perkuliahan,fakultas2 yg ada di ugm dengan konsep yang sangat menarik melalui gadjah mada fair dengan konsep yang sangat menarik  untuk dinanti2 dan tentunya akan ada banyak persembahan lagi dari kami balairungklass ugm untuk klaten tercinta.</p>

					<p>So tunggu apa lagi? TryOut terbesar dan pertama di klaten yang menggunakan konsep feel the real serta perangkingaan nasional telah hadir.</p>

					<p>So. What are you waiting gaes ?</p>

					<p>Lets join and regist your name !!!</p>

					<br>

					<div class="right-sign-grid">

						<!-- <img src="images/sign.png" alt=" "> -->

						<h5>Cahyo - Ketua BlastOut 2018</h5>

					</div>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>

	</div>

</div>

<!-- //About -->

<!-- services -->

<div class="services jarallax" id="services">

	<div class="container">

		<h3 class="w3_tittle">"Apa Manfaat Kepada Anda"</h3>

		<div class="services-w3lsrow agileits-w3layouts">

			<div class="col-md-3 col-sm-3 col-xs-6 services-grids">  

				<i class="fa fa-trophy" aria-hidden="true"></i> 

				<h4>Rank Nasional</h4>

				<p>Anda akan mengetahui peringkat anda di tingkat nasional</p>

			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 services-grids">

				<div class="w3agile-servs-img">

					<i class="fa fa-newspaper-o" aria-hidden="true"></i> 

					<h4>Fell The Real</h4>

					<p>Anda akan merasakan ujian yang didesain mirip dengan SBMPTN</p>

				</div>

			</div>

			<div class="col-md-3 col-sm-3 col-xs-6 services-grids">

				<div class="w3agile-servs-img">

					<i class="fa fa-desktop" aria-hidden="true"></i>

					<h4>Sistem Website</h4>

					<p>Anda akan mendapatkan pengalaman sebelum menggunakan website resmi SBMPTN</p>

				</div>

			</div> 	

			<div class="col-md-3 col-sm-3 col-xs-6 services-grids">

				<div class="w3agile-servs-img">

					<i class="fa fa-bank" aria-hidden="true"></i>

					<h4>Gadjah Mada Fair</h4>

					<p>Anda akan mendapatkan pandangan tentang jurusan yang ada di UGM</p>

				</div>

			</div> 

			<div class="clearfix"> </div>

		</div>	 

	</div>

</div>	

<!-- //services --> 

<!-- Stats -->

	<div class="stats-agileits">

	<div class="container">

		<h3 class="w3_tittle">"BlastOut 2017"</h3>

	</div>

		<div class="stats-info agileits w3layouts">

		<div class="container">

			<div class="col-md-4 col-sm-4 stats-grid agileits w3layouts stats-grid-3">

				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1684' data-delay='3' data-increment="2">1684</div>

				<div class="stat-info-w3ls">

					<h4 class="agileits w3layouts">Peserta</h4>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="col-md-4 col-sm-4 agileits w3layouts col-sm-6 stats-grid stats-grid-1">

				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1082' data-delay='3' data-increment="1">1082</div>

				<div class="stat-info-w3ls">

					<h4 class="agileits w3layouts">Saintek</h4>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">

				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='602' data-delay='3' data-increment="1">602</div>

				<div class="stat-info-w3ls">

					<h4 class="agileits w3layouts">Soshum</h4>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="clearfix"></div>

			</div>

		</div>

	</div>

<!-- //Stats -->  

<!-- team -->

<div class="team jarallax" id="team">

	<div class="container">

		<h3 class="w3_tittle">"Siapakah Mereka"</h3>

		<div class="team-grids">

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgacara.jpeg')?>" alt="">

				<div class="captn">

					<h4>Monica</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/monicamps_" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Acara"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgit.jpeg')?>" alt="">

				<div class="captn">

					<h4>Gilas</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/skyelazt" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor IT"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgdanus.jpeg')?>" alt="">

				<div class="captn">

					<h4>Shinta</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/shintanureka" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Danus"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgticketing.jpeg')?>" alt="">

				<div class="captn">

					<h4>Audrey</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/audreyjihan" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Ticketing"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgperkab.jpeg')?>" alt="">

				<div class="captn">

					<h4>Wahyu</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://instagram.com/wahyuharjan" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Perkap"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imghumpub.jpeg')?>" alt="">

				<div class="captn">

					<h4>Kirana</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/kiranaintanratri" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Humpub"</h6>

				</div>

			</div>

			<div class="clearfix"> </div>

		</div>

		<div class="team-grids">

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgsec.jpeg')?>" alt="">

				<div class="captn">

					<h4>Putri</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/amaliaputrir_" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Bendahara"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgkeamanan.jpeg')?>" alt="">

				<div class="captn">

					<h4>Resfa</h4>

					<div class="w3l-social">

						<ul>

							<li><a ><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Keamanan"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgpengawas.jpeg')?>" alt="">

				<div class="captn">

					<h4>Cindy</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/cindymarifat" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Pengawas"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgksk.jpeg')?>" alt="">

				<div class="captn">

					<h4>Dina</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/dinanir_" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor KSK"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgddd.jpeg')?>" alt="">

				<div class="captn">

					<h4>Dwiki</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://instagram.com/dwikidestian" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor DDD"</h6>

				</div>

			</div>

			<div class="col-md-2 agileinfo-team-grid">

				<img src="<?php echo base_url('assets/images/imgkons.jpeg')?>" alt="">

				<div class="captn">

					<h4>Dinda</h4>

					<div class="w3l-social">

						<ul>

							<li><a href="https://www.instagram.com/dindaianp" target="blank"><i class="fa fa-instagram"></i></a></li>

						</ul>

					</div>

					<h6>"Koor Konsumsi"</h6>

				</div>

			</div>

			<div class="clearfix"> </div>

		</div>

	</div>

</div>

<!-- //team -->

<!-- feedback -->

<div class="feedback_dot jarallax" id="testimoni">

	<div class=" feedback">

		<div class="container">

			<h3 class="w3_tittle">"Apa Kata Mereka"</h3>

			<div class="agileits-feedback-grids">

				<div id="owl-demo" class="owl-carousel owl-theme">

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Blastout, Balairung Klass Try Out merupakan try out yang menyajikan suasana SBMPTN secara real, dimana mulai dari pendaftaran sampai pelaksanaan serta pengumuman dilakukan seperti ujian SBMPTN. Di try out ini kita bisa melatih diri dalam menghadapi SBMPTN selain itu kita bisa mengukur kemampuan diri kita dengan adanya perankingan secara regionalism maupun nasional. Jangan lewatkan kesempatan simulasi SBMPTN secara real !! So what are you waiting for ? Let's join and regist your name !!</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/c1.jpeg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Luthfiah Eka</h5>

									<p>Farmasi - 2017</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Blastout, merupakan salah satu event akbar bagi mahasiswa klaten di ugm, kegiatan berfaedah yg dapat menyatukan kita, mari kawan.. bergandengan tangan songsong kota klaten agar lebih baik kedepannya, cetak generasi penerus yang berilmu dan bermoral</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/c2.jpeg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Khoiruddin Anshori</h5>

									<p>Biologi - 2017</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Blastout merupakan persembaan  Balairung Klass (Bklass) yang berupa Try Out feel the real sbmptn dan acara menarik lainnya (gadjah mada fair) untuk siswa SMA/SMK/Sederajat  yang ada di klaten. membantu siswa siswi klaten untuk mendapatkan gambaran tentang Ujian Masuk Perguruan Tinggi jalur sbmptn</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/c3.jpeg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Alfanira Zuhriya</h5>

									<p>Diploma Ekonomi Terapan - 2017</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Menurut saya blastout tahun kmren sangat bagus dan acaranya asik. Dan acara blastout ini sangat membantu kami untuk mempersiapkan diri menghadapi ujian SBMPTN maupun UTUL (ujian Tulis). </p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/c4.jpeg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Erika Bayu Oka</h5>

									<p>Diploma Ekonomika Bisnis - 2017</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p>Blastout, event tryout taunan dari bklass yang sangat bermanfaat bagi siswa sma smk sederajat. Jadi buat kalian yang mengikuti blastout tidak akan rugi karena blastout mampu membantu kalian selangkah lebih depan untuk menggapai gamada klaten yang lebih baik!!!!😍😂</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/c5.jpeg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Luthfinna Cahya</h5>

									<p>Pariwisata - 2017</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

					<div class="item">

						<div class="icon-w3l">

							<i class="fa fa-quote-left" aria-hidden="true"></i>

						</div>

						<div class="feedback-info">

							<div class="feedback-top">

								<p> BlastOut itu istimewa, nyesel kalau tidak ikut blastout. Banyak hal yang bisa didapat dari mengikuti blastout, kita bisa merasakan tahap-tahap yang harus dilakukan untuk mendaftar SBMPTN serta bagaimana suasana SBMPTN berlangsung. Tidak hanya try out, ada juga edufair yang menbantu kita dalam meyakinkan akan mengambil jurusan apa. Perankingannya ada yang sekabupaten dan ada juga yang senasional hihihi...Cobalah bila ingin mencoba dan berjuanganlah dalam mencoba.</p>

							</div>

							<div class="feedback-grids">

								<div class="feedback-img">

									<img src="<?php echo base_url('assets/images/c6.jpeg')?>" alt="" />

								</div>

								<div class="feedback-img-info">

									<h5>Adik Amin</h5>

									<p>Teknik Fisika - 2017</p>

								</div>

								<div class="clearfix"> </div>

							</div>

						</div>	

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- //feedback -->

<!-- gallery-->

<div class="gallery jarallax" id="gallery">

	<div class="container">

		<h3 class="w3_tittle">"Lihat Koleksi Kami"</h3>

		<div class="gallery-grids">

			<section>

				<ul id="da-thumbs" class="da-thumbs">

					<li>

						<a href="<?php echo base_url('assets/images/g1.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g1.jpeg')?>" alt="" />	

							<div>

								<h5>Suasana Peserta Soshum</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/g2.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g2.jpeg')?>" alt="" />

							<div>

								<h5>Harap Bersabar Ini Ujian</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/g3.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g3.jpeg')?>" alt="" />

							<div>

								<h5>Bingung Mencari Ruang</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/g4.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g4.jpeg')?>" alt="" />

							<div>

								<h5>Keceriaan Peserta di GMF</h5>

							</div>

						</a>

					</li>

					<li>	

						<a href="<?php echo base_url('assets/images/g5.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g5.jpeg')?>" alt="" />

							<div>

								<h5>Panitia BlastOut 2017</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/g6.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g6.jpeg')?>" alt="" />

							<div>

								<h5>Fashion Show di GMF</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/g7.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g7.jpeg')?>" alt="" />

							<div>

								<h5>Suasana Peserta Saintek</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/g8.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g8.jpeg')?>" alt="" />

							<div>

								<h5>Makin Banyak Teman</h5>

							</div>

						</a>

					</li>

					<li>

						<a href="<?php echo base_url('assets/images/g9.jpeg')?>" class="b-link-stripe b-animate-go  thickbox">

							<img src="<?php echo base_url('assets/images/g9.jpeg')?>" alt="" />

							<div>

								<h5>Bismillah Lancar Jaya</h5>

							</div>

						</a>

					</li>

				</ul>

			</section>

		</div>

	</div>

</div>

<!--//gallery-->

<?php

	$this->load->view('user/foot');

?>