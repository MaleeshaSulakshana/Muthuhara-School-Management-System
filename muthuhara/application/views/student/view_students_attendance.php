        
        <div class="col-md-8 d-flex">

            <form action="<?php echo site_url('/Student/view_students_attendance_by_date');?>" method="POST" >

                <div class="form-group">
                    <label for="exampleInputDate">Select View Month</label>
                    <input type="month" class="form-control" id="view_date" name="view_date">
                </div>

                <button type="submit" class="btn btn-primary">View Attendance</button>

            </form>

        </div>

        
        <div class="col-md-8">
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