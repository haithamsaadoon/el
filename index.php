<?php
$alert="";
if(isset($_GET["login"]))
{
    if($_GET["login"]=="false")
        {
        $alert='<div id="alert-div" class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>تنبيه!</strong> اسم المستخدم او كلمة مرور غير صحيحة
                , يرجى اعادة المحاولة
              </div>';
      }
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-rtl.min.css">
       
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/carousal.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
         <script src="jwplayer-7.0.0/jwplayer.js"></script>
      <script>jwplayer.key="br0iERud1VlX4Kzcbo37wsO+tWfBBCtdkJT7sg==";</script>
      <script>
            $(document).ready(function(){
                $(".submenu").hover(function(){
                    
                   $(".submenu",this).css("visibility", "visible");}, function(){
                   $(".submenu",this).css("visibility", "hidden");
                });
                $("li:has(ul)").hover(function(){
                    
                    $(".submenu",this).css("visibility", "visible");}, function(){
                    $(".submenu",this).css("visibility", "hidden");
                   
                });
                
            });
      </script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   
        <div id="support" style="">
            <a href="#" >
                
            <img style="" alt="Support Icon" src="img/support.png"/>

                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        <h3 class="panel-title">خدمة الدعم المباشر</h3>
                      </div>
                      <div class="panel-body">
                          <form class="form-inline">
                              <label>الاسم</label><input type="text" />
                              <label>الرسالة</label>
                              <textarea>
                                  
                              </textarea>
                              <input type="submit" class="form-control" value="أرسل"/>
                              
                          </form>
                      </div>
                    </div>
            </a>
        </div> 
        
              
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
         
         <?php echo $alert; ?>
          
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          كلية الرافدين الجامعة - نظام التعليم الاليكتروني
           </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form method="post" action="loginhandler.php" class="navbar-form navbar-left" role="form">
            <div class="form-group">
              <input name="username" type="text" placeholder="اسم المستخدم" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="كلمة المرور" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">تسجيل دخول</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<div class="container">

    <div style="width:100%; background-color:#F00;height:245px;	background-image:url(img/training.jpg)">
        <h3 style="float: right;color: white;padding-right: 40px;padding-top: 50px;">
             نظام التعليم الأليكتروني متاح اينما تكون
</h3>
        <h3 style="float: left;color: white;padding-left: 40px;padding-top:50px;">
            
            eLearning is available where you are 
        </h3>
  
    </div>
   
</div>

    <!-- Carousal for the News -->
    <?php 
    require 'phpfiles/newscarousal.php'; 
    
    ?>
       <div id="wrraper-row" class="container zerorightmargin zeropadding ">
      <!-- Example row of columns -->
      <div id="wrapper-row" class="row zerorightmargin">
      <div id="side-nav" class="col-md-3 zeropadding">
        <ul class="rightnav nav nav-pills nav-stacked withborder">
    <li role="presentation" class="active"><a href="#">الصفحة الرئيسية</a></li>
   <?php
   require_once './phpfiles/ullideps.php';
   ?>

  </ul>
</div>
        
          <div class="col-md-9" style="background-color: white;width: 850px;margin-top: 10px">
            <div class="row">
                <div class="col-md-12">
                <h2>محاضرات فيديوية</h2>
                <div id="myElement">جاري التحميل...</div>
                  <script type="text/javascript">
                  var playerInstance = jwplayer("myElement");
                  playerInstance.setup({
                      file: "http://content.jwplatform.com/videos/HBhTSDD4-o8PBpRIs.mp4",
                      image: "http://content.jwplatform.com/thumbs/HBhTSDD4-480.jpg",
                      width: 830,
                      height: 415,//return to 360 to scale down th player
                      title: 'Basic Video Embed',
                      description: 'A video with a basic title and description!'
                  });
                  </script>
                  <script>
                    function loadVideo(myFile,myImage) { 
                      playerInstance.load([{
                        file: myFile,
                        image: myImage
                      }]);
                      playerInstance.play();
                    };
                  </script>
                </div><!-- of the jwplayer col-->
                
                
            </div><!-- end of the main content row-->
            
            <div id="numbnails-list" class="row">
                <div class="col-xs-6 col-md-3">
                    <p>المحاضرة الاولى:
                        انظمة التشغيل ذات المصدر المفتوح
                  </p>
                  <a href="javascript:loadVideo('file1.mp4','image1.jpg')" class="thumbnail">
                    <img src="http://content.jwplatform.com/thumbs/HBhTSDD4-480.jpg" alt="...">
                  </a>
                </div>
                <div class="col-xs-6 col-md-3 ">
                    <p>
                        المحاضرة الثالثة:
                        اساسيات الذكاء الصناعي
                    </p>
                  <a href="javascript:loadVideo('file1.mp4','image1.jpg')" class="thumbnail">
                    <img src="http://content.jwplatform.com/thumbs/HBhTSDD4-480.jpg" alt="...">
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <p>المحاضرة الثانية:
                        شبكات الحاسوب
                  </p>
                  <a href="javascript:loadVideo('file1.mp4','image1.jpg')" class="thumbnail">
                    <img src="http://content.jwplatform.com/thumbs/HBhTSDD4-480.jpg" alt="...">
                  </a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <p>المحاضرة الاولى: 
                      البرمجة بلغة 
                  سي شارب
                  </p>
                  
                  <a href="javascript:loadVideo('file1.mp4','image1.jpg')" class="thumbnail">
                    <img src="http://content.jwplatform.com/thumbs/HBhTSDD4-480.jpg" alt="...">
                  </a>
                </div>
                           
                
            </div>
            
            
            

        </div><!-- end of the main content col-->
        
        
      </div>

      

      
    </div> <!-- /container -->  
     
      
      
      </div> 
     
        <footer class="site-footer">
        <div class="container">
        <div class="row">
            <div class="col-md-8" >
                <p>
                    اعداد الاستاذة رنا خضير عباس
                    <br/>
                    برمجة وتصميم الطلبة ::
                    <br/>
                     مرتضى جابر  -   علي جمعة
                    <br/>
                    علي عبد الامير -  لؤي ابراهيم
                </p>
            </div>
            <div class="col-md-4" >
                <ul>
                    <li><a href="#">أتصل بنا</a></li>
                    <li><a href="#">ارسل سؤال</a></li>
                    <li><a href="#">الاخبار</a></li>
                    <li><a href="#">محاضرات فيديوية</a></li>
                </ul>
            </div>
        </div>
        </div>
        </footer>

        <script src="js/vendor/bootstrap.min.js"></script>

       
        <script src="js/main.js"></script>
        <script src="js/carousal.js"></script>
      
    </body>
    
</html>
