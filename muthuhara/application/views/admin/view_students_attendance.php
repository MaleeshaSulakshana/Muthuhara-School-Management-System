        
        <div class="col-md-8 d-flex">
        <div class="form-body">
            <form action="<?php echo site_url('/Admin/view_students_attendance_by_date');?>" method="POST" >

                <div class="form-group">
                    <label for="exampleInputDate">Select View Date</label>
                    <input type="date" class="form-control" id="view_date" name="view_date" required>
                </div>

                <button type="submit" class="btn btn-success">View Attendance</button>

            </form>
        </div>
        </div>
        
        <div class="col-md-8 d-flex">
            <div class="form-body">
            <form action="<?php echo site_url('/Admin/insert_attendance');?>" method="POST" >

                <div class="form-group">
                    <label for="exampleInputDate">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputName">Student Name</label>

                    <select name="sname" id="sname">

                        <?php if(!empty($students)) { foreach ($students as $student) {?>

                            <option value="<?php echo $student['users_id'] ?>">
                                <?php echo $student['username'] ?>
                                <?php echo " - " ?>
                                <?php echo $student['users_id'] ?>
                            </option>

                        <?php } } ?>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Mark Attendance</button>

            </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Is Available</th>
                    </tr>
                </thead>
                <tbody>
                    

                    <?php if(!empty($attendances)) { foreach ($attendances as $attendance) {?>
                        <tr>
                            <th scope="row"><?php echo $attendance['date'] ?></th>
                            <th scope="row"><?php echo $attendance['student_id'] ?></th>
                            <th scope="row"><?php echo $attendance['username'] ?></th>
                            <th scope="row"><?php echo $attendance['is_available'] ?></th>

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