<?php
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    if( !isset($_SESSION["order_success"]) ) {
        header("Location: ".PAGE_URL."/home.php");
        exit;
    }
?>
<?=l_func_GetHeader("Home")?>

<div class="text-center">
    <h4 class="text-center pt-5 mt-5" style="color: limegreen"> Đặt hàng thành công, chúng tôi sẽ kiểm tra đơn hàng và liên hệ bạn để xác nhận! </h4>
    <div class="redirect-link-wrapper u-s-p-t-25">
        <a class="redirect-link" href="<?=PAGE_URL."/category.php"?>">
            <span>Tiếp tục mua sắm</span>
        </a>
    </div>
</div>

<?php unset( $_SESSION["order_success"] ); ?>
<?=l_func_getFooter()?>


