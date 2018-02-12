
<?php session_start();?>

<?php
include('connection.php');
if (!$_SESSION["UserID"]){  //check session

	  Header("Location: เข้าสู่ระบบ.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="login/css/login.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
<html>
	<head>
		<title>Tuber Thailand</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<div class="w3-container">
					<h1 id="logo"><img src="images/1.jpg" width="60" height="60"></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">ข้อความ</a></li>
							<li class="current"><a href="ประวัติของลูกค้า.html">ประวัติลูกค้า</a></li>
							<li class="current"><a href="ตรวจสอบที่นั่ง.html">ตรวจสอบที่นั่ง</a></li>
							<li class="current"><a href="อนุมัติการจอง.html">อนุมัติการจอง</a></li>
							<li class="current"><a href="index.html">ออกจากระบบ</a></li>


						</ul>
					</nav>
				</div>
				</header>

					<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>ประวัติของลูกค้า</h2>
						</header>

					</div>
				</section>

				<!-- Three -->
					<section class="wrapper style3 container special">

			<div style="background-color:#ffa8fb;">	
			<div class="w3-container">

				<div class="w3-row w3-border">
  					<div class="w3-container w3-half">
    					<h2>ชื่อ-สกุล พอรออาวอ พราว</h2>  
    					<p>วันเกิด : 10/11/38.</p>
    					<p>เบอร์โทรศัพท์ : 089-9999999.</p>
    					<p><strong>E-mail : proud_1@hotmail.com </strong></p>
  					</div>
  					<div class="w3-container w3-half">
    					<h2>ชื่อ-สกุล อออาอาร์ อาร์</h2>  
    					<p>วันเกิด : 30/10/38.</p>
    					<p>เบอร์โทรศัพท์ : 089-9999998.</p>
    					<p><strong>E-mail : Raaaa_1@hotmail.com </strong></p>
  					</div>
  					<div class="w3-container w3-half">
    					<h2>ชื่อ-สกุล สะกิม  กิม</h2>  
    					<p>วันเกิด : 21/11/38.</p>
    					<p>เบอร์โทรศัพท์ : 089-9999997.</p>
    					<p><strong>E-mail : Skim_1@hotmail.com </strong></p>
  					</div>
  					<div class="w3-container w3-half">
    					<h2>ชื่อ-สกุล มะมิว  มิว</h2>  
    					<p>วันเกิด : 07/04/39.</p>
    					<p>เบอร์โทรศัพท์ : 089-9999996.</p>
    					<p><strong>E-mail : Mamew_1@hotmail.com </strong></p>
  					</div>
			</div>
		</div>

		</div>
		</section>
		<section id="cta">

					<header>
						<h2><strong>Tuber  Thailand</strong></h2>
						<p>
						<br />
						สถานที่ที่จุดประกายความคิดสร้างสรรค์
						<br />
						และเชื่อมโยงผู้คนเข้ามาร่วมมือกันด้วยความอบอุ่นเป็นกันเอง
						<br /> 
						</p>
					</header>
					<footer>
						
					</footer>

				</section>

		
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php }?>
