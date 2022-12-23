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

  if( !isset( $_GET["id"] ) ) {
    header("Location: ./list.php?error='Có lỗi vui lòng thử lại!'");
    exit;
  }
  $order = $mo_order->getOrderById( $_GET["id"] );
  $user_member = $mo_member->getUserMember( $order["user_id"] );
  
  $total = 0;
  foreach( $order["order_details"] as $detail ) {
    $total += $detail["unit_price"] * $detail["quantity"];
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
                  <h4 class="card-title">Chi tiết đơn hàng của "<?=$user_member["firstname"]." ".$user_member["lastname"]?>"</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <label for="">Tên khách hàng:</label>
                    </div>
                    <div class="col-12">
                      <p><?=$user_member["firstname"]." ".$user_member["lastname"]?></p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="">Địa chỉ giao hàng:</label>
                    </div>
                    <div class="col-12">
                      <p><?=$order["ship_address"]?></p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="">Tổng tiền thanh toán:</label>
                    </div>
                    <div class="col-12">
                      <p><?=number_format($total)?> VND</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="">Ghi chú thêm:</label>
                    </div>
                    <div class="col-12">
                      <p><?=$order["order_notes"]?></p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <label for="">Danh sách sản phẩm</label>
                    </div>

                    <?php foreach($order["order_details"] as $value) { ?>
                    <?php $product = $mo_pro->getProductById($value["product_id"]); ?>
                    <?php $price = $value["unit_price"] * $value["quantity"] ?>
                    <div class="col-12">
                      <table>
                        <tr>
                          <td><div><?=$product["name"]?></div></td>
                        </tr>
                        <tr>
                        <td><div style="font-weight:bold;"><?=$price?></div></td>
                        </tr>
                        <tr style="height:15px;">
                          <td style="border-bottom:1px solid #000;"></td>
                        </tr>
                      </table>
                    </div>
                    <?php } ?>
                  </div>
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