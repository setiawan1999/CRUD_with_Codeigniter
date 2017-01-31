<div class="container-fluid"><br>
			<?php if($this->session->flashdata('info')):echo "<p class='alert alert-danger'>".$this->session->flashdata('info')."</p>";endif;?><br>
			<a href="<?php echo base_url('index.php/site_controller/tambah'); ?>" class="btn btn-primary">Tambah Data</a>

			<?php //if($this->session->flashdata('info')):echo "<script>alert('".$this->session->flashdata('info')."');</script>";endif;?>
			<hr/>
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Awal</th>
						<th>Nama Akhir</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$no = 1;
					foreach($data as $out):
				?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $out->nama_awal;?></td>
						<td><?php echo $out->nama_akhir;?></td>
						<td><?php echo $out->alamat;?></td>
						<td>
							<a href="<?php echo base_url('index.php/site_controller/edit/'.$out->id); ?>">Ubah</a> | <a href="<?php echo base_url('index.php/site_controller/hapus/'.$out->id); ?>">Hapus</a>
						</td>
					</tr>
				<?php
						$no++;
					endforeach;
				?>
				</tbody>
			</table>
</div>			