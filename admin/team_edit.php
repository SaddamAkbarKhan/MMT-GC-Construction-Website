<?php include("./incs/auth.php"); ?>
<?php include("./incs/db.php"); 
$team_up_id = (int) $_GET['team_up_id'];
$sql = "select * from team where id = '$team_up_id'";
$query = mysqli_query($con, $sql);
$up_row = mysqli_fetch_assoc($query);
?>
<?php include("./incs/header.php"); ?>
<?php include("./incs/sidebar.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blank Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                <h3 class="card-title">Title</h3>

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
                        <form action="./team_edit_act.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="team_up_id" id="team_up_id" value="<?php echo $up_row['id']; ?>">

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $up_row['name']; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Designation</label>
                                    <input type="text" name="designation" class="form-control" value="<?php echo $up_row['designation']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Image</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="../uploads/team_images/<?php echo $up_row['image']; ?>" width="50" alt="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>




                            <div class="row mt-4">
                                <div class="col-md-8 offset-4">
                                    <input type="submit" value="Post Team" class="btn btn-success">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("./incs/footer.php"); ?>