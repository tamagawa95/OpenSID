<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Menu Pendataan Persil</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
			<li><a href="<?= site_url('data_persil/create')?>"><i class='fa fa-plus'></i> Tambah Data C-Desa Baru</a></li>
			<li><a href="<?= site_url('data_persil/create_ext')?>"><i class='fa fa-edit'></i>Tambah Data C-Desa (Manual)</a></li>
			<li><a href="<?= site_url('data_persil/clear')?>"><i class='fa fa-list'></i>Daftar C-DESA</a></li>
			<li><a href="<?= site_url('data_persil/persil')?>"><i class='fa fa-list'></i>Daftar Persil</a></li>
			<li><a href="<?= site_url('data_persil/import')?>" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Impor Data Persil"><i class='fa fa-upload'></i>Impor Data C-Desa</a></li>
			<li><a href="<?= site_url('data_persil/panduan')?>"><i class='fa fa-question-circle'></i>Panduan C-Desa</a></li>
			<li><a href="<?= site_url('data_persil/panduan')?>"><i class='fa fa-question-circle'></i>Panduan Persil</a></li>
		</ul>
	</div>
</div>
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Jenis Persil</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
			<?php if ($persil_jenis): ?>
				<?php foreach ($persil_jenis as $key=>$item): ?>
					<li><a href="<?= site_url("data_persil/persil/jenis/$key/")?>" title="<?=$item[1]?>"><i class='fa fa-list'></i> <?=$item[0]?></a></li>
				<?php endforeach;?>
			<?php endif; ?>
			<li><a href="<?= site_url('data_persil/persil_jenis')?>"><i class='fa fa-plus'></i> Tambah Jenis Persil</a></li>
		</ul>
	</div>
</div>
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Jenis Kelas</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
			<?php if ($persil_kelas): ?>
				<?php foreach ($persil_kelas as $item): ?>
					<li><a href="<?= site_url("data_persil/persil/kelas/$key/")?>" title="<?=$item['1']?>"><i class='fa fa-list'></i> Kelas <?=$item['0']?></a></li>
				<?php endforeach;?>
			<?php endif; ?>
			<li><a href="<?= site_url('data_persil/persil_kelas')?>"><i class='fa fa-plus'></i> Tambah Jenis Kelas</a></li>
		</ul>
	</div>
</div>
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Peruntukan Persil</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
		<?php if ($persil_peruntukan): ?>
			<?php foreach ($persil_peruntukan as $key=>$item): ?>
				<li><a href="<?= site_url("data_persil/persil/peruntukan/$key/")?>" title="<?=$item[1]?>"><i class='fa fa-list'></i> <?=$item[0]?></a></li>
			<?php endforeach;?>
		<?php endif; ?>
		<li><a href="<?= site_url('data_persil/persil_peruntukan')?>"><i class='fa fa-plus'></i> Tambah Data Peruntukan</a></li>
	</div>
</div>