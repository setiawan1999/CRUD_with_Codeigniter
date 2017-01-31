<div class="container-fluid">		
			<?php echo form_open();?>
			<?php echo validation_errors();?>
				<fieldset>
					<legend>Edit Data</legend>

					<table>
						<tr>
							<td>
								<label>Nama Awal</label>
							</td>
							<td width="20px"></td>
							<td>
								<input type="text" name="nama_awl" placeholder="Masukkan Nama Depan" value="<?php echo $editdata->nama_awal;?>">
							</td>
						</tr>
						<tr>
							<td>
								<label>Nama Akhir</label>
							</td>
							<td width="20px"></td>
							<td>
								<input type="text" name="nama_akhr" placeholder="Masukkan Nama Akhir" value="<?php echo $editdata->nama_akhir;?>">
							</td>
						</tr>
						<tr>
							<td>
								<label>Alamat</label>
							</td>
							<td width="20px"></td>
							<td>
								<textarea name="alamat"><?php echo $editdata->alamat;?></textarea><br>
							</td>
						</tr>
						</table>

						<label></label>
						<input type="hidden" name="id" value="<?php echo $editdata->id;?>">
						<input type="submit" name="submit" class="btn" value="Update">
				</fieldset>
			<?php echo form_close();?>
</div>