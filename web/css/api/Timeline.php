<!DOCTYPE HTML>
<html>
<head>
<title>Flat Pricing Tables Design Widget Template :: w3layouts </title> 
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pricing Tables Design ,Flat Pricing Tables Design ,Popup Pricing Tables Design,Clean Pricing Tables Design "./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<!--start-pricing-tablel-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 

 <script>
                        $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                                                                                        
                        });
                </script>                           
 <div class="pricing-plans">
                     <div class="wrap">
                        <div class="price-head">
                            <h1>Flat Pricing Tables Design</h1>
                        </div>
                        <div class="pricing-grids">

                        <div class="pricing-grid1">
                            <div class="price-value">
                                   
                                    
                                    
                            
                            </div>

                            </div>
                            <div class="price-bg">
                            
                            </div>
                        </div>

                        <div class="pricing-grid2">
                            <div class="price-value two">
                                <h3><a href="#">Tweets</a></h3>

<?php
class Twitter{

    function getTweets($user){
        ini_set('display_errors', 1);
        require_once('TwitterAPIExchange.php');

        $settings = array(
              'oauth_access_token' => "90065405-zlvsqVnwB0TGYDKMYNGIoKXapbS8i1ElwUnCPumeQ",
              'oauth_access_token_secret' => "589Jl1rX9iCliKEeR28CT3ZepM2bUpCjYvQtZQrrd36MU",
              'consumer_key' => "PDMU2G0vnKjO1J3eXNU9yt6Zk",
              'consumer_secret' => "FZjNpHTYW1Oa16MCPkn8qciB29faCOfxn4p9CnmfCvJeYH8eio"

         
        );

        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name='.$user.'&count=100';        
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $json =  $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        return $json;

    }

    function getArrayTweets($jsonraw){
        $rawdata = "";
        $json = json_decode($jsonraw);
        $num_items = count($json);
        for($i=0; $i<$num_items; $i++){

            $user = $json[$i];

            $fecha = $user->created_at;
            $url_imagen = $user->user->profile_image_url;
            $screen_name = $user->user->screen_name;
            $tweet = $user->text;

            $imagen = "<a href='https://twitter.com/".$screen_name."' target=_blank><img src=".$url_imagen."></img></a>";
            $name = '<div class="footer"><div class="wrap"><a href="https://twitter.com/"'.$screen_name.'" target=_blank>@"'.$screen_name.'"</a></div></div>"';

            $rawdata[$i][0]=$fecha;
            $rawdata[$i]["FECHA"]=$fecha;
            $rawdata[$i][1]=$imagen;
            $rawdata[$i]["imagen"]=$imagen;
            $rawdata[$i][2]=$name;
            $rawdata[$i]["screen_name"]=$name;
            $rawdata[$i][3]=$tweet;
            $rawdata[$i]["tweet"]=$tweet;
        }
        return $rawdata;
    }

    function displayTable($rawdata){

       

        echo '<h5><span>';
        
        echo $rawdata[0]["screen_name"];

          echo '</span></h5>';
                   echo'<div class="sale-box two">';
                            
                           echo '</div>';

                           echo '</div>';
                           echo '<div class="price-bg">';
                           echo '<ul>';
         
        for($i=0;$i<5;$i++){
             echo '<li class="whyt"><a href="#">';
             //echo $rawdata[$i]["imagen"];
             echo $rawdata[$i]["tweet"];
             echo '</a></li>';
          

           
            
        }       
        echo '</table>';
    }
}

$twitterObject = new Twitter();
$jsonraw =  $twitterObject->getTweets("kbc_95");
$rawdata =  $twitterObject->getArrayTweets($jsonraw);
$twitterObject->displayTable($rawdata);

?>





                                



                       
                            
                               
                              
                            </ul>
                            <div class="cart2">
                                <a class="popup-with-zoom-anim" href="#small-dialog">More</a>
                            </div>
                            </div>
                        </div>
                        <div class="pricing-grid3">
                            <div class="price-value">
                            
                            </div>

                            </div>
                            <div class="price-bg">
                          
                          
                            </div>
                        </div>
                            <div class="clear"> </div>
                            <!--pop-up-grid-->
                                 <div id="small-dialog" class="mfp-hide">
                                    <div class="pop_up">
                                        <div class="payment-online-form-left">
                                            <form>
                                                <h4><span class="shipping"> </span>Shipping</h4>
                                                <ul>
                                                    <li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
                                                    <li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
                                                </ul>
                                                <ul>
                                                    <li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
                                                    <li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
                                                </ul>
                                                <ul>
                                                    <li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
                                                    <li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
                                                    <div class="clear"> </div>
                                                </ul>
                                                <div class="clear"> </div>
                                            <ul class="payment-type">
                                                <h4><span class="payment"> </span> Payments</h4>
                                                <li><span class="col_checkbox">
                                                    <input id="3" class="css-checkbox1" type="checkbox">
                                                    <label for="3" name="demo_lbl_1" class="css-label1"> </label>
                                                    <a class="visa" href="#"> </a>
                                                    </span>
                                                    
                                                </li>
                                                <li>
                                                    <span class="col_checkbox">
                                                        <input id="4" class="css-checkbox2" type="checkbox">
                                                        <label for="4" name="demo_lbl_2" class="css-label2"> </label>
                                                        <a class="paypal" href="#"> </a>
                                                    </span>
                                                </li>
                                                <div class="clear"> </div>
                                            </ul>
                                                <ul>
                                                    <li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
                                                    <li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
                                                    <div class="clear"> </div>
                                                </ul>
                                                <ul>
                                                    <li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
                                                    <li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
                                                    <div class="clear"> </div>
                                                </ul>
                                                <ul class="payment-sendbtns">
                                                    <li><input type="reset" value="Cancel"></li>
                                                    <li><input type="submit" value="Process order"></li>
                                                </ul>
                                                <div class="clear"> </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--pop-up-grid-->
                            </div>
                        <div class="clear"> </div>
                    </div>
                
                </div>
    <!--//End-pricingplans-->
        <!-- /start-copyright-->
                <div class="footer">
                    <div class="wrap">
                            <p>&copy; 2016  PHP Twitter Timeline API | By &nbsp;<a href="http://www.kbcon.com.ar">Karen B. Consoli</a></p>
                    </div>                          
                </div>
        <!--//End-copyright-->
</body>
</html>     