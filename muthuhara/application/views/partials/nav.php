
<div>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin:0px;  border-radius: 0;" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo '<a style="text-decoration: none; color: white; font-size:14px; padding:25px;" href="'.base_url().'Admin/enter">Muthuhara Preschool</a>'; ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="enter"><?php echo '<h4> Welcome -'.$this->session->userdata('username').'</h4>' ;?><span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo '<a href="'.base_url().'Auth/logout">Logout</a>'; ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<!-- side bar -->
<div class="container" style="margin-top:70px;">
    <div class="row">
        <div class="col-md-4">
            
            <div class="sidebarAdmin">
              <ul>
                  <li>
                      <a href="enter">
                          <span class="icon">
                          <ion-icon name="grid-outline"></ion-icon>
                          </span>
                          <span class="text">Admin Dashboard</span>
                      </a>
                  </li>

                  <li>
                      <a href="view_students">
                          <span class="icon">
                          <ion-icon name="people-outline"></ion-icon>
                          </span>
                          <span class="text">Students List</span>
                      </a>
                  </li>

                  <li>
                      <a href="view_teachers">
                          <span class="icon">
                              <ion-icon name="person-outline"></ion-icon>
                          </span>
                          <span class="text">Teacher List</span>
                      </a>
                  </li>

                  <li>
                      <a href="view_students_grading">
                          <span class="icon">
                              <ion-icon name="book-outline"></ion-icon>
                          </span>
                          <span class="text">Grading</span>
                      </a>
                  </li>

                  <li>
                      <a href="view_students_attendance">
                          <span class="icon">
                              <ion-icon name="document-text-outline"></ion-icon>
                          </span>
                          <span class="text">Student Attendance</span>
                      </a>
                  </li>

                  <li>
                      <a href="view_payments">
                          <span class="icon">
                              <ion-icon name="cash-outline"></ion-icon>                                
                          </span>
                          <span class="text">Check Payment</span>
                      </a>
                  </li>

                  <li>

                  <li>
                      <a href="view_admins" target="_parent">
                          <span class="icon">
                          <ion-icon name="person-add-outline"></ion-icon>
                          </span>
                          <span class="text">Admin List</span>
                      </a>
                  </li>

              </ul>
              <p>hi</p>
            </div>
        </div> 