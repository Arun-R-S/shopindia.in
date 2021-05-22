
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>
		Shop India: Online Shopping for Electronics, Apparel, Computers, Books, DVDs & more
	</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxhhGUb21qMRDoix2jLha1TYJ8lYDbs0kUM0Wx-xfLn5u2oyd_&usqp=CAU">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>







<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxhhGUb21qMRDoix2jLha1TYJ8lYDbs0kUM0Wx-xfLn5u2oyd_&usqp=CAU" height="30" width="30" style="border-radius: 30px;">
  <nav class="navbar-brand">Shop India</nav>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="help.php">Help</a>
      </li>
      <a href='logout.php' class='bt'>Logout<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/OOjs_UI_icon_logOut-ltr.svg/600px-OOjs_UI_icon_logOut-ltr.svg.png' height='20px' width='20px'></a>
             <style>
                .bt{
                 text-decoration:unset;
                 margin:10px;
                 font-size:17px;
                 color:grey;

            }
            </style>
    </ul>
  </div>

    <?php
    session_start();
   if( isset( $_SESSION['user'] ) ) {
      echo "<h3>".$_SESSION['user']."</h3></ul><style>.bt{visibility:auto;}</style>";
      if($_SESSION['gender']=="Male")
      {
        echo "<ul class='navbar-nav'>
        <li><img src='https://upload.wikimedia.org/wikipedia/commons/1/19/Boss-icon.png' height='40px' width='40px'></li>";
      }
      else
      {
        echo "<ul class='navbar-nav'>
        <li><img src='https://cdn1.iconfinder.com/data/icons/IconsLandVistaPeopleIconsDemo/256/Client_Female_Light.png' height='40px' width='40px'></li>";
      }
      
      
   }else {
     echo "<ul class='navbar-nav'>
     <li>
              <a href='register.php'>Register</a>
            </li>
         </ul>
      <pre> </pre>
          <ul class='navbar-nav'>
            <li>
              <a href='login.php'>Login</a>
            </li>
          </ul>
          <style>.bt{visibility:hidden;}</style>";
   }
    ?>

</nav>




<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.assettype.com/freepressjournal%2F2020-04%2F31a666fa-1dc3-4c60-a15d-3b31e2c85274%2Fcats.jpg?w=1200" class="d-block w-100" alt="..." style="height:400px;object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h2>Online Shopping</h2>
        <h4>Stocks for all product available</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://lh3.googleusercontent.com/i4ndixC2jg15KlVNMKw0_ty8mKi6TDnL99emdbC9Bf2NeyXt2n5XxHTllgXl30kqgfRrKS8f=w1080-h608-p-no-v0" class="d-block w-100" alt="..." style="height:400px;object-fit: contain;">
      <div class="carousel-caption d-none d-md-block" style="color:yellow;">
        <h2>Fast Delivery</h2>
        <h4>We provide a fast delivery service to you</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.revechat.com/wp-content/uploads/2016/04/24-7-live-chat-support.jpg" class="d-block w-100" alt="..." style="height:400px;object-fit: cover;">
      <div class="carousel-caption d-none d-md-block" style="color:white;">
        <h2>24/7 Customer Service</h2>
        <h4>We are here to care you</h4>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="body">

<div class="category">

<h3 class="maintitle">Categories</h3>
<div class="scrollmenu">
<div class="card mb-3" style="max-width: auto;">
  <div class="row no-gutters">
    <div class="col-md-4">
        <img src="https://www.ineedamobile.com/wp-content/uploads/2018/04/Refurbished-Mobile-Phones.png" class="d-block w-100" alt="Mobile Phones" style="height:180px;object-fit: contain;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mobile Phones</h5>
        <p class="card-text">Buy Best Mobile Phones online at Best prices in India at Shop India.in. Browse mobile phones from popular brands. ShopIndia the right platform to buy best smart mobiles at affordable prices.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: auto;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://www.bajajfinserv.in/Cheaper_EMI_Alternatives_for_Purchasing_Home_Appliances_790_Cheaper_EMI_Alternatives_for_Purchasing_Home_Appliances_1.jpg" class="card-img" alt="Home Appliances" style="height:180px;object-fit: contain;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Home Appliances</h5>
        <p class="card-text">Online shopping for Home and Kitchen Appliances Offers from a great selection at Home & Kitchen ... Shop top categories ... Essential appliances for your home.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: auto;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://www.davejunia.com/thoughts/wp-content/uploads/2013/01/header11.jpg" class="card-img" alt="PC and Laptops" style="height:180px;object-fit: contain;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">PC and Laptops</h5>
        <p class="card-text">Shop from top Laptop Brands like Apple, HP, Lenovo, Microsoft, Dell, iBall ... These days, computers are fast being replaced by laptops because they are the world in our hands</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: auto;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://media.architecturaldigest.in/wp-content/uploads/2018/07/Amazon-home-decor-must-buys-under-20000-866x487.jpg" class="card-img" alt="Home Decorations" style="height:180px;object-fit: contain;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Home Decorations</h5>
        <p class="card-text">Home & Decor store on Shopindia.in is a one stop shop for the most varied variety in home & decor articles. Every house is different, while some have different flavour of decoration.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: auto;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://2.bp.blogspot.com/-yPZ4SCyoV1Y/Wh-SNUnxrdI/AAAAAAAAAGw/p0Bv9RLGin4Naz1HYMyYhW2nb_VUkfEcgCLcBGAs/s1600/mobile-accessories-compressed.jpg" class="card-img" alt="Mobile Accessories" style="height:180px;object-fit: contain;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mobile Accessories</h5>
        <p class="card-text">Buy mobile phone accessories online for smartphones, android phones, dual sim phones, touchscreen phones, and more for Samsung, Nokia, ....</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: auto;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://geekculturepodcast.com/wp-content/uploads/2019/07/Shopping.jpg" class="card-img" alt="Clothes" style="height:180px;object-fit: cover;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Clothes</h5>
        <p class="card-text">Online Shopping Site for Fashion & Lifestyle in India. Buy Shoes, Clothing, Accessories and lifestyle products for women & men. Best Online Fashion Store ....</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>

</div>

<div class="probox">
	<h3 class="title">Products</h3>
	<div class="products">
		<?php
			$conn=mysqli_connect("localhost","root",'',"onlineshopping");
			if($conn->connect_error)
			{
				die("Connection Failed".$conn->connect_error);
			}
			$sql="SELECT pname,type,modal,spec,mrp,stock,description,rating,img1 FROM products";
			$result=$conn->query($sql);
			if($result->num_rows>0)
			{
        echo "<div class='row row-cols-1 row-cols-md-2'>";
				while($row=$result->fetch_assoc())
				{
					echo "
  <div class='col mb-4'>
    <div class='card'>
      <a style='' href='viewproduct.php?varname=".$row['img1']."'><img src=".$row['img1']." class='card-img-top' alt=".$row['pname']." ".$row['modal']." style='height:200px;object-fit:contain;'>
      <div class='card-body'>
        <h5 class='card-title'>".$row['pname']." ".$row['modal']."</h5></a>
        <p class='card-text'>".$row['spec']."</p><p>Rs.".number_format($row['mrp'],2)."/-
      </div>
    </div>
  </div>";

				}
				echo "</div>";
			}
		?>
		<style>
			table,td,tr,th{
				border:1px solid black;
			}
		</style>

	</div>
</div>



</div>



<div class="text-center">
<div class="upbottom">
<h5>Contact Us @ <img class="bimg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxhhGUb21qMRDoix2jLha1TYJ8lYDbs0kUM0Wx-xfLn5u2oyd_&usqp=CAU" style="height: 30px;width: 30px;"> Shopindia.in</h5>
</div>
  <div class="bottom">
<h5>In Association With</h5>
<address><h3>Innovation Technologies Pvt Ltd</h3></address>
</div>





 <style>
 .bimg{
	 border-radius:20px;
 }
  .body{
    padding-right: 80px;
    padding-left: 80px;
  }
  @media screen and (max-width: 800px) {
    .body{
      padding-right: 10px;
    padding-left: 10px;
    }
  }
  .upbottom{
	  color:white;
	  margin-top:30px;
	  width:100%;
	  background-color:#004D40;
	  height:50px;
	  padding-top:10px;
	  padding-right:10px;
	  padding-left:10px;
  }
  .bottom{
    width:100%;
    background-color:#009688;
	padding-bottom:40px;
	padding-top:10px;
	color:white;
	padding-right:10px;
	  padding-left:10px;
  }
  
 	.leftmove{
 		margin-left: 20px;
 	}
 	.title{
 		background-color: #6200EE;
 		padding:10px;
 		border-radius: 3px;
 		color:white;
		width:100%;
 	}
 	.maintitle{
 		background-color: #03DAC5;
 		padding:10px;
 		border-radius: 3px;
 	}
 	.pro_detail{
 		width:auto;
 		height:auto;
 		border:1px solid black;
 		border-radius: 3px;
 	}
 	table{
 		border:1px solid black;
 		width:100%;
 		text-align: top;
 		height: auto;
 	}
 	td.timg{
 		width:300px;
 	}
 	td.tspec{
 		align-items: top;
 		align-self: top;
 		text-align: top;
 		height: auto;
 	}
 	.product{
 		object-fit: contain;
 	}
 	.pro_img{
 		height:auto;
 		width:200px; 		
 	}
 	.spec{
 		object-position: right;
 	}
 	.pimg{
 		height:190px;
 		object-fit: cover;
 		align-items: center;
 		margin:2px;
 	}
 	.probox{
	padding: 20px;
	box-shadow: 0px 0px 10px grey;
	margin-top:30px;
	border-radius: 4px;
	overflow: all;
	width: auto;
	height:auto;
	margin-left: 1px;
	margin-right: 1px;
	background-color:#E0F2F1;
}

.left, .right {
  float: left;
  width: 5%; /* The width is 20%, by default */
}

.main {
  float: left;
  width: 90%; 
}

@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%;
  }
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: white;
   text-align: center;
}
div.scrollmenu {
  background-color: white;
  overflow-y: scroll;
  width:auto;
 height:500px;
  scroll-direction: vertical;
  border-top: 2px solid black;
  border-bottom: 2px solid black;
  border-radius: 10px;
}
.category{
	padding: 20px;
	box-shadow: 0px 0px 10px grey;
	margin-top:30px;
	border-radius: 4px;
	overflow: all;
	height:600px;
	margin-left: 1px;
	margin-right: 1px;
}

.card mb-3{
	box-shadow: 0px 0px 5px black;
	padding: 10px;
}
.scrollmenu::-webkit-scrollbar {
    display: none;
}
.scrollmenu {
    -ms-overflow-style: auto;
}

</style> 


</body>
</html>