<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
  <title>Tailorsoft</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="reset.css"/>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    
  
</head>
<body>
  <!--navbar-->
  <?php
  include 'header.php';
  ?>
  <!--end of navbar-->
  <!--contact-->
  <div id="main_content">
            
        <div id="contact_area">
            
            <div class="container" style="margin-top: 80px">
            
            <h2><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>CONTACT US</h2>
            
            <div id="contact_info">
                
                <div id="contact_info_left">
                    
                    <p>Thank you for showing Interest in us. Please use the form below to contact us and will get back to you at the earliest possible
                    <br />
                    <br />
                    For feedback or questions, please email us at: <a href="mailto:admin@epdp.com" class="bold_text blue_text">admin@epdp.com</a></p>
                    
                    <form action="" method="post" id="contact_form">
                        <fieldset>                            
          <ol>
                                <li>
            <label for="name">Name</label><input type="text" name="name" value="" size="77" maxlength="" id="name" />
              </li>
              <li>
                              <label for="email">Email Address</label><input type="text" name="email" value="" size="77" maxlength="" id="email" />
        </li>
                                <li>
                              <label for="subject">Subject</label><input type="text" name="subject" value="" size="77" maxlength="" id="subject" />
        </li>
        <li>
            <label for="Description">Description</label><input type =textarea  name="description" rows="10" cols="57" id="description"></textarea>
        </li>
        <li>
           <button type="btn" class="btn btn-primary btn-block " style="margin-top: 20px" value="submit">submit</button>
        </li>
          </ol>
                        </fieldset>
                    </form>
                    
                </div> <!-- END #contact_info_left -->
                
                <div id="contact_info_right">
                    
                    <div id="location_map">
                        
                        <h3>We are here</h3>
                        
                        <a href="https://www.google.co.in/maps/dir//DUCAT,+A+-+43+%26+A+-+52,+Sector+-+16,+Behind+Mcdonalds,+A+Block,+Sector+16,+Noida,+Uttar+Pradesh+201301/@28.57983,77.314676,17z/data=!4m13!1m4!3m3!1s0x390ce45c0c14629b:0xc4ff2d18067f51e0!2sDUCAT!3b1!4m7!1m0!1m5!1m1!1s0x390ce45c0c14629b:0xc4ff2d18067f51e0!2m2!1d77.314676!2d28.57983"><img src="map.jpg" alt="map" /></a>
                        
                    </div> <!-- END #location_map -->
                    
                    <div id="address">
                    
                        <h3>OFFICE ADDRESS</h3>
                        <p><span class="bold_text">RAYAT & BAHRA GROUP</span>
                        <br />
                        Rayat & Bahra Institute of Engineering and Bio-technology
                        <br />
                        Kharar
                        <br />
                        Mohali(Punjab)
                        <br />
                        
                        <br />
                        Phone: 0120 464 6464
                        <br />
                        Fax: 0120 464 6464</p>
                        
                    </div> <!-- END #address -->
                    
                </div> <!-- END #contact_info_right -->
                
            </div> <!-- END #contact_info -->
            
            </div> <!-- END .container -->
            
        </div> <!-- END #contact_area -->
        
    </div> <!-- END #main_content -->
  <!--end of contact-->
  <?php
 include 'footer.php';
  ?>
  

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
<script src="https://use.fontawesome.com/b656b85fa0.js"></script>

</body>
</html>