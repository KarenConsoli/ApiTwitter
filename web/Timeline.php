<!DOCTYPE HTML>
<html>
<head>
<title>Consoli- Api Twitter Test 2</title> 
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
                            <h1>Php Timeline Api Twitter</h1>
                        </div>
                        <div class="pricing-grids">
                              <div class="pricing-grid1">
                            <div class="price-value">
                            </div>
                            </div>
                        

                        <div class="pricing-grid2">
                            <div class="price-value two">
                                <h3><a href="#">Tweets</a></h3>
<?php
 $user_name = $_POST['username'];
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
            $url_imagen= str_replace("_normal", "_400x400", $url_imagen);
            $screen_name = $user->user->screen_name;

            $tweet = $user->text;

            $imagen = '<div class="teddy-text"><a href="https://twitter.com/'.$screen_name.'" target=_blank><img src="'.$url_imagen.'" ></img></a>';
            $name = '<p ><a style="color:#FFFF00" href="https://twitter.com/'.$screen_name.'" target=_blank>@'.$screen_name.'</a></p>';

            $rawdata[$i][0]=$fecha;
            $rawdata[$i]["FECHA"]=$fecha;
            $rawdata[$i][1]=$imagen;
            $rawdata[$i]["imagen"]=$imagen;
            $rawdata[$i][2]=$screen_name ;
            $rawdata[$i]["screen_name"]=$screen_name ;
            $rawdata[$i][3]=$tweet;
            $rawdata[$i]["tweet"]=$tweet;
            $rawdata[$i][4]=$name;
            $rawdata[$i]["name"]=$name;
        }
        return $rawdata;
    }

    function displayTable($rawdata){


                           
echo $rawdata[0]["imagen"];
echo $rawdata[0]["name"];

 echo '</div>';
       
                            echo '</div>';
                            
                          echo  '<div class="price-bg">';
                           
          
                  
         
        for($i=0;$i<5;$i++){
             
              if($i%2==0)
{

              echo '<ul>';
              echo '<li class="whyt"><a href="#">';
              echo $rawdata[$i]["tweet"];
              echo  '</a></li>';
              echo  '</ul>';
}else{
              echo '<ul>';
              echo '<li><a href="#">';
              echo $rawdata[$i]["tweet"];
              echo  '</a></li>';
              echo  '</ul>';
}
  
                            
             

           
            
        }       
                                  echo  '<div class="cart2">';
                              echo  '<a  href="https://twitter.com/' . $rawdata[0]["screen_name"];
                              echo  '"  target= "_blank" >More</a>';
                            echo '</div>';
                      echo  '</div>';
                  echo  '</div>';
    }
}

$twitterObject = new Twitter();
$jsonraw =  $twitterObject->getTweets($user_name);
$rawdata =  $twitterObject->getArrayTweets($jsonraw);
$twitterObject->displayTable($rawdata);

?>
<div class="clear"> </div>

                                <!--pop-up-grid-->
                            </div>
                        <div class="clear"> </div>
                    </div>
                
                </div>
    <!--//End-pricingplans-->
        <!-- /start-copyright-->
                <div class="footer">
                    <div class="wrap">
                             <p>&copy; 2016  PHP Twitter Timeline API | By &nbsp;<a href="http://www.kbcon.com.ar" target="_blank" >Karen B. Consoli</a></p>
                    </div>                          
                </div>
        <!--//End-copyright-->
</body>
</html>     
                           