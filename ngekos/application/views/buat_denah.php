<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Buat Kos</title>

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
	<link href="<?php echo base_url(); ?>assets/css/main2.css" type="text/css" rel="stylesheet" /
    <script src="<?php echo base_url(); ?>assets/js/chart-master/Chart.js"></script>
	<link href="<?php echo base_url(); ?>assets/css/popuppesan.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/popuppesan.js"></script>
    
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
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="berandaA.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="berandaA.html#">
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
                                <a href="berandaA.html#">
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
                                <a href="berandaA.html#">
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
                                <a href="berandaA.html#">
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
                                <a href="berandaA.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="berandaB.html">Switch to Penyewa</a></li>
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
              	  <p class="centered"><a href="berandaA.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Pemilik</h5>
              	  	
                  <li class="mt">
                      <a href="berandaA.html">
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
                          <li><a  href="lihat_profilA.html">Lihat Profil</a></li>
                          <li><a  href="ubah_passwordA.html">Ubah Password</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Kos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="pengumumanA.html">Pengumuman</a></li>
						  <li><a  href="info_kosA.html">Info</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Manajemen Kos</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="buat_kos.html">Buat Kos</a></li>
                          <li><a  href="daftar_kos.html">Lihat Daftar Kos</a></li>
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
                  <div class="col-lg-9" id="c1">
                  
                  	<div class="form-panel" style="z-index:1000;" >
						<div id="wrappermap">
							<header id="headermap">
								<h1 id="logomap">
									<a href="http://github.com/summerstyle/summer">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAAAdCAYAAAA91+sfAAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAApjAAAKYwGDMomsAAAAB3RJTUUH3AkZEBE7d91l1AAAB2tJREFUaN7tWX9s1OUZ/3ze793R2tlCHYRGSkTdVruu9NujrNIiNRU0GgbbAt3vuZBtmdEtW1icgu6mS6Y4E/8wMyzLIsTECCZuIWajQqhAAVvuvncdMrQQ0QJOWC09Vmp7d++zP/q9b9+73pVKz21Z+iRN3+/743me9/N+nud53xwwmYTA4P7g/IY9DeUIgZiRCTIBlOod1f5AZeDrCuoBoXyeYDEAQHBGRLYPvD3w2Ol7T4/MQDcmyvxo3NFYVLSw6DVFtU0gSSZ5ezKeLEl8lFgA4hUqPjynas72GdjGxWd+jFSOPEFwBQDIqHzbWeGcdIcuBzuCv5IieQCCu2Zgy8NAAKvTjWQyGTcHJCBtYzHPvhnY8gFIzE43/cX+tel2cH/QFspjAM5q6J/MwJaniNiH7VdIrgUAERlECq1OsxP+bzhmH7QrBk4OfDjdgjVVPcFdwWJ9nZ5b1l52tiPUkboqAOs66xYrpbpABNzKO6S1Xhdtiv4le2H94frHQWx2P3dFGiNfAgD7iP13glXu+u2RWyPfBYD6zvpmWDiQXq9Ff0NBtQllOQQWgG1lu8t+NrhycA0UniFZKZBLkpI2036h9HjAdQbvFiUhAEtAEIKLELRFlkXa7UP2Jir+Ol0iqLlYUz9NsAXEgch7kXsyQjjaFI1p6O8b8JbQ4i77kP29HODXjidIdANAXUddmQceAIF0exulXpp5ctwGYg3BcpJlJH8cXxV/hoo7SVa6c66l4hZzXaH0uCTYKJa8CqIBwBFJyhIQs4WyGQBIerZE5CNN/QbJe0CUALhrccXixuwiguit0e0i8lvDQYuKf5wAIscBlNQYUAwwmJFgk6rLm24448pPZURugUCMjHy/Ft0mWloNOzdnmC2QnmBncCWIp9LfKUndJyLvmo8IgZi2+lRC3a5F/yjNDozitMpZWXrUQyKyLwuwrfbrdlWaaQBuME7nqNtsMPoS/af6Y8bGv2iMHXF2O78r21fWCyBhMPnP0WXRl9WQOmpYPpsFYEH0iJItxvze2LJYlL4xAlB4NHhHcAHJ+Z5dzcfDt4Wd4fPDL0DjIZ3Sq2KtsXM+AKhtr51rXWuFQCyh5t/0qP5N4nLia/5r/FGSFa7jfgTwcwAbLJ9V4x244J3o8ug/3TkNBnNj6cRds7dmngk4BL9HCBLfH6/28u3Yof4BAHSx/gzd9EywNz1eKD3uraLO0LMbIZDkRoEkRWQbFJYq45KSTCa7AOCtNW/9C8ATHtka9jSU+0p9Dsn7CC6FwgYW8dljrcfOU/h0FjmXu6c3Hr4cz3MCacjVHygONGRoSeAwAGh/Zj5LXUq94YbgLUZ3b6H1aL++N4ONlGP2nfZWAHcA2BRtisYUlKnzQs++nndzRmuyJPkogOvdkDimk3rl0AdD6wAgoRO7ssJ4YXYBobA7zQ6SC8ezPcwCYoZd3PnAedtlxVKDBe/0rOq5AABU44UIGicKrQdAdiF6juAyEVntNDpbXJKYBaQLISPHZj3lvESrUurucHPYe2nwMs+g1DgpkYvuyXoA6pTuzsWOlKS60vcrwdgrxg3zLqyHzt64yVgIqtIXLK31mwBQ3VFdoqC+VQg9JBszKvuInhNtiQ56Ib416BNIiwFwV/638Hh1OmeCBwBWwKrImh92gbyRZBqomBu+G9L5BoLR8tfKTwCAvk4/SPKz3p60eMBq6i94OUpnOFllgPAmABTNKnoExKLp6gnMCmzOBkGP6vECtANKKmVvRoinZBIABQMgKiCYbx+0K5xm531vtAhfzaL68+7/cu/JB/+NdYfqFlHxywYL1GDL4A12pz2Xir/McAZjziRnJ20LlmWEZ7ex/iYPEMWb6zvrq0A8WAg9QvkBBGdALPBAKPWtq22v3ak+papJbgJxW9Z1rDvvW5jkiy46Cj7stA/atXUddWX1nfXfpPBRI3xfjeyOvOzOPYVxBMOKaicETxpA+1jEk7BwUET+lLHx4bEQUz5l5i09fH44Ykw77emyeBgWDohITyH0AHhStGzMwuF5X6lvSCnVDeDTELxoHNSpcEu4Py+A8Q/j3p2PYBN9jKkidREWXgBRAoGGYGvqUmp9OpHqlP6FQIZdYN/XotdH+iIPZxk+AcFaAO8ZGzwTa42dm5C3IMfd60H6sO4XkX63fVm0PELy9ULocf7qPOU0OS9prdcJpEtE4u7fAdHyQ6fPWSGUz2UXyUnfwi2hFit+Z/wrAvkOwUUCKQXQS+HxlE49F2uOHZ/wjmuvvQazMK98X3mf+fiu2Vszzz/Lbzl7nH/kq1xTkZZQizW4avB61a8uhFeHhz8xPemfKq7WVxG56k3OyIxMm0wUESHJfIvp3leyx3P1Z/elv6fi5GR2ctnIpzefX5ONX8mXyfbqdZqD+drZfbnmTXXtdO1cSWch7eQaz/mjUqEoPt28Op31V2JoofO/7+Nsair0n2wThbZzpfWT+TRdOwVhYK7cOdWc9XEZOFlezZXjpuJTPjt0ZTKdBa9an+R16P/6qiWu/K9dL/5T8m9Ue9Jx27Yj/gAAAABJRU5ErkJggg==" alt="Summer html image map creator" />
									</a>									
								</h1>
								<nav id="navmap" class="clearfix">
									<ul>
										<li id="savemap"><a href="#">save</a></li>
										<li id="loadmap"><a href="#">load</a></li>
										<li id="from_htmlmap"><a href="#">from html</a></li>
										<li id="rect"><a href="#">rectangle</a></li>
										<li id="circle"><a href="#">circle</a></li>
										<li id="polygon"><a href="#">polygon</a></li>
										<li id="editmap"><a href="#">edit</a></li>
										<li id="to_htmlmap"><a href="#">to html</a></li>
										<li id="previewmap"><a href="#">preview</a></li>
										<li id="clearmap"><a href="#">clear</a></li>
										<li id="new_imagemap"><a href="#">new image</a></li>
										<li id="show_helpmap"><a href="#">?</a></li>
									</ul>
								</nav>
							<div id="coordsmap"></div>
							<div id="debugmap"></div>
							</header>	
							<div id="image_wrappermap">
								<div id="imagemap">
									<img src="" alt="#" id="imgmap"  />
									<svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny" id="svg" style="z-index:1000;"></svg>
								</div>
							</div>
						</div>

						<!-- For html image map code -->
						<div id="codemap">
							<span class="close_button" title="close"></span>
							<div id="code_contentmap"></div>
						</div>

<!-- Edit details block -->
						<form id="edit_detailsmap">
							<h5>Attrubutes</h5>
							<span class="close_button" title="close"></span>
							<p>
								<label for="href_attrmap">href</label>
								<input type="text" id="href_attrmap" />
							</p>
							<p>
								<label for="alt_attrmap">alt</label>
								<input type="text" id="alt_attrmap" />
							</p>
							<p>
								<label for="title_attrmap">title</label>
								<input type="text" id="title_attrmap" />
							</p>
							<button id="save_detailsmap">Save</button>
						</form>
						
							<form class="formMsg"  name="form" id="abc" style="height:400px;width:500px">
									<!--img id="close" src="assets/img/exit.png" width="50" height="50"onclick ="div_hide()"-->
									<h2 class="pesan">Rincian Kamar</h2>
									<span class="close_button" title="close"></span>
									</br>
												<table >
													
														<tr>
															<td colspan="2">
															Harga (Rp)
															<input type="text" required id="harga_kamar" name= "harga" placeholder="Contoh: 200000" size="20"">
															</td>
														</tr>
														<tr>
															<td colspan="2">
															<br>
															Ukuran Kamar (meter) 
															<input type="text" required name="panjang" size="5" placeholder="panjang" id="panjang_kamar">
															 x  
															<input type="text" required name="lebar" size="5" placeholder="lebar" id="lebar_kamar">
															</td>
															
														</tr>
														<tr>
															<td colspan="2">
															<br>
															Jumlah Penghuni Maksimal:
															<input type="text" required placeholder="Contoh: 2" name="jmlPenghuni" size="10" id ="jml_kamar">
															</td>
														</tr>
																				<tr>
													<td>
													<br>
														Fasilitas:<br/>
														<input type="checkbox" name="kasur" id="kasur" value="">Kasur<br>
														<input type="checkbox" name="fasKmr" id="lemari" value="">Lemari<br>
														<input type="checkbox" name="fasKmr" id="meja" value="">Meja Belajar<br>
														<input type="checkbox" name="fasKmr" id="ac" value="">AC<br>
														<input type="checkbox" name="fasKmr" id="lain" value="">Lainnya:
														<input type="text" name="fasKmrLain" id="laintext" value="" size="15" placeholder="Masukkan fasilitas lain..">
													</td>
													<td>
													<br>
														Kamar Mandi: <br/>
														<input type="radio" name="km" id ="kmd" value="dalam"checked="checked">Dalam<br>
														<input type="radio" name="km" id="kml" value="luar" >Luar<br>
													</td>
												</tr>
												<tr>
													<td id ="upload">
													
													</td>
												</tr>
												<tr>
													<td colspan="2" align="center" size="50">
													<br>
														<button  id="kmsubmit" class="btn btn-theme">Simpan</button>
													</td>
												</tr>
												<tr>
													<h4>Kolom Harga, Ukuran Kamar (Panjang dan Lebar),Jumlah Penghuni Maksimal harus diisi  </h4>
												</tr>
												</table>
												
												
								</form>

						<!-- From html block -->
						<div id="from_html_wrappermap">
							<form id="from_html_formmap">
								<h5>Loading areas</h5>
								<span class="close_button" title="close"></span>
								<p>
									<label for="code_inputmap">Enter your html code:</label>
									<textarea id="code_inputmap"></textarea>
								</p>
								<button id="load_code_buttonmap">Load</button>
							</form>
						</div>
  
						<!-- Get image form -->
						<div id="get_image_wrappermap">
							<div id="get_imagemap">
								<div id="logo_get_imagemap">
									<a href="http://github.com/summerstyle/summer">
										<img src="data:image/png;base64,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" alt="Summer html image map creator" />
									</a>
								</div>
								<div id="loadingmap">Loading</div>
								<div id="file_reader_supportmap">
									<label>Drag an image</label>
									<div id="dropzonemap">
										<span class="clear_button" title="clear">x</span> 
										<img src="" alt="preview" id="sm_imgmap" />
									</div>
									<b>or</b>
								</div>
								<label for="urlmap">type a url</label>
								<span id="url_wrappermap">
									<span class="clear_button" title="clear">x</span>
									<input type="text" id="urlmap" />
								</span>
								<button id="buttonmap">OK</button>
							</div>
						</div>

<!-- Help block -->
						<div id="overlaymap"></div>
						<div id="helpmap">
							<span class="close_button" title="close"></span>
							<div class="txt">
								<section>
									<h2>Main</h2>
									<p><span class="key">F5</span> &mdash; reload the page and display the form for loading image again</p>
									<p><span class="key">S</span> &mdash; save map params in localStorage</p>
								</section>
								<section>
									<h2>Drawing mode (rectangle / circle / polygon)</h2>
									<p><span class="key">ENTER</span> &mdash; stop polygon drawing (or click on first helper)</p>
									<p><span class="key">ESC</span> &mdash; cancel drawing of a new area</p>
									<p><span class="key">SHIFT</span> &mdash; square drawing in case of a rectangle and right angle drawing in case of a polygon</p>
								</section>
								<section>
								<h2>Editing mode</h2>
									<p><span class="key">DELETE</span> &mdash; remove a selected area</p>
									<p><span class="key">ESC</span> &mdash; cancel editing of a selected area</p>
									<p><span class="key">SHIFT</span> &mdash; edit and save proportions for rectangle</p>
									<p><span class="key">I</span> &mdash; edit attributes of a selected area (or dblclick on an area)</p>
									<p><span class="key">CTRL</span> + <span class="key">C</span> &mdash; a copy of the selected area</p>
									<p><span class="key">&uarr;</span> &mdash; move a selected area up</p>
									<p><span class="key">&darr;</span> &mdash; move a selected area down</p>
									<p><span class="key">&larr;</span> &mdash; move a selected area to the left</p>
									<p><span class="key">&rarr;</span> &mdash; move a selected area to the right</p>
								</section>
							</div>
							
							<footer>
								<a href="http://github.com/summerstyle/summer">Summer html image map creator 0.5</a><br />
								&copy; 2014 Vera Lobatcheva<br />
								GPL3 License
							</footer>
						</div>
						
					</div>
		
				</div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                      
                  </div><!-- /col-lg-3 -->
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
	 <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
   
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->	
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
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
	<script type="text/javascript">
	/*
 * Summer html image map creator
 * http://github.com/summerstyle/summer
 *
 * Copyright 2013 Vera Lobacheva (summerstyle.ru)
 * Released under the GPL3 (GPL3.txt)
 *
 * Thu May 15 2013 15:15:27 GMT+0400
 */

"use strict";

function SummerHtmlImageMapCreator() {
	
	/* Utilities */
	var id_pengguna = 'ehvKkZJzpv';
	var id_kos = 'jRt7633mQp';
	var id_denah = '';
		var xmlhttp;
		if (window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				id_denah= xmlhttp.responseText;
				alert(id_denah);
			}
		}
		xmlhttp.open("GET","http://localhost/ngekos/index.php/Koscontroller/getrandomid",true);
		xmlhttp.send();
	var utils = {
		offsetX : function(node) {
			var box = node.getBoundingClientRect(),
				scroll = window.pageXOffset;
				
			return Math.round(box.left + scroll);
		},
		offsetY : function(node) { 
			var box = node.getBoundingClientRect(),
				scroll = window.pageYOffset;
				
			return Math.round(box.top + scroll);
		},
		rightX : function(x) {
			return x-app.getOffset('x');
		},
		rightY : function(y) {
			return y-app.getOffset('y');
		},
		trim : function(str) {
			return str.replace(/^\s+|\s+$/g, '');
		},
		id : function (str) {
			return document.getElementById(str);
		},
		hide : function(node) {
			node.style.display = 'none';
			
			return this;
		},
		show : function(node) {
			node.style.display = 'block';
			
			return this;
		},
		encode : function(str) {
			return str.replace(/</g, '&lt;').replace(/>/g, '&gt;');
			//return str;
		},
		foreach : function(arr, func) {
			for(var i = 0, count = arr.length; i < count; i++) {
				func(arr[i], i);
			}
		},
		foreachReverse : function(arr, func) {
			for(var i = arr.length - 1; i >= 0; i--) {
				func(arr[i], i);
			}
		},
		debug : (function() {
			var output = document.getElementById('debugmap');
			return function() {
				output.innerHTML = [].join.call(arguments, ' ');
			}
		})(),
		stopEvent : function(e) {
			e.stopPropagation();
			e.preventDefault();
			
			return this;
		},
		addClass : function(node, str) {
			// node.className.baseVal for SVG-elements
			// or
			// node.className for HTML-elements
			var is_svg = node.className.baseVal !== undefined ? true : false,
				arr = is_svg ? node.className.baseVal.split(' ') : node.className.split(' '),
				isset = false;
			
			utils.foreach(arr, function(x) {
				if(x === str) {
					isset = true;
				}
			});
			
			if (!isset) {
				arr.push(str);
				is_svg ? node.className.baseVal = arr.join(' ') : node.className = arr.join(' ');
			}
			
			return this;
		},
		removeClass : function(node, str) {
			var is_svg = node.className.baseVal !== undefined ? true : false,
				arr = is_svg ? node.className.baseVal.split(' ') : node.className.split(' '),
				isset = false;
			
			utils.foreach(arr, function(x, i) {
				if(x === str) {
					isset = true;
					arr.splice(i--, 1);
				}
			});
			
			if (isset) {
				is_svg ? node.className.baseVal = arr.join(' ') : node.className = arr.join(' ');
			}
			
			return this;
		},
		hasClass : function(node, str) {
			var is_svg = node.className.baseVal !== undefined ? true : false,
				arr = is_svg ? node.className.baseVal.split(' ') : node.className.split(' '),
				isset = false;
				
			utils.foreach(arr, function(x) {
				if(x === str) {
					isset = true;
				}
			});
			
			return isset;
		},
		extend : function(obj, options) {
			var target = {};
			
			for (name in obj) {
				if(obj.hasOwnProperty(name)) {
					target[name] = options[name] ? options[name] : obj[name];
				}
			}
			
			return target;
		},
		supportFileReader : (function() {
			return (typeof FileReader !== 'undefined');
		})()
	};
	
	
	/* Main object */
	var app = (function() {
		var body = document.getElementsByTagName('body')[0],
			wrapper = utils.id('wrappermap'),
			svg = utils.id('svg'),
			img = utils.id('imgmap'),
			img_src = null,
			container = utils.id('imagemap'),
			about = utils.id('aboutmap'),
			coords_info = utils.id('coordsmap'),
			offset = {x: 0, y: 0},
			shape = null,
			is_draw = false,
			mode = null, // drawing || editing || preview
			objects = [],
			new_area = null,
			selected_area = null,
			edit_type,
			events = [],
			map,
			isi_file = null,
			filename,
			KEYS = {
				F1     : 112,
				ESC    : 27,
				TOP    : 38,
				BOTTOM : 40,
				LEFT   : 37,
				RIGHT  : 39,
				DELETE : 46,
				I      : 73,
				S      : 83,
				C      : 67
			};
		
		function recalcOffsetValues() {
			offset.x = utils.offsetX(container);
			offset.y = utils.offsetY(container);
		};
		
		/* Get offset value */
		window.addEventListener('resize', recalcOffsetValues, false);
		
		/* Disable selection */
		container.addEventListener('mousedown', function(e) { e.preventDefault(); }, false);
		
		/* Disable image dragging */
		img.addEventListener('dragstart', function(e){
			e.preventDefault();
		}, false);
		
		/* Display cursor coordinates info */
		container.addEventListener('mousemove', function(e){
			coords_info.innerHTML = 'x: ' + utils.rightX(e.pageX) + ', ' + 'y: ' + utils.rightY(e.pageY);
		}, false);
		
		container.addEventListener('mouseleave', function(){
			coords_info.innerHTML = '';
		}, false);
		
		/* Add mousedown event for svg */
		function onSvgMousedown(e) {
			if(info2.isshowform() == true){
				if (mode === 'editing') {
					if (e.target.parentNode.tagName === 'g') {
						info.unload();
						info2.unload();
						selected_area = e.target.parentNode.obj;
						
						app.deselectAll();
						selected_area.select();
						selected_area.delta = {
							'x' : e.pageX,
							'y' : e.pageY
						};

						if (utils.hasClass(e.target, 'helper')) {
							var helper = e.target;
							edit_type = helper.action;

							if (helper.n >= 0) { // if typeof selected_area == polygon
								selected_area.selected_point = helper.n;
							}
							
							app.addEvent(container, 'mousemove', selected_area.onEdit)
							   .addEvent(container, 'mouseup', selected_area.onEditStop);
						} else if (e.target.tagName === 'rect' || e.target.tagName === 'circle' || e.target.tagName === 'polygon') {
							edit_type = 'move';
							
							app.addEvent(container, 'mousemove', selected_area.onEdit)
							   .addEvent(container, 'mouseup', selected_area.onEditStop);
						};
					} else {
						app.deselectAll();
						info.unload();
						info2.unload();
					};
				};
			};
		}
		
		container.addEventListener('mousedown', onSvgMousedown, false);
		
		/* Add click event for svg */
		function onSvgClick(e) {
			if(info2.isshowform() == true){
				if (mode === 'drawing' && !is_draw && shape) {
					code.hide();
					switch (shape) {
					case 'rect':
						new_area = new Rect(utils.rightX(e.pageX), utils.rightY(e.pageY));
						
						app.addEvent(container, 'mousemove', new_area.onDraw)
						   .addEvent(container, 'click', new_area.onDrawStop);
						
						break;
					case 'circle':
						new_area = new Circle(utils.rightX(e.pageX), utils.rightY(e.pageY));
							
						app.addEvent(container, 'mousemove', new_area.onDraw)
						   .addEvent(container, 'click', new_area.onDrawStop);
						
						break;
					case 'polygon':
						new_area = new Polygon(utils.rightX(e.pageX), utils.rightY(e.pageY));
						
						app.addEvent(container, 'mousemove', new_area.onDraw)
						   .addEvent(container, 'click', new_area.onDrawAddPoint)
						   .addEvent(document, 'keydown', new_area.onDrawStop)
						   .addEvent(new_area.helpers[0].helper, 'click', new_area.onDrawStop);
						
						break;
					};  
				};
			};
		};

		container.addEventListener('click', onSvgClick, false);
		
		/* Bug with keydown event for SVG in Opera browser
		   (when hot keys don't work after focusing on svg element) */
		
		function operaSvgKeydownBugFix() {
			window.focus();
		}
		if (window.navigator.appName === 'Opera') {
			container.addEventListener('mousedown', operaSvgKeydownBugFix, false);
			container.addEventListener('mouseup', operaSvgKeydownBugFix, false);
			container.addEventListener('click', operaSvgKeydownBugFix, false);
			container.addEventListener('dblclick', operaSvgKeydownBugFix, false);
		};
		
		/* Add dblclick event for svg */
		function onAreaDblClick(e) {
			if(info2.isshowform() == true){
				if (mode === 'editing') {
					if (e.target.tagName === 'rect' || e.target.tagName === 'circle' || e.target.tagName === 'polygon') {
						selected_area = e.target.parentNode.obj;
						info2.load(selected_area, e.pageX, e.pageY);
						
					};
				};
			};
		};
		
		container.addEventListener('dblclick', onAreaDblClick, false);
		
		
		/* Add keydown event for document */
		function onDocumentKeyDown(e) {
			if(info2.isshowform() == true){
				var ctrlDown = e.ctrlKey || e.metaKey // PC || Mac
				
				switch (e.keyCode) {
					case KEYS.F1: /* F1 key */
						help.show();
						e.preventDefault();
						
						break;
					
					case KEYS.ESC: /* ESC key */
						help.hide();
						if (is_draw) {
							is_draw = false;
							new_area.remove();
							objects.pop();
							app.removeAllEvents();
						} else if (mode === 'editing') {
							selected_area.redraw();
							app.removeAllEvents();
						};
						
						break;
					
					case KEYS.TOP: /* Top arrow key */
						if (mode === 'editing' && selected_area) {
							selected_area.setParams(selected_area.dynamicEdit(selected_area['move'](0, -1)));
							e.preventDefault();
						}
						
						break;
					
					case KEYS.BOTTOM: /* Bottom arrow key */
						if (mode === 'editing' && selected_area) {
							selected_area.setParams(selected_area.dynamicEdit(selected_area['move'](0, 1)));
							e.preventDefault();
						}
						break;
					
					case KEYS.LEFT: /* Left arrow key */
						if (mode === 'editing' && selected_area) {
							selected_area.setParams(selected_area.dynamicEdit(selected_area['move'](-1, 0)));
							e.preventDefault();
						}
						
						break;
					
					case KEYS.RIGHT: /* Right arrow key */
						if (mode === 'editing' && selected_area) {
							selected_area.setParams(selected_area.dynamicEdit(selected_area['move'](1, 0)));
							e.preventDefault();
						}
						
						break;
					
					case KEYS.DELETE: /* DELETE key */
						if (mode === 'editing' && selected_area) {
							app.removeObject(selected_area);
							selected_area = null;
							info.unload();
							info2.unload();
						}
						
						break;
					
					case KEYS.C: /* CTRL+C copy */
						if (mode === 'editing' && selected_area && ctrlDown) {
							var Constructor = null,
								area_params = selected_area.toJSON(),
								area;
							alert(area_params);
							switch (area_params.type) {
								case 'rect':
									Constructor = Rect;
									break;
			
								case 'circle':
									Constructor = Circle;
									break;
			
								case 'polygon':
									Constructor = Polygon;
									break;
							}
							
							if (Constructor) {
								Constructor.createFromSaved(area_params);
								selected_area.setParams(selected_area.move(10, 10));
								selected_area.redraw();
							}
						}
					
						break;
				}
			}
		}
		
		document.addEventListener('keydown', onDocumentKeyDown, false);
		
		/* Returned object */
		return {
			saveInLocalStorage : function() {
				var obj = {
					areas : [],
					img : img_src
				};
				if(objects.length == 0){
					alert('Anda belum membuat kamar!');
				}else{
				var formData = new FormData();
				formData.append('file', isi_file);
				formData.append('id_denah',id_denah);
				formData.append('id_kos',id_kos);
				formData.append('id_pengguna', id_pengguna);
				formData.append('url','<?php echo base_url();?>assets/img/'+id_pengguna+"/"+id_kos+"/"+id_denah+"/"+isi_file.name);
				
				var xmlhttp;
					if (window.XMLHttpRequest)
					{
						xmlhttp=new XMLHttpRequest();
					}
					else
					{
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
				xmlhttp.open("POST","http://localhost/ngekos/index.php/Koscontroller/adddenah",true);
				xmlhttp.send(formData);
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						alert(xmlhttp.responseText);
						utils.foreach(objects, function(x) {
						var xmlhttp;
						var formData = new FormData();
						formData.append('file',x.foto_kamar[0]);
						formData.append('bentuk',x.shape);
						if(x.shape.localeCompare('rect') == 0){
							var x2 = x.params.x + x.params.width,
								y2 = x.params.y + x.params.height;
							var coords = x.params.x +", " + x.params.y + ", " + x2 + ", " + y2;
							formData.append("coords",coords);
						}else if(x.shape.localeCompare('circle') == 0){
							var coords = x.params.cx +", " + x.params.cy + ", " + x.params.radius;
							formData.append("coords",coords);
						}else{
						
							for (var i = 0, count = x.params.length, coords = ''; i < count; i++) {
								coords += x.params[i];
								if (i != count - 1) {
									coords += ', ';
								}
							}
							formData.append("coords",coords);
						}
						formData.append("harga", x.harga);
						formData.append("panjang", x.panjang);
						formData.append("lebar", x.lebar);
						formData.append("jumlah", x.jumlah);
						formData.append("kasur", x.kasur);
						formData.append("lemari", x.lemari);
						formData.append("meja",x.meja);
						formData.append("ac",x.ac);
						formData.append("lain",x.lain);
						formData.append("kamar_mandi",x.kamar_mandi);
						formData.append("link_kamar",x.link_kamar);
						formData.append("link_foto_kamar",x.link_foto_kamar);
						formData.append("id_kamar",x.id_kamar);
						formData.append("id_denah",id_denah);
						formData.append("id_kos",id_kos);
						formData.append("id_pengguna",id_pengguna);
						
							
						if (window.XMLHttpRequest)
						{
							xmlhttp=new XMLHttpRequest();
						}
						else
						{
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.open("POST","http://localhost/ngekos/index.php/Koscontroller/addkamar",true);
						xmlhttp.send(formData);
						xmlhttp.onreadystatechange=function()
						{
							if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
								alert(xmlhttp.responseText);
							}
						}
						
					});
							
					}
				}
			
				}
				return this;
			},
			loadFromLocalStorage : function() {
				var str = window.localStorage.getItem('SummerHTMLImageMapCreator'),
					obj = JSON.parse(str),
					areas = obj.areas;
				
				this.loadImage(obj.img);
				
				utils.foreach(areas, function(x) {
					switch (x.type) {
						case 'rect':
							if (x.coords.length === 4) {
								Rect.createFromSaved({
									coords : x.coords,
									href   : x.href,
									alt    : x.alt,
									title  : x.title
								});
							}
							break;
						
						case 'circle':
							if (x.coords.length === 3) {
								Circle.createFromSaved({
									coords : x.coords,
									href   : x.href,
									alt    : x.alt,
									title  : x.title
								});
							}
							break;
						
						case 'polygon':
							if (x.coords.length >= 6 && x.coords.length % 2 === 0) {
								Polygon.createFromSaved({
									coords : x.coords,
									href   : x.href,
									alt    : x.alt,
									title  : x.title
								});
							}
							break;
					}
				});
					
				return this;
			},
			hide : function() {
				utils.hide(wrapper);
				return this;
			},
			show : function() {
				utils.show(wrapper);
				return this;
			},
			recalcOffsetValues: function() {
				recalcOffsetValues();
				return this;
			},
			setDimensions : function(width, height) {
				svg.setAttribute('width', width);
				svg.setAttribute('height', height);
				container.style.width = width + 'px';
				container.style.height = height + 'px';
				return this;
			},
			loadImage : function(url) {
				get_image.showLoadIndicator();
				img.src = url;
				img_src = url;
				img.onload = function() {
					try{
					var tampung = utils.id('headermap');
					get_image.hideLoadIndicator().hide();
					app.show()
					   .setDimensions(783,555)
					   .recalcOffsetValues();
					img.style.width = '783px';
					img.style.height =  '555px';
					tampung.style.width = '783px';
					}catch(err){
						console.log('Onload: could not draw image '+url);
						console.log(err);
					}
				};
				return this;
			},
			getIsi: function(file){
				isi_file = file;
				return this;
			},
			preview : (function() {
				img.setAttribute('usemap', '#map');
				map = document.createElement('map');
				map.setAttribute('name', 'map');
				container.appendChild(map);
				
				return function() {
					info.unload();
					info2.unload();
					app.setShape(null);
					utils.hide(svg);
					map.innerHTML = app.getHTMLCode();
					//map.innerHTML = "wakwaw";
					code.print();
					return this;
				}
			})(),
			hidePreview : function() {
				utils.show(svg);
				map.innerHTML = '';
				return this;
			},
			addNodeToSvg : function(node) {
				svg.appendChild(node);
				return this;
			},
			removeNodeFromSvg : function(node) {
				svg.removeChild(node);
				return this;
			},
			getOffset : function(arg) {
				switch(arg) {
				case 'x':
					return offset.x;
					break;
				case 'y':
					return offset.y;
					break;
				}
				return undefined;
			},
			clear : function(){
				//remove all areas
				objects.length = 0;
				while(svg.childNodes[0]) {
					svg.removeChild(svg.childNodes[0]);
				}
				code.hide();
				info.unload();
				info2.unload();
				img.src = '';
				return this;
			},
			removeObject : function(obj) {
				utils.foreach(objects, function(x, i) {
					if(x === obj) {
						objects.splice(i, 1);
					}
				});
				obj.remove();
				return this;
			},
			deselectAll : function() {
				utils.foreach(objects, function(x) {
					x.deselect();
				});
				return this;
			},
			getIsDraw : function() {
				return is_draw;
			},
			setIsDraw : function(arg) {
				is_draw = arg;
				return this;
			},
			setMode : function(arg) {
				mode = arg;
				return this;
			},
			getMode : function() {
				return mode;
			},
			setShape : function(arg) {
				shape = arg;
				return this;
			},
			getShape : function() {
				return shape;
			},
			addObject : function(object) {
				objects.push(object);
				return this;
			},
			getNewArea : function() {
				return new_area;
			},
			resetNewArea : function() {
				new_area = null;
				return this;
			},
			getSelectedArea : function() {
				return selected_area;
			},
			setSelectedArea : function(obj) {
				selected_area = obj;
				return this;
			},
			getEditType : function() {
				return edit_type;
			},
			setFilename : function(str) {
				filename = str;
				return this;
			},
			setEditClass : function() {
				utils.removeClass(container, 'draw')
					 .addClass(container, 'edit');
				return this;
			},
			setDrawClass : function() {
				utils.removeClass(container, 'edit')
					  .addClass(container, 'draw');
				return this;
			},
			setDefaultClass : function() {
				utils.removeClass(container, 'edit')
					 .removeClass(container, 'draw');
				return this;
			},
			addEvent : function(target, eventType, func) {
				events.push(new AppEvent(target, eventType, func));
				return this;
			},
			removeAllEvents : function() {
				utils.foreach(events, function(x) {
					x.remove();
				});
				events.length = 0;
				return this;
			},
			WriteFile2:function(){
				var str = '';
				str += '<img src="' + filename + '" alt="" usemap="(pager)map" /><br /><map name="map"><br />'
				utils.foreachReverse(objects, function(x) {
						str +=  x.toString() + '<br />';
				});
				str += '</map>';
				//str = app.ganti(str);
				console.log('test.php?str='+str);
				
				var y = "haha";
				var x = 'test.php?str='+str;
				var query = x+str;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open('GET',x, true);
				xmlhttp.send();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					
						alert("succes "+y);
						//xmlhttp.open("GET", "test.php?str=" + str, true);
						//xmlhttp.send();
					}
				}
				
				//xmlhttp.open("GET", "test.php?str=" + str, true);
				//xmlhttp.send();
				return this;
			},
			WriteFile:function(str){
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET", "test.php?str=" + str, true);
				xmlhttp.send();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					
						alert("succes");
						//xmlhttp.open("GET", "test.php?str=" + str, true);
						//xmlhttp.send();
					}
				}
				//xmlhttp.open("GET", "test.php?str=" + str, true);
				//xmlhttp.send();
				return this;
			},
			ganti:function(escapedHTML) {
				return escapedHTML.replace(/&lt;/,'<').replace(/&gt;/,'>');
			},
			getHTMLCode : function(arg) {
				var html_code = '';
				if (arg) {
					if (!objects.length) {
						return '0 objects';
					}
					html_code += utils.encode('<img src="' + filename + '" alt="" usemap="#map" />') +
						'<br />' + utils.encode('<map name="map">') + '<br />';
					utils.foreachReverse(objects, function(x) {
						html_code += '&nbsp;&nbsp;&nbsp;&nbsp;' + utils.encode(x.toString()) + '<br />';
					});
					html_code += utils.encode('</map>');
				} else {
					utils.foreachReverse(objects, function(x) {
						html_code += x.toString();
					});
				}
				return html_code;
			}
		};
	
	})();
	
	/* Help block */
	var help = (function() {
		var block = utils.id('helpmap'),
			overlay = utils.id('overlaymap'),
			close_button = block.querySelector('.close_button');
			
		function hide() {
			utils.hide(block);
			utils.hide(overlay);
		}
		
		function show() {
			utils.show(block);
			utils.show(overlay);
		}
			
		overlay.addEventListener('click', hide, false);
			
		close_button.addEventListener('click', hide, false);
			
		return {
			show : show,
			hide : hide
		};	
	})();
	
	/* For html code of created map */
	var code = (function(){
		var block = utils.id('codemap'),
			content = utils.id('code_contentmap'),
			close_button = block.querySelector('.close_button');
			
		close_button.addEventListener('click', function(e) {
			utils.hide(block);
			e.preventDefault();
		}, false);
			
		return {
			print: function() {
				content.innerHTML = app.getHTMLCode(true);
				//content.innerHTML = "wakwaw";
				utils.show(block);
			},
			hide: function() {
				utils.hide(block);
			}
		};
	})();

	
    /* Edit selected area info */
	var info = (function() {
		var form = utils.id('edit_detailsmap'),
			header = form.querySelector('h5'),
			href_attr = utils.id('href_attrmap'),
			alt_attr = utils.id('alt_attrmap'),
			title_attr = utils.id('title_attrmap'),
			save_button = utils.id('save_detailsmap'),
			close_button = form.querySelector('.close_button'),
			sections = form.querySelectorAll('p'),
			obj,
			x,
			y,
			temp_x,
			temp_y;
		
		function changedReset() {
			utils.removeClass(form, 'changed');
			utils.foreach(sections, function(x) {
				utils.removeClass(x, 'changed');
			});
		}
		
		function save(e) {
			obj.href = href_attr.value;
			obj.alt = alt_attr.value;
			obj.title = title_attr.value;
			
			obj.href ? obj.with_href() : obj.without_href();
			
			changedReset();
				
			e.preventDefault();
		};
		
		function unload() {
			obj = null;
			changedReset();
			utils.hide(form);
		}
		
		function setCoords(x, y) {
			form.style.left = (x + 5) + 'px';
			form.style.top = (y + 5) + 'px';
		}
		
		function moveEditBlock(e) {
			setCoords(x + e.pageX - temp_x, y + e.pageY - temp_y);
		}
		
		function stopMoveEditBlock(e) {
			x = x + e.pageX - temp_x;
			y = y + e.pageY - temp_y;
			setCoords(x, y);
			
			app.removeAllEvents();
		}
		
		function change() {
			utils.addClass(form, 'changed');
			utils.addClass(this.parentNode, 'changed');
		}
		
		save_button.addEventListener('click', save, false);
		
		href_attr.addEventListener('keydown', function(e) { e.stopPropagation(); }, false);
		alt_attr.addEventListener('keydown', function(e) { e.stopPropagation(); }, false);
		title_attr.addEventListener('keydown', function(e) { e.stopPropagation(); }, false);
		
		href_attr.addEventListener('change', change, false);
		alt_attr.addEventListener('change', change, false);
		title_attr.addEventListener('change', change, false);
		
		close_button.addEventListener('click', unload, false);
		
		header.addEventListener('mousedown', function(e) {
			temp_x = e.pageX,
			temp_y = e.pageY;
			
			app.addEvent(document, 'mousemove', moveEditBlock);
			app.addEvent(header, 'mouseup', stopMoveEditBlock);
			
			e.preventDefault();
		}, false);
		
		return {
			load : function(object, new_x, new_y) {
				obj = object;
				href_attr.value = object.href ? object.href : '';
				alt_attr.value = object.alt ? object.alt : '';
				title_attr.value = object.title ? object.title : '';
				utils.show(form);
				if (new_x && new_y) {
					x = new_x;
					y = new_y;
					setCoords(x, y);
				}
			},
			unload : unload
		};
	})();
	
	
	var info2 = (function() {
		var form = utils.id('abc'),
			header = form.querySelector('h2'),
			harga = utils.id('harga_kamar'),
			panjang = utils.id('panjang_kamar'),
			lebar = utils.id('lebar_kamar'),
			jumlah = utils.id('jml_kamar'),
			kasur = utils.id('kasur'),
			lemari = utils.id('lemari'),
			meja = utils.id('meja'),
			ac = utils.id('ac'),
			islain = utils.id('lain'),
			lain = utils.id('laintext'),
			kamar_mandid = utils.id('kmd'),
			kamar_mandil = utils.id('kml'),
			foto_kamar = null,
			save_button = utils.id('kmsubmit'),
			close_button = form.querySelector('.close_button'),
			obj,
			x,
			y,
			temp_x,
			temp_y,
			sudah = true;
		
		function changedReset() {
			utils.removeClass(form, 'changed');
			utils.foreach(sections, function(x) {
				utils.removeClass(x, 'changed');
			});
		}
		function unload() {
			if(sudah){
				obj = null;
				utils.hide(form);
			}
		}
		function unload2(){
			if((obj.jumlah.localeCompare("") !== 0) && 
						(obj.lebar.localeCompare("") !== 0) && 
						(obj.panjang.localeCompare("") !== 0) && 
						(obj.harga.localeCompare("") !== 0) ){
				sudah = true;
				app.deselectAll();
				obj = null;
				utils.hide(form);	
			}else{
				app.removeObject(obj);
				obj = null;
				utils.hide(form);
				sudah = true;
			}
		}
		function save(e) {
			if(harga.value.localeCompare("") == 0){
				alert("harga harus diisi!");
				sudah = false;
			}if(panjang.value.localeCompare("") == 0){
				alert("panjang harus diisi!");
				sudah = false;
			}if(lebar.value.localeCompare("") == 0){
				alert("lebar harus diisi!");
				sudah = false;
			}if(jumlah.value.localeCompare("") == 0){
				alert("jumlah harus diisi!");
				sudah = false;
			}if(jumlah.value.localeCompare("") !== 0 && jumlah.value.localeCompare("") !== 0 && panjang.value.localeCompare("") !== 0 && harga.value.localeCompare("") !== 0 ){
				
				obj.harga = harga.value;
				obj.panjang = panjang.value;
				obj.lebar = lebar.value;
				obj.jumlah = jumlah.value;
				if(kamar_mandid.checked == true){
					obj.kamar_mandi = kamar_mandid.value;
				}
				
				if(kamar_mandil.checked == true){
					obj.kamar_mandi = kamar_mandil.value;
				}
				
				if(kasur.checked == true){
					obj.kasur = 'kasur';
				}else{
					obj.kasur = '';
				}
				if(lemari.checked == true){
					obj.lemari = 'lemari';
				}else{
					obj.lemari = '';
				}
				if(meja.checked == true){
					obj.meja = 'meja';
				}else{
					obj.meja = '';
				}
				if(ac.checked == true){
					obj.ac = 'ac';
					alert(obj.ac);
				}else{
					obj.ac = '';
				}
				if(islain.checked == true){
					obj.lain = laintext.value;
				}else{
					obj.lain = '';
				}
				obj.foto_kamar = foto_kamar.files;
				alert(obj.foto_kamar.length);
				var gambar = foto_kamar.value.split('\\');
				
				var xmlhttp;
					if (window.XMLHttpRequest)
					{
						xmlhttp=new XMLHttpRequest();
					}
					else
					{
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.open("GET","http://localhost/ngekos/index.php/Koscontroller/getrandomid",true);
					xmlhttp.send();
					var id_kamar = '';
					xmlhttp.onreadystatechange=function()
					{
						if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
							if(obj.id_kamar.localeCompare('') == 0){
								id_kamar = xmlhttp.responseText;
							}
							obj.id_kamar = id_kamar;
							obj.link_kamar = "http://localhost/ngekos/index.php/Koscontroller/getKamar/"+id_pengguna+"/"+id_kos+"/"+id_denah+"/"+id_kamar;
							if(obj.foto_kamar.length == 0){
								obj.link_foto_kamar = '';
							}else{
								obj.link_foto_kamar="http://localhost/ngekos/assets/img/"+id_pengguna+"/"+id_kos+"/"+id_denah+"/"+id_kamar+"/"+gambar[2];	
							}
							app.deselectAll();
							sudah = true;
							unload();
							
						}
					}
				
				
			}
		
				
			
			e.preventDefault();

		};
		
		
		function setCoords(x, y) {
			form.style.left = (x + 5) + 'px';
			form.style.top = (y + 5) + 'px';
		}
		
		function moveEditBlock(e) {
			setCoords(x + e.pageX - temp_x, y + e.pageY - temp_y);
		}
		
		function stopMoveEditBlock(e) {
			x = x + e.pageX - temp_x;
			y = y + e.pageY - temp_y;
			setCoords(x, y);
			
			app.removeAllEvents();
		}
		
		function change() {
			utils.addClass(form, 'changed');
			utils.addClass(this.parentNode, 'changed');
		}
		
		save_button.addEventListener('click', save, false);
		close_button.addEventListener('click', unload2, false);
		
		header.addEventListener('mousedown', function(e) {
			temp_x = e.pageX,
			temp_y = e.pageY;
			
			app.addEvent(document, 'mousemove', moveEditBlock);
			app.addEvent(header, 'mouseup', stopMoveEditBlock);			
			e.preventDefault();
		}, false);
		
		return {
			load : function(object, new_x, new_y) {
				$('#abc #upload').html('<br> <input type="file" name="fotokamar" id="fotokamar" size="40"/>');
				alert(object);
				obj = object;
				sudah = false;
				harga.value = obj.harga;
				panjang.value = obj.panjang;
				lebar.value = obj.lebar;
				jumlah.value = obj.jumlah;
				if(obj.kasur.localeCompare('kasur') == 0){
					kasur.checked = true;
				}else{
					kasur.checked = false;
				}
				if(obj.lemari.localeCompare('lemari') == 0){
					lemari.checked = true;
				}else{
					lemari.checked = false;
				}
				if(obj.meja.localeCompare('meja') == 0){
					meja.checked = true;
				}else{
					meja.checked = false;
				}
				if(obj.ac.localeCompare('ac') == 0){
					ac.checked = true;
				}else{
					ac.checked = false;
				}
				if(obj.lain.localeCompare('') == 0){
					islain.checked = false;
					laintext.value = obj.lain;
				}else{
					islain.checked = true;
					laintext.value = obj.lain;
				}
				if(obj.kamar_mandi.localeCompare('dalam') == 0){
					kamar_mandid.checked = true;
				}else{
					kamar_mandil.checked = true;
				}
			
				foto_kamar = utils.id('fotokamar');
				if(obj.foto_kamar.length >0 ){
					foto_kamar.files = obj.foto_kamar;
					alert(obj.foto_kamar);
				}
				
				if (new_x && new_y) {
					x = new_x;
					y = new_y;
					setCoords(x,y);
				}
				utils.show(form);
			},
			unload : unload,
			isshowform:function(){
					return sudah;
			},
			settrue:function(data){
				this.sudah = data;
			}
		};
	})();

	
	/* Load areas from html code */
	var from_html_form = (function() {
		var form = utils.id('from_html_wrappermap'),
			code_input = utils.id('code_inputmap'),
			load_button = utils.id('load_code_buttonmap'),
			close_button = form.querySelector('.close_button'),
			regexp_area = /<area(?=.*? shape="(rect|circle|poly)")(?=.*? coords="([\d ,]+?)")[\s\S]*?>/gmi,
			regexp_href = / href="([\S\s]+?)"/,
			regexp_alt = / alt="([\S\s]+?)"/,
			regexp_title = / title="([\S\s]+?)"/;
		
		function test(str) {
			var result_area,
				result_href,
				result_alt,
				result_title,
				type,
				coords,
				area,
				href,
				alt,
				title,
				success = false;
			
			if (str) {
				result_area = regexp_area.exec(str);
				
				while (result_area) {
					success = true;
					
					area = result_area[0];
					
					type = result_area[1];
					coords = result_area[2].split(/ ?, ?/);
					
					result_href = regexp_href.exec(area);
					if (result_href) {
						href = result_href[1];
					} else {
						href = '';
					}
					
					result_alt = regexp_alt.exec(area);
					if (result_alt) {
						alt = result_alt[1];
					} else {
						alt = '';
					}
					
					result_title = regexp_title.exec(area);
					if (result_title) {
						title = result_title[1];
					} else {
						title = '';
					}
					
					for (var i = 0, len = coords.length; i < len; i++) {
						coords[i] = Number(coords[i]);
					}
					
					switch (type) {
						case 'rect':
							if (coords.length === 4) {
								Rect.createFromSaved({
									coords : coords,
									href   : href,
									alt    : alt,
									title  : title
								});
							}
							break;
						
						case 'circle':
							if (coords.length === 3) {
								Circle.createFromSaved({
									coords : coords,
									href   : href,
									alt    : alt,
									title  : title
								});
							}
							break;
						
						case 'poly':
							if (coords.length >= 6 && coords.length % 2 === 0) {
								Polygon.createFromSaved({
									coords : coords,
									href   : href,
									alt    : alt,
									title  : title
								});
							}
							break;
					}
					
					result_area = regexp_area.exec(str);
				}
				
				if (success) {
					hide();
				}
			}
		}
		
		function load(e) {
			test(code_input.value);
				
			e.preventDefault();
		};
		
		function hide() {
			utils.hide(form);
		}
		
		load_button.addEventListener('click', load, false);
		
		close_button.addEventListener('click', hide, false);
		
		return {
			show : function() {
				code_input.value = '';
				utils.show(form);
			},
			hide : hide
		};
	})();


	/* Get image form */
	var get_image = (function() {
		var block = utils.id('get_image_wrappermap'),
			loading_indicator = utils.id('loadingmap'),
			button = utils.id('buttonmap'),
			filename = null,
			last_changed = null,
			isifile = null;
			
		// Drag'n'drop - the first way to loading an image
		var drag_n_drop = (function() {
			var dropzone = utils.id('dropzonemap'),
				dropzone_clear_button = dropzone.querySelector('.clear_button'),
				sm_img = utils.id('sm_imgmap'),
				isi_file = null;
			
			if (!utils.supportFileReader) { // For IE9
				utils.hide(utils.id('file_reader_supportmap'));
			};
			
			function testFile(type) {
				switch (type) {
				case 'image/jpeg':
				case 'image/gif':
				case 'image/png':
					return true;
					break;
				}
				return false;
			}
			
			dropzone.addEventListener('dragover', function(e){
				utils.stopEvent(e);
			}, false);
			
			dropzone.addEventListener('dragleave', function(e){
				utils.stopEvent(e);
			}, false);

			dropzone.addEventListener('drop', function(e){
				utils.stopEvent(e);
				
				var reader = new FileReader(),
					file = e.dataTransfer.files[0];
				
				if (testFile(file.type)) {
					utils.removeClass(dropzone, 'error');
					isifile = file;
					alert(isifile.name);
					reader.readAsDataURL(file);
					
					reader.onload = function(e) {
						sm_img.src = e.target.result;
						sm_img.style.display = 'inline-block';
						filename = file.name;
						isifile = file;
						alert(isifile.name);
						utils.show(dropzone_clear_button);
						last_changed = drag_n_drop;
					};
					clearDropzone();
				} else {
					clearDropzone();
					utils.addClass(dropzone, 'error');
				}

			}, false);
			
			function clearDropzone() {
				sm_img.src = '';
				isifile = null;
				utils.hide(sm_img)
					 .hide(dropzone_clear_button)
					 .removeClass(dropzone, 'error');
					 
				last_changed = url_input;
				
			};
			
			dropzone_clear_button.addEventListener('click', clearDropzone, false);

			return {
				clear : clearDropzone,
				init : function() {
					dropzone.draggable = true;
					this.clear();
					utils.hide(sm_img)
					     .hide(dropzone_clear_button);
				},
				test : function() {
					return sm_img.src ? true : false;
				},
				getImage : function() {
					return sm_img.src;
				},
				getIsi:function(){
					return isifile;
				}
			};
		})();
		
		
		/* Set a url - the second way to loading an image */
		var url_input = (function() {
			var url = utils.id('urlmap'),
				url_clear_button = url.parentNode.querySelector('.clear_button');
			
			function testUrl(str) {
				var url_str = utils.trim(str),
					temp_array = url_str.split('.'),
					ext;

				if(temp_array.length > 1) {
					ext = temp_array[temp_array.length-1].toLowerCase();
					switch (ext) {
					case 'jpg':
					case 'jpeg':
					case 'gif':
					case 'png':
						return true;
						break;
					};
				};
				
				return false;
			}
			
			function onUrlChange() {
				setTimeout(function(){
					if(url.value.length) {
						utils.show(url_clear_button);
						last_changed = url_input;
					} else {
						utils.hide(url_clear_button);
						last_changed = drag_n_drop;
					}
				}, 0);
			}
			
			url.addEventListener('keypress', onUrlChange, false);
			url.addEventListener('change', onUrlChange, false);
			url.addEventListener('paste', onUrlChange, false);
			
			function clearUrl() {
				
				url.value = '';
				utils.hide(url_clear_button);
				utils.removeClass(url, 'error');
				last_changed = url_input;
				//img.src='';
			};
			
			url_clear_button.addEventListener('click', clearUrl, false);

			return {
				clear : clearUrl,
				init : function() {
					this.clear();
					utils.hide(url_clear_button);
				},
				test : function() {
					if(testUrl(url.value)) {
						utils.removeClass(url, 'error');
						return true;
					} else {
						utils.addClass(url, 'error');
					};
					return false;
				},
				getImage : function() {
					var tmp_arr = url.value.split('/');
						filename = tmp_arr[tmp_arr.length - 1];
						
					return utils.trim(url.value)
				}
			};
		})();
		
		
		/* Block init */
		function init() {
			utils.hide(loading_indicator);
			drag_n_drop.init();
			url_input.init();
			info2.settrue(true);
		}
		init();
		
		/* Block clear */
		function clear() {
			drag_n_drop.clear();
			url_input.clear();
			last_changed = null;
		};
		
		/* Selected image loading */
		function onButtonClick(e) {
			if (last_changed === url_input && url_input.test()) {
				app.loadImage(url_input.getImage()).setFilename(filename);
			} else if (last_changed === drag_n_drop && drag_n_drop.test()) {
				alert(drag_n_drop.getIsi().name);
				app.getIsi(drag_n_drop.getIsi());
				app.loadImage(drag_n_drop.getImage()).setFilename(filename);
			}
			
			e.preventDefault();
		};
		
		button.addEventListener('click', onButtonClick, false);
		
		/* Returned object */
		return {
			show : function() {
				clear();
				utils.show(block);
				
				return this;
			},
			hide : function() {
				utils.hide(block);
				
				return this;
			},
			showLoadIndicator : function() {
				utils.show(loading_indicator);
				
				return this;
			},
			hideLoadIndicator : function() {
				utils.hide(loading_indicator);
				
				return this;
			}
		};
	})();
	
	
	/* Buttons and actions */
	var buttons = (function() {
		var all = utils.id('navmap').getElementsByTagName('li'),
			save = utils.id('savemap'),
			load = utils.id('loadmap'),
			rectangle = utils.id('rect'),
			circle = utils.id('circle'),
			polygon = utils.id('polygon'),
			edit = utils.id('editmap'),
			clear = utils.id('clearmap'),
			from_html = utils.id('from_htmlmap'),
			to_html = utils.id('to_htmlmap'),
			preview = utils.id('previewmap'),
			new_image = utils.id('new_imagemap'),
			show_help = utils.id('show_helpmap');
			
		var str1 = app.getHTMLCode();
		var str2 = "wakwkwkwkwkwkwkwkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkakkakw";
		
		function deselectAll() {
			utils.foreach(all, function(x) {
				utils.removeClass(x, 'selected');
			});
		}
		
		function selectOne(button) {
			deselectAll();
			utils.addClass(button, 'selected');
		}
		
		function onSaveButtonClick(e) {
			if(info2.isshowform() == true){
			// Save in localStorage
			app.saveInLocalStorage();
			}
			
			
			//app.WriteFile(str1);
			/*var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					
						alert("succes");
						//xmlhttp.open("GET", "test.php?str=" + str, true);
						//xmlhttp.send();
					}
				}
				xmlhttp.open("GET", "test.php?str=gila", true);
				xmlhttp.send();*/
			e.preventDefault();
			
		}
		
		function onLoadButtonClick(e) {
			// Load from localStorage
			if(info2.isshowform() == true){
			app.clear()
			   .loadFromLocalStorage();
			}
			e.preventDefault();
		}
		
		function onShapeButtonClick(e) {
			// shape = rect || circle || polygon
			if(info2.isshowform() == true){
			app.setMode('drawing')
			   .setDrawClass()
			   .setShape(this.id)
			   .deselectAll()
			   .hidePreview();
			info2.unload();
			info.unload();
			
			selectOne(this);
			}
			e.preventDefault();
		}
		
		function onClearButtonClick(e) {
			// Clear all
			if(info2.isshowform() == true){
			if (confirm('Clear all?')) {
				app.setMode(null)
					.setDefaultClass()
					.setShape(null)
					.clear()
					.hidePreview();
				deselectAll();
			}
			}
			e.preventDefault();
		}
		
		function onFromHtmlButtonClick(e) {
			// Load areas from html
			if(info2.isshowform() == true){
			from_html_form.show();
			
			e.preventDefault();
			}
		}
		
		function onToHtmlButtonClick(e) {
			// Generate html code only
			if(info2.isshowform() == true){
			info.unload();
			$('#abc #upload #fotokamar').remove();
			code.print();
			
			e.preventDefault();
			}
		}
		
		function onPreviewButtonClick(e) {
			if(info2.isshowform() == true){
			if (app.getMode() === 'preview') {
				app.setMode(null)
				   .hidePreview();
				deselectAll();
			} else {
				app.deselectAll()
				   .setMode('preview')
				   .setDefaultClass()
				   .preview();
				selectOne(this);
			}
			}
			
			e.preventDefault();
		}
		
		function onEditButtonClick(e) {
			if(info2.isshowform() == true){
				if (app.getMode() === 'editing') {
					app.setMode(null)
					   .setDefaultClass()
					   .deselectAll();
					deselectAll();
					utils.show(svg);
				} else {
					app.setShape(null)
					   .setMode('editing')
					   .setEditClass();
					selectOne(this);
				}
				app.hidePreview();
				e.preventDefault();
			}
			
		}
		
		function onNewImageButtonClick(e) {
			// New image - clear all and back to loading image screen
			if(info2.isshowform() == true){
			if(confirm('Discard all changes?')) {
				app.setMode(null)
				   .setDefaultClass()
				   .setShape(null)
				   .setIsDraw(false)
				   .clear()
				   .hide()
				   .hidePreview();
				deselectAll();
				get_image.show();
			} 
			}
			
			e.preventDefault();
		}
		
		function onShowHelpButtonClick(e) {
			if(info2.isshowform() == true){
			help.show();
			
			e.preventDefault();
			}
		}
		
		save.addEventListener('click', onSaveButtonClick, false);
		load.addEventListener('click', onLoadButtonClick, false);
		rectangle.addEventListener('click', onShapeButtonClick, false);
		circle.addEventListener('click', onShapeButtonClick, false);
		polygon.addEventListener('click', onShapeButtonClick, false);
		clear.addEventListener('click', onClearButtonClick, false);
		from_html.addEventListener('click', onFromHtmlButtonClick, false);
		to_html.addEventListener('click', onToHtmlButtonClick, false);
		preview.addEventListener('click', onPreviewButtonClick, false);
		edit.addEventListener('click', onEditButtonClick, false);
		new_image.addEventListener('click', onNewImageButtonClick, false);
		show_help.addEventListener('click', onShowHelpButtonClick, false);
		return{
			deselectAll:deselectAll
		};
	})();


	/* AppEvent constructor */
	function AppEvent(target, eventType, func) {
		this.target = target;
		this.eventType = eventType;
		this.func = func;
		
		target.addEventListener(eventType, func, false);
	};
	
	AppEvent.prototype.remove = function() {
		this.target.removeEventListener(this.eventType, this.func, false);
	};
	
	
	/* Helper constructor */
	function Helper(node, x, y) {
		this.helper = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
		this.helper.setAttribute('class', 'helper');
		this.helper.setAttribute('height', 5);
		this.helper.setAttribute('width', 5);
		this.helper.setAttribute('x', x-3);
		this.helper.setAttribute('y', y-3);
		node.appendChild(this.helper);
	};

	Helper.prototype.setCoords = function(x, y) {
		this.helper.setAttribute('x', x-3);
		this.helper.setAttribute('y', y-3);
		
		return this;
	};
	
	Helper.prototype.setAction = function(action) {
		this.helper.action = action;
		
		return this;
	};
	
	Helper.prototype.setCursor = function(cursor) {
		utils.addClass(this.helper, cursor);
		
		return this;
	};
	
	Helper.prototype.setId = function(id) {
		this.helper.n = id;
		
		return this;
	};

	/* Rectangle constructor */
	var Rect = function (x, y){
		app.setIsDraw(true);

		this.params = {
			x : x, //distance from the left edge of the image to the left side of the rectangle
			y : y, //distance from the top edge of the image to the top side of the rectangle
			width : 0, //width of rectangle
			height : 0 //height of rectangle
		};
		this.shape ='rect';
		this.harga = ''; 
		this.panjang = ''; 
		this.lebar = ''; 
		this.jumlah = '';
		this.kasur = '';
		this.lemari = '';
		this.meja = '';
		this.ac = '';
		this.lain = '';
		this.kamar_mandi = '';
		this.foto_kamar = [];
		this.link_kamar = '';
		this.link_foto_kamar = '';
		this.id_kamar = '';
		

		this.g = document.createElementNS('http://www.w3.org/2000/svg', 'g'); //container
		this.rect = document.createElementNS('http://www.w3.org/2000/svg', 'rect'); //rectangle
		app.addNodeToSvg(this.g);
		this.g.appendChild(this.rect);
		
		this.g.obj = this; /* Link to parent object */
		
		this.helpers = { //object with all helpers-rectangles
			center : new Helper(this.g, x-this.params.width/2, y-this.params.height/2),
			top : new Helper(this.g, x-this.params.width/2, y-this.params.height/2),
			bottom : new Helper(this.g, x-this.params.width/2, y-this.params.height/2),
			left : new Helper(this.g, x-this.params.width/2, y-this.params.height/2),
			right : new Helper(this.g, x-this.params.width/2, y-this.params.height/2),
			top_left : new Helper(this.g, x-this.params.width/2, y-this.params.height/2),
			top_right : new Helper(this.g, x-this.params.width/2, y-this.params.height/2),
			bottom_left : new Helper(this.g, x-this.params.width/2, y-this.params.height/2),
			bottom_right : new Helper(this.g, x-this.params.width/2, y-this.params.height/2)
		};
		
		this.helpers.center.setAction('move').setCursor('move');
		this.helpers.left.setAction('editLeft').setCursor('e-resize');
		this.helpers.right.setAction('editRight').setCursor('w-resize');
		this.helpers.top.setAction('editTop').setCursor('n-resize');
		this.helpers.bottom.setAction('editBottom').setCursor('s-resize');
		this.helpers.top_left.setAction('editTopLeft').setCursor('nw-resize');
		this.helpers.top_right.setAction('editTopRight').setCursor('ne-resize');
		this.helpers.bottom_left.setAction('editBottomLeft').setCursor('sw-resize');
		this.helpers.bottom_right.setAction('editBottomRight').setCursor('se-resize');
		
		this.select().redraw();
		
		/* Add this object to array of all objects */  
		app.addObject(this); 
	};

	Rect.prototype.setCoords = function(params){
		this.rect.setAttribute('x', params.x);
		this.rect.setAttribute('y', params.y);
		this.rect.setAttribute('width', params.width);
		this.rect.setAttribute('height', params.height);

		this.helpers.center.setCoords(params.x + params.width/2, params.y + params.height/2);
		this.helpers.top.setCoords(params.x + params.width/2, params.y);
		this.helpers.bottom.setCoords(params.x + params.width/2, params.y + params.height);
		this.helpers.left.setCoords(params.x, params.y + params.height/2);
		this.helpers.right.setCoords(params.x + params.width, params.y + params.height/2);
		this.helpers.top_left.setCoords(params.x, params.y);
		this.helpers.top_right.setCoords(params.x + params.width, params.y);
		this.helpers.bottom_left.setCoords(params.x, params.y + params.height);
		this.helpers.bottom_right.setCoords(params.x + params.width, params.y + params.height);
		
		return this;
	};

	Rect.prototype.setParams = function(params){
		this.params.x = params.x;
		this.params.y = params.y;
		this.params.width = params.width;
		this.params.height = params.height;
		
		return this;
	};
	
	Rect.prototype.redraw = function() {
		this.setCoords(this.params);
		
		return this;
	};
	
	Rect.prototype.dynamicDraw = function(x1,y1,square){
		var x0 = this.params.x,
			y0 = this.params.y,
			new_x,
			new_y,
			new_width,
			new_height,
			delta,
			temp_params;
		
		new_width = Math.abs(x1-x0);
		new_height = Math.abs(y1-y0);
		
		if (square) {
			delta = new_width-new_height;
			if (delta > 0) {
				new_width = new_height;
			} else {
				new_height = new_width;
			}
		}

		if (x0>x1) {
			new_x = x1;
			if (square && delta > 0) {
				new_x = x1 + Math.abs(delta);
			}
		} else {
			new_x = x0;
		}
		
		if (y0>y1) {
			new_y = y1;
			if (square && delta < 0) {
				new_y = y1 + Math.abs(delta);
			}
		} else {
			new_y = y0;
		}
		
		temp_params = { /* params */
			x : new_x,
			y : new_y,
			width : new_width,
			height: new_height
		};
		
		this.setCoords(temp_params);
		
		return temp_params;
	};
	
	Rect.prototype.onDraw = function(e) {
		var _n_f = app.getNewArea(),
		    square = e.shiftKey ? true : false;
			
		_n_f.dynamicDraw(utils.rightX(e.pageX), utils.rightY(e.pageY), square);
	};
	
	Rect.prototype.onDrawStop = function(e) {
		info2.load(app.getNewArea(),utils.rightX(e.pageX), utils.rightY(e.pageY));
		var _n_f = app.getNewArea(),
		    square = e.shiftKey ? true : false;
		
		_n_f.setParams(_n_f.dynamicDraw(utils.rightX(e.pageX), utils.rightY(e.pageY), square)).deselect();
		
		app.removeAllEvents()
		   .setIsDraw(false)
		   .resetNewArea();
	 
			app.setMode(null)
			.setDefaultClass()
				.deselectAll();
		buttons.deselectAll();
		_n_f.select();
		 
	};
	
	Rect.prototype.move = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.x += dx;
		temp_params.y += dy;
		
		return temp_params;
	};
	
	Rect.prototype.editLeft = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.x += dx; 
		temp_params.width -= dx;
		
		return temp_params;
	};
	
	Rect.prototype.editRight = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.width += dx;
		
		return temp_params;
	};
	
	Rect.prototype.editTop = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.y += dy;
		temp_params.height -= dy;
		
		return temp_params;
	};
	
	Rect.prototype.editBottom = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.height += dy;
		
		return temp_params;
	};
	
	Rect.prototype.editTopLeft = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.x += dx;
		temp_params.y += dy;
		temp_params.width -= dx;
		temp_params.height -= dy;
		
		return temp_params;
	};
	
	Rect.prototype.editTopRight = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.y += dy;
		temp_params.width += dx;
		temp_params.height -= dy;
		
		return temp_params;
	};
	
	Rect.prototype.editBottomLeft = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.x += dx;
		temp_params.width -= dx;
		temp_params.height += dy;
		
		return temp_params;
	};
	
	Rect.prototype.editBottomRight = function(dx, dy) { //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.width += dx;
		temp_params.height += dy;
		
		return temp_params;
	};
	
	Rect.prototype.dynamicEdit = function(temp_params, save_proportions) {
		if (temp_params.width < 0) {
			temp_params.width = Math.abs(temp_params.width);
			temp_params.x -= temp_params.width;
		}
		
		if (temp_params.height < 0) {
			temp_params.height = Math.abs(temp_params.height);
			temp_params.y -= temp_params.height;
		}
		
		if (save_proportions) {
			var proportions = this.params.width / this.params.height,
				new_proportions = temp_params.width / temp_params.height,
				delta = new_proportions - proportions,
				x0 = this.params.x,
				y0 = this.params.y,
				x1 = temp_params.x,
				y1 = temp_params.y;

			if (delta > 0) {
				temp_params.width = Math.round(temp_params.height * proportions);
			} else {
				temp_params.height = Math.round(temp_params.width / proportions);
			}
			
		}
		
		this.setCoords(temp_params);
		
		return temp_params;

	};
	
	Rect.prototype.onEdit = function(e) {
		var _s_f = app.getSelectedArea(),
			edit_type = app.getEditType(),
			save_proportions = e.shiftKey ? true : false;
			
		_s_f.dynamicEdit(_s_f[edit_type](e.pageX - _s_f.delta.x, e.pageY - _s_f.delta.y), save_proportions);
	};
	
	Rect.prototype.onEditStop = function(e) {
		var _s_f = app.getSelectedArea(),
			edit_type = app.getEditType(),
			save_proportions = e.shiftKey ? true : false;
			
		_s_f.setParams(_s_f.dynamicEdit(_s_f[edit_type](e.pageX - _s_f.delta.x, e.pageY - _s_f.delta.y), save_proportions));
		app.removeAllEvents();
	};
	
	Rect.prototype.remove = function() {
		app.removeNodeFromSvg(this.g);
	};
	
	Rect.prototype.select = function() {
		utils.addClass(this.rect, 'selected');
		
		return this;
	};
	
	Rect.prototype.deselect = function() {
		utils.removeClass(this.rect, 'selected');
		
		return this;
	};
	
	Rect.prototype.with_href = function() {
		utils.addClass(this.rect, 'with_href');
		
		return this;
	}
	
	Rect.prototype.without_href = function() {
		utils.removeClass(this.rect, 'with_href');
		
		return this;
	}
	
	Rect.prototype.toString = function() { //to html map area code
		var x2 = this.params.x + this.params.width,
			y2 = this.params.y + this.params.height;
		return '<area shape="rect" coords="'
			+ this.params.x + ', '
			+ this.params.y + ', '
			+ x2 + ', '
			+ y2
			+ '"'
			+ (this.href ? ' href="' + this.href + '"' : '')
			+ (this.alt ? ' alt="' + this.alt + '"' : '')
			+ (this.title ? ' title="' + this.title + '"' : '')
			+ ' />';
	};
	Rect.prototype.toData = function() { //to html map area code
		
		var x2 = this.params.x + this.params.width,
			y2 = this.params.y + this.params.height;
		return 'rect '
			+ this.params.x + ' '
			+ this.params.y + ' '
			+ x2 + ' '
			+ y2 + ' '
			+  this.harga + ' '
			+  this.panjang + ' '
			+  this.title + ' '
			+  this.lebar +' '
			+  this.jumlah + ' '
			+  this.kasur + ' '
			+ 	this.lemari + ' '
			+  this.meja + ' '
			+  this.ac  + ' '
			+ this.lain + ' '
			+ this.kamar_mandi + ' '
			+ this.link_kamar + ' '
			+ this.link_foto_kamar +' '
			+ this.id_kamar;
	};
	
	Rect.createFromSaved = function(params) {
		var coords = params.coords,
			shape = params.shape,
			harga = params.harga,
			jumlah = params.jumlah,
			panjang = params.panjang,
			lebar = params.lebar,
			kasur = params.kasur,
			lemari = params.lemari,
			meja = params.meja,
			ac = params.ac,
			lain = params.lain,
			foto_kamar = params.foto_kamar,
			area = new Rect(coords[0], coords[1]);
		
		area.setParams(area.dynamicDraw(coords[2], coords[3])).deselect();
		
		app.setIsDraw(false)
		   .resetNewArea();
		if (foto_kamar) {
			area.foto_kamar = foto_kamar;
		}
		 var xmlhttp;
		if (window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","http://localhost/ngekos/index.php/Koscontroller/getrandomid",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				//alert(area.foto_kamar[0].name);
				var id_kamar= xmlhttp.responseText;	
				area.id_kamar = id_kamar;
				area.link_kamar = "http://localhost/ngekos/index.php/Koscontroller/getKamar/"+id_pengguna+"/"+id_kos+"/"+id_denah+"/"+id_kamar;
				if(area.foto_kamar.length == 0){
					area.link_foto_kamar = '';
				}else{
					area.link_foto_kamar="http://localhost/ngekos/assets/img/"+id_pengguna+"/"+id_kos+"/"+id_denah+"/"+id_kamar+"/"+area.foto_kamar[0].name;
				}
				info2.settrue(true);
				alert(id_kamar);	
			}
		}  
		if (shape) {
			area.shape = shape;
		}
		
		if (harga) {
			area.harga = harga;
		}
		
		if (jumlah) {
			area.jumlah = jumlah;
		}
		if (panjang) {
			area.panjang = panjang;
		}
		if (lebar) {
			area.lebar = lebar;
		}
		if (kasur) {
			area.kasur = kasur;
		}
		if (lemari) {
			area.lemari = lemari;
		}
		if (ac) {
			area.ac = ac;
		}
		if (meja) {
			area.meja = meja;
		}
		if (lain) {
			area.lain = lain;
		}
		
		
		
	};
	
	Rect.prototype.toJSON = function() {
		return {
			type   : 'rect',
			coords : [
				this.params.x,
				this.params.y,
				this.params.x + this.params.width,
				this.params.y + this.params.height
			],
			harga   : this.harga,
			jumlah    : this.jumlah,
			panjang  : this.panjang,
			lebar: this.lebar,
			kamar_mandi: this.kamar_mandi,
			meja: this.meja,
			lemari:this.lemari,
			kasur:this.kasur,
			ac:this.ac,
			lain:this.lain,
			shape:this.shape,
			foto_kamar:this.foto_kamar
		}
	};


	/* Circle constructor */
	var Circle = function (x, y){
		app.setIsDraw(true);

		this.params = {
			cx : x, //distance from the left edge of the image to the center of the circle
			cy : y, //distance from the top edge of the image to the center of the circle
			radius : 0 //radius of the circle
		};
		this.shape ='circle';
		this.harga = ''; 
		this.panjang = ''; 
		this.lebar = ''; 
		this.jumlah = '';
		this.kasur = '';
		this.lemari = '';
		this.meja = '';
		this.ac = '';
		this.lain = '';
		this.kamar_mandi = '';
		this.foto_kamar = [];
		this.link_kamar = '';
		this.link_foto_kamar = '';
		this.id_kamar = '';
		
		this.g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
		this.circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
		app.addNodeToSvg(this.g);
		this.g.appendChild(this.circle);
		
		this.g.obj = this; /* Link to parent object */

		this.helpers = { //array of all helpers-rectangles
			center : new Helper(this.g, x, y),
			top : new Helper(this.g, x, y),
			bottom : new Helper(this.g, x, y),
			left : new Helper(this.g, x, y),
			right : new Helper(this.g, x, y)
		};
		
		this.helpers.center.setAction('move');
		this.helpers.top.setAction('editTop').setCursor('n-resize');
		this.helpers.bottom.setAction('editBottom').setCursor('s-resize');
		this.helpers.left.setAction('editLeft').setCursor('w-resize');
		this.helpers.right.setAction('editRight').setCursor('e-resize');

		this.select().redraw();
		
		app.addObject(this); //add this object to array of all objects
	};

	Circle.prototype.setCoords = function(params){
		this.circle.setAttribute('cx', params.cx);
		this.circle.setAttribute('cy', params.cy);
		this.circle.setAttribute('r', params.radius);

		this.helpers.center.setCoords(params.cx, params.cy);
		this.helpers.top.setCoords(params.cx, params.cy - params.radius);
		this.helpers.right.setCoords(params.cx + params.radius, params.cy);
		this.helpers.bottom.setCoords(params.cx, params.cy + params.radius);
		this.helpers.left.setCoords(params.cx - params.radius, params.cy);
		
		return this;
	};

	Circle.prototype.setParams = function(params){
		this.params.cx = params.cx;
		this.params.cy = params.cy;
		this.params.radius = params.radius;
		
		return this;
	};
	
	Circle.prototype.redraw = function() {
		this.setCoords(this.params);
		
		return this;
	};

	Circle.prototype.dynamicDraw = function(x1,y1){
		var x0 = this.params.cx,
			y0 = this.params.cy,
			dx,
			dy,
			radius,
			temp_params;
			
		x1 = x1 ? x1 : x0;
		y1 = y1 ? y1 : y0;
			
		dx = Math.abs(x0-x1);
		dy = Math.abs(y0-y1);
		radius = Math.round(Math.sqrt(dx*dx + dy*dy));

		temp_params = { /* params */
			cx : x0,
			cy : y0,
			radius : radius
		};
		
		this.setCoords(temp_params);
		
		return temp_params;
	};
	
	Circle.prototype.onDraw = function(e) {
		var _n_f = app.getNewArea();
		_n_f.dynamicDraw(utils.rightX(e.pageX), utils.rightY(e.pageY));
	};

	Circle.prototype.onDrawStop = function(e) {
		var _n_f = app.getNewArea();
		_n_f.setParams(_n_f.dynamicDraw(utils.rightX(e.pageX), utils.rightY(e.pageY))).deselect();

		app.removeAllEvents()
		   .setIsDraw(false)
		   .resetNewArea();
		info2.load(_n_f,utils.rightX(e.pageX), utils.rightY(e.pageY));
		app.setMode(null)
			.setDefaultClass()
				.deselectAll();
		buttons.deselectAll();
		_n_f.select();
		
	};
	
	Circle.prototype.move = function(dx, dy){ //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.cx += dx;
		temp_params.cy += dy;
		
		return temp_params;
	};
	
	Circle.prototype.editTop = function(dx, dy){ //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.radius -= dy;
		
		return temp_params;
	};
	
	Circle.prototype.editBottom = function(dx, dy){ //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.radius += dy;
		
		return temp_params;
	};
	
	Circle.prototype.editLeft = function(dx, dy){ //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.radius -= dx;
		
		return temp_params;
	};
	
	Circle.prototype.editRight = function(dx, dy){ //offset x and y
		var temp_params = Object.create(this.params);
		
		temp_params.radius += dx;
		
		return temp_params;
	};
	
	Circle.prototype.dynamicEdit = function(temp_params) {
		if (temp_params.radius < 0) {
			temp_params.radius = Math.abs(temp_params.radius);
		}
		
		this.setCoords(temp_params);
		
		return temp_params;
	};
	
	Circle.prototype.onEdit = function(e) {
		var _s_f = app.getSelectedArea(),
			edit_type = app.getEditType();
		
		_s_f.dynamicEdit(_s_f[edit_type](e.pageX - _s_f.delta.x, e.pageY - _s_f.delta.y));
	};
	
	Circle.prototype.onEditStop = function(e) {
		var _s_f = app.getSelectedArea(),
			edit_type = app.getEditType();
		
		_s_f.setParams(_s_f.dynamicEdit(_s_f[edit_type](e.pageX - _s_f.delta.x, e.pageY - _s_f.delta.y)));
		
		app.removeAllEvents();
	};
	
	Circle.prototype.remove = function(){
		app.removeNodeFromSvg(this.g);
	};
	
	Circle.prototype.select = function() {
		utils.addClass(this.circle, 'selected');
		
		return this;
	};
	
	Circle.prototype.deselect = function() {
		utils.removeClass(this.circle, 'selected');
		
		return this;
	};
	
	Circle.prototype.with_href = function() {
		utils.addClass(this.circle, 'with_href');
		
		return this;
	}
	
	Circle.prototype.without_href = function() {
		utils.removeClass(this.circle, 'with_href');
		
		return this;
	}
	Circle.prototype.toData = function() { //to html map area code
		
		return 'circle '
			+ this.params.cx + ' '
			+ this.params.cy + ' '
			+ this.params.radius + ' '
			+  this.harga + ' '
			+  this.panjang + ' '
			+  this.title + ' '
			+  this.lebar +' '
			+  this.jumlah + ' '
			+  this.kasur + ' '
			+ 	this.lemari + ' '
			+  this.meja + ' '
			+  this.ac  + ' '
			+ this.lain + ' '
			+ this.kamar_mandi + ' '
			+ this.link_kamar + ' '
			+ this.link_foto_kamar +' '
			+ this.id_kamar;
	};
	Circle.prototype.toString = function() { //to html map area code
		return '<area shape="circle" coords="'
			+ this.params.cx + ', '
			+ this.params.cy + ', '
			+ this.params.radius
			+ '"'
			+ (this.href ? ' href="' + this.href + '"' : '')
			+ (this.alt ? ' alt="' + this.alt + '"' : '')
			+ (this.title ? ' title="' + this.title + '"' : '')
			+ ' />';
	};

	Circle.createFromSaved = function(params) {
		var coords = params.coords,
			href = params.href,
			alt = params.alt,
			title = params.title,
			area = new Circle(coords[0], coords[1]);
		
		area.setParams(area.dynamicDraw(coords[0], coords[1] + coords[2])).deselect();

		app.setIsDraw(false)
		   .resetNewArea();
		   
		if (href) {
			area.href = href;
		}
		
		if (alt) {
			area.alt = alt;
		}
		
		if (title) {
			area.title = title;
		}
	};
	
	Circle.prototype.toJSON = function() {
		return {
			type   : 'circle',
			coords : [
				this.params.cx,
				this.params.cy,
				this.params.radius
			],
			href   : this.href,
			alt    : this.alt,
			title  : this.title
		}
	};
	
		
	/* Polygon constructor */
	var Polygon = function(x, y){
		app.setIsDraw(true);

		this.params = [x, y]; //array of coordinates of polygon points
		this.shape ='poly';
		this.harga = ''; 
		this.panjang = ''; 
		this.lebar = ''; 
		this.jumlah = '';
		this.kasur = '';
		this.lemari = '';
		this.meja = '';
		this.ac = '';
		this.lain = '';
		this.kamar_mandi = '';
		this.foto_kamar = [];
		this.link_kamar = '';
		this.link_foto_kamar = '';
		this.id_kamar = '';
		

		this.g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
		this.polygon = document.createElementNS('http://www.w3.org/2000/svg', 'polyline');
		app.addNodeToSvg(this.g);
		this.g.appendChild(this.polygon);
		
		this.g.obj = this; /* Link to parent object */

		this.helpers = [ //array of all helpers-rectangles
			new Helper(this.g, this.params[0], this.params[1])
		];
		
		this.helpers[0].setAction('pointMove').setCursor('pointer').setId(0);

		this.selected_point = -1;
		
		this.select().redraw();

		app.addObject(this); //add this object to array of all objects
	};

	Polygon.prototype.setCoords = function(params){
		var coords_values = params.join(' ');
		this.polygon.setAttribute('points', coords_values);
		utils.foreach(this.helpers, function(x, i) {
			x.setCoords(params[2*i], params[2*i+1]);
		});
		
		return this;
	};
	
	Polygon.prototype.setParams = function(arr) {
		this.params = Array.prototype.slice.call(arr);
	
		return this;
	};
	
	Polygon.prototype.addPoint = function(x, y){
		var helper = new Helper(this.g, x, y);
		helper.setAction('pointMove').setCursor('pointer').setId(this.helpers.length);
		this.helpers.push(helper);
		this.params.push(x, y);
		this.redraw();
		
		return this;
	};

	Polygon.prototype.redraw = function() {
		this.setCoords(this.params);
		
		return this;
	};

	Polygon.prototype.right_angle = function(x, y){
		var old_x = this.params[this.params.length-2],
			old_y = this.params[this.params.length-1],
			dx = x - old_x,
			dy = - (y - old_y),
			tan = dy/dx; //tangens
			
		if (dx > 0 && dy > 0) {
			if (tan > 2.414) {
				x = old_x;
			} else if (tan < 0.414) {
				y = old_y;
			} else {
				Math.abs(dx) > Math.abs(dy) ? x = old_x + dy : y = old_y - dx;
			}
		} else if (dx < 0 && dy > 0) {
			if (tan < -2.414) {
				x = old_x;
			} else if (tan >  -0.414) {
				y = old_y;
			} else {
				Math.abs(dx) > Math.abs(dy) ? x = old_x - dy : y = old_y + dx;
			}
		} else if (dx < 0 && dy < 0) {
			if (tan > 2.414) {
				x = old_x;
			} else if (tan < 0.414) {
				y = old_y;
			} else {
				Math.abs(dx) > Math.abs(dy) ? x = old_x + dy : y = old_y - dx;
			}
		} else if (dx > 0 && dy < 0) {
			if (tan < -2.414) {
				x = old_x;
			} else if (tan >  -0.414) {
				y = old_y;
			} else {
				Math.abs(dx) > Math.abs(dy) ? x = old_x - dy : y = old_y + dx;
			}
		}
		
		return {
			x : x,
			y : y
		};
	};
	
	Polygon.prototype.dynamicDraw = function(x, y, right_angle){
		var temp_params = [].concat(this.params);

		if (right_angle) {
			var right_coords = this.right_angle(x, y);
			x = right_coords.x;
			y = right_coords.y;
		}
		
		temp_params.push(x, y);

		this.setCoords(temp_params);
		
		return temp_params;
	};
	
	Polygon.prototype.onDraw = function(e) {
		var _n_f = app.getNewArea();
		var right_angle = e.shiftKey ? true : false;
			
		_n_f.dynamicDraw(utils.rightX(e.pageX), utils.rightY(e.pageY), right_angle);
	};

	Polygon.prototype.onDrawAddPoint = function(e) {
		var x = utils.rightX(e.pageX),
			y = utils.rightY(e.pageY),
		
		_n_f = app.getNewArea();
			
		if (e.shiftKey) {
			var right_coords = _n_f.right_angle(x, y);
			x = right_coords.x;
			y = right_coords.y;
		}
		_n_f.addPoint(x, y);
	};

	Polygon.prototype.onDrawStop = function(e) {
		var _n_f = app.getNewArea();
		
		if (e.type == 'click' || (e.type == 'keydown' && e.keyCode == 13)) { // key Enter
			if (_n_f.params.length >= 6) { //>= 3 points for polygon
				_n_f.polyline = _n_f.polygon;
				_n_f.polygon = document.createElementNS('http://www.w3.org/2000/svg', 'polygon');
				_n_f.g.replaceChild(_n_f.polygon, _n_f.polyline);
				_n_f.setCoords(_n_f.params).deselect();
				delete(_n_f.polyline);
				
				app.removeAllEvents()
					.setIsDraw(false)
					.resetNewArea();	
			}
		};
		info2.load(_n_f,utils.rightX(e.pageX), utils.rightY(e.pageY));
			app.setMode(null)
				.setDefaultClass()
				.deselectAll();
				buttons.deselectAll();
				_n_f.select();
		e.stopPropagation();
	};
	
	Polygon.prototype.move = function(x, y){ //offset x and y
		var temp_params = Object.create(this.params);
		
		for (var i = 0, count = this.params.length; i < count; i++) {
			i % 2 ? this.params[i] += y : this.params[i] += x;
		}
		
		return temp_params;
	};
	
	Polygon.prototype.pointMove = function(x, y){ //offset x and y
		this.params[2 * this.selected_point] += x;
		this.params[2 * this.selected_point + 1] += y;

		return this.params;
	};
	
	Polygon.prototype.dynamicEdit = function(temp_params) {
		this.setCoords(temp_params);
		
		return temp_params;
	};
	
	Polygon.prototype.onEdit = function(e) {
		var _s_f = app.getSelectedArea(),
			edit_type = app.getEditType();
			
		_s_f.dynamicEdit(_s_f[edit_type](e.pageX - _s_f.delta.x, e.pageY - _s_f.delta.y));
		_s_f.delta.x = e.pageX;
		_s_f.delta.y = e.pageY;
	};
	
	Polygon.prototype.onEditStop = function(e) {
		var _s_f = app.getSelectedArea(),
			edit_type = app.getEditType();
		
		_s_f.setParams(_s_f.dynamicEdit(_s_f[edit_type](e.pageX - _s_f.delta.x, e.pageY - _s_f.delta.y)));
		
		app.removeAllEvents();
	};
	
	Polygon.prototype.remove = function(){
		app.removeNodeFromSvg(this.g);
	};
	
	Polygon.prototype.select = function() {
		utils.addClass(this.polygon, 'selected');
		
		return this;
	};
	
	Polygon.prototype.deselect = function() {
		utils.removeClass(this.polygon, 'selected');
		
		return this;
	};
	
	Polygon.prototype.with_href = function() {
		utils.addClass(this.polygon, 'with_href');
		
		return this;
	}
	
	Polygon.prototype.without_href = function() {
		utils.removeClass(this.polygon, 'with_href');
		
		return this;
	}

	Polygon.prototype.toString = function() { //to html map area code
		for (var i = 0, count = this.params.length, str = ''; i < count; i++) {
			str += this.params[i];
			if (i != count - 1) {
				str += ', ';
			}
		}
		return '<area shape="poly" coords="'
			+ str
			+ '"'
			+ (this.href ? ' href="' + this.href + '"' : '')
			+ (this.alt ? ' alt="' + this.alt + '"' : '')
			+ (this.title ? ' title="' + this.title + '"' : '')
			+ ' />';
	};
	
	Polygon.createFromSaved = function(params) {
		var coords = params.coords,
			href = params.href,
			alt = params.alt,
			title = params.title,
			area = new Polygon(coords[0], coords[1]);
		
		for (var i = 2, c = coords.length; i < c; i+=2) {
			area.addPoint(coords[i], coords[i+1]);
		}
		
		area.polyline = area.polygon;
		area.polygon = document.createElementNS('http://www.w3.org/2000/svg', 'polygon');
		area.g.replaceChild(area.polygon, area.polyline);
		area.setCoords(area.params).deselect();
		delete(area.polyline);
		
		app.setIsDraw(false)
			.resetNewArea();
		
		if (href) {
			area.href = href;
		}
		
		if (alt) {
			area.alt = alt;
		}
		
		if (title) {
			area.title = title;
		}
	};
	
	Polygon.prototype.toJSON = function() {
		return {
			type   : 'polygon',
			coords : this.params,
			href   : this.href,
			alt    : this.alt,
			title  : this.title
		}
	};
	
};

document.addEventListener("DOMContentLoaded", SummerHtmlImageMapCreator, false);
</script>


  </body>
</html>
