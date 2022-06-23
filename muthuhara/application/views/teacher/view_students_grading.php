        
        <div class="col-md-8 d-flex">
        <div class="form-body">
            <form action="<?php echo site_url('/Teacher/view_students_grading_by_month');?>" method="POST" >

                <div class="form-group">
                    <label for="exampleInputDate">Select View Month</label>
                    <input type="month" class="form-control" id="view_month" name="view_month" required>
                </div>

                <button type="submit" class="btn btn-success">View Grading</button>

            </form>
        </div>
        </div>
        
        <div class="col-md-8 d-flex">
            <div class="form-body">
            <form action="<?php echo site_url('/Teacher/insert_grading');?>" method="POST" >

                <div class="form-group">
                    <label for="exampleInputDate">Month</label>
                    <input type="month" class="form-control" id="month" name="month" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputGrade">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" required>
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

                <button type="submit" class="btn btn-info">Mark Grading</button>

            </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Month</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Grading</th>
                    </tr>
                </thead>
                <tbody>
                    

                    <?php if(!empty($gradings)) { foreach ($gradings as $grading) {?>
                        <tr>
                            <th scope="row"><?php echo $grading['month'] ?></th>
                            <th scope="row"><?php echo $grading['student_id'] ?></th>
                            <th scope="row"><?php echo $grading['username'] ?></th>
                            <th scope="row"><?php echo $grading['grade'] ?></th>

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