<!-- Include the QueryController -->
<?php include('app/Http/QueryController.php'); ?>

<!-- Search customers -->
<?php
    if(isset($_GET["search"])) {
        $customers = searchCustomers($_GET["search"]);
    } else {
        $customers = searchCustomers();
    }
?>
<!-- End search for customers -->

<form action="query.php" method="get">
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
        <form action="query.php" method="get">
            <div class="form-group">
                <input style="width: 90%;" id="search" name="search" type="text" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-info pull-right">Search</button>
            </div>
        </form>
        <hr>
        <thead>
        <tr>
            <th>Company Name</th>
            <th>Contact Name</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Service Name</th>
            <th>Supplier Name</th>
            <th>Order Date</th>
            <th>Category Name</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($customers as $customer) {
            $id = $customer->id;
            foreach ($customer->orders as $order) {
            ?>
            <tr>
                <td><?php echo $customer->company_name; ?></td>
                <td><?php echo $customer->contact_name; ?></td>
                <td><?php echo $order->details->unit_price; ?></td>
                <td><?php echo $order->details->quantity; ?></td>
                <td><?php echo $order->product->service_name; ?></td>
                <td><?php echo $order->supplier->company_name; ?></td>
                <td><?php echo $order->orderDate; ?></td>
                <td><?php echo $order->category->name; ?></td>
            </tr>
        <?php
            }
        }
        ?>

        </tbody>
    </table>
</form>