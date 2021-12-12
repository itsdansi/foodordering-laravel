<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Foodiz dashboard</title>

    <!-- vendor css -->
    <link href="/admin/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/admin/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/admin/lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="/admin/css/azia.css">
  </head>
  <body>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
        <a href="index.html" class="az-logo nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->

        <div class="az-header-right">
       
          <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
          <div class="az-header-home">
          <a href="/" class="az-header-home-link" style="color:black" > <i class="fas fa-home"></i></a>
          </div><!-- az-header-home -->
          <div class="dropdown az-header-notification">
            <a href="" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  <div class="az-img-user"><img src="/admin/img/faces/face2.jpg" alt=""></div>
                  <div class="media-body">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media new">
                  <div class="az-img-user online"><img src="/admin/img/faces/face3.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="/admin/img/faces/face4.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="/admin/img/faces/face5.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- az-notification-list -->
              <div class="dropdown-footer"><a href="">View All Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="/admin/img/faces/face1.jpg" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="/admin/img/faces/face1.jpg" alt="">
                </div><!-- az-img-user -->
                <h6>Aziana Pechon</h6>
                <span>Premium Member</span>
              </div><!-- az-header-profile -->

              <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
              <a href="/login" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
      <div class="container">
        <div class="az-content-left az-content-left-components">
          <div class="component-item">
            <label>Products</label>
            <nav class="nav flex-column">
              <a href="#" class="nav-link">Butter Pizza</a>
              <a href="#" class="nav-link">Chicken Pizza</a>
              <a href="#" class="nav-link">Mushroom Pizza</a>
              <a href="#" class="nav-link">Veg Momo</a>
            </nav>
            <label>Categories</label>
            <nav class="nav flex-column">
              <a href="#" class="nav-link">Dry foods</a>
              <a href="#" class="nav-link">Spicy foods</a>
              <a href="#" class="nav-link">Beverages</a>
            </nav>
            <nav class="nav flex-column">
              <a href="#" class="nav-link">Butter Pizza</a>
              <a href="#" class="nav-link">Chicken Pizza</a>
              <a href="#" class="nav-link">Mushroom Pizza</a>
              <a href="#" class="nav-link">Veg Momo</a>
            </nav>
            <label>Others</label>
            <nav class="nav flex-column">
              <a href="chart-chartjs.html" class="nav-link">Spicy foods</a>
            </nav>
          </div><!-- component-item -->

        </div><!-- az-content-left -->
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
          <div class="az-content-breadcrumb">
            <span>Components</span>
            <span>Tables</span>
            <span>Basic Tables</span>
          </div>

          <hr class="mg-y-30">

          <div class="az-content-label mg-b-5">Product list</div>
          <p class="mg-b-20">To enable a hover state on table rows.</p>

          <div class="table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                  <td><i class="fas fa-edit" style="color:Green" ></i>&nbsp &nbsp &nbsp<i class="fas fa-trash-alt" style="color:Red"></i> </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                  <td><i class="fas fa-edit" style="color:Green" ></i>&nbsp &nbsp &nbsp<i class="fas fa-trash-alt" style="color:Red"></i> </td>

                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                  <td><i class="fas fa-edit" style="color:Green" ></i>&nbsp &nbsp &nbsp<i class="fas fa-trash-alt" style="color:Red"></i> </td>

                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>$433,060</td>
                  <td><i class="fas fa-edit" style="color:Green" ></i>&nbsp &nbsp &nbsp<i class="fas fa-trash-alt" style="color:Red"></i> </td>

                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>$162,700</td>
                  <td><i class="fas fa-edit" style="color:Green" ></i>&nbsp &nbsp &nbsp<i class="fas fa-trash-alt" style="color:Red"></i> </td>

                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="ht-40"></div>

          <div class="az-footer mg-t-auto">
            <div class="container">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © cryptictechnologies.com 2020</span>
            </div><!-- container -->
          </div><!-- az-footer -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->


    <script src="/admin/lib/jquery/jquery.min.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/lib/ionicons/ionicons.js"></script>
    <script src="/admin/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="/admin/js/azia.js"></script>
  </body>
</html>
