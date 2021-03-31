<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: ../getin.php?please_login_first");
    
}



include '../advanced/database.php';
$types='';
$typequerry = "SELECT `typeName` FROM `types`";
$typeRes = mysqli_query($connect, $typequerry);
while ($rawtypes = mysqli_fetch_assoc($typeRes)) {
    $preTypes = $rawtypes['typeName'];
    $types = $types.'<option>'.$preTypes.'</option>';
}


$carReq = "SELECT * FROM cars";
$carresults = mysqli_query($connect, $carReq);

$output='
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">manufact.</th>
      <th scope="col">ProdYr</th>
      <th scope="col">Description</th>
      <th scope="col">PostDate</th>
      <th scope="col">Price</th>
      <th scope="col">Type</th>
      <th scope="col">VIN</th>
      <th scope="col">Used</th>
      <th scope="col">Visible</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
';
$modals='';
while($res = mysqli_fetch_assoc($carresults)){

  $carID	= $res['carID'];
  $brand	= $res['brand'];
  $model	= $res['model'];
  $manufacturer	= $res['manufacturer'];
  $productionYear	= $res['productionYear'];
  $description	= $res['description'];
  $postDate	= $res['postDate'];
  $price	= $res['price'];
  $vin	= $res['vin'];
  $type = '';
  $typeID	= $res['typeID'];
    $idReq = "SELECT `typeName` FROM `types` WHERE `typeID`=$typeID";
    $idresults = mysqli_query($connect, $idReq);
    while($ids = mysqli_fetch_assoc($idresults)){
      $type = $ids['typeName'];
    }
  $used = $res['used'];
    $used = ($used == 1) ? "Yes" : "No" ;
  $visible	= $res['visible'];
    $visible = ($visible == 1) ? "Yes" : "No" ;
    $visibility = '';
    $visibility = ($visible == "Yes") ? "": "selected";
    $usedAlready ='';
    $usedAlready = ($used == "Yes") ? "": "selected";


    $output = $output.'
  <tr>
      <th scope="row">'.$carID.'</th>
      <td>'.$brand.'</td>
      <td>'.$model.'</td>
      <td>'.$manufacturer.'</td>
      <td>'.$productionYear.'</td>
      <td>'.substr($description,0,5).'...'.'</td>
      <td>'.$postDate.'</td>
      <td>'.$price.'</td>
      <td>'.$type.'</td>
      <td>'.$vin.'</td>
      <td>'.$used.'</td>
      <td>'.$visible.'</td>
      <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".view'.$carID.'"><i class="fas fa-eye"></i></button>
            <a href="../editcars.php?editcar='.$carID.'" type="button" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".delete'.$carID.'"><i class="fas fa-trash"></i></button>
          </div>
      </td>
    </tr>
    ';

  $modals = $modals.'
  <div class="modal fade bd-example-modal-lg view'.$carID.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Car Number '.$carID.'?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
        
      <!--SECTION-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Brand</span>
                </div>
                <input value="'.$brand.'" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"disabled>
            </div>
      <!--SECTION-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Model</span>
                </div>
                <input value="'.$model.'" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" disabled>
            </div>
      <!--SECTION-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Manufacturer</span>
                </div>
                <input value="'.$manufacturer.'" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" disabled>
            </div>
      <!--SECTION-->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Production year</span>
              </div>
              <input value="'.$productionYear.'" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
            </div>
      <!--SECTION-->
             <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text">Post Date</span>
               </div>
               <input value="'.$postDate.'" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
             </div>
      
      <!--SECTION-->
       <div class="input-group mb-3">
           <div class="input-group-prepend">
                <span class="input-group-text">Price(PLN)</span>
            </div>
            <input value="'.$price.'" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
      </div>
      <!--SECTION-->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Type</span>
        </div>
        <input value="'.$type.'" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
      </div>
    
      <!--SECTION-->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">VIN</span>
        </div>
        <input value="'.$vin.'" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
      </div>
      <!--SECTION-->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Used</span>
        </div>
        <input value="'.$used.'" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
      </div>
      <!--SECTION-->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Visible</span>
        </div>
        <input value="'.$visible.'" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
      </div>
      <!--SECTION-->
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>'.$description.'</textarea>
      </div>

      <!--SECTION-->

    </div>
    <div class="modal-footer">
        <form action="action.php" method="GET">
            <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
        </form>
    </div>
  </div>
  </div>
  </div>
<!--____________________________________________________________________________________-->
  

  <div class="modal fade delete'.$carID.'" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete '.$carID.'?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            Are you sure to delete '.$brand.' '.$model.' '.$manufacturer.' ID: '.$carID.'?
          </div>
          <div class="modal-footer">
              <form action="action.php" method="GET">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                  <a class="btn btn-danger" href="deletions.php?cardelete='.$carID.'">Delete</a>
              </form>
          </div>
        </div>
      </div>
  </div>
  ';
  
}
$output = $output.'</tbody>
</table>';

include '../header.php'
?>


<body>
    <nav class="nav-bar" style="position: sticky;">
        <strong>Sell Cars</strong>
            <h3>Manage Cars</h3>
        <button class="login-button" onclick="window.location.href='index.php'">Back</button>
    </nav>

    <div class="container-fluid table-striped table-hover mt-5" >
      <button type="button" class="btn btn-primary float-xl-right mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Add a new car Deal</button>

      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!----Start of ADD NEW CAR CODEEEEEE------>
                  <div class="container pt-5 pb-5">

                          <form action="carAdditions.php" method="post" enctype="multipart/form-data">
                      <!--SECTION-->
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Main Car</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                      <!--SECTION-->
                      <div class="form-group">
                        <label for="exampleFormControlFile1">secondary car Images</label>
                        <input type="file" name="userfile[]" multiple="" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3" hidden>
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">ID</span>
                          </div>
                          <input name="id" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" >
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">Brand</span>
                          </div>
                          <input name="brand" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">Model</span>
                          </div>
                          <input name="model" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" >
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">Manufacturer</span>
                          </div>
                          <input name="manufacturer" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" >
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text">Production year</span>
                          </div>
                          <input name="productionYear" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text">Post Date</span>
                          </div>
                          <input name="postDate" type="text" id="datepick"class="form-control" aria-label="Amount (to the nearest dollar)" >
                      </div>

                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text">Price(PLN)</span>
                          </div>
                          <input name="price" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
                          <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                          </div>
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text">Type</span>
                          </div>
                          <select name="type" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                              <?php
                              $typesreq = "SELECT * from types";
                              $r = mysqli_query($connect,$typesreq);
                              while ($tp = mysqli_fetch_assoc($r)){
                                  $selct = ($tp['typeID'] == $typeID)? "selected" : "";
                                  echo '<option '.$selct.'>'.$tp['typeName'].'</option>';
                              }
                              ?>
                          </select>
                      </div>

                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text">VIN</span>
                          </div>
                          <input name="vin" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text">Used</span>
                          </div>
                          <select name="used" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
                              <?php
                              $optionYes = ($used == "Yes") ? "selected" : "" ;
                              $optionNo = ($used == "No") ? "selected" : "" ;
                              echo '<option '.$optionYes.'>Yes</option><option '.$optionNo.'>No</option>'
                              ?>
                          </select>
                      </div>
                      <!--SECTION-->
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text">Visible</span>
                          </div>
                          <select name="visible" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
                              <?php
                              $igisubizoYes = ($visible == "Yes") ? "selected" : "" ;
                              $igisubizoNo = ($visible == "No") ? "selected" : "" ;
                              echo '<option '.$igisubizoYes.'>Yes</option><option '.$igisubizoNo.'>No</option>'
                              ?>
                          </select>
                      </div>
                      <!--SECTION-->
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Description</label>
                          <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                      </div>

                      <!--SECTION-->


                      <button class="btn btn-warning my-2 my-sm-0 float-xl-right" type="submit" name="submit">Save</button>
                  </form>
              </div>   
            <!----END OF ADD NEW CAR CODEEEEEE------>
          </div>
        </div>
      </div>

      <?php echo $output.$modals; ?>

      <div class="ok">

      </div>
    </div>
    <script src="../jquery-3.5.1.min.js"></script>
    <script src="../jquery-ui.min.js"></script>
    <script>
      $("#datepick").datepicker();
    </script>
  </body>
</html>
