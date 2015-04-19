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
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lineicons/style.css">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/js/chart-master/Chart.js"></script>
    
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
              	  <p class="centered"><a href="<?php echo $this->session->userdata('url');?>"><img src="<?php echo $this->session->userdata('url');?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Pemilik</h5>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Profil</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>Akuncontroller/getUser/<?php echo $this->session->userdata('username')."/".$kos;?> ">Lihat Profil</a></li>
						  <li><a  href="ubah_profilA.html">Ubah Profil</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/Akuncontroller/showubahpass/<?php echo $kos; ?>">Ubah Password</a></li>
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>index.php/Koscontroller/list_pengumuman/<?php echo $kos; ?>">Pengumuman</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/Koscontroller/lihat_kos/<?php echo $id; ?>">Info</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Manajemen Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>index.php/Koscontroller/form_buat_kos/<?php echo $id;?>">Buat Kos</a></li>
                          <li><a  href="<?php echo base_url();?>index.php/Koscontroller/lihat_daftar_kos/<?php echo $id;?>">Lihat Daftar Kos</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>index.php/Koscontroller/search_kos/<?php echo $kos."/".uniqid(); ?>">
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
                          <li><a  href="berandaA.html">Tentang Kami</a></li>
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
                  	  <h4 class="mb">Data Kos</h4>
				<?php  if($banyak == 0)
				{
					echo "Anda belum membuat kos</div></div>";

				}else  { ?>
                      <form class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <div class="col-sm-10">
                                  <img src="<?php echo $url?>" class="img-thumbnail" height="300" width="300">
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Kos</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $nama?></p>
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo "Jl.".$jalan." No ".$no." RT/RW ".$rt."/".$rw.", ".$kelurahan.", ".$kecamatan.", ".$kota?> </p>
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Rentang Harga</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">Rp. <?php $harga = explode(";",$rentangharga);
									echo $harga[0]." sd. ".$harga[1];?> </p>
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah Kamar</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $jumlah_kamar?></p>
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Luas Tanah</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $luas_tanah?></p>
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Kode Pos</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $kodepos?></p>
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $deskripsi?></p>
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Kos untuk</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $jenis?></p>
                              </div>
							  
                              <label class="col-sm-2 col-sm-2 control-label">Fasilitas</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">
								  <?php 
										$jumlahfasilitas = 0;
										if($dapur == 1)
										{
											if($jumlahfasilitas == 0)
												echo "<ul>";
											echo "<li> - Dapur </li>";
											$jumlahfasilitas++;
										}
										if($lahanparkir == 1)
										{
											if($jumlahfasilitas == 0)
												echo "<ul>";
											echo "<li> - Tempat Parkir </li>";
											$jumlahfasilitas++;
										}
										if($tempatjemur == 1)
										{
											if($jumlahfasilitas == 0)
												echo "<ul>";
											echo "<li> - Tempat Jemur</li>";
											$jumlahfasilitas++;
										}
										if($ruangtamu == 1)
										{
											if($jumlahfasilitas == 0)
												echo "<ul>";
											echo "<li> - Ruang Tamu</li>";
											$jumlahfasilitas++;
										}
										if($kamarmandi == 1)
										{
											if($jumlahfasilitas == 0)
												echo "<ul>";
											echo "<li> - Kamar Mandi Dalam </li>";
											$jumlahfasilitas++;
										}
										
										if($kamarmandi == 0)
										{
											if($jumlahfasilitas == 0)
												echo "<ul>";
											echo "<li> - Kamar Mandi Luar </li>";
											$jumlahfasilitas++;
										}
										
										if($lainlain !== "")
										{
											if($jumlahfasilitas == 0)
												echo "<ul>";
											echo "<li> - ".$lainlain."</li>";
											$jumlahfasilitas++;
										}
										if($jumlahfasilitas !== 0)
											echo "</ul>";
										?>
								  <?php
										if($jumlahfasilitas == 0)
										{
											echo "Tidak ada fasilitas yang tersedia";
										}
								  ?>
								  </p>
                              </div>
							  <div class="col-sm-10">
								  <a class="btn btn-theme" href="<?php echo base_url()?>index.php/Koscontroller/form_ubah_kos/<?php echo $id;?>">Ubah</a>
							  </div>
                          </div>
                      </form>
					 
                  </div>
				  <div class="form-panel">
                  	  <h4 class="mb">Daftar Denah</h4>
                      <form class="form-horizontal style-form" method="get">
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lantai 1</label>
                              <div class="col-sm-10">
                                  <button type="submit" class="btn btn-theme">Lihat</button>
								  <button type="submit" class="btn btn-theme">Ubah</button>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lantai 2</label>
                              <div class="col-sm-10">
                                  <button type="submit" class="btn btn-theme">Lihat</button>
								  <button type="submit" class="btn btn-theme">Ubah</button>
                              </div>
                          </div>						  
                      </form>
                  </div>
				  <div class="form-panel">
					<div class="form-group">
						<a class="btn btn-theme" href="info_kamarA.html">Kamar --test--</a>
					</div>
				  </div>
                    <?php } ?>          				
																			
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
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

    <!-- js placed at the end of the document so the pages load faster -->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/moment.min.js"></script>
<script src="http://localhost:3000/socket.io/socket.io.js"></script>
	<script type="application/javascript">
	var user_id="<?php echo $this->session->userdata('id'); ?>";
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
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url(); ?>assets/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
		
		function confirm(){
			swal({
				title: "Anda yakin?",
				text: "Anda akan keluar dari kos tempat anda terdaftar",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: '#66CCFF',
				confirmButtonText: 'Yakin',
				cancelButtonText: 'Batalkan',
				closeOnConfirm: false
			},
			function(isConfirm){
			if (isConfirm){
			  swal("Berhasil", "Data kos anda sudah dihapus");
			} 
			});
		};
    </script>


  </body>
</html>
