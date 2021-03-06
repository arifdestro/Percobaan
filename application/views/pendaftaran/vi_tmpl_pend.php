<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Form pendaftaran PKL</h1>
				</div>
				<!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
            </ol>
            </div> -->
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<?php foreach($data_kelompok as $dt_kl) { ?>
							<label class="col-sm-2 label-on-left">Tempat PKL</label>
							<div class="col-sm-10">
								<div class="form-group">
									<p class="form-control-static"><?= $dt_kl->NAMA_PR; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-6">
				<div class="card">
					<div class="card-body">
						<table width="100%">
							<tr>
								<td style="vertical-align:top; width:30%">
									<label for="NIM">NIM Mahasiswa</label>
								</td>
								<td>
									<div class="form-group input-group">
										<input type="hidden" id="nim">
										<input type="text" id="nim1" class="form-control" autofocus readonly>
										<span class="input-group-btn">
											<button type="button" class="btn btn-info btn-flat" data-toggle="modal"
												data-target="#modal-item">
												<i class="fa fa-search"></i>
											</button>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: top">
									<label for="Nama">Nama Mahasiswa</label>
								</td>
								<td>
									<div class="form-group">
										<input type="text" id="nama" value="" class="form-control" readonly>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<div>
										<button type="button" id="add_siswa" class="btn btn-primary">
											<i class="fas fa-users"></i> Tambah Anggota
										</button>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div> -->
		</div>
	</section>

	<!-- <section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<label class="col-sm-2 label-on-left">Masukkan NIM</label>
							<form>
								
									<input type="text" name="NIM" id="NIM" value=""	placeholder="NIM">
									<button type="submit" name="tambah" class="btn btn-primary add">Tambah</button>
								
							</form>
						</div>
						<div class="row">
							<table id="tabel" name="tabel" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>NIM</th>
										<th>Nama</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td> -->
	<!-- <td class="text-right">
											<button class="btn btn-info btn-xs btn-danger"
												data-target="#modal_edit">Hapus</button>
										</td> -->
	<!-- </tr>
								</tbody>
								<tfoot>
									<tr>
										<th>#</th>
										<th>NIM</th>
										<th>Nama</th>
										<th>Actions</th>
									</tr>
								</tfoot>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- <section class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="box box-widget">
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="tbody">


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</section> -->
</div>
<!-- /.row -->
