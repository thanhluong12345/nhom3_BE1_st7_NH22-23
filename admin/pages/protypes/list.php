<?php 
  require_once "../../../lib/config.php";
  require_once ROOT_MODEL_PATH."/db.php";
  require_once ROOT_MODEL_PATH."/protype.php";
  require ROOT_LIB_PATH."/paginator.php";

  $current_page = $_GET["page"]??1;
  $limit = 5;
  $lib_paginator = new Paginator();
  $mo_protype = new Protype();

  $limit_paginate = "limit ".(($current_page-1)*$limit).", $limit";
  $protype_list = $mo_protype->getProtype( 1, $limit_paginate);
  $cnt_protype= count($mo_protype->getProtypeAll());
  $page_max = ceil($cnt_protype/$limit);
  $paginate_url = ROOT_ADMIN_URL."/pages/protypes/list.php?";
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
                          Tên loại
                        </th>
                        <th>
                          Hiển thị trên trang chủ
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach( $protype_list as $protype ) { ?>
                        <tr>
                          <td>
                            <?=$protype["type_id"]?>
                          </td>
                          <td>
                          <?=$protype["type_name"]?>
                          </td>
                          <td>
                          <?=$protype["display_home"]<0?"Không":"Có"?>
                          </td>
                          <td>
                            <a href="<?=ROOT_ADMIN_URL."/pages/protypes/edit.php?id=".$protype["type_id"]?>" class="btn btn-primary btn-round">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="<?=ROOT_ADMIN_URL."/pages/protypes/delete.php?id=".$protype["type_id"]?>" class="btn btn-primary btn-round">
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
