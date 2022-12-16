<?php 
  require_once "../../../lib/config.php";
  require_once ROOT_MODEL_PATH."/db.php";
  require_once ROOT_MODEL_PATH."/product.php";
  require_once ROOT_MODEL_PATH."/manufacture.php";
  require_once ROOT_MODEL_PATH."/protype.php";

  $mo_pro = new Product();
  $mo_manu = new Manufacture();
  $mo_protype = new Protype();

  if( isset( $_GET["id"] ) ) {
    $product = $mo_pro->getProductById($_GET["id"]);
    $manufacture = $mo_manu->getManufactureById($product["manu_id"]);
    $protype = $mo_protype->getProtypeById($product["type_id"]);
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
                  <h4 class="card-title">Nhập sản phẩm</h4>
                </div>
                <div class="card-body">
                <form action="<?=ROOT_ADMIN_URL."/pages/products/".(isset($product)?"update.php":"create.php")?>">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">id</label>
                          <input name="id" type="text" value="<?=$product["id"]??""?>" class="form-control" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Upload ảnh</label>
                          <input name="name" type="text" value="<?=$product["name"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tên sản phẩm</label>
                          <input name="name" type="text" value="<?=$product["name"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tên hãng</label>
                          <input name="manu_name" type="hidden" value="<?=$product["manu_id"]??""?>" class="form-control">
                          <input name="manu_name_show" type="text" value="<?=$manufacture["manu_name"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tên loại</label>
                          <input name="type_name" type="hidden" value="<?=$product["type_id"]??""?>" class="form-control">
                          <input name="type_name_show" type="text" value="<?=$protype["type_name"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Giá</label>
                          <input name="price" type="text" value="<?=$product["price"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nổi bật</label>
                          <select name="feature" id="">
                            <option value="1" <?=(isset($product["feature"])&&$product["feature"]<1)?"":"selected"?> >Có</option>
                            <option value="0" <?=(isset($product["feature"])&&$product["feature"]<1)?"selected":""?> >Không</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"><?=isset($product)?"Update":"Create"?></button>
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