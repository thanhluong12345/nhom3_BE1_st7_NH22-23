<?php 
  require_once "../../../lib/config.php";
  require_once ROOT_ADMIN."/lib/func.php";
?>

<?php require ROOT_ADMIN."/components/header.php"; ?>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- four cards -->
          <div class="row four-cards">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Used Space</p>
                  <h3 class="card-title">49/50
                    <small>GB</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">Get More Space.</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Revenue</p>
                  <h3 class="card-title">$34,245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Fixed Issues</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Followers</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end four cards -->
          <!-- graphs 6 * 6 -->
          <div class="row">
            <div class="col-md-6">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Email Subscriptions</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end graphs 6 * 6 -->
          <!-- to do & table -->
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Tasks:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> Bugs
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> Website
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> Server
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card pb-3">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Employees Stats</h4>
                  <p class="card-category">New employees on 15th September, 2016</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover ">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Salary</th>
                      <th>Country</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>Curaçao</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>Korea, South</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- end todo & table -->
          <!-- comment and Sales -->
          <div class="row comment-sales">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Recent Comments</h4>
                  <p class="card-category">Checkout your recent comments</p>
                </div>
                <div class="card-body">
                  <div class="comment-body">
                    <div class="comment d-flex justify-content-between align-items-start">
                      <img src="https://placehold.it/50x50" class="img-fluid p-2 rounded-circle">
                      <div class="p-2">
                        <h4>Kajal Aggarwal</h4>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="text-muted"><small>March 27, 2020</small></p>
                          <span class="badge badge-info">Pending</span>
                        </div>
                      </div>
                    </div>
                    <div class="comment d-flex justify-content-between align-items-start">
                      <img src="https://placehold.it/50x50" class="img-fluid p-2 rounded-circle">
                      <div class="p-2">
                        <h4>Vidyut jamval</h4>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="text-muted"><small>March 27, 2020</small></p>
                          <span class="badge badge-danger">Rejected</span>
                        </div>
                      </div>
                    </div>
                    <div class="comment d-flex justify-content-between align-items-start">
                      <img src="https://placehold.it/50x50" class="img-fluid p-2 rounded-circle">
                      <div class="p-2">
                        <h4>John doe</h4>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="text-muted"><small>March 27, 2020</small></p>
                          <span class="badge badge-success">Done</span>
                        </div>
                      </div>
                    </div>
                    <div class="comment d-flex justify-content-between align-items-start">
                      <img src="https://placehold.it/50x50" class="img-fluid p-2 rounded-circle">
                      <div class="p-2">
                        <h4>Kajal Aggarwal</h4>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="text-muted"><small>March 27, 2020</small></p>
                          <span class="badge badge-info">Pending</span>
                        </div>
                      </div>
                    </div>
                    <div class="comment d-flex justify-content-between align-items-start">
                      <img src="https://placehold.it/50x50" class="img-fluid p-2 rounded-circle">
                      <div class="p-2">
                        <h4>Vidyut jamwal</h4>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="text-muted"><small>March 27, 2020</small></p>
                          <span class="badge badge-success">Done</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card sales">
                <div class="card-header card-header-warning d-flex justify-content-between">
                  <div>
                    <h4 class="card-title">Sales Overview</h4>
                    <p class="card-category">Check the monthly sales</p>
                  </div>
                   <div class="w-25">
                     <select class="custom-select" id="inputGroupSelect01">
                      <option >Choose..</option>
                      <option value="1">Jan</option>
                      <option selected value="2">Feb</option>
                      <option  value="3">March</option>
                    </select>
                   </div>
                </div>
                <div class="card-body">
                  <!-- header -->
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4>Feb 2020</h4>
                      <p class="text-secondary">Report of Feb - </p>
                    </div>
                    <div>
                      <h3 class="text-warning">$56,987</h3>
                    </div>
                  </div>
                  <!-- end header -->
                  <div class="content">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Date</th>
                          <th scope="col">Status</th>
                          <th scope="col">Cost</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-primary badge-pill">Done</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Vidyut</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-success badge-pill">Approved</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Kajal</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-primary badge-pill">Done</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Ajay</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-danger badge-pill">Rejected</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Namita</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-success badge-pill">Approved</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>John</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-danger badge-pill">Rejected</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Mark</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-primary badge-pill">Done</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Vidyut</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-success badge-pill">Approved</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Kajal</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-primary badge-pill">Done</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td>Ajay</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-danger badge-pill">Rejected</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">11</th>
                          <td>Namita</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-success badge-pill">Approved</span></td>
                          <td>$24</td>
                        </tr>
                        <tr>
                          <th scope="row">12</th>
                          <td>John</td>
                          <td>Feb 28, 2020</td>
                          <td><span class="badge badge-danger badge-pill">Rejected</span></td>
                          <td>$24</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end comment and sales overview -->
        </div>
      </div>
<?php require ROOT_ADMIN."/components/footer.php"; ?>