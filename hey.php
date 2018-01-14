<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/fonts/font.css" rel="stylesheet">
    
    <title>
        Newsroom
    </title>

    <body>
        <h1>
    MNNIT News Adda

        </h1>
 <?php
 $visit=0;
    $lastime=date("d-m-Y H:i:s");

    if (isset($_COOKIE["visit"]))
        $visit=$_COOKIE["visit"];
    if (isset($_COOKIE["lastime"]))
        $lastime=$_COOKIE["lastime"];

    setcookie("visit",$visit+1,time()+86400);
    setcookie("lastime",$lastime,time()+86400);

include('navbar.php');
?>
<div class="container" style="margin-top: 60px">

        <div class="row">

            <!-- Post Content Column -->
            
            <div >
                <!--<button><a href="">Top Stories</a></button><br>
                <button><a href="">World</a></button><br>
                <button><a href="">India</a></button><br>
                <button><a href="">Business</a></button><br>
                <button><a href="">Technology</a></button><br>
                <button><a href="">Entertainment</a></button><br>
                <button><a href="">Sports</a></button><br>
                <button><a href="">Science</a></button><br>
                <button><a href="">Health</a></button><br>-->
                
                <div class="btn-group-vertical col-md-2" style="width: 250px background-color: #999 height:50px marginleft: 5px">
                    <br><br>
                    <button type="button" class="btn btn-alert" style="height:50px"><a href="#headlines">Headlines</a></button>
                    <button type="button" class="btn btn-alert" style="height:50px"><a href="#entertainment">Entertainment</a></button>
                    <button type="button" class="btn btn-alert" style="height:50px"><a href="#general">General</a></button>
                    <button type="button" class="btn btn-alert" style="height:50px"><a href="#business">Business</a></button>
                    <button type="button" class="btn btn-alert" style="height:50px"><a href="#technology">Technology</a></button>
                    <button type="button" class="btn btn-alert" style="height:50px"><a href="#sports">Sports</a></button>
                    <button type="button" class="btn btn-alert" style="height:50px"><a href="#scienceandnature">Science and Nature</a></button>
                
                    </div>  


                
                <div id="headlines" class="col-md-8" style="background-color: #eee margin-top:40 px">
                    
                    <h3><b>HEADLINES</b></h3>
                    <hr>
                    <script >
                       var $headlines=$('#headlines');
   
                        var toiheadurl="https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=top&apiKey=782ccbc24bf944d4919ce0a984aa838b";
                       $.getJSON(toiheadurl,function(data){
                       articles=data.articles;
                                       
                        for (var i=0;i<3;i++)
                        {
                           
                               $headlines.append('<div><h4><b><a href="'+articles[i].url+'">'+articles[i].title+'</a></h4></b>'+articles[i].description+'<br><br>');
                        }
                     }).error(function(e){
                        $headlines.text("TOI not responding as of now!!");

                     });

                    </script>
                    
                </div>

                <div style="margin-left: 194px">
                <div id="entertainment" class="col-md-9" style="background-color: #eee " >
                    <h3><b>ENTERTAINMENT</b></h3>
                    <hr>
                    <script >
                       var $entertainment=$('#entertainment');
   
                        var toienterurl="https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=top&apiKey=782ccbc24bf944d4919ce0a984aa838b&category=entertainment";
                       $.getJSON(toienterurl,function(data){
                       articles=data.articles;
                                       
                        for (var i=3;i<6;i++)
                        {
                           
                               $entertainment.append('<div><h4><b><a href="'+articles[i].url+'">'+articles[i].title+'</a></h4></b>'+articles[i].description+'<br><br>');
                        }
                     }).error(function(e){
                        $entertainment.text("TOI not responding as of now!!");

                     });

                    </script>
                    

                </div>
                <div id="general" class="col-md-9" >
                    <h3><b>GENERAL</b></h3>
                    <hr>
                     <script >
                       var $general=$('#general');
   
                        var toienterurl="https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=latest&apiKey=782ccbc24bf944d4919ce0a984aa838b";
                       $.getJSON(toienterurl,function(data){
                       articles=data.articles;
                                       
                        for (var i=7;i<10;i++)
                        {
                           
                               $general.append('<div><h4><b><a href="'+articles[i].url+'">'+articles[i].title+'</a></h4></b>'+articles[i].description+'<br><br>');
                        }
                     }).error(function(e){
                        $general.text("TOI not responding as of now!!");

                     });

                    </script>

                </div>
                <div id="business" class="col-md-9" style="background-color: #eee ">
                    <h3><b>BUSINESS</b></h3>
                    <hr>
                    <script >
                     var $business=$('#business');
                    var toibusinessurl="https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=latest&apiKey=782ccbc24bf944d4919ce0a984aa838b&category=business";
                    $.getJSON(toibusinessurl,function(data){
                    articles=data.articles;
                   
                        for (var i=0;i<3;i++)
                        {
                           
                               $business.append('<div><h4><b><a href="'+articles[i].url+'">'+articles[i].title+'</a></h4></b>'+articles[i].description+'<br><br>');
                        }
                     }).error(function(e){
                        $business.text("TOI not responding as of now!!");

                     });

                     </script>

                </div>
                <div id="technology" class="col-md-9">
                    <h3><b>TECHNOLOGY</b></h3>
                    <hr>
                    <script >
                       var $technology=$('#technology');
   
                        var toiurl="https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=latest&apiKey=782ccbc24bf944d4919ce0a984aa838b&category=technology";
                       $.getJSON(toiurl,function(data){
                       articles=data.articles;
                                       
                        for (var i=3;i<6;i++)
                        {
                           
                               $technology.append('<div><h4><b><a href="'+articles[i].url+'">'+articles[i].title+'</a></h4></b>'+articles[i].description+'<br><br>');
                        }
                     }).error(function(e){
                        $technology.text("TOI not responding as of now!!");

                     });

                    </script>

                </div>
                
                <div id="sports" class="col-md-9" style="background-color: #eee ">
                    <h3><b>SPORTS</b></h3>
                    <hr>
                    <script >
                       var $sports=$('#sports');
   
                        var toiurl="https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=latest&apiKey=782ccbc24bf944d4919ce0a984aa838b&category=sports";
                       $.getJSON(toiurl,function(data){
                       articles=data.articles;
                                       
                        for (var i=6;i<9;i++)
                        {
                           
                               $sports.append('<div><h4><b><a href="'+articles[i].url+'">'+articles[i].title+'</a></h4></b>'+articles[i].description+'<br><br>');
                        }
                     }).error(function(e){
                        $sports.text("TOI not responding as of now!!");

                     });

                    </script>

                </div>
                <br>
                <br>
                <div id="scienceandnature" class="col-md-9" >
                    <h3><b>SCIENCE AND NATURE</b></h3>
                    <hr>
                    
                    <script >
                       var $scienceandnature=$('#scienceandnature');
   
                        var toiurl="https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=top&apiKey=782ccbc24bf944d4919ce0a984aa838b";
                       $.getJSON(toiurl,function(data){
                       articles=data.articles;
                                       
                        for (var i=4;i<7;i++)
                        {
                           
                               $scienceandnature.append('<div><h4><b><a href="'+articles[i].url+'">'+articles[i].title+'</a></h4></b>'+articles[i].description+'<br><br>');
                        }
                     }).error(function(e){
                        $scienceandnature.text("TOI not responding as of now!!");

                     });

                    </script>
                </div>
                <div class="col-md-9" >
                 <footer style ="background-color:#999 " id="foot">
<?php
   
    if($visit==0)
        echo"<br><h5 style='margin:15 px'>Welcome to this site</h5>";
    else
        echo"<h5>You visited this site ".$visit." times and last-time was".$lastime."</h5><BR>";
    ?>

</footer>
</div>
        </div>

</div>

</body>
</html>