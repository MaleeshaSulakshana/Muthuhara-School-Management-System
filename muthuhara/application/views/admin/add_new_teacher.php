        <div class="col-md-7">
        <div class="wrapper">
                <div class="title">
                    Add New Teacher
                </div>
                <div class="form">
                    <form action="<?php echo site_url('/Admin/teacher_registration_validation');?>" method="POST" >

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                    aria-describedby="emailHelp">

                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                    <span class="text-danger"><?php echo $this->session->flashdata("error") ?></span>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="username" class="form-control" id="username" name="username"
                    aria-describedby="emailHelp">

                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                    <span class="text-danger"><?php echo $this->session->flashdata("error") ?></span>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                    <span class="text-danger"><?php echo $this->session->flashdata("error") ?></span>   
                </div>

                <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                <div clas="btn"><button type="submit" class="btn btn-primary">Create Teacher</button></div>

            </form>
        </div>
    </div>
    </div>
    </div>
</div>