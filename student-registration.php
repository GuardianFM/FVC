<?php /* * *******************************Session Check********************************************* */
session_start();
//if (isset($_SESSION['email']) && $_SESSION['email'] == true) {
//   
//} else {
//   
//    header("Location: http://focusvisaconsultants.com/Student_login.php");
//}
?>


<!DOCTYPE html>
<html lang="en">

<!-- about-us21:55  -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Student Registration</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Css Files -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/slick-slider.css" rel="stylesheet">
<link href="css/prettyphoto.css" rel="stylesheet">
<link href="build/mediaelementplayer.css" rel="stylesheet">
<link href="style1.css" rel="stylesheet">
<link href="css/color.css" rel="stylesheet">
<link href="css/color-two.css" rel="stylesheet">
<link href="css/color-three.css" rel="stylesheet">
<link href="css/color-four.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/favicon.png" type="image/png" sizes="90x90">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112690156-6"></script>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-112690156-6');
</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
    .modal-dialog {
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
}

.modal-content {
  margin: 0 auto;
}
 .error{
                outline: 1px solid red;
            } 
</style>

</head>
<body>
    <?php
    
    
    
    ?>
    
    
    
    
<!--   <div class="container">-->
<!--   <div class="modal fade" id="popUpWindow">-->
<!--      <div class="modal-dialog">-->
<!--        <div class="modal-content row align-items-center">-->

          <!-- Header -->
<!--          <div class="modal-header">-->
<!--            <button   id="cls_button"  type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--            <h2 class="modal-title">Log In</h2>-->
<!--          </div>-->
<!--<form role="form">-->
          <!-- Body -->
<!--          <div class="modal-body col-md-12">-->
            
<!--              <div class="form-group">-->
                  
<!--                  <input type="email" id="user_email" class="form-control" placeholder="Email" />-->
<!--              </div>-->
<!--              <div class="form-group">-->
<!--                  <input type="password" id="user_password" class="form-control" placeholder="Password" />-->
<!--              </div>-->
            
<!--          </div>-->

          <!-- Button -->
<!--          <div class="modal-footer">-->
              
<!--             <button id="submit_btn" class="btn btn-primary btn-block">Login</button>	-->
<!--             <div class="col-md-12" style="width:100%;text-align: center;"><a id="signup" onclick="signup();" class="align-middle">Don't have an account <span style="color: red;"> Click Here</span></a></div>-->
<!--          </div>-->
          
<!--</form>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
    
    
    
    
<!--     <div class="container">-->
<!--   <div class="modal fade" id="signup_modal">-->
<!--      <div class="modal-dialog">-->
<!--        <div class="modal-content row align-items-center">-->

          <!-- Header -->
<!--          <div class="modal-header">-->
<!--            <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--            <h2 class="modal-title">Sign Up</h2>-->
<!--          </div>-->
<!--<form role="form">-->
          <!-- Body -->
<!--          <div class="modal-body col-md-12">-->
            
<!--              <div class="form-group">-->
                  
<!--                  <input type="email" id="user_reg_email" class="form-control" placeholder="Email" />-->
<!--              </div>-->
<!--              <div class="form-group">-->
<!--                  <input type="password" id="user_reg_password" class="form-control" placeholder="Password" />-->
<!--              </div>-->
            
<!--          </div>-->

          <!-- Button -->
<!--          <div class="modal-footer">-->
<!--               login here-->
<!--             <button id="Sign_up_button" class="btn btn-primary btn-block">Login</button>	-->
<!--             <div style="width:100%;text-align: center"><a id="register" class="align-middle">Already have an account <span style="color: red;"> Login here</span</a></div>-->
<!--          </div>-->
          
<!--</form>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
    
    
    
    
    
    
    
    
    
    
<!--// Main Wrapper \\-->
<div class="wm-main-wrapper">

     <!--// Header \\-->
            <header id="wm-header" class="wm-header-two">

        <!--// TopStrip \\-->
                    <div class="wm-topstrip">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="wm-stripinfo">
                            <li>Welcome to Focus Visa Consultant</li>
</ul>
                        <div class="wm-right-section">
                                                            <ul class="wm-adminuser-section wm-stripinfo">
            <li><i style="color: white;" class="fa fa-envelope"></i>info@focusvisaconsultants.com</li>
                               
 <li><i class="fa fa-phone" aria-hidden="true" style="font-size:14px"></i>+92-4604602</li>
                            <li><i class="wmicon-time2"></i> Mon - fri: 9:00am - 5:00pm</li>
                            <li><i class="fa fa-user"></i> <a id="login" href="" target="_blank" onclick="login();">Login</a></li>
</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// TopStrip \\-->

        <!--// MainHeader \\-->
        <div class="wm-main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"><a href="index1.html" class="wm-logo"><img src="images/logo-2.png" alt=""></a></div>
                    <div class="col-md-9">
                        <!--// Navigation \\-->
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                            <div class="collapse navbar-collapse" id="navbar-collapse-1"><ul class="nav navbar-nav">
<li class="active"><a href="index1.html">Home</a></li>
<li><a href="student-registration.html">Apply Online</a></li>
<li><a href="education-consultant-in-pakistan.html">About us</a></li>
<li><a href="oversea-education-consultant-pakistan.html">Study Abroad</a></li>
<li><a href="study-aboard-consultant.html">FAQs</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="contact-us.html">Contact us</a></li>

</ul>
                            </div>
                        </nav>
                        <!--// Navigation \\-->
                      </div>
                </div>
            </div>
        </div>
        <!--// MainHeader \\-->

            </header>
            <!--// Header \\-->


    <!--// Mini Header \\-->
    <div class="wm-mini-header">
        <span class="wm-blue-transparent"></span>
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-mini-title">
                        <h1>Apply Online</h1> 
                    </div>
                    <div class="wm-breadcrumb">
                        <ul>
                            <li><a href="index1.html">Home</a></li>
                            <li>Apply Online</li>
                        </ul>
                    </div>      
                </div>
            </div>
        </div>    
    </div>
    <!--// Mini Header \\-->

            <!--// Main Content \\-->
            <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section wm-popular-courses-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-2" style="background: black;"></div>
                    <div class="col-md-8">
                        <div class="wm-fancytitle-two"> 
                                                    <h2>Apply Online</h2> 
                                                    <p>Fill out the form carefully for registration</p></div>
                    <div class="wm-courses">
                        <div class="row">
                                                                <div class="col-md-12">
                                                                        <div class="wm-student-dashboard-settings wm-contact-form">

                                                                <form action="student-registration.php" method="post" id="email-form" enctype='multipart/form-data'>
                                                                        <ul>
                                                                         <div class="row">
                                                                                <div class="col-md-12">
                                                                                     <input type="text" placeholder="" name="id" id="id" value="<?php echo $_SESSION['user_id'] ?>">
                                                                                <label>Name</label>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                   
                                                                                    <input style="font-family:Ubuntu,sans-serif" type="text" placeholder="First Name" name="f_name" id="f_name">
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                <input type="text"  placeholder="Last Name" name="last_name" id="last_name">
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <label>Date of Birth</label>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <input type="text"  placeholder="01-01-2019" name="dob" id="dob">
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <label>Address</label>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <input type="text" placeholder="Street Address" name="street_address" id="street_address">
                                                                                </div>



                                                                                <div class="col-md-6">
                                                                                <input type="text"  placeholder="Postal / Zip Code"  name="zip_code" id="zip_code">
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                        <div class="wm-select-two">
                                                                                                <select  name="country" id="country" >
                                                                                                          <option selected disabled>Select Country</option>
                                                                                                          <option value="United States"> United States </option>
                                                                                                          <option value="Afghanistan"> Afghanistan </option>
                                                                                                          <option value="Albania"> Albania </option>
                                                                                                          <option value="Algeria"> Algeria </option>
                                                                                                          <option value="American Samoa"> American Samoa </option>
                                                                                                          <option value="Andorra"> Andorra </option>
                                                                                                          <option value="Angola"> Angola </option>
                                                                                                          <option value="Anguilla"> Anguilla </option>
                                                                                                          <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                                                                                          <option value="Argentina"> Argentina </option>
                                                                                                          <option value="Armenia"> Armenia </option>
                                                                                                          <option value="Aruba"> Aruba </option>
                                                                                                          <option value="Australia"> Australia </option>
                                                                                                          <option value="Austria"> Austria </option>
                                                                                                          <option value="Azerbaijan"> Azerbaijan </option>
                                                                                                          <option value="The Bahamas"> The Bahamas </option>
                                                                                                          <option value="Bahrain"> Bahrain </option>
                                                                                                          <option value="Bangladesh"> Bangladesh </option>
                                                                                                          <option value="Barbados"> Barbados </option>
                                                                                                          <option value="Belarus"> Belarus </option>
                                                                                                          <option value="Belgium"> Belgium </option>
                                                                                                          <option value="Belize"> Belize </option>
                                                                                                          <option value="Benin"> Benin </option>
                                                                                                          <option value="Bermuda"> Bermuda </option>
                                                                                                          <option value="Bhutan"> Bhutan </option>
                                                                                                          <option value="Bolivia"> Bolivia </option>
                                                                                                          <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                                                                                          <option value="Botswana"> Botswana </option>
                                                                                                          <option value="Brazil"> Brazil </option>
                                                                                                          <option value="Brunei"> Brunei </option>
                                                                                                          <option value="Bulgaria"> Bulgaria </option>
                                                                                                          <option value="Burkina Faso"> Burkina Faso </option>
                                                                                                          <option value="Burundi"> Burundi </option>
                                                                                                          <option value="Cambodia"> Cambodia </option>
                                                                                                          <option value="Cameroon"> Cameroon </option>
                                                                                                          <option value="Canada"> Canada </option>
                                                                                                          <option value="Cape Verde"> Cape Verde </option>
                                                                                                          <option value="Cayman Islands"> Cayman Islands </option>
                                                                                                          <option value="Central African Republic"> Central African Republic </option>
                                                                                                          <option value="Chad"> Chad </option>
                                                                                                          <option value="Chile"> Chile </option>
                                                                                                          <option value="China"> China </option>
                                                                                                          <option value="Christmas Island"> Christmas Island </option>
                                                                                                          <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                                                                                          <option value="Colombia"> Colombia </option>
                                                                                                          <option value="Comoros"> Comoros </option>
                                                                                                          <option value="Congo"> Congo </option>
                                                                                                          <option value="Cook Islands"> Cook Islands </option>
                                                                                                          <option value="Costa Rica"> Costa Rica </option>
                                                                                                          <option value="Cote d'Ivoire"> Cote d'Ivoire </option>
                                                                                                          <option value="Croatia"> Croatia </option>
                                                                                                          <option value="Cuba"> Cuba </option>
                                                                                                          <option value="Cyprus"> Cyprus </option>
                                                                                                          <option value="Czech Republic"> Czech Republic </option>
                                                                                                          <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                                                                                                          <option value="Denmark"> Denmark </option>
                                                                                                          <option value="Djibouti"> Djibouti </option>
                                                                                                          <option value="Dominica"> Dominica </option>
                                                                                                          <option value="Dominican Republic"> Dominican Republic </option>
                                                                                                          <option value="Ecuador"> Ecuador </option>
                                                                                                          <option value="Egypt"> Egypt </option>
                                                                                                          <option value="El Salvador"> El Salvador </option>
                                                                                                          <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                                                                                          <option value="Eritrea"> Eritrea </option>
                                                                                                          <option value="Estonia"> Estonia </option>
                                                                                                          <option value="Ethiopia"> Ethiopia </option>
                                                                                                          <option value="Falkland Islands"> Falkland Islands </option>
                                                                                                          <option value="Faroe Islands"> Faroe Islands </option>
                                                                                                          <option value="Fiji"> Fiji </option>
                                                                                                          <option value="Finland"> Finland </option>
                                                                                                          <option value="France"> France </option>
                                                                                                          <option value="French Polynesia"> French Polynesia </option>
                                                                                                          <option value="Gabon"> Gabon </option>
                                                                                                          <option value="The Gambia"> The Gambia </option>
                                                                                                          <option value="Georgia"> Georgia </option>
                                                                                                          <option value="Germany"> Germany </option>
                                                                                                          <option value="Ghana"> Ghana </option>
                                                                                                          <option value="Gibraltar"> Gibraltar </option>
                                                                                                          <option value="Greece"> Greece </option>
                                                                                                          <option value="Greenland"> Greenland </option>
                                                                                                          <option value="Grenada"> Grenada </option>
                                                                                                          <option value="Guadeloupe"> Guadeloupe </option>
                                                                                                          <option value="Guam"> Guam </option>
                                                                                                          <option value="Guatemala"> Guatemala </option>
                                                                                                          <option value="Guernsey"> Guernsey </option>
                                                                                                          <option value="Guinea"> Guinea </option>
                                                                                                          <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                                                                                          <option value="Guyana"> Guyana </option>
                                                                                                          <option value="Haiti"> Haiti </option>
                                                                                                          <option value="Honduras"> Honduras </option>
                                                                                                          <option value="Hong Kong"> Hong Kong </option>
                                                                                                          <option value="Hungary"> Hungary </option>
                                                                                                          <option value="Iceland"> Iceland </option>
                                                                                                          <option value="India"> India </option>
                                                                                                          <option value="Indonesia"> Indonesia </option>
                                                                                                          <option value="Iran"> Iran </option>
                                                                                                          <option value="Iraq"> Iraq </option>
                                                                                                          <option value="Ireland"> Ireland </option>
                                                                                                          <option value="Israel"> Israel </option>
                                                                                                          <option value="Italy"> Italy </option>
                                                                                                          <option value="Jamaica"> Jamaica </option>
                                                                                                          <option value="Japan"> Japan </option>
                                                                                                          <option value="Jersey"> Jersey </option>
                                                                                                          <option value="Jordan"> Jordan </option>
                                                                                                          <option value="Kazakhstan"> Kazakhstan </option>
                                                                                                          <option value="Kenya"> Kenya </option>
                                                                                                          <option value="Kiribati"> Kiribati </option>
                                                                                                          <option value="North Korea"> North Korea </option>
                                                                                                          <option value="South Korea"> South Korea </option>
                                                                                                          <option value="Kosovo"> Kosovo </option>
                                                                                                          <option value="Kuwait"> Kuwait </option>
                                                                                                          <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                                                                                          <option value="Laos"> Laos </option>
                                                                                                          <option value="Latvia"> Latvia </option>
                                                                                                          <option value="Lebanon"> Lebanon </option>
                                                                                                          <option value="Lesotho"> Lesotho </option>
                                                                                                          <option value="Liberia"> Liberia </option>
                                                                                                          <option value="Libya"> Libya </option>
                                                                                                          <option value="Liechtenstein"> Liechtenstein </option>
                                                                                                          <option value="Lithuania"> Lithuania </option>
                                                                                                          <option value="Luxembourg"> Luxembourg </option>
                                                                                                          <option value="Macau"> Macau </option>
                                                                                                          <option value="Macedonia"> Macedonia </option>
                                                                                                          <option value="Madagascar"> Madagascar </option>
                                                                                                          <option value="Malawi"> Malawi </option>
                                                                                                          <option value="Malaysia"> Malaysia </option>
                                                                                                          <option value="Maldives"> Maldives </option>
                                                                                                          <option value="Mali"> Mali </option>
                                                                                                          <option value="Malta"> Malta </option>
                                                                                                          <option value="Marshall Islands"> Marshall Islands </option>
                                                                                                          <option value="Martinique"> Martinique </option>
                                                                                                          <option value="Mauritania"> Mauritania </option>
                                                                                                          <option value="Mauritius"> Mauritius </option>
                                                                                                          <option value="Mayotte"> Mayotte </option>
                                                                                                          <option value="Mexico"> Mexico </option>
                                                                                                          <option value="Micronesia"> Micronesia </option>
                                                                                                          <option value="Moldova"> Moldova </option>
                                                                                                          <option value="Monaco"> Monaco </option>
                                                                                                          <option value="Mongolia"> Mongolia </option>
                                                                                                          <option value="Montenegro"> Montenegro </option>
                                                                                                          <option value="Montserrat"> Montserrat </option>
                                                                                                          <option value="Morocco"> Morocco </option>
                                                                                                          <option value="Mozambique"> Mozambique </option>
                                                                                                          <option value="Myanmar"> Myanmar </option>
                                                                                                          <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                                                                                                          <option value="Namibia"> Namibia </option>
                                                                                                          <option value="Nauru"> Nauru </option>
                                                                                                          <option value="Nepal"> Nepal </option>
                                                                                                          <option value="Netherlands"> Netherlands </option>
                                                                                                          <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                                                                                          <option value="New Caledonia"> New Caledonia </option>
                                                                                                          <option value="New Zealand"> New Zealand </option>
                                                                                                          <option value="Nicaragua"> Nicaragua </option>
                                                                                                          <option value="Niger"> Niger </option>
                                                                                                          <option value="Nigeria"> Nigeria </option>
                                                                                                          <option value="Niue"> Niue </option>
                                                                                                          <option value="Norfolk Island"> Norfolk Island </option>
                                                                                                          <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                                                                                          <option value="Northern Mariana"> Northern Mariana </option>
                                                                                                          <option value="Norway"> Norway </option>
                                                                                                          <option value="Oman"> Oman </option>
                                                                                                          <option value="Pakistan"> Pakistan </option>
                                                                                                          <option value="Palau"> Palau </option>
                                                                                                          <option value="Palestine"> Palestine </option>
                                                                                                          <option value="Panama"> Panama </option>
                                                                                                          <option value="Papua New Guinea"> Papua New Guinea </option>
                                                                                                          <option value="Paraguay"> Paraguay </option>
                                                                                                          <option value="Peru"> Peru </option>
                                                                                                          <option value="Philippines"> Philippines </option>
                                                                                                          <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                                                                                          <option value="Poland"> Poland </option>
                                                                                                          <option value="Portugal"> Portugal </option>
                                                                                                          <option value="Puerto Rico"> Puerto Rico </option>
                                                                                                          <option value="Qatar"> Qatar </option>
                                                                                                          <option value="Republic of the Congo"> Republic of the Congo </option>
                                                                                                          <option value="Romania"> Romania </option>
                                                                                                          <option value="Russia"> Russia </option>
                                                                                                          <option value="Rwanda"> Rwanda </option>
                                                                                                          <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                                                                                          <option value="Saint Helena"> Saint Helena </option>
                                                                                                          <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                                                                                          <option value="Saint Lucia"> Saint Lucia </option>
                                                                                                          <option value="Saint Martin"> Saint Martin </option>
                                                                                                          <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                                                                                          <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                                                                                          <option value="Samoa"> Samoa </option>
                                                                                                          <option value="San Marino"> San Marino </option>
                                                                                                          <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                                                                                          <option value="Saudi Arabia"> Saudi Arabia </option>
                                                                                                          <option value="Senegal"> Senegal </option>
                                                                                                          <option value="Serbia"> Serbia </option>
                                                                                                          <option value="Seychelles"> Seychelles </option>
                                                                                                          <option value="Sierra Leone"> Sierra Leone </option>
                                                                                                          <option value="Singapore"> Singapore </option>
                                                                                                          <option value="Slovakia"> Slovakia </option>
                                                                                                          <option value="Slovenia"> Slovenia </option>
                                                                                                          <option value="Solomon Islands"> Solomon Islands </option>
                                                                                                          <option value="Somalia"> Somalia </option>
                                                                                                          <option value="Somaliland"> Somaliland </option>
                                                                                                          <option value="South Africa"> South Africa </option>
                                                                                                          <option value="South Ossetia"> South Ossetia </option>
                                                                                                          <option value="South Sudan"> South Sudan </option>
                                                                                                          <option value="Spain"> Spain </option>
                                                                                                          <option value="Sri Lanka"> Sri Lanka </option>
                                                                                                          <option value="Sudan"> Sudan </option>
                                                                                                          <option value="Suriname"> Suriname </option>
                                                                                                          <option value="Svalbard"> Svalbard </option>
                                                                                                          <option value="eSwatini"> eSwatini </option>
                                                                                                          <option value="Sweden"> Sweden </option>
                                                                                                          <option value="Switzerland"> Switzerland </option>
                                                                                                          <option value="Syria"> Syria </option>
                                                                                                          <option value="Taiwan"> Taiwan </option>
                                                                                                          <option value="Tajikistan"> Tajikistan </option>
                                                                                                          <option value="Tanzania"> Tanzania </option>
                                                                                                          <option value="Thailand"> Thailand </option>
                                                                                                          <option value="Timor-Leste"> Timor-Leste </option>
                                                                                                          <option value="Togo"> Togo </option>
                                                                                                          <option value="Tokelau"> Tokelau </option>
                                                                                                          <option value="Tonga"> Tonga </option>
                                                                                                          <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                                                                                          <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                                                                                          <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                                                                                          <option value="Tunisia"> Tunisia </option>
                                                                                                          <option value="Turkey"> Turkey </option>
                                                                                                          <option value="Turkmenistan"> Turkmenistan </option>
                                                                                                          <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                                                                                          <option value="Tuvalu"> Tuvalu </option>
                                                                                                          <option value="Uganda"> Uganda </option>
                                                                                                          <option value="Ukraine"> Ukraine </option>
                                                                                                          <option value="United Arab Emirates"> United Arab Emirates </option>
                                                                                                          <option value="United Kingdom"> United Kingdom </option>
                                                                                                          <option value="Uruguay"> Uruguay </option>
                                                                                                          <option value="Uzbekistan"> Uzbekistan </option>
                                                                                                          <option value="Vanuatu"> Vanuatu </option>
                                                                                                          <option value="Vatican City"> Vatican City </option>
                                                                                                          <option value="Venezuela"> Venezuela </option>
                                                                                                          <option value="Vietnam"> Vietnam </option>
                                                                                                          <option value="British Virgin Islands"> British Virgin Islands </option>
                                                                                                          <option value="Isle of Man"> Isle of Man </option>
                                                                                                          <option value="US Virgin Islands"> US Virgin Islands </option>
                                                                                                          <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                                                                                          <option value="Western Sahara"> Western Sahara </option>
                                                                                                          <option value="Yemen"> Yemen </option>
                                                                                                          <option value="Zambia"> Zambia </option>
                                                                                                          <option value="Zimbabwe"> Zimbabwe </option>
                                                                                                          <option value="other"> Other </option>
                                                                                                </select>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                <label>Student E-mail</label>
                                                                                <input type="email"  placeholder="ex: yourname@example.com"  name="u_email" id="u_email" >
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                <label>Mobile Number</label>
                                                                                <input type="text"  placeholder="Mobile"  name="mobile" id="mobile">
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <label>Which City you are from ?</label>
                                                                                <input type="text"  placeholder="Type Here" name="which_city" id="which_city" >
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                <label>Program of Interest</label>
                                                                                <div class="wm-select-two" id="highest_qualification_1" >
                                                                                <select  name="highest_qualification" id="highest_qualification">
                                                                                                <option selected disabled >Please Select</option>
                                                                                                <option value="Undergraduate"> Undergraduate </option>
                                                                                                <option value="Post Graduate "> Post Graduate </option>
                                                                                                <option value="Online PGD "> Online PGD </option>
                                                                                                <option value="Diploma/Certificate Course "> Diploma/Certificate Course </option>
                                                                                                <option value="English Language Course "> English Language Course </option>

                                                                                        <!--	<option value="MA / MS Honors/ MPHILL - 18th year "> MA / MS Honors/ MPHILL - 18th year </option>
                                                                                                <option value="Other Qualification not listed. Mention in below area"> Other Qualification not listed. Mention in below area </option>
                                                                                                -->

                                                                                </select>
                                                                                </div>
                                                                                </div>


                                                                                <div class="col-md-12">
                                                                                <label>Please Indicate Subject of Interest</label>
                                                                                <input type="text"  placeholder="ex: Accounting, Nursing etc" name="sb-int" id="sb_int" >
                                                                                </div>


                                                                                <div class="col-md-12">
                                                                                <label>Qualification Name</label>
                                                                                <input type="text"  placeholder="Type Here"  name="qualification_name" id="qualification_name" >
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                <label>Country of Interest</label>
                                                                                <div class="wm-select-two">
                                                                                <select name="destination_country" id="destination_country">
                                                                                                <option selected disabled >Please Select</option>
                                                                                                <option value="USA "> USA </option>
                                                                                                <option value="Canada"> Canada </option>
                                                                                                <option value="Ireland "> Ireland </option>
                                                                                                <option value="UK "> UK </option>
                                                                                                <option value="Scotland "> Scotland </option>
                                                                                                <option value="Holland "> Holland </option>
                                                                                                <option value="Switzerland "> Switzerland </option>
                                                                                                <option value="Australia "> Australia </option>
                                                                                                <option value="New Zealand "> New Zealand </option>
                                                                                                <option value="Malaysia "> Malaysia </option>
                                                                                                <option value="TURKEY "> TURKEY </option>
                                                                                                <option value="CYPRUS "> CYPRUS </option>
                                                                                                <option value="JAPAN "> JAPAN </option>
                                                                                                <option value="UAE/Bahrain/Qatar "> UAE/Bahrain/Qatar </option>
                                                                                                <option value="Other country not listed "> Other country not listed </option>
                                                                                </select>
                                                                                </div>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <label>Have you taken any English Language Tests (ex. TOEFL/IELTS etc):</label>
                                                                                <div class="wm-select-two">
                                                                                <select name="language_tests" id="language_tests">
                                                                                                <option selected disabled >Please Select</option>
                                                                                                <option value="Yes. I have an IELTS / TOEFL/ CAE or other exam  "> Yes. I have an IELTS / TOEFL/ CAE or other exam </option>
                                                                                                <option value="Yes. I am planning to appear "> Yes. I am planning to appear </option>
                                                                                                <option value="No I dont have the English Test &amp; dont want to appear either.  "> No I don't have the English Test & don't want to appear either. </option>
                                                                                                </select>
                                                                                </div>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <label>If yes, English Test Score</label>
                                                                                <input type="text"  placeholder="Type Here" name="english_test_score" id="english_test_score">
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <label>For assistance in preparing for English exam, please select one:</label>
                                                                                <div class="wm-select-two">
                                                                                <select name="english_exam" id="english_exam">
                                                                                                <option selected disabled >Please Select</option>
                                                                                                <option value="First Certificate in English "> First Certificate in English </option>
                                                                                                <option value="Cambridge English Advanced "> Cambridge English Advanced </option>
                                                                                                <option value="Business English Certificate "> Business English Certificate </option>
                                                                                                <option value="IELTS "> IELTS </option>
                                                                                                <option value="TOEFL iBT "> TOEFL iBT </option>
                                                                                                <option value="Pearson Test of English Academic "> Pearson Test of English Academic </option>
                                                                                                </select>
                                                                                </div>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <label>Please upload CV (Word or PDF), if available:</label>
                                                                                <input type="file"  name="attach" id="attach" onchange="textfunc();" required>
                                                                                <div class="form-group" id="job1" name="job1" style="display:none;" >
<div class="alert alert-danger">
<strong>Please upload CV:</strong>

</div>
</div>
<!--                                                                                        <p id="demo" class="alert alert-danger" role="alert">Please Enter CV:</p>-->

                                                                                </div>
                                                                             <div class="col-md-12">
                                                                                <label>Please upload Transcript/Mark Sheet (Word or PDF):</label>
                                                                                <input type="file"  name="attach_trans" id="attach_trans" required>
                                                                                <p id="demo"></p>
                                                                                </div>
                                                                             <div class="col-md-12">
                                                                                <label>Please upload IELTS/TOEFL Certificate (Word or PDF):</label>
                                                                                <input type="file"  name="attach_IELTS" id="attach_IELTS" required>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                <label>Message</label>
                                                                                <textarea placeholder="Message" id="message" name="message"></textarea>
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                <label>Emergency Contact:</label>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                <input type="text" placeholder="Contact Name" name="em-name" id="em_name">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                <input type="text" placeholder="Phone Number" name="em-phone" id="em_phone">
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                <input type="text" placeholder="Email" name="em-email" id="em_email">
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                <input type="text" placeholder="Address" name="em-address" id="em_address">
                                                                                </div>




                                                                                <div class="col-md-12">
                                                                                    <input type="button" value="Send Message" onclick="myFunction()">				
                                                                                </div>													
                                        </ul>
                                                                </form>
                                                        </div>
                                                                </div>
                        </div> 
                   </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->


            </div>
            <!--// Main Content \\-->

            <!--// Footer \\-->

            <footer id="wm-footer" class="wm-footer-two">

        <!--// FooterWidgets \\-->
         <div class="wm-footer-widget">
            <div class="container">
                <div class="row"><aside class="col-md-3 widget wm_working_hours"><div class="wm-footer-widget-title wm-footer-widget-title-2nd"> <h2>Social Media</h2> </div>
                        <ul class="social-media-icon">
                                    <li><a href="http://www.facebook.com/thepcgllc" target="_blank"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                    <li><a href="https://twitter.com/PCG15576346/status/1141165730592907265?s=19" target="_blank"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                    <li><a href="https://www.linkedin.com/company/phoenix-consulting-grp-llc" target="_blank"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                                                            <li><a href="https://instagram.com/thepcgllc?igshid=1jfrc38hftprc" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                                    <li><a href="whatsapp://send?phone=13473840969&amp;text=Hi,%20phoenix%20consulting%20group."><i class="wm-color fa fa-whatsapp"></i> Whatsapp</a></li>
                                </ul></aside><aside class="widget widget_archive col-md-2">
                        <div class="wm-footer-widget-title"> <h2>Quick Links</h2> </div>
                        <ul>
<li><a href="index1.html">Home</a></li>
<li><a href="education-consultant-in-pakistan.html">About us</a></li>
<li><a href="oversea-education-consultant-pakistan.html">Study Abroad</a></li>
<li><a href="document..html">Documentation</a></li>
<li><a href="study-aboard-consultant.html">FAQs</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="contact-us.html">Contact us</a></li>
</ul>
                    </aside>
                                            <aside class="col-md-3 widget wm_working_hours">
                        <div class="wm-footer-widget-title"> <h2>Working Hours</h2> </div>
                        <ul>
                            <li>Mon - Fri<span>9:00am - 5:00pm</span></li>
                            <li>Sat - Sun<span>Closed</span></li>
                        </ul>
                    </aside>
                    <aside class="widget widget_gallery_two col-md-3">
                        <div class="wm-footer-widget-title"> <h2>Our Gallery</h2> </div>
                        <ul class="gallery">
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-1.jpg"><img src="extra-images/widget-gallery-2-1.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-2.jpg"><img src="extra-images/widget-gallery-2-2.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-3.jpg"><img src="extra-images/widget-gallery-2-3.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-4.jpg"><img src="extra-images/widget-gallery-2-4.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-5.jpg"><img src="extra-images/widget-gallery-2-5.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-6.jpg"><img src="extra-images/widget-gallery-2-6.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-7.jpg"><img src="extra-images/widget-gallery-2-7.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-8.jpg"><img src="extra-images/widget-gallery-2-8.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-gallery-2-full-9.jpg"><img src="extra-images/widget-gallery-2-9.jpg" alt=""> <span><i class="wmicon-arrows3"></i></span> </a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <!--// FooterWidgets \\-->

        <div class="clearfix"></div>
        <!--// FooterPartner \\-->


        <!--// FooterCopyRight \\-->
        <div class="wm-copyright-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"> <span>© Focus Visa Consultant 2019 All Rights Reserved</span> </div>
                    <div class="col-md-6"> <p>Development by <a href="https://globaldezigns.com" target="_blank">Global Dezigns</a></p> </div>
                </div>
            </div>
        </div>
          </footer>
          

    <div class="clearfix"></div>
</div>
<!--<script  type="text/javascript">
    $(document).ready(function(){

            var abc = '<?php echo (!empty($_SESSION['email']))?>';

   
          if(abc === null || abc === ''){
          $("#popUpWindow").modal('show');
          document.getElementById("cls_button").style.display = "none";
         
 
    }
    else{
       
        document.getElementById("login").innerHTML = "logout";
        document.getElementById( "login" ).setAttribute( "onClick", "javascript: Boo();" );
        document.getElementById("login").src = "logout.php";
        
    }
    });
</script>-->
<script>
  
  function Boo(){
      
      alert('press logout');
  }
  
  
   function textfunc(){
      
      alert('press textfunc');
      
       var fd = new FormData();
    var files = $('#attach')[0].files[0];
    var x = document.getElementById('attach').validity.valid;
    document.getElementById("demo").innerHTML = x;
    
       fd.append('attach',files);
   
    fd.append('id',id);
    fd.append('name',fname);
    fd.append('mode','type1');
    $.ajax({
        url: 'upload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            alert(response);
        },
    });
    
  }
  function signup(){
   
       $("#popUpWindow").modal('hide');
       $("#signup_modal").modal('show');
      
  }
  
   $(document).on("click", "#Sign_up_button", function(event){
        
      
        
        var user_email =  document.getElementById("user_reg_email").value;
 var user_password =  document.getElementById("user_reg_password").value;
  
    
    
          $.ajax({
                    url: "signup.php",
                    method: "POST",
                    data: {do_login:"do_login",user_email: user_email,user_password : user_password},
                    success: function (response)
                    {
                     
                        if(response=="success")
  {
      
      alert(response);
   
  }
  else
  {
    alert(response);
    alert("Wrong Details");
  }

                    }      
                });
    
    
    
    
    
});
    $(document).on("click", "#submit_btn", function(event){
        
      
        
        var user_email =  document.getElementById("user_email").value;
 var user_password =  document.getElementById("user_password").value;
  
    alert(user_email);
    alert(user_password);
    
    
          $.ajax({
                    url: "login.php",
                    method: "POST",
                    data: {do_login:"do_login",user_email: user_email,user_password : user_password},
                    success: function (response)
                    {
                        alert(response);
                        if(response=="success")
  {
      
      alert("Login Successfull");
   
  }
  else
  {
    alert(response);
    alert("Wrong Details");
  }

                    }      
                });
    
    
    
    
    
});
    


function login() {
   $("#popUpWindow").modal('show'); 
}

     function myFunction() {
         
           
var id =document.getElementById("id").value;
   id = id.trim();
  
//     var OID = document.getElementById("new_id").value;
//     OID = OID.trim();
 var fname =  document.getElementById("f_name").value;
 var lname =  document.getElementById("last_name").value;
 var dob =  document.getElementById("dob").value;
 var street_address =  document.getElementById("street_address").value;
var zip_code =  document.getElementById("zip_code").value;
var u_email =  document.getElementById("u_email").value;
var mobile =  document.getElementById("mobile").value;
var which_city =  document.getElementById("which_city").value;
 var sb_int =  document.getElementById("sb_int").value;
var qualification_name =  document.getElementById("qualification_name").value;
var destination_country =  document.getElementById("destination_country").value;
var language_tests =  document.getElementById("language_tests").value;
var english_exam =  document.getElementById("english_exam").value;
var message =  document.getElementById("message").value;
var em_name =  document.getElementById("em_name").value;
var em_phone =  document.getElementById("em_phone").value;
var em_email =  document.getElementById("em_email").value;
var em_address =  document.getElementById("em_address").value;
var english_test_score =  document.getElementById("english_test_score").value;
var highest_qualification =  document.getElementById("highest_qualification").value;
var country =  document.getElementById("country").value;
var count = 0;



    var fd = new FormData();
    var files = $('#attach')[0].files[0];
    var files1 = $('#attach_trans')[0].files[0];
    var files2 = $('#attach_IELTS')[0].files[0];



    var x = document.getElementById('attach').validity.valid;
    document.getElementById("demo").innerHTML = x;


     var y =  document.getElementById('attach_IELTS').validity.valid;
    document.getElementById("demo").innerHTML = x;

     var z = document.getElementById('attach_trans').validity.valid;
    document.getElementById("demo").innerHTML = x;
//    alert(x);

alert(highest_qualification);
//if(fname ===''){
//    
//
//}

var validation_flag = 0;
 if (fname.trim() == "") {
                        
                         $("#f_name").css("outline", "1px solid red");
                         validation_flag = 1 ;
                           
                    } else{
                         $("#f_name").css("outline", "1px solid #ddd");
                           
                    }
                    if (qualification_name.trim() == "") {
                        
                         $("#qualification_name").css("outline", "1px solid red");
                         validation_flag = 1 ;
                           
                    } else{
                         $("#qualification_name").css("outline", "1px solid #ddd");
                           
                    }
                    
                    if (lname.trim() === "") {
                        $("#last_name").css("outline", "1px solid red");
                         validation_flag = 1 ;
                    }else{
                         $("#last_name").css("outline", "1px solid #ddd");
                           
                    }
                    if (dob.trim() === "") {
                        
                         $("#dob").css("outline", "1px solid red");
                         validation_flag = 1 ;
                           
                    } else {
                        $("#dob").removeClass("error");
                    }
                    if (zip_code.trim() == "") {
                        $("#zip_code").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#zip_code").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                    
                    if (country == "" || country == "Select Country") {
                        $("#country").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#country").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                     if (language_tests == "" || language_tests == "Please Select") {
                        $("#language_tests").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#language_tests").css("outline", "1px solid #ddd");
                           
                    }
                                         if (highest_qualification == "" || highest_qualification == "Please Select") {
                        $("#highest_qualification").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#highest_qualification").css("outline", "1px solid #ddd");
                           
                    }
                    
                     if (destination_country == "" || destination_country == "Please Select") {
                        $("#destination_country").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#destination_country").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                    
                    if (u_email.trim() == "") {
                        $("#u_email").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#u_email").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                    if (mobile.trim() == "") {
                        $("#mobile").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#mobile").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                    if (which_city.trim() == "") {
                        $("#which_city").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#which_city").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                    
                    if (street_address.trim() == "") {
                        $("#street_address").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#street_address").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                    if (zip_code.trim() == "") {
                        $("#zip_code").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#zip_code").css("outline", "1px solid #ddd");
                           
                    }
                    
                     if (sb_int.trim() == "") {
                        $("#sb_int").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#sb_int").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                    if (message.trim() == "") {
                        $("#message").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#message").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                     if (em_name.trim() == "") {
                        $("#em_name").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#em_name").css("outline", "1px solid #ddd");
                           
                    }
                    
                     if (em_phone.trim() == "") {
                        $("#em_phone").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#em_phone").css("outline", "1px solid #ddd");
                           
                    }
                    
                    
                    if (em_email.trim() == "") {
                        $("#em_email").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#em_email").css("outline", "1px solid #ddd");
                           
                    }
                    
                     if (em_email.trim() == "") {
                        $("#em_email").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#em_email").css("outline", "1px solid #ddd");
                           
                    }
                     if (em_address.trim() == "") {
                        $("#em_address").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#em_addressl").css("outline", "1px solid #ddd");
                           
                    }
                    
                    if (x === false) {
                        $("#attach").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#attach").css("outline", "1px solid #ddd");
                           
                    }
                     if (y === false) {
                        $("#attach_trans").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#attach_trans").css("outline", "1px solid #ddd");
                           
                    }
                     if (z === false) {
                        $("#attach_IELTS").css("outline", "1px solid red");
                         validation_flag = 1 ;
                         
                    }else{
                         $("#attach_IELTS").css("outline", "1px solid #ddd");
                           
                    }

if(validation_flag === 0){
   
            fd.append('attach',files);
    fd.append('attach_trans', files1);
    fd.append('attach_IELTS', files2);
    fd.append('id',id);
    fd.append('name',fname);
    $.ajax({
        url: 'upload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            alert(response);
        },
    });







      $.ajax({
                    url: "db_student_data.php",
                    method: "POST",
                     data: {id: id,fname: fname, lname: lname,dob: dob, street_address: street_address, zip_code: zip_code,u_email: u_email, mobile: mobile, which_city: which_city,sb_int: sb_int, qualification_name: qualification_name,destination_country: destination_country, language_tests: language_tests, english_exam: english_exam, message: message, em_name: em_name, em_phone: em_phone, em_email: em_email, em_address: em_address,english_test_score:english_test_score,highest_qualification:highest_qualification},
                    success: function (data)
                    {
      alert(data);
                    }      
                });

}
     }

</script>

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/modernizr.js"></script>
<script type="text/javascript" src="script/bootstrap.min.js"></script>
<script type="text/javascript" src="script/jquery.prettyphoto.js"></script>
<script type="text/javascript" src="script/jquery.countdown.min.js"></script>
<script type="text/javascript" src="script/fitvideo.js"></script>
<script type="text/javascript" src="script/skills.js"></script>
<script type="text/javascript" src="script/slick.slider.min.js"></script>
<script type="text/javascript" src="script/waypoints-min.js"></script>
<script type="text/javascript" src="build/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="script/isotope.min.js"></script>
<script type="text/javascript" src="script/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="script/functions.js"></script>

</body>

<!-- about-us21:56  -->
</html>