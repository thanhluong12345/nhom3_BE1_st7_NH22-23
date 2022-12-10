<?php 
session_start();
  require_once "../../../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/protype.php";

$mo_protype = new Protype();
$_SESSION["type_id"] = 'type_id';


?>

<?php require ROOT_ADMIN."/components/header.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Protypes</h4> 
                  <a href="<?=ROOT_ADMIN_URL."/pages/protypes/edit.php"?>" class="btn btn-fab btn-just-icon btn-white"> <i class="fa-2x text-primary fa fa-plus-square" aria-hidden="true"></i> </a>
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
                          Loại
                        </th>
                        
                        <th>
                          Action
                        </th>
                      </thead>
                      <?php
                      $list_protype = $mo_protype->getProtypeByAllId();
                      foreach( $list_protype as $type ) { 
                      ?>
                      <tbody>
                        <tr>
                          <td>
                            <?=$type["type_id"]?>
                          </td>
                          <td>
                          <?=$type["type_name"]?>
                          </td>
                         
                          <td>
                            <a href="<?=ROOT_ADMIN_URL."/pages/protypes/edit.php?type_id=$type[type_id]"?>" class="btn btn-primary btn-round">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="<?=ROOT_ADMIN_URL."/pages/protypes/delete.php?type_id=$type[type_id]"?>" class="btn btn-primary btn-round">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                      
                      </tbody>
                      <?php }?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
<?php require ROOT_ADMIN."/components/footer.php"; ?>
