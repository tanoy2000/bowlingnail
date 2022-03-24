<!-- โปรไฟล์ช่างทำเล็บ -->
<div class="modal fade" id="nailerport1<?php echo $row['nailer_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-xl">
        <div class="modal-content">
            <div class="modal-header" id="del-cart">
                <h4 class="modal-title" id="myModalLabel"><i class="bi bi-journal-medical"></i> &nbsp;โปรไฟล์ช่างทำเล็บ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                $nailerport = mysqli_query($conn, "select * from portfolio_nailer where nailer_id='" . $row['nailer_id'] . "'");
                $row = mysqli_fetch_array($nailerport);
                ?>
            </div>

            <div class="container">
                <form enctype="multipart/form-data" action="../conn/conn_nailer_port.php?nailer_id=<?php echo $row["nailer_id"] ?>" method="POST">

                    <div class="row">
                        <?php
                        include('../conn/conn.php');
                        $query = mysqli_query($conn, "select * from portfolio_nailer where nailer_id='1'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="card text-center">
                                    <img class="img-responsive img-thumbnail" src="<?php echo $row['port_file'] ?>" />
                                    
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
            </div><br><br>
        </div>
    </div>
</div>

<div class="modal fade" id="nailerport2<?php echo $row['nailer_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-xl">
        <div class="modal-content">
            <div class="modal-header" id="del-cart">
                <h4 class="modal-title" id="myModalLabel"><i class="bi bi-journal-medical"></i> &nbsp;โปรไฟล์ช่างทำเล็บ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                $nailerport = mysqli_query($conn, "select * from portfolio_nailer where nailer_id='" . $row['nailer_id'] . "'");
                $row = mysqli_fetch_array($nailerport);
                ?>
            </div>

            <div class="container">
                <form enctype="multipart/form-data" action="../conn/conn_nailer_port2.php?nailer_id=<?php echo $row["nailer_id"] ?>" method="POST">

                    <div class="row">
                        <?php
                        include('../conn/conn.php');
                        $query = mysqli_query($conn, "select * from portfolio_nailer where nailer_id='2'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="card text-center">
                                    <img class="img-responsive img-thumbnail" src="<?php echo $row['port_file'] ?>" />
                                    
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
            </div><br><br>
        </div>
    </div>
</div>