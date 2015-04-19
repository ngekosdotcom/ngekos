<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>HOME - Pemilik</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lineicons/style.css">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ion.rangeSlider.skinFlat.css" />
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url()?>assets/js/chart-master/Chart.js"></script>
    
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
            <a href="berandaB.html" class="logo"><b>NGekos.com</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="berandaB.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme" id="sob"></span>
                        </a>
                        <ul class="dropdown-menu extended inbox" id="msgoy">
                            <div class="notify-arrow notify-arrow-green"></div>
							<li><p class="green" id="not"></p></li>
							
                           
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url(); ?> Akuncontroller/logout">Logout</a></li>
            	</ul>
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
              	  <p class="centered"><a href="berandaA.html"><img src="<?php echo $this->session->userdata('url');?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $this->session->userdata('nama');?></h5>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Profil</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>Akuncontroller/getUser/<?php echo $this->session->userdata('username')."/".$id; ?>">Lihat Profil</a></li>
						  <li><a  href="ubah_profilA.html">Ubah Profil</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/Akuncontroller/showubahpass/<?php echo $id; ?>">Ubah Password</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>index.php/Koscontroller/list_pengumuman/<?php echo $kos; ?>">Pengumuman</a></li>
						  <li class="active"><a  href="<?php echo base_url();?>index.php/Koscontroller/lihat_kos/<?php echo $id; ?>">Info</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Manajemen Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>index.php/Koscontroller/form_buat_kos/<?php echo $id; ?>">Buat Kos</a></li>
                          <li><a  href="<?php echo base_url();?>index.php/Koscontroller/lihat_daftar_kos/<?php echo $id;?>">Lihat Daftar Kos</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>index.php/Koscontroller/search_kos/<?php echo $id."/".uniqid(); ?>">
                          <i class="fa fa-tasks"></i>
                          <span>Cari Kos</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Pembayaran</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="berandaA.html">Jadwal Pembayaran</a></li>
                          <li><a  href="berandaA.html">Riwayat Pembayaran</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Lain-lain</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="berandaA.html">Tentang Website</a></li>
						  <li><a  href="berandaA.html">Panduan</a></li>
                      </ul>
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
				<div class="col-lg-9">               
                  	<div class="form-panel">
                  	  <h4 class="mb">Buat Kos</h4>
                      <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Koscontroller/ubahKos/<?php echo $id."/".$id;?>" method="post" charset="utf-8">
           					<table width ="80%" align ="center" border="0">
							<tr>	
									<td width=40% colspan="4" align="left">
										<div class="col-sm-10">
											<img src="<?php echo $url; $this->session->set_userdata(array('urlpkos'=>$url));?>" class="img-thumbnail" style="width:150px;height:200px;" id="imgprvw" alt="Uploaded Image Preview Holder" >
										</div>
									</td>
									<td colspan="4">
									<p>
										Nama Kos: 
										<input type="text" name="namakos" size="18" value=<?php echo$nama;?>>
										<label><?php echo form_error("namakos")?></label><br>
									</p>
									<p>
										Deskripsi:
										<textarea name="deskripsi" rows="5" cols="42" style="overflow:auto" value=<?php echo $deskripsi;?>><?php echo $deskripsi;?></textarea>
									</p>
									</tr>
									<tr>
									<td>
									Rentang Harga:
									</td>
									<td colspan="2">
									<p>										
										<div>
											<input type="text" id="range"  name="range" value="<?php echo$rentangharga;?>">
										</div>
									</p>
										
									</td>
									
								</tr>
								<tr>
									<td colspan="4" align="center">
									<br>
									Alamat Kos
									<br>
									</td>
									
								</tr>
									<td colspan="2">
									
										<p>Provinsi<br/>
												<label for ="select"  style="width:150px">
													<select name="provinsi">
														<option value="Jawa Barat"<?php echo($provinsi=="Jawa Barat"?"selected":"")?>> Jawa Barat</option>
														<option value="DKI Jakarta"<?php echo($provinsi=="DKI Jakarta"?"selected":"")?>> DKI Jakarta</option>
													</select>
												</label> </p>
										<p>Kecamatan<br/>
												<label for ="select"  style="width:150px" >
													<select name="kecamatan">
														<option value="Beji" <?php echo($kecamatan=="Beji"?"selected":"")?>> Beji</option>
														<option value="Sawangan" <?php echo($kecamatan=="Sawangan"?"selected":"")?>> Sawangan</option>
													</select>
												</label> </p>	
									</td>
									<td colspan="2">
										<p>Kota<br/>
												<label for ="select" >
													<select name="kota" style="width:150px">
														<option value="Depok"<?php echo($kota=="Depok"?"selected":"")?>> Depok </option>
														<option value="Bekasi"<?php echo($kota=="Bekasi"?"selected":"")?>> Bekasi</option>
													</select>
												</label></p>
										<p>Kelurahan<br/>
												<label for ="select" >
													<select name="kelurahan" style="width:150px">
														<option value="Kukusan" <?php echo($kelurahan=="Kukusan"?"selected":"")?>> Kukusan </option>
														<option value="Pondol Cina" <?php echo($kelurahan=="Pondok Cina"?"selected":"")?>> Pondok Cina </option>
													</select>
												</label></p>
										
									</td>
									<td width=20%>
									</td>
									<td width=20%>
									</td>
								<tr>
									<td colspan="4">
									Nama Jalan<br/>
										<input type="text" name="jalan" value="<?php echo$jalan;?>" size="40">
										<label><?php echo form_error("jalan")?></label><br>
									</td>
								</tr>
								<tr>
									<td width=25%>
									RT<br/>
										<input type="text" name="rt" value="<?php echo$rt;?>" size="10%">
										<label><?php echo form_error("rt")?></label><br>
									</td>
									<td width=25%>
									RW<br/>
										<input type="text" name="rw" value="<?php echo$rw;?>" size="10%">
										<label><?php echo form_error("rw")?></label><br>
									</td>
									<td width=25%>
									Nomor<br/>
										<input type="text" name="no" value="<?php echo$no;?>"size="10%">
										<label><?php echo form_error("no")?></label><br>
									</td>
									<td width=25%>
									Kode Pos<br/>
										<input type="text" name="kodepos" value="<?php echo$kodepos;?>" size="10%">
										<label><?php echo form_error("kodepos")?></label><br>
									</td>
								</tr>
								<tr>
									<td>
									</td>
									<td>
									</td>
								</tr>
								<tr>
									<td colspan="4" align="center">
										<br>
										Fasilitas
										<br>
									</td>
								</tr>
								<tr>
									

									<td colspan="2">
										Fasilitas Umum:<br/>
										<input type="checkbox" name="ruangtamu" <?php echo($ruangtamu==1?"checked='checked'":"")?> value="ruangtamu">Ruang Tamu<br>
										<input type="checkbox" name="dapur" <?php echo($dapur==1?"checked='checked'":"")?> value="dapur">Dapur<br>
										<input type="checkbox" name="lahanparkir" <?php echo($lahanparkir==1?"checked='checked'":"")?> value="lahanparkir">Lahan Parkir<br>
										<input type="checkbox" name="tempatjemur" <?php echo($tempatjemur==1?"checked='checked'":"")?> value="tempatjemur">Tempat Jemur<br>
										<input type="checkbox" name="laincheck" <?php echo($lainlain!==""?"checked='checked'":"")?> value="lainlain">
										Lainnya:
										<input type="text" name="lainlain" size="15" value="<?php echo $lainlain;?>">
									</td>
									<td>
										Jenis Kosan:<br/>
										<input type="radio" name="jenis" value="campuran"<?php echo ($jenis=="campuran"?"checked='checked'":"");?>>Campuran<br>
										<input type="radio" name="jenis" value="wanita"<?php echo ($jenis=="wanita"?"checked='checked'":"");?>>Wanita<br>
										<input type="radio" name="jenis" value="pria" <?php echo ($jenis=="pria"?"checked='checked'":"");?>>Pria<br>
									</td>
									<td>
										Kamar Mandi: <br/>
										<input type="radio" name="km" value="dalam" <?php echo ($kamarmandi=="1"?"checked='checked'":"");?>>Dalam<br>
										<input type="radio" name="km" value="luar" <?php echo ($kamarmandi=="0"?"checked='checked'":"");?>>Luar<br>
									</td>
								</tr>
					
								<tr>
									<td colspan="4">
									<br>
										Jumlah Kamar: 
										<br>
										<input type="text" name="jmlkamar" size="0" value="<?php echo $jumlah_kamar;?>">
										<label><?php echo form_error("jmlkamar")?></label><br>
									</td>
									<td colspan="4">
									<br>
										Luas Tanah: 
										<br>
										<input type="text" name="luas" size="0" value="<?php echo $luas_tanah;?>">meter persegi
										<label><?php echo form_error("luas")?></label><br>
									</td>
								</tr>
								
								<tr>
									<td colspan="4" align="right" size="50">
										<input type="submit" name="submit" class="submit-button"/>
									</td>
								</tr>
						</table>
					 </form>
                  </div>
					
                  </div>                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>Notifications</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> bayar untuk bulan Februari.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br/>
                      		   <a href="#">Diana Kennedy</a> bayar untuk bulan Januari, Februari, Maret.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br/>
                      		   <a href="#">Brandon Page</a> membooking kamar A.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>11 Hours Ago</muted><br/>
                      		   <a href="#">Mark Twain</a> mengirim pesan.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>18 Hours Ago</muted><br/>
                      		   <a href="#">Daniel Pratt</a> meninggalkan kos.<br/>
                      		</p>
                      	</div>
                      </div>

                       <!-- USERS ONLINE SECTION -->
						<h3>Penghuni Kos</h3>
                      <!-- First Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">DIVYA MANIAN</a><br/>
                      		   <muted>Kamar A</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">DJ SHERMAN</a><br/>
                      		   <muted>Kamar B</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">DAN ROGERS</a><br/>
                      		   <muted>Kamar C</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-zac.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Zac Sniders</a><br/>
                      		   <muted>Kamar D</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-sam.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Marcel Newman</a><br/>
                      		   <muted>Kamar E</muted>
                      		</p>
                      	</div>
                      </div>

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/moment.min.js"></script>
<script src="http://localhost:3000/socket.io/socket.io.js"></script>
	<script type="application/javascript">
	var user_id="<?php echo $id; ?>";
	var id_from = '';
	var orang = null;
	var kos = "<?php echo $kos; ?>";
	
	//var room_id=1;
	if(typeof io=="undefined")
	{
		alert("run node app.js");
		
	}
	else
	{
		var socket = io.connect('http://localhost:3000');
		var chatpage=socket.of('/berandaA')
			.on('connect_failed', function (reason) {
			console.error('unable to connect chatpage to namespace', reason);
			})
			.on('error',function(reason){
			console.error('unable to connect chatpage to namespace', reason);
			})
			.on('reconnect_failed',function(){
			
			})
			.on('connect', function () {
			console.info('sucessfully established a connection of chatpage with the namespace');
			chatpage.emit('senddata',{user_id:user_id});
			});
		
		chatpage.on('listorang',function(data){
			if(data.listorang)
			{
				orang = data.userdata;
				if(data.userdata.length > 0){
				var count = 0;
				$("#msgoy #pesan").remove();
					for(n in data.userdata)
					{
						count+=data.userdata[n].banyak
						var banyak ='<span class="message">'+data.userdata[n].banyak +' pesan belum dibaca</span>';	
						var gambar = '<span class="photo"><img alt="avatar" src="'+data.userdata[n].url+'"></span>';
						var waktu = '<br><span class="message"> Terakhir kirim: '+data.userdata[n].waktu +'</span>';
						var idfrom = '<input type="hidden" id="idfrom" value="'+data.userdata[n].idfrom+'"/>';
						var str = '<li id="pesan"><a href="<?php echo base_url(); ?>Pesancontroller/showform/'+user_id+'/'+data.userdata[n].idfrom+'/'+data.userdata[n].nama+'/'+kos+'" >'+gambar+' <span class="subject"><span class="from">'+data.userdata[n].nama+'</span>'+'</span>'+banyak+waktu+'</a>'+idfrom+'</li>';        
						$("#msgoy").append(str);
					}
					$("#sob").html(count);
					$("#not").html('Kamu punya '+count+' pesan belum dibaca!');
				}else{
					//$("#msgoy").append('Tidak ada pesan masuk');
					$("#sob").hide();
					$("#not").html('Tidak ada pesan masuk!');
				}
			}
			
		});	
		$('body').on("click",'#pesan',function(e){
			var SendButton = $(e.target);
			alert(SendButton);
			$('body').remove('#pesan');
		});
		chatpage.on('showpesan',function(data){
			if(data.userdata && data.idto){
				if(user_id.localeCompare(data.idto) == 0){
					if(data.userdata.length > 0){
						var count = 0;
						$("#msgoy #pesan").remove();
						for(n in data.userdata)
						{
							count+=data.userdata[n].banyak
							var banyak ='<span class="message">'+data.userdata[n].banyak +' pesan belum dibaca</span>';	
							var gambar = '<span class="photo"><img alt="avatar" src="'+data.userdata[n].url+'"></span>';
							var waktu = '<br><span class="message"> Terakhir kirim: '+data.userdata[n].waktu +'</span>';
							var idfrom = '<input type="hidden" id="idfrom" value="'+data.userdata[n].idfrom+'"/>';
							var str = '<li id="pesan"><a href="<?php echo base_url(); ?>Pesancontroller/showform/'+user_id+'/'+data.userdata[n].idfrom+'/'+data.userdata[n].nama+'/'+kos+'" >'+gambar+' <span class="subject"><span class="from">'+data.userdata[n].nama+'</span>'+'</span>'+banyak+waktu+'</a>'+idfrom+'</li>';        
							$("#msgoy").append(str);
						}
						$("#sob").html(count);
						$("#not").html('Kamu punya '+count+' pesan belum dibaca!');
				}else{
					$("#msgoy").append('Tidak ada pesan masuk!');
					$("#sob").html('');
					$("#not").html('Tidak ada pesan masuk!');
				}
				}
			}
			
		});
		
	}	
	</script>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url()?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url()?>assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url()?>assets/js/zabuto_calendar.js"></script>	
	
	
	
    <!--script for this page-->	
	<script src="<?php echo base_url(); ?>assets/js/ion.rangeSlider.js"></script>
	<script type="application/javascript">
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

  </body>
</html>
