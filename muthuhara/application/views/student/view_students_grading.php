        
        <div class="col-md-8">
            <table class="table table-striped" style="width:80%;">
                <thead>
                    <tr>
                    <th scope="col">Month</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Grade</th>
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