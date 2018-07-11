 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
 
                  <th>Nomor Peserta</th>
                  <th>Nama Peserta</th>
                  <th>Nomor HP</th>
                  <th>Jurusan</th>
                  <th>Sekolah</th>
                  <th>Waktu Daftar</th>
                  <th>Username</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=1; foreach($peserta as $peserta) { ?>
 
           <tr>
 
                <td><?php echo $peserta->id_peserta; ?></td>
                <td><?php echo $peserta->nama; ?></td>
                <td><?php echo $peserta->no_hp; ?></td>
                <td><?php echo $peserta->jurusan; ?></td>
                <td><?php echo $peserta->sekolah; ?></td>
                <td><?php echo $peserta->waktudaftar; ?></td>
                <td><?php echo $peserta->u_user; ?></td>
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>