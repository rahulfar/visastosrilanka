<?php
include "../config/common.inc.php";
include "../controller/function.php";

 $result = get_application_data($_GET['refno']);
 
	$result2 = get_app_payment_details($_GET['refno']);
	
 $country_details = get_country_details();

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta name="author" content="codepixer">
		<meta name="keywords" content="turkey evisa, turkey visa, turkish visa, official turkey visa, official turkey evisa, republic of turkey, visa for turkey, turkish visa online, turkey visa online, visa turkey, online visa turkey, visa to turkey, turkish visa application, e visa turkey, evisa turkey">
		<meta name="description" content="Republic of Turkey, Official Turkey visa, Official Turkey Visa Website, Official Turkey eVisa Website, Online Application Form, Official Turkish Travel eVisa, Apply for Turkish Visa Online. evisa for turkey, visa to turkey, visa for turkey, turkey visa, evisa turkey, tukish visa, turkish evisa">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Turkish Immigration</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="../img/main_home2.png">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/nice-select.css">					
			<link rel="stylesheet" href="../css/animate.min.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">
			<link rel="stylesheet" href="../css/main.css">
			<!-- Date picker -->
			  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<!-- end -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d63bcd977aa790be330c248/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->	

<!-- Global site tag (gtag.js) - Google Ads: 985043384 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-985043384"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-985043384');
</script>
<!-- Event snippet for Lead conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-985043384/UQv3COjD2ggQuKPa1QM',
      'value': 1.0,
      'currency': 'INR'
  });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148463698-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148463698-1');
</script>


		
<style>
p {
    margin-bottom: 0px;
}
.text-white {
    color: #ffffff !important;
    text-align: center;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  margin-top: 80px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
button.continue_button.text-white {
    background-color: #00bc66;
    font-size: 23px;
    padding: 10px;
    border-radius: 20px;
    cursor: pointer;
	margin-top: 50px;
}
p.count_class {
    background-color: #3a4b5c;
    width: 290px;
    color: white;
    font-size: 20px;
    padding: 1px;
    padding-left: 10px;
}
hr.hr_class {
    border: 2px solid #3a4b5c;
}
hr.hr_class2 {
    border: 2px solid green;
}
.fa-check-square:before {
    content: "\f14a";
    color: green;
}
p.head_2 {
    float: right;
    padding: 20px;
}
p.head_1 {
    font-size: 20px;
    color: #3a4b5c;
}
.check_entries {
    border-style: outset;
}
img.img-fluid {
    height: 54px;
    margin: 5px 15px;
}
#header {
    padding: 15px 0px;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    transition: all 0.5s;
    z-index: 997;
    background-image: linear-gradient(-180deg,#4a0d0d 0,#000000 100%);
}
hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgb(255, 255, 255);
}
.header-top span {
    color: #e4e4e4;
    font-weight: 300;
}
.nav-menu a {
    padding: 0px 45px 8px 4px;
    text-decoration: none;
    display: inline-block;
    color: #fff;
    font-weight: 500;
    font-size: 12px;
    text-transform: uppercase;
    outline: none;
}
.header-top .menu-top-right span {
    background-color: #00bc66;
    color: #fff;
    padding: 5px;
    font-size: 18px;
    font-weight: 800;
    margin-left: 8px;
    border-radius: 15px;
}
.header-top .menu-top-right .tel {
    color: #fff;
    font-weight: 500;
}
.nav-menu li:hover > a, .nav-menu > .menu-active > a {
    color: #e31b17;
}
.primary-btn {
    background-color: #00bc66;
    border-radius: 50px;
}
.calltotop-area .call-right .call-btn {
    background-color: #e31b17;
}
body {
    color: #000000;
    font-family: Georgia!important;
    font-size: 15px;
    font-weight: 300;
    line-height: 1.625em;
    position: relative;
}
p.new_application {
    color: #00bc66;
    font-size: 30px;
}
.table th, .table td {
    padding: 0.5rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.error {
    color: red;
    font-size: 16px;
}
p.primary-btn2.mt-20.text-white {
    background-color: #00bc66;
    height: 40px;
    margin-left: 500px;
    margin-right: 500px;
    cursor: pointer;
    padding-top: 9px;
    border-radius: 10px;
}
a.repeat-add.pure-button.pure-button-primary {
    background-color: red;
    color: white;
    font-size: 15px;
    padding: 10px;
    border-radius: 45px;
	    cursor: pointer;
}
a.repeat-remove.pure-button.pure-button-primary {
    background-color: red;
    color: white;
    font-size: 15px;
    padding: 10px;
    border-radius: 45px;
	cursor: pointer;
}
.check_entries {
    border-style: outset;
}
.footer-area {
    background-color: #f9f9f9;
}
.footer-area .number {
    color: #000000;
    font-size: 15px;
    font-weight: 800;
    line-height: 25px;
}
footer.footer-area.section-gap {
    padding-top: 30px;
    padding-bottom: 30px;
}
input#no_entries {
    color: #00bc66;
	text-align: center;
    font-size: 15px;
}
input#visa_duration {
    color: #00bc66;
	text-align: center;
    font-size: 15px;
}
input#stay_exceed {
    color: #00bc66;
	text-align: center;
    font-size: 15px;
}
.contact-page-area .form-area input {
    padding: 7px;
}
select#country_citizenship {
    height: 35px;
}
.pt-100 {
    padding-top: 0px;
}
#flowBoxes {
    margin:auto;
    padding:20px;
    min-width:700px;
	margin-left: 118px;

}
#flowBoxes div {
    display: inline-block;
    height: 45px;
    line-height: 46px;
    padding: 0 20px;
    margin-right: 2px;
    background-color:white;
}

#flowBoxes div.right:after{
    content:'';
    border-top:1px solid #ccc;
    border-right:1px solid #ccc;
    width:18px;
    height:18px;
    position:absolute;
    right:0;
    top:-1px;
    background-color:white;
    z-index:150;
    
    -webkit-transform: translate(10px,4px) rotate(45deg);
       -moz-transform: translate(10px,4px) rotate(45deg);
        -ms-transform: translate(10px,4px) rotate(45deg);
         -o-transform: translate(10px,4px) rotate(20deg); 
            transform: translate(10px,4px) rotate(45deg);
}

#flowBoxes div.left:before{
    content:'';
    border-top:1px solid #ccc;
    border-right:1px solid #ccc;
    width:18px;
    height:18px;
    position:absolute;
    left:0;
    top:-1px;
    background-color:white;
    z-index:50;
    
    -webkit-transform: translate(-10px,4px) rotate(45deg);
       -moz-transform: translate(-10px,4px) rotate(45deg);
        -ms-transform: translate(-10px,4px) rotate(45deg);
         -o-transform: translate(-10px,4px) rotate(20deg);
            transform: translate(-10px,4px) rotate(45deg);
}
#flowBoxes .active{
    background-color:#3a4b5c;
    color:white;
}
#flowBoxes div.active:after{
    background-color:#3a4b5c;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}
.remove_class {
    background-color: #00bc66;
    padding: 2px;
    margin-left: 962px;
    color: white;
    margin-top: -24px;
    cursor: pointer;
}
.col-lg-4.col-sm-4.menu-top-right.img_flag img {
    height: 15px;
}
.col-lg-4.col-sm-4.menu-top-right.img_flag {
    font-size: 14px;
	padding-left: 0px;
}

.header-top .menu-top-right .tel {
    color: #fff;
    font-weight: 500;
    font-family: -webkit-body;
}
label.lnr.lnr-envelope {
    color: red;
    font-size: 19px;
}
label.v_id {
    color: red;
    font-family: -webkit-body;
    font-size: 20px;
}
.itinerary_details {
    background-color: #b9b9b9;
    color: #070101;
    padding: 2px;
    font-size: 18px;
    margin-top: 20px;
}
label.tbl_td {
    font-size: 14px;
    font-weight: 700;
}
button.New_save_and_continue {
    background-color: #00bc66;
    padding: 11px;
    color: white;
    font-size: 24px;
    border-radius: 50px;
	cursor:pointer;
	margin-top: 15px;
}
div#activ_div1 {
    width: 263px;
}
div#activ_div2 {
    width: 263px;
}
div#activ_div3 {
    width: 263px;
}
div#activ_div4 {
    width: 263px;
}
p.dear_class {
    font-size: 20px;
}
.section-gap {
    padding: 100px 0 0!important;
}
.table-responsive {
    display:table!important;
}
</style>
		</head>
	<header id="header" id="home">
			    	<div class="row header-top align-items-center">
						<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
							<a href="../index.php">
								<img class="img-fluid" src="../img/main_file.png" alt="">	
							</a>			    			
			    		</div>
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			<span>
			    				Republic of Turkey Electronic <br> Visa Application System 
			    			</span>		
							
			    		</div>
			    		
			    		<div class="col-lg-4 col-sm-4 menu-top-right img_flag">
			    			<img src="../img/elements/f2.jpg" alt="flag"><label class="tel">+1-866-212-3292</label>, <img src="../img/elements/f3.jpg" alt="flag"><label class="tel">+44-800-041-8074</label>,  <img src="../img/elements/f5.jpg" alt="flag"><label class="tel">+61-180-059-2404</label><br><label class="lnr lnr-envelope"></label> <label class="tel">support@turkeyvisagovt.com</label>
							
			    		</div>
			    	</div>
	</header><!-- #header -->
	<!-- Start contact-page Area -->
		<section class="contact-page-area section-gap thanku">
				<br>
				<br>
				<center><p class="new_application">Thank You For The Payment</p></center><br>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<center><p>Please note down the Temporary Application ID : <label class="v_id"><?php echo $result[0]['app_id']; ?></label></p></center>
							<hr class="hr_class">
							<p class="dear_class"> Dear <?php echo $result[0]['name'] ?> <?php echo $result[0]['surname'] ?></p>
							<div class="txt">
							<p> Thank you for applying Turkey e-Visa service. We appreciate your interest in visiting Turkey.</p>
							<p> Your Application has been successfully received with following details.</p>
							</div>
							<div class="itinerary_details"> Payment Detail</div>
								<table class="table table-responsive">
									<tbody>
									  <tr>
										<td><label style="color:red;" class="tbl_td">Amount Paid</label></td>
										<td><label style="color:#00bc66;"><?php if($result[0]['country_of_citizenship'] == 'United Kingdom'){ echo "£";}else{echo "$";} ?> <?php echo $result2['pay_amount']; ?></label></td>
										<td><label style="color:red;" class="tbl_td">Transaction Id</label></td>
										<td><label style="color:#00bc66;"><?php echo $result2['txn_id']; ?></label></td>
										<td><label style="color:red;" class="tbl_td">Transaction Date</label></td>
										<td><label style="color:#00bc66;"><?php echo $result2['created_at']; ?></label></td>
									  </tr>
									</tbody>
								</table>
							<div class="itinerary_details"> Itinerary Details</div>
								<table class="table table-responsive">
									<tbody>
									  <tr>
										<td><label class="tbl_td">Number of Visa</label></td>
										<td><label><?php echo count($result); ?></label></td>
										<td><label class="tbl_td">Number of Entries</label></td>
										<td><label><?php echo $result[0]['number_of_entries']; ?></label></td>
									  </tr>
									  <tr>
										<td><label class="tbl_td">Country Citizenship</label></td>
										<td><label><?php echo $result[0]['country_of_citizenship']; ?></label></td>
										<td><label class="tbl_td">Visa Duration</label></td>
										<td><label><?php echo $result[0]['visa_duration']; ?></label></td>
									  </tr>
									  <tr>
										<td><label class="tbl_td">Arrival Date</label></td>
										<td><label><?php echo $result[0]['arrival_date']; ?></label></td>
										<td><label class="tbl_td">Your stay cannot exceed</label></td>
										<td><label><?php echo $result[0]['your_stay_cannot_exceed']; ?></label></td>
									  </tr>
									</tbody>
								</table>

								<?php
								$count = 1;
									foreach($result as $data){
								?>
										<div class= "main_class">
										<div class="itinerary_details"><?php echo $count; ?> Applicant Passport Details</div>
											<table class="table table-responsive">
												<tbody>
												  <tr>
													<td><label class="tbl_td">Given Name</label></td>
													<td><label><?php echo $data['name']; ?></label></td>
													<td><label class="tbl_td">Surname</label></td>
													<td><label><?php echo $data['surname']; ?></label></td>
													<td><label class="tbl_td">Country Of Residence</label></td>
													<td><label><?php echo $data['country_of_residence']; ?></label></td>
												  </tr>
												  <tr>
													<td><label class="tbl_td">Date of Birth </label></td>
													<td><label><?php echo $data['date_of_birth']; ?></label></td>
													<td><label class="tbl_td">Passport Number</label></td>
													<td><label><?php echo $data['passport_number']; ?></label></td>
													<td><label class="tbl_td">Email Address</label></td>
													<td><label><?php echo $data['email']; ?></label></td>
												  </tr>
												</tbody>
											</table>
										</div>
								<?php
								$count ++;
									}
								?>
							<hr class="hr_class">	
							<div class="txt">
							<p> Note: Normal Processing will take 72 hours, Urgent Processing will take 24 hours and Rush processing will take 2 hour and a response will be send to the email provided in the visa application. </p><br>
							<p>For any assistance contact e-Visa support center at  <a style="color:red;">support@turkeyvisagovt.com</a>  </p><br>
							<p>e-Visa once submitted is non-refundable as the fee is for processing of the application and is not dependent on either grant or rejection of visa You can enquire of visa status by request on our email  <a style="color:red;">support@turkeyvisagovt.com</a> </p>
							</div>
						</div>
					</div>
					
				</div>
		</section>
		
</body>

	<!-- start footer Area -->		
			<footer class="footer-area section-gap">
<!-- Global site tag (gtag.js) - Google Ads: 743497013 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-743497013"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-743497013');
</script>

<!-- Event snippet for AGL_Indian_Visa conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-743497013/9LGiCP-axZ0BELW6w-IC'});
</script>
<?php include ('footer.php') ?>
			</footer>			
			<!-- End footer Area -->
	</html>
	
















