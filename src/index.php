<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HNG | 4.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('bg.jpg');">

    <div class="container">
    	<div id="logo">
    		<div class="brackets">
    			<span>}{</span>
    		</div>
    		<div class="logoText">
    			<span id="hng">HNG</span>
    			<span id="int">Internship</span>
    		</div>
    	</div>
    	<div class="createdBy">intern: @Chukwudi</div>

    	<section class="major">
    		<p id="caption">Hotel.ng 4.0</p>
    		<p id="time"><?php echo "Time: ".date('h:m:s A')."<br/>";?></p>
    		<p id="dayMonthYear">
    		<?php
            echo date('l,')."<br/>";
            echo date(' jS \of F Y');
            ?>
    		</p>
    	</section>
    </div>

</body>
</html>