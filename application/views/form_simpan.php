    <?php

        if(isset($message)) 
        { 
            echo "<p>".$message."</p>"; 
        }

        echo form_open('coba/simpan');
     ?>
        <table>
            <tr>
                <td>Nama Pangilan</td>
                <td>:</td>
                <td><input type="text" name="nama" value="" required></td>
            </tr>

            <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td><input type="text" name="nama_depan" value="" required></td>
            </tr>


            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td><input type="text" name="nama_belakang" value="" required></td>
            </tr>

            <tr>
                <td><button type="submit" name="submit">simpan</button></td>
                <td><a href="<?php echo base_url(); ?>index.php/coba/">refresh</a></td>
            </tr>
        </table>
    </form>