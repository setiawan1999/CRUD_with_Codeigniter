    <?php

        if(isset($message)) 
        { 
            echo "<p>".$message."</p>"; 
        }
        
        echo form_open('coba/update');
        foreach ($anggota as $key) {
     ?>
        <table>
            <tr>
                <td>Nama Pangilan</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $key->nama; ?>" required></td>
            </tr>

            <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td><input type="text" name="nama_depan" value="<?php echo $key->nama_depan; ?>" required></td>
            </tr>

            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td><input type="text" name="nama_belakang" value="<?php echo $key->nama_belakang; ?>" required></td>
            </tr>

            <tr>
                <td><button type="submit" name="submit">edit</button></td>
                <td><a href="<?php echo base_url(); ?>index.php/coba/">refresh</a></td>
            </tr>
        </table>
    <?php 
        }
     ?>
    </form>