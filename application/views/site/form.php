<div class="container-fluid">		
			<?php echo form_open('site_controller/insert');?>
			<?php echo validation_errors();?>
				<fieldset>
					<legend>Tambah Data</legend>

					<table>
						<tr>
							<td>
								<label>Nama Awal</label>
							</td>
							<td width="20px"></td>
							<td>
								<input type="text" name="nama_awl" placeholder="Masukkan Nama Depan" value="<?php echo set_value('nama_awl');?>" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>Nama Akhir</label>
							</td>
							<td></td>
							<td>
								<input type="text" name="nama_akhr" placeholder="Masukkan Nama Akhir" value="<?php echo set_value('nama_akhr');?>" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>Alamat</label>
							</td>
							<td></td>
							<td>
								<textarea name="alamat" required><?php echo set_value('alamat');?></textarea>
							</td>
						</tr>
					</table>

					<label></label>
					<input type="submit" name="submit" class="btn" value="Kirim">
				</fieldset>
			<?php echo form_close();?>
</div>