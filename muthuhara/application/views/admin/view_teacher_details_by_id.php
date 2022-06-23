        <div class="col-md-8">
             <div class="form-body">
            <form action="<?php echo site_url('Admin/edit_teacher_details/'.$users[0]['users_id']);?>" method="POST" >

            <div class="form-group">
                    <label for="">Teacher Id</label>
                    <input type="number" class="form-control" id="users_id" name="users_id"
                    value="<?php echo $users[0]['users_id'] ?>"
                    aria-describedby="users_idHelp" disabled>
                </div>
                

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="user_email" name="user_email"
                    value="<?php echo $users[0]['email'] ?>"
                    aria-describedby="emailHelp" disabled>
                </div>

                <div class="form-group">
                    <label for="">Teacher name</label>
                    <input type="text" class="form-control" id="username" name="username"
                    value="<?php echo $users[0]['username'] ?>" aria-describedby="emailHelp">

                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                    <span class="text-danger"><?php echo $this->session->flashdata("error") ?></span>
                </div>

                <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                <button type="submit" class="btn btn-info">Edit</button>
                <!-- <button type="submit" class="btn btn-primary">Password Change</button> -->

            </form>
            </div>
        </div>

    </div>
</div>