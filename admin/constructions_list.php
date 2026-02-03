<?php include("./incs/auth.php"); ?>
<?php include("./incs/db.php"); ?>
<?php include("./incs/header.php"); ?>
<?php include("./incs/sidebar.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Construction List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">Construction List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
            <div class="col-md-12">

                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error'];
                                                    unset($_SESSION['error']); ?></div>
                <?php endif; ?>

                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'];
                                                        unset($_SESSION['success']); ?></div>
                <?php endif; ?>

            </div>
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Construction List</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Tag Line</th>
                                        <th>Description</th>
                                        <th>Images</th>
                                        <th>Date</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from constructions";
                                    $query = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['tag_line']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td>
                                                <img src="../uploads/constructions_images/<?php echo $row['image']; ?>" width="50">
                                            </td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td>
                                                <a href="./constructions_edit.php?con_up_id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                                                <a href="./constructions_delete.php?con_del_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <p class="text-muted ">MMT&GC</p>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("./incs/footer.php"); ?>