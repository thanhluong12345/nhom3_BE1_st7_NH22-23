<?php 
  require_once "../../../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/user.php";
  require ROOT_MODEL_PATH."/user_member.php";
  require ROOT_MODEL_PATH."/protype.php";
  require ROOT_MODEL_PATH."/product.php";
  require ROOT_LIB_PATH."/cart.php";
  require ROOT_MODEL_PATH."./manufacture.php";
  $mo_cart = new Cart();
    $mo_member = new UserMember();
    $mo_protype = new Protype();
    $producttest = new Product();
    $manufactures = new Manufacture();
    $product_list = $mo_cart->getProductListInCart();
    $protype_list = $mo_protype->getAllprotypes();
    $product_list = $producttest->getProductAll();
    $manufactures_list = $manufactures->getManufacture();
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
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                        <?php
                          foreach($manufactures_list as $value):
                          ?>
                          <td>
                            <?php echo $value['manu_id']
                            ?>
                          </td>
                          <?php
                          endforeach
                          ?>
                          <td>
                            <a href="<?=ROOT_ADMIN_URL."/pages/manufactures/edit.php?id="?>" class="btn btn-primary btn-round">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="<?=ROOT_ADMIN_URL."/pages/manufactures/delete.php"?>" class="btn btn-primary btn-round">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                          <td>
                            <a href="<?=ROOT_ADMIN_URL."/pages/manufactures/edit.php"?>" class="btn btn-primary btn-round">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="<?=ROOT_ADMIN_URL."/pages/manufactures/delete.php"?>" class="btn btn-primary btn-round">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
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
      </div>
      
<?php require ROOT_ADMIN."/components/footer.php"; ?>
