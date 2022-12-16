<?php 
  require_once "../../../lib/config.php";
  require_once ROOT_MODEL_PATH."/db.php";
  require_once ROOT_MODEL_PATH."/user.php";
  require_once ROOT_MODEL_PATH."/order.php";
  require_once ROOT_MODEL_PATH."/product.php";
  require_once ROOT_MODEL_PATH."/user_member.php";

  $mo_order = new Order();
  $mo_member = new UserMember();
  $mo_pro = new Product();

  if( isset( $_GET["id"] ) ) {
    $order = $mo_order->getOrderById( $_GET["id"] );
    $user_member = $mo_member->getUserMember( $order["user_id"] );
  }
?>

<?php require ROOT_ADMIN."/components/header.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Nhập hãng </h4>
                </div>
                <div class="card-body">
                  <form action="<?=ROOT_ADMIN_URL."/pages/manufactures/".(isset($manufacture)?"update.php":"create.php")?>">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">id</label>
                          <input name="id" type="text" value="<?=$manufacture["manu_id"]??""?>" class="form-control" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tên hãng</label>
                          <input name="manu_name" type="text" value="<?=$manufacture["manu_name"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"><?=isset($manufacture)?"Update":"Create"?></button>
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