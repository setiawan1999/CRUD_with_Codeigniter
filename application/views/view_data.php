    <table>
        <tr>
            <th>Nama</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Action</th>
        </tr>
        <?php 

            if(isset($anggota))
            {
                foreach ($anggota as $key) {
                    
                    echo "<tr>
                        <td>".$key->nama."</td>
                        <td>".$key->nama_depan."</td>
                        <td>".$key->nama_belakang."</td>
                        <td>
                            <a href='".site_url()."/coba/get?id=".$key->id_anggota."'>edit</a>
                            <a href='".site_url()."/coba/hapus?id=".$key->id_anggota."'>hapus</a>
                        </td>
                    </tr>";
                }
            }

         ?>
    </table>