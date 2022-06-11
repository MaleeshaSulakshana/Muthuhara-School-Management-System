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
      <a class="navbar-brand" href="enter">Muthuhara Preschool</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="enter"><?php echo '<h4> Welcome -'.$this->session->userdata('username').'</h4>' ;?><span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo '<a href="'.base_url().'Auth/logout">Logout</a>'; ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
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
                                       <span class="text">Teacher Dashboard</span>
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
                               <a href="view_students_payments">
                                   <span class="icon">
                                        <ion-icon name="cash-outline"></ion-icon>                                
                                   </span>
                                   <span class="text">Check Payment</span>
                               </a>
                           </li>

                       </ul>
                   </div>
              </div> 