<?php 
  require_once "../../../lib/config.php";
  require_once ROOT_MODEL_PATH."/db.php";
  require_once ROOT_MODEL_PATH."/manufacture.php";

  if( isset($_GET["error"]) ) {
    echo "<script> alert(".$_GET["error"].") </script>";
  }

  $mo_manu = new Manufacture();

  $manu_list = $mo_manu->getManufactureAll();
?>

<?php require ROOT_ADMIN."/components/header.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Manufactures</h4> 
                  <a href="<?=ROOT_ADMIN_URL."/pages/manufactures/edit.php"?>" class="btn btn-fab btn-just-icon btn-white"> <i class="fa-2x text-primary fa fa-plus-square" aria-hidden="true"></i> </a>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Tên hãng
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach( $manu_list as $manu ) { ?>
                        <tr>
                          <td>
                            <?=$manu["manu_id"]?>
                          </td>
                          <td>
                          <?=$manu["manu_name"]?>
                          </td>
                          <td>
                            <a href="<?=ROOT_ADMIN_URL."/pages/manufactures/edit.php?id=".$manu["manu_id"]?>" class="btn btn-primary btn-round">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="<?=ROOT_ADMIN_URL."/pages/manufactures/delete.php?id=".$manu["manu_id"]?>" class="btn btn-primary btn-round">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
<?php require ROOT_ADMIN."/components/footer.php"; ?>
