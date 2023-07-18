        <div class="container m-4 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Laporan Data Printer</h1>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">NO</th>
                            <th width="12%">NAMA MERK</th>
                            <th width="25%">WARNA</th>
                            <th width="38%">JUMLAH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $mydb   = "data";
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $mydb);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Koneksi Gagal " . $conn->connect_error);
                        }

                        $nom = 1;
                        $sql = "SELECT * FROM PRINTER";
                        $hasil = $conn->query($sql);
                        while ($row = $hasil->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row["no"]; ?></td>
                                <td><?php echo $row["nama_merk"]; ?></td>
                                <td><?php echo $row["warna"]; ?></td>
                                <td><?php echo $row["jumlah"];  ?></td>
                            </tr>
                        <?php $nom++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>