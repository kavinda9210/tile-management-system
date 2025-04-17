
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
		<link href="" rel="stylesheet">
		<script src="script.js"></script>
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}


/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>
		
	</head>
	<body>
	
	
	
	
	<?php
	ob_start();	
	include ('db.php');

	$pid = $_GET['pid'];
	
	
	
	$sql ="SELECT * FROM orderdetails where  user_id='$pid'";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$oid = $row['order_id'];
		$uid = $row['user_id'];
		$odername = $row['order_name'];
		$price = $row['order_price'];
		$qty = $row['order_quantity'];
		$tot = $row['order_total'];
		$date = $row['order_date'];
		
		
		
		
	
	}
	
									
	
	?>
	<script>
        function printPage() {
            var printButton = document.querySelector('.btn.btn-primary');
            if (printButton) {
                printButton.style.display = 'none'; // Hide the button before printing

                window.print(); // Trigger printing

                // Show the button again after printing (use a timeout to ensure it shows after printing)
                setTimeout(function () {
                    printButton.style.display = 'block';
                }, 1000); // Adjust the delay as needed
            }
        }
    </script>
</head>
<body>
    <!-- Your existing HTML content here -->

    <button class="btn btn-primary" onclick="printPage()">Print</button>
	
		<header>
			
			<h1>Invoice</h1>
			
			<p>Date :<a href="#" style="color:black; text-decoration:none;"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a></p>
		    <p>Name :<?php
			         $sql ="SELECT user_firstname, user_lastname FROM users where  user_id='$pid'";
					 $rp = mysqli_query($con,$sql);
					 while($row=mysqli_fetch_array($rp)){
						$ne = $row['user_firstname'];
						$le = $row['user_lastname'];
					 }
					 
					 echo $ne.' ' .$le;
					 
			?></p>
			<span><h1 style="font-size:40px;background:white; color:red;">HERATH <b style="color:#0f2453;">TILE SHOP</b></h1></span>
		</header>
		<article>
			<h1>Recipient</h1>
			
			<table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Price</th>
				  <th>Quantity</th>
				  <th>Total</th>
                  
                 
                </tr>
              </thead>
              <tbody>
			  <?php
include("config.php");
 
	$stmt = $DB_con->prepare("SELECT * FROM orderdetails where  user_id='$uid'");
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  
                 <td><?php echo $order_name; ?></td>
				 <td>LKR <?php echo $order_price; ?> </td>
				 <td><?php echo $order_quantity; ?></td>
				 <td>LKR <?php echo $order_total; ?> </td>
				 
				 
                </tr>

               
              <?php
		}
		 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as totalx from orderdetails where user_id=:user_id and order_status='Ordered'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		echo "<tr>";
		echo "<td colspan='3' align='right'>"?><b style="font-size:15px;font-weight:bold;">Total Price Ordered<?php
		echo "</td>";
		
		?><?php echo "<td><h6>LKR ".$totalx;
		echo "</h6></td>";?></b><?php
		
		
		
		echo "</tr>";
        echo "<tr>";
       
		echo "</tbody>";
		echo "</table>";}?>
		</article>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
			<p align="center"> Address :- HERETH TILE SHOP,
				Kandy Road,Walapane, Central Province,Sri Lanka.</p>
				<p align="center">Email :- herathtilesshowroom@gmail.com <br>Hotline :- 077-6981105  ||  Tel :- 077-6981105 </p>
				
			</div>
		</aside>
	</body>
</html>
