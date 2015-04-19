<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Beranda</title>

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
              	  	
                  <li class="mt">
                      <a class="active" href="berandaB.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Beranda</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Profil</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>Akuncontroller/getUser/<?php echo $username; ?>">Lihat Profil</a></li>
						  <li><a  href="ubah_profilA.html">Ubah Profil</a></li>
                          <li><a  href="ubah_passwordA.html">Ubah Password</a></li>
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>index.php/Koscontroller/ /<?php echo $kos; ?>">Pengumuman</a></li>
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
                      <a href="searchA.html">
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
	  <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9">
				  <div class="form-panel">
                  <h4 class="mb">Form Search</h4>
				  <div class="form-panel">
				  </div>
				  </div>
			</div>
			</section>
	</section>
	
	<footer class="site-footer">
          <div class="text-center">
              2015 - Powered by <a href="http://www.blacktie.co/2014/07/dashgum-free-dashboard/">DashGum</a>
              <a href="" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
     </footer>
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

	
				  
				  
				  