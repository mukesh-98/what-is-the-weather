<?php
    $weather="";
    $error="";
    if(array_key_exists('city',$_GET)){
        $city=str_replace(' ','-',$_GET['city']);
        $file_headers=@get_headers("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
        if($file_headers[0]=="HTTP/1.1 404 Not Found"){
            $error="City<strong> ".$_GET['city']." </strong>Not Found or Chech the spelling";
        }else{
            $forecaste=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
            $page1=explode('(1&ndash;3 days)</span><p class="b-forecast__table-description-content"><span class="phrase">',$forecaste);
            if(sizeof($page1)>1){
                $page2=explode('</span></p></td><td class="b-forecast__table-description-cell--js" colspan="9"><span class="b-forecast__table-description-title"><h2>',$page1[1]);
                if(sizeof($page2)>1){
                    $weather=$page2[0];
                }else{
                    $error="We cound'nt find the weather, We are Sorry for that.";
                }
            }    
        else{
            $error="We cound'nt find the weather, We are Sorry for that.";
        }
       
    }
    }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=chrome">

      <title>What Is The Weather</title>
    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">  
    <style type="text/css">
      .html,body{
        margin:0%;
        padding:0%;
        background-color: #1d2951;
        background-image: linear-gradient(315deg, #1d2951 0%, #dbe7fc 74%) no-repeat;
        font-family: 'Dancing Script', cursive;
         
      }
      .subscriber-us-area .subscriber #weather{
          padding:0rem 2rem;
      }
      .subscriber-us-area .subscriber{
        padding:10px 0px 40px 0px;
        box-shadow: 10px 10px 5px #aaaaaa;
        background-color: #f9fcff;
        background-image: linear-gradient(147deg, #f9fcff 0%, #dee4ea 74%);
        margin:100px 0px 0px 60px;
        border-radius:1rem;
      }
      
      .subscriber-us-area .subscriber .input-textbox input{
            width:400px;
            margin:0rem 0rem 0rem 15rem;
            height:6rem;
            background:transparent;
            border-color:black;
            font-size:2.5rem;
      }
      .subscriber-us-area .subscriber .form{
          display:grid;
          grid-template-columns:50% 50%;
          padding:2rem;
      }
      .subscriber-us-area .subscriber .form .btn-submit{
        margin:0px 190px;
      }

      .subscriber-us-area .subscriber .form .btn-submit button{
        background:transparent;
        padding:1.3rem 3rem;
        color:black;
        font-size:2rem;
      }
      .subscriber-us-area .subscriber .form .btn-submit button:hover{
        background:skyblue;
        box-shadow:10px 10px 10px 10px lightgrey;
      }
      .subscriber-us-area .subscriber .subscribe-title h4,p{
        margin:3rem 0rem;
        font-size:3rem;
        text-shadow: 10px 10px 5px #aaaaaa;
      }


      @media only screen and (max-width: 320px){

        .subscriber-us-area .subscriber #weather{
          padding:0rem 2rem;
            }
          .subscriber-us-area .subscriber{
          padding:2rem 0rem 2rem 0rem!important;
          box-shadow: 10px 10px 5px #aaaaaa;
          overflow-y:none;
          margin:60px 10px 0px 10px!important;
          
        }
        
        .subscriber-us-area .subscriber .input-textbox input{
              width:250px!important;
              margin:0rem 0rem 0rem 0rem!important;
              height:6rem;
              background:transparent;
              border-color:black;
              font-size:1.5rem!important;
        }
       
        .subscriber-us-area .subscriber .form .btn-submit{
          margin:70px 0px!important;
        }

        .subscriber-us-area .subscriber .form .btn-submit button{
          background:transparent;
          padding:.7rem 3rem!important;
          color:black;
          font-size:2rem;
        }
        .subscriber-us-area .subscriber .form .btn-submit button:hover{
          background:skyblue;
          box-shadow:10px 10px 10px 10px lightgrey;
        }
        .subscriber-us-area .subscriber .subscribe-title h4,p{
          margin:3rem 0rem;
          font-size:2rem!important;
          text-shadow: 10px 10px 5px #aaaaaa;
        }
      }

      @media only screen and (max-width: 375px){

        .subscriber-us-area .subscriber #weather{
          padding:0rem 2rem;
             }
          .subscriber-us-area .subscriber{
          padding:2rem 0rem 2rem 0rem!important;
          box-shadow: 10px 10px 5px #aaaaaa;
          overflow-y:none;
          margin:60px 10px 0px 10px!important;
          
        }
        
        .subscriber-us-area .subscriber .input-textbox input{
              width:250px!important;
              margin:0rem 0rem 0rem 0rem!important;
              height:6rem;
              background:transparent;
              border-color:black;
              font-size:1.5rem!important;
        }
       
        .subscriber-us-area .subscriber .form .btn-submit{
          margin:70px 0px!important;
        }

        .subscriber-us-area .subscriber .form .btn-submit button{
          background:transparent;
          padding:.7rem 3rem!important;
          color:black;
          font-size:2rem;
        }
        .subscriber-us-area .subscriber .form .btn-submit button:hover{
          background:skyblue;
          box-shadow:10px 10px 10px 10px lightgrey;
        }
        .subscriber-us-area .subscriber .subscribe-title h4,p{
          margin:3rem 0rem;
          font-size:2rem!important;
          text-shadow: 10px 10px 5px #aaaaaa;
        }
      }

      @media only screen and (max-width: 425px){
        .subscriber-us-area .subscriber #weather{
          padding:0rem 2rem;
         }
          .subscriber-us-area .subscriber{
          padding:2rem 0rem 2rem 0rem!important;
          box-shadow: 10px 10px 5px #aaaaaa;
          overflow-y:none;
          margin:60px 10px 0px 10px!important;
          
        }
        
        .subscriber-us-area .subscriber .input-textbox input{
              width:250px!important;
              margin:0rem 0rem 0rem 0rem!important;
              height:6rem;
              background:transparent;
              border-color:black;
              font-size:1.5rem!important;
        }
       
        .subscriber-us-area .subscriber .form .btn-submit{
          margin:6px 80px;
          
        }

        .subscriber-us-area .subscriber .form .btn-submit button{
          background:transparent;
          padding:.8rem 3rem!important;
          color:black;
          font-size:2rem;
        }
        .subscriber-us-area .subscriber .form .btn-submit button:hover{
          background:skyblue;
          box-shadow:10px 10px 10px 10px lightgrey;
        }
        .subscriber-us-area .subscriber .subscribe-title h4,p{
          margin:3rem 0rem;
          font-size:2rem!important;
          text-shadow: 10px 10px 5px #aaaaaa;
        }
      }
      @media only screen and (max-width: 768px){
        .subscriber-us-area .subscriber #weather{
          padding:0rem 2rem;
             }
          .subscriber-us-area .subscriber{
          padding:2rem 0rem 2rem 0rem!important;
          box-shadow: 10px 10px 5px #aaaaaa;
          overflow-y:none;
          margin:60px 10px 0px 10px!important;
          
        }
        
        .subscriber-us-area .subscriber .input-textbox input{
              width:400px;
              margin:0rem 0rem 0rem 3rem;
              height:6rem;
              background:transparent;
              border-color:black;
              font-size:1.5rem!important;
        }
       
        .subscriber-us-area .subscriber .form .btn-submit{
            margin:0px 80px;
          
        }

        .subscriber-us-area .subscriber .form .btn-submit button{
          background:transparent;
          padding:1.5rem 3rem!important;
          color:black;
          font-size:2rem;
        }
        .subscriber-us-area .subscriber .form .btn-submit button:hover{
          background:skyblue;
          box-shadow:10px 10px 10px 10px lightgrey;
        }
        .subscriber-us-area .subscriber .subscribe-title h4,p{
          margin:3rem 0rem;
          font-size:2rem!important;
          text-shadow: 10px 10px 5px #aaaaaa;
        }
      }     
  </style>
  </head>
  <body>
    <div class="container justify-content-center row">
        <section class="subscriber-us-area">
            <div class="container subscriber">
                <div class="row">
                    <div class="col-lg-12 subscribe-title">
                        <h4 class="text-center" >Get weather update from anywhere !</h4>
                        <p class="para text-center">For make your day better<br>Get ready for weather.</p>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-center">
                    <form class="w-50">
                        <div class="form">
                            <div class=" input-textbox justify-content-center">
                                <input type="text"  name="city" class="form-control" placeholder="Enter the city name,you are looking for">
                            </div>
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-primary float-left" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="weather">
                <?php if($weather){
                        echo '<div class="alert alert-success" role="alert"><h4>'.$weather.'</h4></div>';
                }else if($error){
                    echo '<div class="alert alert-danger text-center" role="alert"><h3>'.$error.'</h3></div>';
                }
                
                ?>
                </div>
            </div>
        </section>
    </div>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
