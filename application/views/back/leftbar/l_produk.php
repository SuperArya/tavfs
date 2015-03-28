		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="<?php echo base_url(); ?>assets/back/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							NAMA_USER
							<small>JABATAN</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">
						Navigation
					</li>

					<li>
						<a href="<?php echo base_url(); ?>index.php/tavfs/dashboard">
							<i class="fa fa-line-chart active"></i> 
							<span>Dashboard</span>
						</a>
					</li>
					
					<li>
						<a href="<?php echo base_url(); ?>index.php/tavfs/message">
							<i class="fa fa-inbox  active"></i> 
							<span>Message</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url(); ?>index.php/tavfs/order">
							<i class="fa fa-shopping-cart active"></i> 
							<span>Order</span>
						</a>
					</li>

					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-pencil-square-o"></i>
						    <span>Input</span>
					    </a>
						<ul class="sub-menu">
						    <li class="active">
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/produk">
						    		Produk
						    	</a>
						    </li>
						    <li>
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/kategori">
						    		Kategori
						    	</a>
						    </li>
						    <li>
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/tipe">
						    		Tipe
						    	</a>
						    </li>
						    <li>
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/bahan">
						    		Bahan
						    	</a>
						    </li>
						    <li>
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/ukuran">
						    		Ukuran
						    	</a>
						    </li>
						    <li>
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/ongkir">
						    		Ongkir
						    	</a>
						    </li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-list-alt"></i>
						    <span>Data</span>
					    </a>
						<ul class="sub-menu">
						    <li>
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/">
						    		Produk
						    	</a>
						    </li>
						    <li>
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/">
						    		Kustomer
						    	</a>
						    </li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-cogs"></i>
						    <span>Settings</span>
					    </a>
						<ul class="sub-menu">
						    <li>
						    	<a href="<?php echo base_url(); ?>index.php/tavfs/">
						    		Produk
						    	</a>
						    </li>
						</ul>
					</li>

			        <!-- begin sidebar minify button -->
					<li>
						<a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify">
							<i class="fa fa-angle-double-left"></i>
						</a>
					</li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->