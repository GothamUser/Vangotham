<div class="card">
    <div class="card-header bg-primary text-white">
        Data catatan perjalanan anda
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="data-table" class="table table-bordered">
                <thead>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Suhu Tubuh</th>
                </thead>
                <tbody>
                    <?php
                    $file="file/".$nik."-".$nama.".txt";
                    $fh=fopen($file, "r");
                    while(!feof($fh)){
                        $baris=fgets($fh);
                        if ($baris) {
                        $string_data=explode("|", $baris);
                    ?>
                    <tr>
                        <td><?php echo $string_data['0'] ?></td>
                        <td><?php echo $string_data['1'] ?></td>
                        <td><?php echo $string_data['2'] ?></td>
                        <td><?php echo $string_data['3'] ?></td>
                    </tr>

                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>