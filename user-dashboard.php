<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.2.3/dist/css/" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <?php include "headerScript.php" ?>
</head>

<body>
  <!-- top nav-bar -->
  <nav class="navbar navbar-expand border">
    <!-- collapse btn for offcanvas menu -->
    <div class="container-fluid">
      <a class="d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        <i class="bi bi-list " style="font-size:28px;"></i>
      </a>
      <!-- --------------- -->
      <!-- logo  -->
      <a class="navbar-brand" href="#"></a>

      <!-- ------------------------------------------- -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <!-- ------------------ -->
        <li class="nav-item mx-3 mt-2">
          <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-bell position-relative">
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                <span class="visually-hidden">unread messages</span>
            </i>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end m-3">
            <li style="width:280px; cursor:pointer;" class="notify-hover p-2">
              <div class="notification d-flex  justify-content-between ">
                <i class="bi bi-app-indicator"></i>
                <span class="px-2">you have changed your password few hours ago</span>
                <span class="small">5 min ago</span>
              </div>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li style="width:280px; cursor:pointer;" class="notify-hover p-2">
              <div class="notification d-flex  justify-content-between ">
                <i class="bi bi-app-indicator"></i>
                <span class="px-2">you have changed your password few hours ago</span>
                <span class="small">5 min ago</span>
              </div>
            </li>

            <li style="width:280px; cursor:pointer;" class="notify-hover p-2">
              <div class="notification d-flex  justify-content-center">
               <a href="#"class="text-decoration-none">view all</a>
              </div>
            </li>



          </ul>
        </li>
        <!-- ------------------------------- -->
        <li class="nav-item dropdown-center ">
          <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="images/avatar-s-1.png" class="fluid rounded-circle" style="width:30px;" alt="" srcset=""><small
              class="h6 p-1">Jhon doe</small>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end ">
            <li><a class="dropdown-item " href="#"><i class="bi bi-person-circle me-2"></i>my account</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>setting</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>log out</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- -------------------- -->

  <!-- offcanvas sidebar nav -->
  <div class="offcanvas-lg offcanvas-start bg-dark offcanvas-custom-design position-fixed" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header poation-relative">
      <button type="button" class="btn-close bg-white position-absolute top-0  end-0 m-3" data-bs-dismiss="offcanvas"
        aria-label="Close" href="#offcanvasExample" role="button"></button>
    </div>
    <div class="offcanvas-body ">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              Home
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>

            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              workspace
            </div>
          </li>
          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#report">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>view report</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="report">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"></span>
                    <span>my report</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"></span>
                    <span>inline report</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>report layout</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="layouts">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-columns"></i></span>
                    <span>layout 1</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-columns"></i></span>
                    <span>layout 2</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-graph-up"></i></span>
              <span>Charts</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Tables</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-app-indicator"></i></span>
              <span>Notice board</span>

            </a>
          </li>

          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              more
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-people"></i>
                <span>useres</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <main class="w-100">
  <div class="row  mx-3 my-3 ">
          <div class="col-md-10  ">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-people"></i></span> Useres Data Table
              </div>
              <div class="card-body ">
                <div class="table-responsive ">
  <table id="example" class="table table-striped " style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008-11-28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012-12-02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012-08-06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010-10-14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009-09-15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008-12-13</td>
                <td>$103,600</td>
            </tr>
           
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</div>
    </main>

<!-- ----------------------------------------------------------------------- -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- -------------------------------------------------------------------------------- -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<body>
</html>