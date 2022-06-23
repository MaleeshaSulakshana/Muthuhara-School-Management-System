<div class="add_teacher">
        <div class="col-md-8">
            <a href="<?php echo base_url().'Admin/add_teacher' ?>" class="btn btn-info">
                                    Add Teacher
                                </a>
        </div>


        <div class="col-md-8">
        <div class="content-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php if(!empty($users)) { foreach ($users as $user) {?>
                        <tr>
                            <th scope="row"><?php echo $user['users_id'] ?></th>
                            <th scope="row"><?php echo $user['username'] ?></th>
                            <th scope="row"><?php echo $user['email'] ?></th>
                            <th scope="row"><?php echo $user['active'] ?></th>
                            <!-- <th scope="row"></th>
                            <th scope="row"></th> -->

                            <th scope="row">
                                <a href="<?php echo base_url().'admin/view_teacher_details/'.$user['users_id'] ?>" class="btn btn-success">
                                    Edit
                                </a>
                            <!-- </th>

                            <th scope="row"> -->
                                <a href="<?php echo base_url().'/Admin/delete_user_details/'.$user['users_id'].'/2' ?>" class="btn btn-danger">
                                    Delete
                                </a>
                            </th>
                        </tr>
                    <?php } } else { ?>
                    <tr>
                        <td colspan="4">Records Not Found!</td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
                    </div>
        </div>
</div>
                    </div>