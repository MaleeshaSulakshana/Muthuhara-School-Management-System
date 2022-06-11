        
        <div class="col-md-8 d-flex">

            <form action="<?php echo site_url('/Student/student_pay_fees');?>" method="POST" >

                <div class="form-group">
                    <label for="exampleInputPayment">Amount</label>
                    <input type="text" class="form-control" id="payment" name="payment">
                </div>

                <button type="submit" class="btn btn-primary">Pay Fees</button>

            </form>

        </div>

        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
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