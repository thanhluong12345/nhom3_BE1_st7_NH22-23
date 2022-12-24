<?php
  session_start();
  require_once $_SERVER["DOCUMENT_ROOT"]."/nhom3_BE1_st7_NH22-23/lib/config.php";
  require_once ROOT_MODEL_PATH."/db.php";
  require_once ROOT_MODEL_PATH."/user.php";
  require_once ROOT_ADMIN."/models/user_admin.php";
  $mo_admin = new UserAdmin();
  $mo_admin->checkLogin( ROOT_ADMIN_URL."/login.php", false);

  require_once ROOT_ADMIN."/lib/func.php";
  $sidebars = array(
    // "dashboard" => array(
    //   "icon" => "dashboard",
    //   "url" => "index.php"
    // ),
    "products" => array(
      "icon" => "smartphone",
      "pages" => array(
        "list" => array("icon"=>"view_list", "url"=>"list.php"),
        "edit" => array("icon"=>"edit", "url"=>"edit.php"),
      )
    ),
    "protypes" => array(
      "icon" => "category",
      "pages" => array(
        "list" => array("icon"=>"view_list", "url"=>"list.php"),
        "edit" => array("icon"=>"edit", "url"=>"edit.php"),
      )
    ),
    "manufactures" => array(
      "icon" => "local_convenience_store",
      "pages" => array(
        "list" => array("icon"=>"view_list", "url"=>"list.php"),
        "edit" => array("icon"=>"edit", "url"=>"edit.php"),
      )
    ),
    "users" => array(
      "icon" => "groups",
      "pages" => array(
        "list" => array("icon"=>"view_list", "url"=>"list.php")
      )
    ),
    "orders" => array(
      "icon" => "local_shipping",
      "pages" => array(
        "list" => array("icon"=>"view_list", "url"=>"list.php")
      )
    )
  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?=ROOT_ADMIN_URL."/"?>assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=ROOT_ADMIN_URL."/"?>assets/demo/demo.css" rel="stylesheet" />
  <!-- common css -->
  <link rel="stylesheet" href="<?=ROOT_ADMIN_URL."/"?>assets/css/common.css">
  <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/bundle.css">
</head>

<body class="">
  <div class="wrapper ">
    <!-- sidebar  -->
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="./assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          bootcatch
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <?php foreach( $sidebars as $parent => $sidebar ) { ?>
          <?php 
            $parent_active = strpos(getUrl(), $parent);  
          ?>
          <li class="nav-item bg-custom <?=isset($sidebar["pages"])?"":"single"?> <?=$parent_active!=false?"active":""?>">
              <a class="nav-link collapsed" data-toggle="<?=isset($sidebar["url"])?"":"collapse"?>" href="<?=isset($sidebar["url"])?(ROOT_ADMIN_URL."/pages/dashboard/".$sidebar["url"]):"#page".$parent?>" aria-expanded="<?=$parent_active!=false?"true":"false"?>">
                  <i class="material-icons"><?=$sidebar["icon"]?></i>
                  <p>
                      <?=ucfirst($parent)?>
                      <?=isset($sidebar["url"])?"":"<b class='caret'></b>"?>
                  </p>
              </a>
              <?php if( isset($sidebar["pages"]) ) { ?>
                <div class="collapse <?=$parent_active!=false?"show":""?>" id="page<?=$parent?>" style="">
                  <ul class="nav pl-3">
                    <?php foreach( $sidebar["pages"] as $title => $val ) { ?>
                    <?php 
                      $active = activeUrl($parent."/".$val["url"])
                    ?>
                    <li class="nav-item bg-custom <?=$active?>">
                      <a class="nav-link d-flex align-items-center" href="<?=ROOT_ADMIN_URL."/pages/".$parent."/".$val["url"]?>">
                        <i class="material-icons"><?=$val["icon"]?></i>
                        <p><?=ucfirst($title)?></p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
              </div>
              <?php } ?>
          </li>
          <?php } ?>

          <!-- <li class="nav-item ">
            <a class="nav-link" href="../examples/user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../examples/tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../examples/typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-toggle="collapse" href="#componentsExamples" aria-expanded="false">
                  <i class="material-icons">layers</i>
                  <p>
                      Components
                      <b class="caret"></b>
                  </p>
              </a>
              <div class="collapse" id="componentsExamples" style="">
                  <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center" href="../examples/notifications.html">
                          <i class="material-icons">notifications</i>
                          <p>Notifications</p>
                        </a>
                      </li>
                    <li class="nav-item ">
                      <a class="nav-link d-flex align-items-cente" href="../examples/alerts.html">
                        <i class="material-icons">warning</i>
                        <p>Alerts</p>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link d-flex align-items-cente" href="../examples/cards.html">
                        <i class="material-icons">chrome_reader_mode</i>
                        <p>Cards</p>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link d-flex align-items-cente" href="../examples/button.html">
                        <i class="material-icons">check_circle</i>
                        <p>Buttons</p>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link d-flex align-items-cente" href="../examples/badges.html">
                        <i class="material-icons">badge</i>
                        <p>Badges</p>
                      </a>
                    </li>
                  </ul>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-toggle="collapse" href="#SamplePages" aria-expanded="false">
                  <i class="material-icons">file_copy</i>
                  <p>
                      Sample Pages
                      <b class="caret"></b>
                  </p>
              </a>
              <div class="collapse" id="SamplePages" style="">
                  <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center" href="../examples/starter-kit.html">
                          <i class="material-icons">notifications</i>
                          <p>Starter Kit</p>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center" href="../examples/blank.html">
                          <i class="material-icons">notifications</i>
                          <p>Blank Page</p>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center" href="../examples/user.html">
                          <i class="material-icons">person</i>
                          <p>Profile Page</p>
                        </a>
                      </li>
                  </ul>
              </div>
          </li> -->
        </ul>
      </div>
    </div>
    <!-- end sidebar -->
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Trang quản lý</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <!-- <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?=ROOT_ADMIN_URL."/logout.php"?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
