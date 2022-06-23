        <!-- <div class="col-md-8">
            <a href="<?php echo base_url().'Admin/add_student' ?>" class="btn btn-primary">
                                    Add Student
                                </a>
        </div> -->
        
        <div class="col-md-8">
            <table class="table table-striped" style="width:80%;">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Month</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Payment Amount</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php if(!empty($payments)) { foreach ($payments as $payment) {?>
                        <tr>
                            <th scope="row"><?php echo $payment['id'] ?></th>
                            <th scope="row"><?php echo $payment['date'] ?></th>
                            <th scope="row"><?php echo $payment['student_id'] ?></th>
                            <th scope="row"><?php echo $payment['payment_amount'] ?></th>
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