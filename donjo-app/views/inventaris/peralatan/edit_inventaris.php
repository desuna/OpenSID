<div class="content-wrapper">
	<section class="content-header">
		<h1>Ubah Data Inventaris Peralatan Dan Mesin</h1>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('hom_desa')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?=site_url() ?>inventaris_peralatan"><i class="fa fa-dashboard"></i>Daftar Inventaris Peralatan Dan Mesin</a></li>
			<li class="active">Ubah Data</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<form class="form-horizontal" id="validasi" name="form_tanah" method="post" action="<?= $form_action?>">
			<div class="row">
				<div class="col-md-3">
          <?php	$this->load->view('inventaris/peralatan/menu_kiri.php')?>
				</div>
				<div class="col-md-9">
					<div class="box box-info">
            <div class="box-header with-border">
						<a href="<?= site_url() ?>inventaris_peralatan" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i> Kembali Ke Daftar Inventaris Peralatan Dan Mesin</a>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-sm-3 control-label " style="text-align:left;" for="nama_barang">Nama Barang / Jenis Barang</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= $main->id; ?>" class="form-control input-sm required" name="id" id="id" type="hidden"/>
											<input maxlength="50" value="<?= $main->nama_barang; ?>" class="form-control input-sm required" name="nama_barang" id="nama_barang" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kode_barang">Kode Barang</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= $main->kode_barang; ?>" class="form-control input-sm required" name="kode_barang" id="kode_barang" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="nomor_register">Nomor Register</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= $main->register; ?>" class="form-control input-sm required" name="nomor_register" id="nomor_register" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="merk">Merk/Type</label>
										<div class="col-sm-8">
											<input type="text" value="<?= $main->merk; ?>" class="form-control input-sm required" id="merk" name="merk" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " style="text-align:left;" for="ukuran">Ukuran/CC </label>
										<div class="col-sm-8">
											<textarea class="form-control input-sm required" name="ukuran" id="ukuran"><?= $main->ukuran; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="bahan">Bahan</label>
										<div class="col-sm-8">
											<textarea class="form-control input-sm required" name="bahan" id="bahan"><?= $main->bahan; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="tahun">Tahun Pembelian</label>
										<div class="col-sm-4">
											<select name="tahun" id="tahun" class="form-control input-sm required">
												<option value="<?= $main->tahun_pengadaan; ?>"><?= $main->tahun_pengadaan; ?></option>
												<?php for ($i=date("Y"); $i>=1980; $i--): ?>
													<option value="<?= $i ?>"><?= $i ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " style="text-align:left;" for="no_pabrik">Nomor Pabrik</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= (!empty($main->no_pabrik) ? $main->no_pabrik : '-'); ?>" class="form-control input-sm required" name="no_pabrik" id="no_pabrik" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " style="text-align:left;" for="no_rangka">Nomor Rangka </label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= (!empty($main->no_rangka) ? $main->no_rangka : '-'); ?>" class="form-control input-sm required" name="no_rangka" id="no_rangka" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " style="text-align:left;" for="no_mesin">Nomor Mesin</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= (!empty($main->no_mesin) ? $main->no_mesin : '-'); ?>" class="form-control input-sm required" name="no_mesin" id="no_mesin" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " style="text-align:left;" for="no_polisi">Nomor Polisi </label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= (!empty($main->no_polisi) ? $main->no_polisi : '-'); ?>" class="form-control input-sm required" name="no_polisi" id="no_polisi" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " style="text-align:left;" for="bpkb">BPKB</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= (!empty($main->no_bpkb) ? $main->no_bpkb : '-'); ?>" class="form-control input-sm required" name="bpkb" id="bpkb" type="text"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label " style="text-align:left;" for="asal_usul">Asal Usul </label>
										<div class="col-sm-4">
											<select name="asal_usul" id="asal_usul" class="form-control input-sm required">
												<option value="<?= $main->asal; ?>"><?= $main->asal; ?></option>
												<option value="Bantuan Kabupaten">Bantuan Kabupaten</option>
												<option value="Bantuan Pemerintah">Bantuan Pemerintah</option>
												<option value="Bantuan Provinsi">Bantuan Provinsi</option>
												<option value="Pembelian Sendiri">Pembelian Sendiri</option>
												<option value="Sumbangan">Sumbangan</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="harga">Harga</label>
										<div class="col-sm-4">
											<div class="input-group">
												<span class="input-group-addon input-sm" id="koefisien_dasar_bangunan-addon">Rp</span>
												<input value="<?= $main->harga; ?>" class="form-control input-sm number required" id="harga" name="harga" type="text"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="keterangan">Keterangan</label>
										<div class="col-sm-8">
											<textarea rows="5" class="form-control input-sm required" name="keterangan" id="keterangan"><?= $main->keterangan; ?></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<div class="col-xs-12">
								<button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
								<button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>

