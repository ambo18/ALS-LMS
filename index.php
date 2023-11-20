<?php include('header.php'); ?>
<style>
	body#login::before {
        content: "";
        background: #00000067;
        position: absolute;
        top: 0;
        /* z-index: 1; */
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<body id="login">
    <div class="container" style="position: relative">
		<div class="row-fluid">
			<div class="span12"><center><?php include('login_form.php'); ?></center></div>
		</div>
        <div class="row-fluid">
            <div class="span12"><center><?php include('link.php'); ?></center></div>
        </div>
			<?php include('footer.php'); ?>
    </div>
<?php include('script.php'); ?>
</body>
</html>