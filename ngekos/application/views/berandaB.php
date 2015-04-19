<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Beranda - Penyewa</title>

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
 <link rel="<?php echo base_url(); ?>stylesheet" href="assets/lib/sweet-alert.css">
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
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="berandaB.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="berandaB.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="berandaB.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="berandaB.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="berandaB.html#">See all messages</a>
                            </li>
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
              	  <p class="centered"><a href="berandaB.html"><img src="assets/img/yoona.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Penyewa</h5>
              	  	
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
                          <li><a  href="lihat_profilB.html">Lihat Profil</a></li>
						  <li><a  href="ubah_profilB.html">Ubah Profil</a></li>
                          <li><a  href="ubah_passwordB.html">Ubah Password</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="pengumumanB.html">Pengumuman</a></li>
						  <li><a  href="info_kosB.html">Info</a></li>
						  <li><a  href="review.html">Tulis Review</a></li>
						 <li><a  onclick="confirm()">Tinggalkan Kos</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Kamar</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="info_kamarB.html">Info</a></li>
						  <li><a  href="info_kosB.html">Pindah Kamar</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="searchB.html">
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
                          <li><a  href="berandaB.html">Jadwal Pembayaran</a></li>
                          <li><a  href="berandaB.html">Riwayat Pembayaran</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Lain-lain</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="berandaB.html">Tentang Website</a></li>
						  <li><a  href="berandaB.html">Panduan</a></li>
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
                  <h4 class="mb">Beranda</h4>
				  <div class="form-panel">
					  <h4 class="mb">Profil</h4>
						  <form class="form-horizontal style-form" method="get">
							  <div class="form-group">
								  <div class="col-sm-10">
									  <img src="<?php echo $url;?>" class="img-thumbnail">
								  </div>
							  </div>
							  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $nama;?> </p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $email;?></p>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No. Telepon</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $telpon;?></p>
                              </div>
                          </div>
						   <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php if($jenis_kelamin == '1') echo'Pria'; else echo'Wanita';?></p>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $alamat;?></p>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $tgl_lahir;?></p>
                              </div>
                          </div>
							  <div class="form-group">
								  <label class="col-sm-2 col-sm-2 control-label">Kos</label>
								  <div class="col-sm-10">
									  <p class="form-control-static">Pondok Astri</p>
								  </div>
							  </div>
							  <div class="form-group">
								  <label class="col-sm-2 col-sm-2 control-label">Kamar</label>
								  <div class="col-sm-10">
									  <p class="form-control-static">16</p>
								  </div>
							  </div>
						  </form>
					  </div>
				  </div>
                             				
																			
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>Notifikasi</h3>
                                        
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
              <a href="berandaB.html#" class="go-top">
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
	//var room_id=1;
	if(typeof io=="undefined")
	{
		alert("undefined");
		/*$('.spinner-feeds').hide();
		$('#chat-window').hide();
		$('.error-feeds').show();*/
	}
	else
	{
		var socket = io.connect('http://localhost:3000');
		var chatpage=socket.of('/berandaA')
			.on('connect_failed', function (reason) {
			/*$('.spinner-feeds').hide();
			$('#chat-window').hide();
			$('.error-feeds').show();*/
			console.error('unable to connect chatpage to namespace', reason);
			alert('1');
			})
			.on('error',function(reason){
			//alert("in error func");
			/*$('.spinner-feeds').hide();
			$('#chat-window').hide();
			$('.error-feeds').show();
			$('#chat-window').html('');*/
			console.error('unable to connect chatpage to namespace', reason);
			})
			.on('reconnect_failed',function(){
			alert("in reconnect fail func");
			/*$('.spinner-feeds').hide();
			$('#chat-window').hide();
			$('.error-feeds').show();
			$('#chat-window').html('');*/
			})
			.on('connect', function () {
			console.info('sucessfully established a connection of chatpage with the namespace');
			chatpage.emit('senddata',{user_id:user_id});
			});
		
		chatpage.on('listorang',function(data){
		/*	$('.error-feeds').hide();
			$('.spinner-feeds').hide();
			$('#chat-window').html('');
			$('#chat-window').show();
		*/
			var header='';
			var content='';
			var footer='';
			
			var cells='';
			
			
			
			if(data.listorang)
			{
				
				$("#sob").html(data.userdata.length);
				$("#not").html('Kamu punya '+data.userdata.length+' pesan baru!');
				for(n in data.userdata)
				{
					
					var pesan ='<span class="message">'+data.userdata[n].isi +'</span>';	
					var gambar = '<span class="photo"><img alt="avatar" src="'+data.userdata[n].url+'"></span>';
					var waktu = '<br><span class="time">'+data.userdata[n].time +'</span>'
					var str = '<li> <a href="berandaB.html#">'+gambar+' <span class="subject"><span class="from">'+data.userdata[n].nama+'</span>'+'</span>'+pesan+'</a></li>';        
					$("#msgoy").append(str);
				}
			}
			/*header='<div class="panel-heading"><h3 class="panel-title"><span class="label label-success">Online:</span> <span id="online-list"> '+cells+'</span></h3></div>';
			$('#chat-window').append(header);
			
			content='<div class="panel-body" style="min-height:410px;"><ul class="media-list" id="chat_block_list"></ul></div>';
			$('#chat-window').append(content);
			if(data.converdata)
			{
				for(n in data.converdata)
				{
					$('#chat_block_list').append('<li class="media"><div class="media-body"><h4 class="media-heading">'+data.converdata[n].username+'</h4><p>'+data.converdata[n].comment+'</p></div></li>');
				}
			}
			else
			{
				$('#chat_block_list').append('');
			}
			footer='<div class="panel-footer"><textarea class="form-control" rows="2" style="display:inline;width:95%" name="msg_box" id="msg_box"></textarea><button type="button" class="btn btn-primary btn-sm pull-right" id="msg_send">Send</button></div>';
			$('#chat-window').append(footer);*/	
		});	
		/*chatpage.on('showcomment',function(data){
			$('#chat_block_list').append('<li class="media"><div class="media-body"><h4 class="media-heading">'+data.room_comment[0].username+'</h4><p>'+data.room_comment[0].comment+'</p></div></li>');
			$('#msg_box').val('');
		});
		chatpage.on('newuser',function(data){
			$('#online-list').append('<span class="label label-default"><input type="hidden" class="userId" value="'+data.userdata[0].user_id+'"/>'+data.userdata[0].username+'</span>&nbsp;') 
		});
		chatpage.on('removeuser',function(data){
			$('#online-list span').each(function(index){
				var user_id=$(this).find('.userId').val();
				if(user_id==data.user_id)
				{
					$(this).remove();
				}
			});	
		});
		$('body').on("keypress",'#msg_box', function(e) {	
		if (e.which == 13) {
			$(this).blur();
			var message = $(this).val();
			if(message)
			{
				sendChat(message);
			}
			return false; // prevent the button click from happening
		}
		});	
		$('body').on("click",'#msg_send', function(e) {	
			var message = $('#msg_box').val();
			if(message)
			{
				sendChat(message);
			}
		});
		function sendChat(message)	
		{
			var curr_date= moment().format("YYYY-MM-DDTHH:mm:ss.SSSZZ");
			chatpage.emit('sendcomment', {msg:message,user_id:user_id,room_id:room_id,datetime:curr_date});
		}
	}
	function confirmExit()
	{
	 alert("exiting");
	 window.location.href='<? echo base_url();?>index.php';
	 return true;
	}
	window.onbeforeunload = confirmExit;*/
	}
	</script>
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
