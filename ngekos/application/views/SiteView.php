<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>NGekos</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lineicons/style.css">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ion.rangeSlider.skinFlat.css" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/js/chart-master/Chart.js"></script>
    
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="berandaA.html" class="logo"><b>NGekos.com</b></a>
            <!--logo end-->
				
            <div class="top-menu">
				<form action="<?php echo base_url();?>Akuncontroller/login" method="post" charset='utf-8'>
            	<ul class="nav pull-right top-menu" style="margin:15px 0 0 0">
				
					Username:<input type="text" name="usernamelogin" value="<?php echo set_value('usernamelogin');?>" size="18"/> &nbsp;&nbsp;&nbsp; 
					Password:<input type="password" name="passwordlogin" value="<?php echo set_value('passwordlogin');?>" size="18"/>&nbsp;&nbsp;&nbsp; 
					<input type="submit" name="submit" class="login-button"/>
					<br>
						<?php if(isset($error1)) echo'<p>Username tidak terdaftar!</p>'; ?>
						<?php if(isset($error2)) echo'<p>Password Salah!</p>'; ?>
					<a href="<?php echo base_url();?>Akuncontroller/lupapassword">Lupa Password ?</a>
				</ul>
				</form>
			</div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              	  	
                  
                  
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Tentang Website</span>
                      </a>
                      
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Panduan</span>
                      </a>
                      
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
			 
                   <?php if(isset($result)) { ?>
				    <div class="col-lg-9">
				   <div class="form-panel ds">
					<h4 class="mb">Hasil Pencarian</h4>
					<?php foreach ($result as $row){
						$harga = explode(";",$row['rentangharga']);
						echo '<div class="desc" >';
						echo '<table class="tableSearch" href="">'; 
						 echo' <tr > <td>';
						echo '<img src="'.$row['url'].'" class="img-thumbnail" >';
						echo	'</td><td>';
						echo'	<ul >
								<h4 color="black">'.$row['nama'].'</h4>
								<li>Alamat 	: Jl. '.$row['jalan'].' No.'.$row['no'].' '.$row['kota'].'</li>
								<li>Rentang Harga	: Rp. '.$harga[0].'s.d. Rp. '.$harga[1].'</li>
								<li>Jenis Kos	: '.$row['jenis'].'</li>
							</ul>	
							</td></tr>
							</table>
						</div>';
					}
					?>
                  </div>
				  </div>
				  <br>
				  <?php } ?>
				  
          		<div class="col-lg-9">
                  <div class="form-panel">
                  	  <h4 class="mb">Pencarian Kos</h4>
                      <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>index.php/Koscontroller/getlistkos/siteview/belum_ada">
                          <div class="form-group">
									<table width ="80%" align ="center" border="0">
									<tr >
									<td width="20%"></td>
									<td >
									<br>
										Provinsi<br/>
										
										<label for ="select" >
											<select name="prop" id="prop" onchange="ajaxkota(this.value)">
												<?php
												echo '<option selected value="" >Pilih Provinsi</option>';
												foreach($propinsi as $row){
													echo '<option value="'.$row['lokasi_propinsi'].'">'.$row['lokasi_nama'].'</option>';
												}
												?>
											</select>
										</label>
									</td ><br>
									<td ><br>
										Kota<br/>
										<label for ="select" >
											<select name="kota" id="kota" onchange="ajaxkec(this.value)">
												<option value="">Pilih Kabupaten/Kota</option>
											</select>
										</label>
									</td>
									<td width="10%"></td>
								</tr>
								<tr>
								<td ></td>
									<td ><br>
										Kecamatan<br/>
										<label for ="select" >
											<select name="kec" id="kec" onchange="ajaxkel(this.value)">
												<option value="">Pilih Kecamatan</option>
											</select>
										</label>
									</td>
									<td ><br>
										Kelurahan<br/>
										<label for ="select" > 
											<select name="kel" id="kel">
												<option value="">Pilih Kelurahan</option>
											</select>
										</label>
									</td>
									<td ></td>
								</tr>	
								<tr>
								<td ></td>
									<td colspan="2"><br>
										Kisaran harga:
										<br>										<br>
										<div>
											<input type="text" id="range" name="range" />
										</div>
										<br>
									</td>			
								<td ></td>									
								</tr>
								<tr>
								<td ></td>
								<td colspan="3">
								<details>
										<summary> Pencarian lebih lanjut </summary> <br/>
												<table align="center" width=90%>
												<tr>
													<td width=30%>
														Fasilitas tambahan: <br/>
														<input type="checkbox" name="ac" value="AC">AC<br>
														<input type="checkbox" name="dapur" value="Dapur">Dapur<br>
														<input type="checkbox" name="parkir" value="Parkir">Lahan Parkir<br>
														<input type="checkbox" name="jemur" value="Tempat Jemur">Tempat Jemur<br>
														<input type="checkbox" name="ruangtamu" value="ruangtamu">Ruang Tamu<br>
													</td>
													<td width=30%>
														Jenis Kos: <br/>
														<input type="radio" name="jenis" value="campuran" selected>Campur<br>
														<input type="radio" name="jenis" value="wanita">Wanita<br>
														<input type="radio" name="jenis" value="pria">Pria<br>
													</td>
													<td width=30%>
														Kamar Mandi: <br/>
														<input type="radio" name="km" value="dalam" selected>Dalam<br>
														<input type="radio" name="km" value="luar">Luar<br>
													</td>
													
													<td width=10%></td>
												</tr></table>
												</details>
												</td>
											</tr>
											<tr>
												<td> </td><td></td>
												<td align="right">
												<br>
												<br>
													<input type="submit" id="submit" name = "submit" value="Temukan" class="login-button"/>
												</td></tr>	
										</table >
									
								
							
							</div>
								
                      </form>
					  
				 
          		</div><!-- col-lg-12-->     
                  <br>
				 
				</div>
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--Registrasi-->
						<h3>Pendaftaran</h3>
                      <div class="form-panel">
						<div class="form-group">
						<form action="<?php echo base_url();?>Akuncontroller/buatakun" method="post" charset='utf-8'>
							<table align="center">
							<tr> <td>
							<p>
								<label for="username">Username:</label><br>
								<input type="text" id="username" name="username" size="30%" value="<?php echo set_value('username'); ?>"/><br>
								<label><?php echo form_error('username'); ?> <?php if(isset($adauser)) echo '<div>username telah digunakan!</div>'; ?></label><br>
							</p>
							<p>
								<label for="password">Password:</label><br>
								<input type="password" id="password" name="password" size="30%"/><br>
								<?php echo form_error('password'); ?><br>
							</p>
							<p>
								<label for="conpassword">Konfirmasi Password:</label><br>
								<input type="password" id="conpassword" name="conpassword" size="30%" /><br>
								<?php echo form_error('conpassword'); ?><br>
							</p>
							<p>
								<label for="email">Email:</label><br>
								<input type="email" id="email" name="email" size="30%" value="<?php echo set_value('email'); ?>" /><br>
								<?php echo form_error('email'); ?><br>
							</p>
							<p>
								<label for="email">Role:</label><br>
								<input type="radio" id="role" name="role" value="pemilik">Pemilik &nbsp; &nbsp; &nbsp; 
								<input type="radio" id="role" name="role" value="penyewa">Penyewa<br>
								<?php echo form_error('role'); ?><br>
							</p>
							</td>
							</tr>
							<tr>
							<td align="center">
							<p><br>
							<input type="submit" id="submit" name="submit" value = "Daftar" href="notif_daftar.html" class="reg-button" style="color:#ffffff"/>
							</p>
							</td> </tr>
							</table>
							</form>						
						</div>
					  </div>
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - Powered by <a href="http://www.blacktie.co/2014/07/dashgum-free-dashboard/">DashGum</a>
              <a href="berandaA.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
	<script src="<?php echo base_url(); ?>assets/js/ion.rangeSlider.js"></script>
	<script>
		$(function harga() {
			$("#range").ionRangeSlider({
			hide_min_max: true,
			keyboard: true,
			min: 100000,
			max: 5000000,
			from: 1000,
			to: 4000,
			type: 'double',
											step: 1000,
											prefix: "Rp ",
											grid: true
										});
									});
	</script>
	<script src="<?php echo base_url(); ?>assets/js/ajax_kota.js"></script>
	<?php if(isset($berhasil)) echo '<script>alert("Password berhasil di reset silahkan cek email!") </script>'?>
  </body>
</html>
