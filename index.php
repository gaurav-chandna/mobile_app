<!doctype html>
<html>
	<head>
		<?php
		session_start();
		//echo $_SESSION['user'];
		//var_dump($_SESSION);
		if(isset($_SESSION['email'])){
		 echo "<a href='./logout.php'>Logout </a>";
		}
			$connection = mysqli_connect("localhost","root","","mobilestore");
			if($connection)
			{
				echo $_SESSION['user'];
				echo $_SESSION['email'];
				$query = "select * from mobilelist";
				$result = mysqli_query($connection,$query);
//tempObject = mysqli_fetch_array($result);
	//			echo "[".count($tempObject)."]";
	$count = 0;
				while($object = mysqli_fetch_object($result))
				{
					echo $object->mobileID;
					echo $object->model_name;
					echo $object->price;
					$count++;
				}
				echo "[".$count."]";
			}
			else
			{
				echo "Connection error";
			}
		?>
		<title>
			My Mobile Store
		</title>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jssor.slider-20.mini.js"></script>
		
		<script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 1,
                $Align: 0
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 100);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
	<link rel="stylesheet" type="text/css" href="css/master.css" media="screen" />
		<style>
			

		</style>
	</head>
	
	<body>
		<div id="wrapper">
			<div id="header" class="mycontainer">
				<div id="logo">
					<img src="images/mobile_store_logo.jpg" height="80"/>
				</div>
				<div id="iconcontainer">
					<div id="icons">
						<div>
							<a href="https://www.google.com"><img src="images/icons/mobilestore-help-icon.png" />
							<a href="https://www.google.com"><img src="images/icons/icon_account.png" /></a>	
							<a href="https://www.google.com"><img src="images/icons/Checkout-Cart.png" /></a>							
						</div>
					</div>
					<div id="search">
						<input type="text" />
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div id="menu">
				<ul>
					<li>
						Home
					</li>
					<li>
						About Us
					</li>
					<li>
						XYZ
					</li>
					<li>
						Products
					</li>
					<li>
						Contact
					</li>
					
				</ul>
			</div>
			<div id="content" class="mycontainer">
				<div id="leftcontent">
					<div>
						<input id="searchbox" type="text" placeholder="Search Mobiles.."/>
					</div>
					<div>
						<select id="brands">
							<option>Brand</option>
							<option>Motorola</option>
							<option>Sony</option>
							<option>HP</option>
							<option>Apple</option>
						</select>
					</div>
					
					<div>
						<select id="brands">
							<option>Price Range</option>
							<option>1001 - 5000</option>
							<option>5001 - 8000</option>
							<option>8001 - 15000</option>
							<option>Above 15000</option>
						</select>
					</div>
					
				</div>
				<div id="rightcontent">
					<div id="slider">
					
					
						<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 400px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 400px; overflow: hidden; border:red 1px solid;">
            <div style="display: none;">
                <img data-u="image" src="images/slider/01.jpg" />
                <div data-u="thumb">Do you notice it is draggable by mouse/finger?</div>
            </div>
            <div style="display: none;">
                <img data-u="image" src="images/slider/02.jpg" />
                <div data-u="thumb">Did you drag by either horizontal or vertical?</div>
            </div>
            <div style="display: none;">
                <img data-u="image" src="images/slider/03.jpg" />
                <div data-u="thumb">Do you notice navigator responses when drag?</div>
            </div>
            <div style="display: none;">
                <img data-u="image" src="images/slider/04.jpg" />
                <div data-u="thumb">Do you notice arrow responses when click?</div>
            </div>
			<div style="display: none;">
                <img data-u="image" src="images/slider/04.jpg" />
                <div data-u="thumb">Do you notice arrow responses when click?</div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:800px;height:45px;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0.4;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:10px;">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:123px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:123px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Jssor Slider</a>
    </div>
					
					
					
					</div>
					<div class="productbrief">
						<div class="piccontainer">
							<img src="images/products/phone1.jpeg">
						</div>
						<h3>MOTO X</h3>
						<h5>Rs. 9000</h5>
					</div>
					<div class="productbrief">
						<div class="piccontainer">
							<img src="images/products/phone1.jpeg">
						</div>
						<h3>MOTO X</h3>
						<h5>Rs. 9000</h5>
					</div>
					<div class="productbrief">
						<div class="piccontainer">
							<img src="images/products/phone1.jpeg">
						</div>
						<h3>MOTO X</h3>
						<h5>Rs. 9000</h5>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear">
				</div>
			</div>
			<div id="contact" class="mycontainer">
				<div id="conleft">
					<form>
						<ul>
							<li>Name : <input type="text" /></li>
							<li>Email : <input type="text" /></li>
							<li><input type="submit" value="Submit My"/></li>
						</ul>
					</form>
				</div>
				<div id="conright">
					<a href="https://www.google.com"><img src="images/icons/mobilestore-help-icon.png" />
							<a href="https://www.google.com"><img src="images/icons/icon_account.png" /></a>	
							<a href="https://www.google.com"><img src="images/icons/Checkout-Cart.png" /></a>	
				</div>
				<div class="clear">
				</div>
			</div>
		</div>
	</body>
</html>