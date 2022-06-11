<div class="container">
    <br/>
    <form action="<?php echo site_url('/Auth/login_validation');?>" method="POST" >
            <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            <span class="text-danger"><?php echo form_error('username'); ?></span>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="password">
             <span class="text-danger"><?php echo form_error('password'); ?></span>
             <span class="text-danger"><?php echo $this->session->flashdata("error") ?></span>    
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>