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

  $order_list = $mo_order->getOrderAll();

  if( isset($_GET["error"]) ) {
    echo "<script> alert(".$_GET["error"].") </script>";
  }
?>

<?php require ROOT_ADMIN."/components/header.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Orders</h4> 
                  <!-- <a href="" class="btn btn-fab btn-just-icon btn-white"> <i class="fa-2x text-primary fa fa-plus-square" aria-hidden="true"></i> </a> -->
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Order id
                        </th>
                        <th>
                          Tên khách hàng
                        </th>
                        <th>
                          Địa chỉ giao hàng
                        </th>
                        <th>
                          Tổng tiền
                        </th>
                        <th>
                          Ghi chú
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach( $order_list as $order ) { ?>
                        <?php
                          $total = 0;
                          foreach( $order["order_details"] as $detail ) {
                            $total += $detail["unit_price"] * $detail["quantity"];
                          }

                          $user_member =  $mo_member->getUserMember($order["user_id"]);
                        ?>
                        <tr>
                          <td>
                            <?=$order["order_id"]?>
                          </td>
                          <td style="width:120px;">
                            <?=$user_member["firstname"]." ".$user_member["lastname"]?>
                          </td>
                          <td style="width:150px;">
                            <?=$order["ship_address"]?>
                          </td>
                          <td>
                            <?=number_format($total)?> VND
                          </td>
                          <td class="text-primary">
                            <?=$order["order_notes"]?>
                          </td>
                          <td>
                            <a href="<?=ROOT_ADMIN_URL."/pages/orders/detail.php?id=".$order["order_id"]?>" class="btn btn-primary btn-round">
                            <i class="material-icons">visibility</i>
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
