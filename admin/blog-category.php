<?php
require "includes/dbh.php";
$sqlCategories = "SELECT * FROM blog_category";
$queryCategories = mysqli_query($conn,$sqlCategories);
$numCategories = mysqli_num_rows($queryCategories);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <?php include "header.php"; include "sidebar.php"; ?>
        <div id="page-wrapper" >
            <div id="page-inner">
			    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Blog Categories
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Add A Category</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" method="POST" action="includes/add-category.php">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" name="category-name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Meta Title</label>
                                                    <input class="form-control" name="category-meta-title">
                                                </div>
                                                <div class="form-group">
                                                    <label>Category Path (lower case, no spaces)</label>
                                                    <input class="form-control" name="category-path">
                                                </div>
                                                <button type="submit" class="btn btn-default" name="add-category-btn">Add Category</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">All Categories</div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Meta Title</th>
                                                    <th>Category Path</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>
                                                        <button>View</button>
                                                        <button>Edit</button>
                                                        <button>Delete</button>
                                                    </td>
                                                </tr>  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php include "footer.php"; ?>
		    </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom-scripts.js"></script>  
</body>
</html>
