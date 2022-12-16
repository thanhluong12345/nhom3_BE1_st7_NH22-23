<?php 
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/user.php";
    require_once ROOT_MODEL_PATH."/user_member.php";

    $mo_member = new UserMember();
    $user_member_list = $mo_member->getUserMembers();

    ?>

<?php require ROOT_ADMIN."/components/header.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Users</h4> 
                  <!-- <a href="" class="btn btn-fab btn-just-icon btn-white"> <i class="fa-2x text-primary fa fa-plus-square" aria-hidden="true"></i> </a> -->
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
                          Họ
                        </th>
                        <th>
                          Tên
                        </th>
                        <th>
                          Địa chỉ
                        </th>
                        <th>
                          Số điện thoại
                        </th>
                        <th>
                          Email
                        </th>
                      </thead>
                      <tbody>
                      <?php foreach( $user_member_list as $member ) { ?>
                        <tr>
                          <td>
                            <?=$member["user_id"]?>
                          </td>
                          <td>
                            <?=$member["firstname"]?>
                          </td>
                          <td>
                            <?=$member["lastname"]?>
                          </td>
                          <td>
                            <?=$member["city"]." ".$member["district"]." ".$member["street"]?>
                          </td>
                          <td class="text-primary">
                            <?=$member["phone"]?>
                          </td>
                          <td class="text-primary">
                            <?=$member["email"]?>
                          </td>
                          <!-- <td>
                            <a href="#pablo" class="btn btn-primary btn-round">
                            <i class="material-icons">visibility</i>
                            </a>
                          </td> -->
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
