        <div class="col-md-8">
            <a href="<?php echo base_url().'teacher/add_student' ?>" class="btn btn-primary">
                                    Add Student
                                </a>
        </div>
        
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Active</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if(!empty($users)) { foreach ($users as $user) {?>
                        <tr>
                            <th scope="row"><?php echo $user['users_id'] ?></th>
                            <th scope="row"><?php echo $user['username'] ?></th>
                            <th scope="row"><?php echo $user['email'] ?></th>
                            <th scope="row"><?php echo $user['active'] ?></th>
                            <th scope="row"></th>
                            <th scope="row"></th>

                            <th scope="row">
                                <a href="<?php echo base_url().'teacher/view_student_details/'.$user['users_id'] ?>" class="btn btn-primary">
                                    Edit
                                </a>
                            </th>

                            <!-- <th scope="row">
                                <a href="<?php echo base_url().'teacher/view_student_details/'.$user['users_id'] ?>" class="btn btn-primary">
                                    Delete
                                </a>
                            </th> -->
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