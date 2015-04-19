<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Pesan</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/sweet-alert.css">
	<script src="<?php echo base_url(); ?>assets/lib/sweet-alert.min.js"></script>
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
              	  <p class="centered"><a href="berandaB.html"><img src="<?php echo $url;?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $nama;?></h5>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Profil</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>Akuncontroller/getUser/<?php echo $this->session->userdata('username')."/".$kos; ?>">Lihat Profil</a></li>
						  <li><a  href="ubah_profilA.html">Ubah Profil</a></li>
                          <li><a  href="<?php echo base_url(); ?>Akuncontroller/showubahpass/<?php echo $kos; ?>">Ubah Password</a></li>
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>index.php/Koscontroller/list_pengumuman/<?php echo $kos; ?>">Pengumuman</a></li>
						  <li><a  href="<?php echo base_url(); ?>index.php/Koscontroller/lihat_kos/<?php echo $kos; ?>">Info</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Manajemen Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>index.php/Koscontroller/form_buat_kos/<?php echo $kos; ?>">Buat Kos</a></li>
                          <li><a  href="<?php echo base_url();?>index.php/Koscontroller/lihat_daftar_kos/<?php echo $kos; ?>">Lihat Daftar Kos</a></li>
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
 <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-8">
					<div class="form-panel" >
							<h4 class="mb">Riwayat Percakapan</h4>
							<div class="namaUser"><?php echo $namakirim ?></div >
						<div id="messages" class="messages">
							<ul>
							</ul>
							<div class="clear"></div>
						</div>
						
						<div class="input-box">
						<form>
						<textarea placeholder="Tulis pesan" id="tulis"></textarea>
						
							<table width="100%">
								<tr><td width="90%">
									<input type="file" name="lampiran[]" size="40" multiple align="left">
								</td><td width="10%">
									<button type="submit" align="right">Kirim</button>
								</td></tr>
							</table>
						</form>	
						</div>

				 </div>    				
																			
			  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-4 ds">

                    <!--COMPLETED ACTIONS DONUTS CHART-->
	

                       <!-- USERS ONLINE SECTION -->
						<h3>Percakapan Terbaru</h3>
					<div class="pre-scrollable">
                      <!-- First Member -->
					   <div class ="desc-active">
                      <div class="desc">
					 
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">DIVYA MANIAN</a><br/>
                      		   <muted>5 menit lalu</muted>
                      		</p>
                      	</div>
                      </div>
					  </div>
                      <!-- Second Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">DJ SHERMAN</a><br/>
                      		   <muted>4 jam lalu</muted>
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
                      		   <muted>11/04/2015</muted>
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
                      		   <muted>06/04/2015</muted>
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
                      		   <muted>30/03/2015</muted>
                      		</p>
                      	</div>
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
              <a href="berandaB.html#" class="go-top">
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/moment.min.js"></script>
<script src="http://localhost:3000/socket.io/socket.io.js"></script>
	<script type="application/javascript">
	var user_id="<?php echo $idto; ?>";
	var id_from = '<?php echo $idfrom; ?>';
	var kos = '<?php echo $kos; ?>';
	var tanggalprev = '';
	//var room_id=1;
	if(typeof io=="undefined")
	{
		alert("undefined");
		
	}
	else
	{
		var socket = io.connect('http://localhost:3000');
		var chatpage=socket.of('/berandaA')
			.on('connect_failed', function (reason) {
			console.error('unable to connect chatpage to namespace', reason);
			alert('1');
			})
			.on('error',function(reason){
			console.error('unable to connect chatpage to namespace', reason);
			})
			.on('reconnect_failed',function(){
			alert("in reconnect fail func");
			})
			.on('connect', function () {
			console.info('sucessfully established a connection of chatpage with the namespace');
			chatpage.emit('senddata',{user_id:user_id});
			});
		
		chatpage.on('listorang',function(data){
			if(data.listorang)
			{
				if(data.userdata.length > 0){
				var count = 0;
				$("#msgoy #pesan").remove();
				for(n in data.userdata)
				{
					if(user_id.localeCompare(data.userdata[n].idto) == 0 && id_from.localeCompare(data.userdata[n].idfrom) !== 0){
					count+=data.userdata[n].banyak
					var banyak ='<span class="message">'+data.userdata[n].banyak +' pesan belum dibaca</span>';	
					var gambar = '<span class="photo"><img alt="avatar" src="'+data.userdata[n].url+'"></span>';
					var waktu = '<br><span class="message"> Terakhir kirim: '+data.userdata[n].waktu +'</span>';
					var idfrom = '<input type="hidden" id="idfrom" value="'+data.userdata[n].idfrom+'"/>';
					var str = '<li id="pesan"><a href="<?php echo base_url(); ?>Pesancontroller/showform/'+user_id+'/'+data.userdata[n].idfrom+'/'+data.userdata[n].nama+'/'+kos+'">'+gambar+' <span class="subject"><span class="from">'+data.userdata[n].nama+'</span>'+'</span>'+banyak+waktu+'</a>'+idfrom+'</li>';        
					$("#msgoy").append(str);
					}
				}
					$("#not").html('Kamu punya '+count+' pesan belum dibaca!');
					$("#sob").html(count);
					
				}else{
					$("#not").html('Tidak ada pesan masuk!');
					$("#msgoy").append(str);
					$("#sob").hide();
					
				}
				chatpage.emit('slist',{idto:user_id,idfrom:id_from});
			}
			
		});
		
		chatpage.on('getlist',function(data){
			if(data.listpesan && data.daftarorang)
			{
				var urlfrom = '';
				var urlto = '';
				
				for(n in data.daftarorang){
					if(data.daftarorang[n].id.localeCompare(id_from) == 0){
						urlfrom = data.daftarorang[n].url;
					}else{
						urlto = data.daftarorang[n].url;
					}
				}
				for(n in data.listpesan){
					var tanggal = data.listpesan[n].timestamp.substring(0,data.listpesan[n].timestamp.indexOf("T"));
					if(tanggal.localeCompare(tanggalprev) !== 0){
						$('#messages').append('<div class="headerPesan" id="'+tanggal+'" > <h5 class="tanggal">'+tanggal+'</h5> <ul></ul></div>');
						if(data.listpesan[n].id_from.localeCompare(id_from) == 0){
							var gambar = '<img src="'+urlfrom+'" width="35px" height="35px" class="left">';
							var pesan = '<span class="left">'+data.listpesan[n].isi+'</span>';
							var clear = '<div class="clear"></div>';
							var waktu = '<p class="timeleft">'+data.listpesan[n].timestamp+'</p>';
							$('#messages #'+tanggal+' ul').append('<li>'+gambar+pesan+clear+waktu+'</li>');

					}else{
							var pesan = '<span class="right">'+data.listpesan[n].isi+'</span>';
							var clear = '<div class="clear"></div>';
							var waktu = '<p class="timeright">'+data.listpesan[n].timestamp+'</p>';
							$('#messages #'+tanggal+' ul').append('<li>'+pesan+clear+waktu+'</li>');
					}
						tanggalprev = tanggal;
					}else{
					if(data.listpesan[n].id_from.localeCompare(id_from) == 0){
							var gambar = '<img src="'+urlfrom+'" width="35px" height="35px" class="left">';
							var pesan = '<span class="left">'+data.listpesan[n].isi+'</span>';
							var clear = '<div class="clear"></div>';
							var waktu = '<p class="timeleft">'+data.listpesan[n].timestamp+'</p>';
							$('#messages #'+tanggalprev+' ul').append('<li>'+gambar+pesan+clear+waktu+'</li>');

					}else{
							var pesan = '<span class="right">'+data.listpesan[n].isi+'</span>';
							var clear = '<div class="clear"></div>';
							var waktu = '<p class="timeright">'+data.listpesan[n].timestamp+'</p>';
							$('#messages #'+tanggalprev +' ul').append('<li>'+pesan+clear+waktu+'</li>');
					}
					}
					
				}
			}
		});
		function sendChat(message)	
		{
			chatpage.emit('sendpesan', {msg:message,idfrom:user_id,idto:id_from});
		}
		$('body').on("keypress",'#tulis', function(e) {	
				if (e.which == 13) {
					$(this).blur();
					var message = $(this).val();
					var tanggal = new Date().toLocaleDateString();
					array = tanggal.split('/');
					if(array[1] < 10){
						array[1] = '0'+array[1];
					}
					if(array[0] < 10){
						array[0] = '0'+array[0];
					}
					var tanggal = array[2]+'-'+array[1]+'-'+array[0];
					if(tanggal.localeCompare(tanggalprev) !== 0)
					{
						alert(tanggal);
						alert(tanggalprev);
						$('#messages').append('<div class="headerPesan" id="'+tanggal+'" > <h5 class="tanggal">'+tanggal+'</h5> <ul></ul></div>');
						var pesan = '<span class="right">'+message+'</span>';
						var clear = '<div class="clear"></div>';
						var waktu = '<p class="timeright">tes</p>';
						$('#messages #'+tanggal+' ul').append('<li>'+pesan+clear+waktu+'</li>');
						tanggalprev = tanggal;
						sendChat(message);
					}else{
						var pesan = '<span class="right">'+message+'</span>';
						var clear = '<div class="clear"></div>';
						var waktu = '<p class="timeright">tes</p>';
						$('#messages #'+tanggalprev +' ul').append('<li>'+pesan+clear+waktu+'</li>');
						tanggalprev = tanggal;
						sendChat(message);
					}
					$(this).val('');
					return false; // prevent the button click from happening
				}
		});
		
		chatpage.on('showpesan',function(data){
			if(data.userdata && data.idto){
				if(user_id.localeCompare(data.idto) == 0 && id_from.localeCompare(data.idfrom) !== 0){
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
						$("#not").html('Kamu punya '+count+' pesan belum dibaca!');
						$("#sob").html(count);
						
					}else{
						$("#msgoy").html('Tidak ada pesan masuk!');
						$("#sob").hide();
						$("#not").html('Tidak ada pesan masuk!');
					}
				}
			}
			if(data.pesan){
				for(n in data.pesan){
					if(user_id.localeCompare(data.idto) == 0 && id_from.localeCompare(data.idfrom) == 0 ){
						var tanggal = data.pesan[n].waktu.substring(0,data.pesan[n].waktu.indexOf("T"));
						if(tanggal.localeCompare(tanggalprev) !== 0){
							$('#messages').append('<div class="headerPesan" id="'+tanggal+'" > <h5 class="tanggal">'+tanggal+'</h5> <ul></ul></div>');
							var gambar = '<img src="'+data.pesan[n].url+'" width="35px" height="35px" class="left">';
							var pesan = '<span class="left">'+data.pesan[n].isi+'</span>';
							var clear = '<div class="clear"></div>';
							var waktu = '<p class="timeleft">tes</p>';
							$('#messages #'+tanggal+' ul').append('<li>'+gambar+pesan+clear+waktu+'</li>');
							tanggalprev = tanggal;
						}else{
							var gambar = '<img src="'+data.pesan[n].url+'" width="35px" height="35px" class="left">';
							var pesan = '<span class="left">'+data.pesan[n].isi+'</span>';
							var clear = '<div class="clear"></div>';
							var waktu = '<p class="timeleft">tes</p>';
							$('#messages #'+tanggalprev+' ul').append('<li>'+gambar+pesan+clear+waktu+'</li>');
							tanggalprev = tanggal;
						}
						chatpage.emit('update',{idpesan:data.pesan[n].idpesan});
					}
				}
			}
			
		});
		
		
	}
	</script>

    <!--common script for all pages-->
   <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/ajax_kota.js"></script>
	   <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
	
	
    
    
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
		
    </script>
  

  </body>
</html>
