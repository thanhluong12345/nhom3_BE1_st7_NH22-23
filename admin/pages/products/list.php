<?php 
  require_once "../../../lib/config.php";
  require_once ROOT_ADMIN."/lib/func.php";
  require_once ROOT_MODEL_PATH."/db.php";
  require_once ROOT_MODEL_PATH."/product.php";
  require_once ROOT_MODEL_PATH."/manufacture.php";
  require_once ROOT_MODEL_PATH."/protype.php";
  require ROOT_LIB_PATH."/paginator.php";

  $current_page = $_GET["page"]??1;
  $limit = 5;
  $mo_pro = new Product();
  $mo_manu = new Manufacture();
  $mo_protype = new Protype();
  $lib_paginator = new Paginator();

  $limit_paginate = "limit ".(($current_page-1)*$limit).", $limit";
  $product_list = $mo_pro->getProduct( 1, $limit_paginate);

  $cnt_product = $mo_pro->countProduct();
  $page_max = ceil($cnt_product["cnt"]/$limit);
  $paginate_url = ROOT_ADMIN_URL."/pages/products/list.php?";

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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Products</h4> 
                  <a href="<?=ROOT_ADMIN_URL."/pages/products/edit.php"?>" class="btn btn-fab btn-just-icon btn-white"> <i class="fa-2x text-primary fa fa-plus-square" aria-hidden="true"></i> </a>
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
                          Ảnh
                        </th>
                        <th>
                          Tên
                        </th>
                        <th>
                          Tên hãng
                        </th>
                        <th>
                          Tên loại
                        </th>
                        <th>
                          Giá
                        </th>
                        <th>
                          Nổi bật
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach( $product_list as $product ) { ?>
                          <?php $manufacture = $mo_manu->getManufactureById($product["manu_id"]); ?>
                          <?php $protype = $mo_protype->getProtypeById($product["type_id"]); ?>
                        <tr>
                          <td>
                            <?=$product["id"]?>
                          </td>
                          <td>
                            <img width="70" src="<?=ROOT_IMAGE_URL."/product/".$product["image"]?>" alt="">
                          </td>
                          <td style="width:150px;">
                            <?=$product["name"]?>
                          </td>
                          <td>
                            <?=$manufacture["manu_name"]?>
                          </td>
                          <td>
                            <?=$protype["type_name"]?>
                          </td>
                          <td class="text-primary">
                            <?=number_format($product["price"])?> VND
                          </td>
                          <td>
                            <?=$product["feature"]<1?"Không":"Có"?>
                          </td>
                          <td>
                            <a href="<?=ROOT_ADMIN_URL."/pages/products/edit.php?id=".$product["id"]?>" class="btn btn-primary btn-round">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="<?=ROOT_ADMIN_URL."/pages/products/delete.php?id=".$product["id"]?>" class="btn btn-primary btn-round">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <?=$lib_paginator->initPaginate($paginate_url, $current_page, $page_max)?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
<?php require ROOT_ADMIN."/components/footer.php"; ?>
