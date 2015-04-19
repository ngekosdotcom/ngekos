<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Buat Profil</title>

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
                  <div class="col-md-12">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb">Buat Profil</h4>
                      <form class="form-horizontal style-form" method="post" enctype="multipart/form-data" charset='utf-8' action="<?php echo base_url(); ?>Akuncontroller/buatprofil" >
                          <div class="form-group">
						  <table width ="80%" align ="center" border="0">
                              <tr><td width=40%>
									<?php if(isset($error)) echo '<div>Ukuran file gambar terlalu besar</div>';  ?>
								  <div class="col-sm-10">
									  <img class="img-thumbnail" src="<?php echo base_url();?>assets/img/default.jpg" style="width:150px;height:170px;" id="imgprvw" alt="Uploaded Image Preview Holder" >
								  </div><br>
							<div>
							
							<br> <input type="file" name="filUpload" id="filUpload" onchange="showimagepreview(this)" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg" multiple > Maks 2MB<br/>
							  </div>
							  </td>
							  
							  <td>
								<p> Nama:*<br> 
								<input type="text" name="nama" size="40" value="<?php echo set_value('nama');?>"/>
								</p>	
								<p> Alamat:*<br> 
								<input type="text" name="alamat" size="40" value="<?php echo set_value('alamat');?>"/>
								</p>	
								<p> No. Telp / HP:*<br> 
								<input type="text" name="telpon" size="40" value="<?php echo set_value('telpon');?>"/>
								</p>	
								<p> Tanggal Lahir:*<br> 
								<input type="date" name="tgl" size="40" min="1930-01-01" value="<?php echo set_value('tgl');?>"/>
								</p>	
								<p> Jenis Kelamin:*<br> 
								<input type="radio" name="jk" value="1"> Pria </input> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="jk" value="0"> Wanita </input>
								</p>	
							 </td>
							  </tr>
							   <tr><td></td><td align="right">
								<input type="submit" name="submit" value="Simpan" class="login-button" style="color:#ffffff"/>
							   </td> </tr>
							</table>
                          </div>
						  
                      </form>
                  </div>
          		</div><!-- col-lg-12-->     
             </div><!-- /col-lg-9 END SECTION MIDDLE -->
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

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script type="text/javascript">
		function showimagepreview(input) {
		if (input.files && input.files[0]) {
		var filerdr = new FileReader();
		filerdr.onload = function(e) {
			$('#imgprvw').attr('src', e.target.result);
		}
		filerdr.readAsDataURL(input.files[0]);
		}
		}
	</script>
    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter-conf.js"></script>
	
  
  

  </body>
</html>
