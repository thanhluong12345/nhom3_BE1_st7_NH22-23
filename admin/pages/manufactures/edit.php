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
  $product_list = $mo_cart->getProductListInCart();
  $product_list = $producttest->getProductAll();

  
  $action_url = ROOT_ADMIN_URL."/pages/manufacture/create.php";

  if(isset($_GET["manu_id"])){
    $mo_manufacture = new Manufacture();
    $manu_id=$_GET["manu_id"];
    $manufacture = $mo_manufacture->getManufactureById($manu_id);


    //khi có type id sẽ là url update
    $action_url = ROOT_ADMIN_URL."/pages/manufacture/update.php?manu_id=".$manu_id;
  }

  //giờ em qua file protypes/create.php => code để xử lý tạo và protypes/update.php để xử lý update
  
?>
?>

<?php require ROOT_ADMIN."/components/header.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                <form action="<?=$action_url?>" method="POST" >
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Manufacture ID</label>
                          <input type="text" name ="manufacture_id" value="<?=$manufacture["manufacture_id"]??""?>" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Manufacture's name</label>
                          <input type="text" name ="manufacture_name" value="<?=$manufacture["manufacture_name"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <?php if( isset( $_GET["manufacture_id"] ) ) { ?>
                    <button type="submit" name="update" class="btn btn-primary pull-right">Update</button>
                    <?php } else { ?>
                      <button type="submit" name="create" class="btn btn-primary pull-right">Create</button>
                    <?php } ?>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php require ROOT_ADMIN."/components/footer.php"; ?>