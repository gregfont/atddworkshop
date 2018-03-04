<!doctype html>
<html lang="en">
<head>
    <title>ATDD Workshop</title>
    <style type="text/css">
        body{
			max-width:1024px;
			margin : 0 auto;
        }
		form {
			background-color:#F5F5F5;
			padding:20px;
		}
        input, select {
            border:1px solid #0076a3;
            padding: 5px 15px;
            margin: 0 0 3px 0;
            border-radius: 5px 5px;
        }
    </style>
</head>

<body>
	<h2>We are proud to announce our new innovation: The Pizza!</h2>
	<p><i>It's delicious, healthy, and easy to share with your buddies!</i></p>
    <?php if (isset($this->view['price'])): ?>
        <h1>Price</h1>
        <span id="price"><?php echo $this->view['price'] ?></span> jpy
    <?php else: ?>
        <form method="POST" action="order.php">
            Pizza: <select name="pizza">
            <?php foreach($this->view['pizzas'] as $pizza=>$price){ ?>
                <option value="<?php echo $price; ?>"><?php echo $pizza; ?></option>
            <?php } ?>
            </select> x
            <input type="text" name="quantity" size="2"><br />
            Discount: <input type="text" name="discount" size="3"><br />
            Ward: <select name="ward">
            <?php foreach($this->view['wards'] as $ward){ ?>
                <option value="<?php echo $ward; ?>"><?php echo $ward; ?></option>
            <?php } ?>
            </select><br />
            <input type="submit" value="Order" class="button">
        </form>
    <?php endif; ?>
</body>
</html>