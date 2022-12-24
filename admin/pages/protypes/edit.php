<?php 
  require_once "../../../lib/config.php";
  require_once ROOT_MODEL_PATH."/db.php";
  require_once ROOT_MODEL_PATH."/protype.php";

  $mo_type = new Protype();
  if( isset( $_GET["id"] ) ) {
    $protype = $mo_type->getProtypeById($_GET["id"]);
  }

?>

<?php require ROOT_ADMIN."/components/header.php"; ?>

  <?php
      if( isset($_GET["error"]) ) {
        echo "<script> alert(".$_GET["error"].") </script>";
      }
    ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Nhập loại</h4>
                </div>
                <div class="card-body">
                  <form action="<?=ROOT_ADMIN_URL."/pages/protypes/".(isset($protype)?"update.php":"create.php")?>" method="POST">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input name="id" type="hidden" value="<?=$protype["type_id"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tên hãng</label>
                          <input name="type_name" type="text" value="<?=$protype["type_name"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"><?=isset($protype)?"Update":"Create"?></button>
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