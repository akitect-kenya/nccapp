<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php include('sidebar_dashboard.php'); ?>
        <div class="span9" id="">
            <div class="row-fluid">
                <!-- block -->
                <div  id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Query tables</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="block-content collapse in">
                            <div class="span12" id="studentTableDiv">
                                <h2 id="noch">Query List</h2>
                                <?php include('query_table.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>
</html>