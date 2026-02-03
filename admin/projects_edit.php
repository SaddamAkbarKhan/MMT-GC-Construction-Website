<?php include("./incs/auth.php"); ?>
<?php include("./incs/db.php");
$proj_up_id = (int) $_GET['proj_up_id'];
$sql = "select * from projects where id = '$proj_up_id'";
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
                    <h1>Edit Portfolio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Portfolio</li>
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
                <h3 class="card-title">Edit Portfolio</h3>

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
                        <form action="./projects_new_act.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="proj_up_id" value="<?php echo $up_row['id']; ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="project_category_id" class="form-label">Category Id</label>
                                    <select name="project_category_id" id="project_category_id" class="form-control">
                                        <option value="">--Select Category--</option>
                                        <?php
                                        $sql = "select * from project_categories";
                                        $query = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <option value="<?php echo $row['id']; ?>"
                                            <?php if($up_row['project_category_id'] == $row['id']) { echo "selected"; } ?>
                                            ><?php echo $row['title']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="<?php echo $up_row['title']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" name="description" class="form-label">Description</label>
                                    <textarea name="description" id="" cols="30" class="form-control"><?php echo $up_row['description']; ?>"</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" name="client" class="form-label">Client</label>
                                    <input type="text" name="client" id="" class="form-control" value="<?php echo $up_row['client']; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" name="date" class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control" id="" value="<?php echo $up_row['date']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Image</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <input type="file" name="image" id="" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="../uploads/project_images/<?php echo $up_row['image']; ?>" alt="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <input type="submit" value="Post" class="btn btn-success">
                                </div>
                            </div>
                        </form>
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