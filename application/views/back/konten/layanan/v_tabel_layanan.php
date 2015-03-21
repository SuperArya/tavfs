		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url(); ?>index.php/backend/dashboard">Home</a></li>
				<li class="active">Tabel Layanan</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Layanan Arion</h1>
			<!-- end page-header -->
			
			<div class="panel panel-inverse">
			    <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <a class="btn btn-success btn-xs" 
                           href="<?php echo base_url(); ?>index.php/backend/layanan/tambah"> 
                             <i class="fa fa-pencil"></i> Tambah Data Baru
                        </a>  
                    </div>
			        <h4 class="panel-title">Layanan Arion</h4>
			    </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ikon</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal Dibuat</th>
                                            <th width="15%">Setting</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>arya herlambang</td>
                                            <td>herlambangharyo@gmail.com</td>
                                            <td>Tertarik dengan penawaran arion</td>
                                            <td>saya ingin </td>
                                            <td>
                                                <a class="btn btn-info btn-xs" 
                                                   href="<?php echo base_url(); ?>index.php/backend/layanan/ubah"><i class="fa fa-edit (alias)"></i> ubah</a>
                                                &nbsp; 
                                                <a class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> hapus</a> 
                                            </td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>2</td>
                                            <td>herlambang haryo</td>
                                            <td>herlambangharyo@gmail.com</td>
                                            <td>berapa lama pengerjaan webnya?</td>
                                            <td>saya penasaran</td>
                                            <td>
                                                <a class="btn btn-info btn-xs"
                                                   href="<?php echo base_url(); ?>index.php/backend/layanan/ubah"><i class="fa fa-edit (alias)"></i> ubah</a>
                                                &nbsp;  
                                                <a class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> hapus</a> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
			</div>
		</div>
		<!-- end #content -->
				
