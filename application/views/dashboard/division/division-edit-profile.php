<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Division Dashboard &mdash; Ganesh Festival System</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png" />

    <!-- page css -->

    <!-- Core css -->
    <link href="<?= base_url() ?>layout/css/app.min.css" rel="stylesheet" />
  </head>

  <body>
    <div class="app">
      <div class="layout">
        <!-- Header START -->
        <div class="header">
          <div class="logo logo-dark text-center">
            <a href="index.html">
              <img
                style="height: 55px; width: 130px; margin: 10px"
                src="<?= base_url() ?>layout/images/logo/nmclogo.png"
                alt="Logo"
              />
              <img
                style="height: 55px; width: 45px; margin: 10px 10px 10px 17px"
                class="logo-fold"
                src="<?= base_url() ?>layout/images/logo/nmclogo-fold.png"
                alt="Logo"
              />
            </a>
          </div>
          <div class="nav-wrap">
            <ul class="nav-left">
              <li class="desktop-toggle">
                <a href="javascript:void(0);">
                  <i class="anticon"></i>
                </a>
              </li>
              <li class="mobile-toggle">
                <a href="javascript:void(0);">
                  <i class="anticon"></i>
                </a>
              </li>
              <li>
                <a
                  href="javascript:void(0);"
                  data-toggle="modal"
                  data-target="#search-drawer"
                >
                  <i class="anticon anticon-search"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="dropdown dropdown-animated scale-left">
                <div class="pointer" data-toggle="dropdown">
                  <div class="avatar avatar-image m-h-10 m-r-15">
                    <img src="<?= base_url() ?>layout/images/avatars/thumb-3.jpg" alt="" />
                  </div>
                </div>
                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                  <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                    <div class="d-flex m-r-50">
                      <div class="avatar avatar-lg avatar-image">
                        <img src="<?= base_url() ?>layout/images/avatars/thumb-3.jpg" alt="" />
                      </div>
                      <div class="m-l-10">
                        <p class="m-b-0 text-dark font-weight-semibold">
                          Prashant Patil
                        </p>
                        <p class="m-b-0 opacity-07">NMC Official</p>
                      </div>
                    </div>
                  </div>
                  <a
                    href="edit-profile.html"
                    class="dropdown-item d-block p-h-15 p-v-10"
                  >
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <i
                          class="anticon opacity-04 font-size-16 anticon-user"
                        ></i>
                        <span class="m-l-10">Edit Profile</span>
                      </div>
                      <i class="anticon font-size-10 anticon-right"></i>
                    </div>
                  </a>
                  <!-- <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                            <span class="m-l-10">Account Setting</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a> -->
                  <a
                    href="javascript:void(0);"
                    class="dropdown-item d-block p-h-15 p-v-10"
                  >
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <i
                          class="anticon opacity-04 font-size-16 anticon-logout"
                        ></i>
                        <span class="m-l-10">Logout</span>
                      </div>
                      <i class="anticon font-size-10 anticon-right"></i>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- Header END -->

        <!-- Side Nav START -->
        <div class="side-nav">
          <div class="side-nav-inner">
            <ul class="side-nav-menu scrollable">
              <li class="nav-item">
                <a href="index.html">
                  <span class="icon-holder">
                    <i class="anticon anticon-dashboard"></i>
                  </span>
                  <span class="title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                  <span class="icon-holder">
                    <i class="anticon anticon-appstore"></i>
                  </span>
                  <span class="title">Ganesh Visarjan</span>
                  <span class="arrow">
                    <i class="arrow-icon"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="add-visarjan-data.html">1. Add Offline Ganesh Visarjan Data</a>
                  </li>
                  <li>
                    <a href="visarjan-data.html">2. Online Ganesh Visarjan</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                  <span class="icon-holder">
                    <i class="anticon anticon-build"></i>
                  </span>
                  <span class="title">Ammonium Bicarb.</span>
                  <span class="arrow">
                    <i class="arrow-icon"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="add-ammonium-data.html"
                      >1. Add Offline Ammonium Bicarbonate Data</a
                    >
                  </li>
                  <li>
                    <a href="ammonium-data.html">2. Online Ammonium Bicarbonate</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="edit-profile.html">
                  <span class="icon-holder">
                    <i class="anticon anticon-user"></i>
                  </span>
                  <span class="title">Admin Profile</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="page-header no-gutters">
              <h2 class="font-weight-normal">Edit Admin Profile</h2>
            </div>
            <div class="container">
              <div class="tab-content m-t-15">
                <div class="tab-pane fade show active" id="tab-account">
                  <div class="col-md-8 mx-auto">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Basic Infomation</h4>
                      </div>
                      <div class="card-body">
                        <!-- <div class="media align-items-center">
                                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                                <img src="<?= base_url() ?>layout/images/avatars/thumb-3.jpg" alt="">
                                            </div>
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18">Change Avatar</h5>
                                                <p class="opacity-07 font-size-13 m-b-0">
                                                    Recommended Dimensions: <br>
                                                    120x120 Max fil size: 5MB
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-tone btn-primary">Upload</button>
                                                <input type="file" class="custom-file-input" id="customFile">

                                            </div>
                                        </div>
                                        <hr class="m-v-25"> -->
                        <form action="#" method="post">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="font-weight-semibold" for="userName"
                                >User Name:</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="userName"
                                placeholder="User Name"
                                value="Prashant Patil"
                              />
                            </div>
                            <div class="form-group col-md-6">
                              <label class="font-weight-semibold" for="email"
                                >Email:</label
                              >
                              <input
                                type="email"
                                class="form-control"
                                id="email"
                                placeholder="email"
                                value="@marshallnich"
                              />
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label
                                class="font-weight-semibold"
                                for="oldPassword"
                                >Old Password:</label
                              >
                              <input
                                type="password"
                                class="form-control"
                                id="oldPassword"
                                placeholder="Old Password"
                              />
                            </div>
                            <div class="form-group col-md-4">
                              <label
                                class="font-weight-semibold"
                                for="newPassword"
                                >New Password:</label
                              >
                              <input
                                type="password"
                                class="form-control"
                                id="newPassword"
                                placeholder="New Password"
                              />
                            </div>
                            <div class="form-group col-md-4">
                              <label
                                class="font-weight-semibold"
                                for="confirmPassword"
                                >Confirm Password:</label
                              >
                              <input
                                type="password"
                                class="form-control"
                                id="confirmPassword"
                                placeholder="Confirm Password"
                              />
                            </div>
                          </div>
                          <div class="form-group text-center">
                            <button
                              type="submit"
                              class="btn btn-primary m-t-30"
                            >
                              Update Content
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Wrapper END -->

          <!-- Footer START -->
          <footer class="footer">
            <div class="footer-content">
              <p class="m-b-0">
                © 2021 Designed by
                <a class="text-gray" href="#" style="font-weight: bold"
                  >E-Connect Innovative Solutions</a
                >. All rights reserved.
              </p>
              <span>
                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                <a href="" class="text-gray">Privacy &amp; Policy</a>
              </span>
            </div>
          </footer>
          <!-- Footer END -->
        </div>
        <!-- Page Container END -->

        <!-- Search Start-->
        <div class="modal modal-left fade search" id="search-drawer">
          <div class="modal-dialog">
            <div class="modal-content">
              <div
                class="modal-header justify-content-between align-items-center"
              >
                <h5 class="modal-title">Search</h5>
                <button type="button" class="close" data-dismiss="modal">
                  <i class="anticon anticon-close"></i>
                </button>
              </div>
              <div class="modal-body scrollable">
                <div class="input-affix">
                  <i class="prefix-icon anticon anticon-search"></i>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search"
                  />
                </div>
                <div class="m-t-30">
                  <h5 class="m-b-20">Files</h5>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-cyan avatar-icon">
                      <i class="anticon anticon-file-excel"></i>
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Quater Report.exl</a
                      >
                      <p class="m-b-0 text-muted font-size-13">by Finance</p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-blue avatar-icon">
                      <i class="anticon anticon-file-word"></i>
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Documentaion.docx</a
                      >
                      <p class="m-b-0 text-muted font-size-13">by Developers</p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-purple avatar-icon">
                      <i class="anticon anticon-file-text"></i>
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Recipe.txt</a
                      >
                      <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-red avatar-icon">
                      <i class="anticon anticon-file-pdf"></i>
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Project Requirement.pdf</a
                      >
                      <p class="m-b-0 text-muted font-size-13">
                        by Project Manager
                      </p>
                    </div>
                  </div>
                </div>
                <div class="m-t-30">
                  <h5 class="m-b-20">Members</h5>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-image">
                      <img src="<?= base_url() ?>layout/images/avatars/thumb-1.jpg" alt="" />
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Erin Gonzales</a
                      >
                      <p class="m-b-0 text-muted font-size-13">
                        UI/UX Designer
                      </p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-image">
                      <img src="<?= base_url() ?>layout/images/avatars/thumb-2.jpg" alt="" />
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Darryl Day</a
                      >
                      <p class="m-b-0 text-muted font-size-13">
                        Software Engineer
                      </p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-image">
                      <img src="<?= base_url() ?>layout/images/avatars/thumb-3.jpg" alt="" />
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Marshall Nichols</a
                      >
                      <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                    </div>
                  </div>
                </div>
                <div class="m-t-30">
                  <h5 class="m-b-20">News</h5>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-image">
                      <img src="<?= base_url() ?>layout/images/others/img-1.jpg" alt="" />
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >5 Best Handwriting Fonts</a
                      >
                      <p class="m-b-0 text-muted font-size-13">
                        <i class="anticon anticon-clock-circle"></i>
                        <span class="m-l-5">25 Nov 2018</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Search End-->

        <!-- Quick View START -->
        <div class="modal modal-right fade quick-view" id="quick-view">
          <div class="modal-dialog">
            <div class="modal-content">
              <div
                class="modal-header justify-content-between align-items-center"
              >
                <h5 class="modal-title">Theme Config</h5>
              </div>
              <div class="modal-body scrollable">
                <div class="m-b-30">
                  <h5 class="m-b-0">Header Color</h5>
                  <p>Config header background color</p>
                  <div class="theme-configurator d-flex m-t-10">
                    <div class="radio">
                      <input
                        id="header-default"
                        name="header-theme"
                        type="radio"
                        checked
                        value="default"
                      />
                      <label for="header-default"></label>
                    </div>
                    <div class="radio">
                      <input
                        id="header-primary"
                        name="header-theme"
                        type="radio"
                        value="primary"
                      />
                      <label for="header-primary"></label>
                    </div>
                    <div class="radio">
                      <input
                        id="header-success"
                        name="header-theme"
                        type="radio"
                        value="success"
                      />
                      <label for="header-success"></label>
                    </div>
                    <div class="radio">
                      <input
                        id="header-secondary"
                        name="header-theme"
                        type="radio"
                        value="secondary"
                      />
                      <label for="header-secondary"></label>
                    </div>
                    <div class="radio">
                      <input
                        id="header-danger"
                        name="header-theme"
                        type="radio"
                        value="danger"
                      />
                      <label for="header-danger"></label>
                    </div>
                  </div>
                </div>
                <hr />
                <div>
                  <h5 class="m-b-0">Side Nav Dark</h5>
                  <p>Change Side Nav to dark</p>
                  <div class="switch d-inline">
                    <input
                      type="checkbox"
                      name="side-nav-theme-toogle"
                      id="side-nav-theme-toogle"
                    />
                    <label for="side-nav-theme-toogle"></label>
                  </div>
                </div>
                <hr />
                <div>
                  <h5 class="m-b-0">Folded Menu</h5>
                  <p>Toggle Folded Menu</p>
                  <div class="switch d-inline">
                    <input
                      type="checkbox"
                      name="side-nav-fold-toogle"
                      id="side-nav-fold-toogle"
                    />
                    <label for="side-nav-fold-toogle"></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Quick View END -->
      </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="<?= base_url() ?>layout/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?= base_url() ?>layout/js/app.min.js"></script>
  </body>
</html>
