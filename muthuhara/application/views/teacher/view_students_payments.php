        
        <div class="col-md-8 d-flex">
            <div class="form-body">
            <form action="<?php echo site_url('/Teacher/view_students_payments_by_month');?>" method="POST" >

                <div class="form-group">
                    <label for="exampleInputMonth">Month</label>
                    <input type="month" class="form-control" id="month" name="month" required>
                </div>

                <button type="submit" class="btn btn-success">Search</button>

            </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Month</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Payment Amount</th>
                    </tr>
                </thead>
                <tbody>
                    

                    <?php if(!empty($payments)) { foreach ($payments as $payment) {?>
                        <tr>
                            <th scope="row"><?php echo $payment['id'] ?></th>
                            <th scope="row"><?php echo $payment['date'] ?></th>
                            <th scope="row"><?php echo $payment['student_id'] ?></th>
                            <th scope="row"><?php echo $payment['username'] ?></th>
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
</div>