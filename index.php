<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <script src="bs/js/bootstrap.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <title>Document</title>
</head>
    <body>
		<form action="" class="col-md-6">
			<h3>To</h3>
			<input type="text" class="form-control select" value="ikram.akand@gmail.com, bjayanta.neo@gmail.com, arafkarim@gmail.com, rtr.amor@gmail.com" />
			<?php /*
			<h3>CC</h3>
			<input type="text" class="form-control select" value="" />
			*/ ?>
			<h3>Subject</h3>
			<hr>
			<input type="text" class="form-control select" value="Daily Report: <?php echo date("l, F d, Y")?>" />
			<h3>Message</h3>
			<hr>
			<textarea class="form-control select" rows="6">Dear Team,
I am sending today's update in attachment for your information. 
Please let me know if you have any questions or would like further information.
Thanks,
Md.Maruf Hasan
</textarea>
		</form>
	
		<script type="text/javascript">
			$(document).ready(function(){
				$(".select").on("focus",function(){
					$(this).select();
					document.execCommand("copy");
				});
			});
		</script>
    </body>
</html>