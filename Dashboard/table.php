<?php
include "../Include/dbConfig.inc.php";
$query = "SELECT * FROM `category_table`";
$result_set = mysqli_query($conn, $query);
if (!$result_set) {
die("Query Failed". mysqli_error($conn));
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Light Bootstrap Dashboard by Creative Tim</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>
        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
        <!--  CSS for Demo Purpose, don't include it in your project     -->

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
        <!-- Style for Image Upload -->
        <style type="text/css" media="screen">
        .btn-file {
        position: relative;
        overflow: hidden;
        }
        .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
        }
        #img-upload{
        width: 100%;
        }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <?php
            include 'IncludeDas/sidebar.inc.php';
            ?>
            <div class="main-panel">
                <?php
                include 'IncludeDas/navbar.inc.php';
                ?>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Add Product Form -->
                            <div class=" col-md-5">
                                <div class="jumbotron" style=' padding-top:1px;'>
                                    <h2 align='center'>Add Products</h2><br>
                                    <form class="dropzone" id="my-awesome-dropzone" method="POST">
                                        <div class="form-group">
                                            <label>Upload Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img id='img-upload'/>
                                            <button id="cancel-all">Cancel</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Name :</label>
                                            <input type="text" name="product" class="form-control" placeholder="Enter Product Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="selectCategory">Category Select :</label>
                                            <select class="form-control" id="selectCategory">
                                                <?php
                                                while ($row = mysqli_fetch_array($result_set) ):; ?>
                                                <option value=""><?php echo $row['catg_name']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Brand Select :</label>
                                            <input type="text" name="brand" class="form-control" placeholder="Enter Brand Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Added Date :</label>
                                            <input type="date" name="dop" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity :</label>
                                            <input type="number" name="qty" id="qty" class="form-control" placeholder="Enter uantity">
                                        </div>
                                        <div class="form-group">
                                            <label>Selling Price</label>
                                            <input type="number" name="sellingp" id="sellp" class="form-control" placeholder="Enter Selling Price">
                                        </div>
                                        <div class="form-group">
                                            <label>Cost Price</label><!-- totalamount=feess/month*number of months -->
                                            <input type="number" name="costp" id="costp" class="form-control"  placeholder="Enter Cost Price">
                                        </div>
                                        <div class="form-group">
                                            <label>Profit :</label><!-- totalamount=feess/month*number of months -->
                                            <input type="number" name="profit" id="tprofit" class="form-control" readonly placeholder="Profit Amount">
                                        </div>
                                        <div class="form-group">
                                            <center><input type="submit" name="ok" class="btn btn-fill btn-success" value="Submit"></center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <!-- Table With Hover -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Striped Table with Hover</h4>
                                            <p class="category">Here is a subtitle for this table</p>
                                        </div>
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Salary</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table on Plain Background -->
                                <div class="col-md-12">
                                    <div class="card card-plain">
                                        <div class="header">
                                            <h4 class="title">Table on Plain Background</h4>
                                            <p class="category">Here is a subtitle for this table</p>
                                        </div>
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Salary</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include 'IncludeDas/footer.inc.php';
                ?>
            </div>
        </div>
    </body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    <script>
    // Calculate Total Profit
    $(document).ready(function(){
    $('#sellp,#costp').keyup(function(){
    var textValue1 =$('#sellp').val();
    var textValue2 = $('#costp').val();
    $('#tprofit').val(textValue2 - textValue1);
    
    });
    });
    // Add Image In The Form
    $(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });
    $('.btn-file :file').on('fileselect', function(event, label) {
    
    var input = $(this).parents('.input-group').find(':text'),
    log = label;
    
    if( input.length ) {
    input.val(log);
    } else {
    if( log ) alert(log);
    }
    
    });
    function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function (e) {
    $('#img-upload').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
    }
    }
    $("#imgInp").change(function(){
    readURL(this);
    });
    });
    //Cancel Selected Image
    Dropzone.options.myAwesomeDropzone = {
    init: function() {
    var cancelButton = document.querySelector("#cancel-all");
    myDropzone = this; // closure
    //if user click Cancel
    cancelButton.addEventListener("click", function() {
    myDropzone.removeAllFiles(true);// Tell Dropzone to cancel the queued file.
    });
    }
    };
    </script>
</html>