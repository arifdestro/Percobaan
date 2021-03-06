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
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<form method="post" action="<?= base_url(). 'pendaftaran/pr_tmbh_pnd';?>"
							class="form-horizontal">
							<div class="card-content">
							<?php $nim = $user['identity']; ?>
							<input type="hidden" name="nim" id="nim" value="<?= $nim; ?>">
								<input type="text" name="ID_PND" id="ID_PND" value="<?= "PND-".$nim; ?>">
								<div class="row">
									<label class="col-sm label-on-left" for="ID_PR">Tempat PKL</label>
									<div class="col-lg col-md col-sm">
										<select name="ID_PR" class="form-control" data-style="btn btn-primary btn-round"
											title="Single Select" data-size="7">
											<option selected disabled>Pilih Tempat PKL</option>
											<?php foreach($jumlah_pr as $pr){
												if ($pr->JMLH_PR < 2 ){
													// echo '<div class="row" border:solid 3px black';
													echo '<option type="text" name="ID_PR"  value="'.$pr->ID_PR.'">'.$pr->NAMA_PR; 
													echo  '<option type="text" name="ID_PR"  disabled> Alamat : '.$pr->ALAMAT_PR;
													// echo "</div>";
												}
												// } else {
												// 	echo '<option type="text" name="ID_PR" value="'.$pr->ID_PR.'">'.$pr->NAMA_PR;
												// }
												?>
												<?php }?>
										</select>
									</div>
								</div>
								<br>
								<div class="row">
									<label class="col-sm label-on-left" for="ID_DS">Dosen Pembimbing</label>
									<div class="col-lg col-md col-sm">
										<select name="ID_DS" class="form-control" data-style="btn btn-primary btn-round"
											title="Single Select" data-size="7">
											<option selected disabled>Pilih Dosen Pembimbing</option>
											<?php foreach($comboDS as $ds){ ?>
											<option type="text" name="ID_DS" value="<?= $ds->ID_DS; ?>">
												<?= $ds->NAMA_DS; ?>
												<?php } ?>
										</select>
									</div>
								</div>
								<br>
								<div class="row">
									<label class="col-sm-2">Waktu</label>
									<label class="col-sm-2" for="bulan">Bulan :</label>
									<select name="bulan" id="bulan" class="col-sm-2 form-control	"
										data-style="btn btn-primary btn-round" required>
										<option selected disabled>Pilih Bulan</option>
											<?php foreach($bulan as $bl){ ?>
											<option type="text" name="bulan" value="<?= $bl->BL; ?>">
												<?= $bl->BL; ?>
												<?php } ?>
									</select>
									<label class="col-sm-2" for="tahun">Tahun :</label>
									<select class="col-sm-2 form-control" name="tahun" required>
										<?php $y = date('Y'); ?>
										<option name="tahun" selected="selected" value="<?= $y;?>"><?= $y;?></option>
										<option name="tahun" value="<?= $y+1;?>"><?= $y+1; ?></option>
									</select>
								</div>
								<br>
								<div class="row">
									<label class="col-sm label-on-left" for="PROPOSAL">Upload Proposal</label>
									<input type="file" id="PROPOSAL" name="PROPOSAL" class="col-sm-6 form-control"
										required>
								</div>
								<br>
								<div class="row">
									<button class="btn btn-success col-lg">Simpan Form</button> 
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-6">
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
			</div>
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

	<section class="content">
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

	</section>

	<!-- Modal List Mahasiswa -->
	<div class="modal fade" id="modal-item">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-tittle">Pilih Mahasiswa</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body table-responsive">
					<table class="table table-bordered table-striped" id="table1">
						<thead>
							<tr>
								<th>NIM</th>
								<th>Nama Mahasiswa</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($mahasiswa as $i => $data ) { ?>
							<tr>

								<td><?=$data['NIM']; ?></td>
								<td><?=$data['NAMA_M']; ?></td>
								<td class="text-right">
									<button class="btn btn-xs btn-info" id="select" data-nim="<?=$data['NIM']?>"
										data-nama="<?=$data['NAMA_M'];?>">
										<i class="fa fa-check"></i> Pilih
									</button>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
