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
                                       <span class="text">Student Dashboard</span>
                                   </a>
                               </li>
           
                           <li>
                               <a href="view_student_grading">
                                   <span class="icon">
                                        <ion-icon name="book-outline"></ion-icon>
                                   </span>
                                   <span class="text">View Grading</span>
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
                                   <span class="text">Payment</span>
                               </a>
                           </li>
           
                           <li>

                       </ul>
                   </div>
                   </div> 