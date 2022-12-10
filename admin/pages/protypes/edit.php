<?php 
  require_once "../../../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/protype.php";



  $action_url = ROOT_ADMIN_URL."/pages/protypes/create.php";

  if(isset($_GET["type_id"])){
    $mo_protype = new Protype();
    $type_id=$_GET["type_id"];
    $protype = $mo_protype->getProtypeById($type_id);


    //khi có type id sẽ là url update
    $action_url = ROOT_ADMIN_URL."/pages/protypes/update.php?type_id=".$type_id;
  }

  //giờ em qua file protypes/create.php => code để xử lý tạo và protypes/update.php để xử lý update
  
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
                          <label class="bmd-label-floating">Type id</label>
                          <input type="text" name ="type_id" value="<?=$protype["type_id"]??""?>" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Type name</label>
                          <input type="text" name ="type_name" value="<?=$protype["type_name"]??""?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <?php if( isset( $_GET["type_id"] ) ) { ?>
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