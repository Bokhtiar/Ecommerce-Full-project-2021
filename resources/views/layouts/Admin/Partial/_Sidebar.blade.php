  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Beshi Joss Customs</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!--category end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Website</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- category end -->
          <!--category end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Categories
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.category.all-category')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.subcategory.all-subcategory')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All Subcategory</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- category end -->
          <!-- product start -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Product
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.product.products')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- product end -->
          <!-- product Start-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                Dealers
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.dealer.all-dealer')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>All Dealers</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- product end -->

          <!-- product Start-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                Quote
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.quote.quotes')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Quotes</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- product end -->

          <!-- blog start -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Blogs
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.blogCategory.all-blogcategory')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Blog Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.blog.all-blog')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add New Blog</p>
                </a>
              </li>
            </ul>
          </li>
          <!--blog end -->
          <!-- artist start -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Artists
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.artistCategory.all-artistCategory')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Artist Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.artist.all-artist')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add New Artist Blog</p>
                </a>
              </li>
            </ul>
          </li>
          <!--artist end -->

          <!-- video start -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Video
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.video.videos')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Videos</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- video end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Subscribe
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.subscribe')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Subscribes</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- order section -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Orders
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.order.orders')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">Setting</li>
          <li class="nav-item">
            <a href="{{route('admin.profile-update')}}" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Profile Update</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.reset-pass')}}" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Password Change</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

  <!-- /.content-wrapper -->
