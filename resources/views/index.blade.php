@include('common.header')

@include('common.navigation')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">USER</span>
            <img class="img-profile rounded-circle" src="{{ asset('/plug/images/pro.png')}}">
          </a>

          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->



    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Today</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
                    date_default_timezone_set('Asia/Colombo');
                    $date = date('Y-m-d');
                    echo $date; ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pending Job Count</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Finished Job Count</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-calculator fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Found Most Issues</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Labeling</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-calculator fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Form  -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Job Errors Form</h6>
        </div>
        <div class="card-body">
          <form method="post" action="/savejob">
            {{csrf_field()}}
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label>Job Line :</label>
                <input type="text" name="Line" class="form-control" placeholder="Enter Your Job Line" maxlength="20" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label>Error Code :</label>
                <input type="text" name="Code" class="form-control" placeholder="Enter Your Error Code" maxlength="50" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label>Start Time :</label>
                <input type="text" name="stime" class="form-control" placeholder="<?php
                                                                                  date_default_timezone_set('Asia/Colombo');
                                                                                  $date = date('Y-m-d H:i:s');
                                                                                  echo $date; ?>" value="<?php
                                                                                                          date_default_timezone_set('Asia/Colombo');
                                                                                                          $date = date('Y-m-d H:i:s');
                                                                                                          echo $date; ?>" readonly>
              </div>
              <div style="padding-right: 34px;">
              </div>
            </div>
            <br>
            <input class="btn btn-success" type=submit value="ADD" name="submit1">
          </form>
        </div>
      </div>


      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Line</th>
                  <th>Error Code</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Line</th>
                  <th>Error Code</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>

                @foreach($jobs as $job)
                <tr>
                  <td>{{$job->Line}}</td>
                  <td>{{$job->ErrorCode}}</td>
                  <td>{{$job->StartTime}}</td>
                  <td>{{$job->EndTime}}</td>
                  <td>
                  @if($job->EndTime)
                  <button class="btn btn-success">Job Done</button>
                  @else
                  <a class="btn btn-warning" href="/JobUpdate/{{$job->id}}">Job Not Finihed</button>
                  @endif
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Textile 2019</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

@include('common.footer')