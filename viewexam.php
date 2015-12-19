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
$examid=10;
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
      <script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//localhost:8888/el2/vendor/remdex/livehelperchat/lhc_web/index.php/ara/chat/getstatus/(click)/internal/(position)/bottom_left/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
      
        <style>
input{font-size: 12px;}
        </style>
      
      
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   
    
        
              
        
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
    <div class="container">
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
                <div class="col-md-12" style="font-size: 13px;">
                        <form action="addquestionshandler.php" method="post">
             <?php
                require 'mysqlcon.php';
               $per_page = 5; 
               $page=1;
               if(isset($_GET['page']))
               {
               $page=$_GET['page'];
               }
                echo "<input type='hidden' name='examid' value=\"$examid\" />";
               //$start = ($page-1)*$per_page;
               $sql = "select * from exams where exa_id=$examid";
               $result = mysqli_query($conn,$sql);

               require './phpfiles/multiplefunctionanswer.php';
               require './phpfiles/singlefunctionanswer.php';
              // $olnumbering=$start+1;
               $sql = "select * from questionsm where quem_exam_id=$examid";
               $result = mysqli_query($conn,$sql);
               
               $nosindex=1;
               echo "<ol type='1' >";
              while( $row = mysqli_fetch_assoc($result))
              {
                  echo '<li>';
                   multiple($row);
                   echo '</li>';
                    $nosindex++;
              }
              
                echo "</ol>";
                

               $sql = "select * from questionss where que_exam_id=$examid";
               $result = mysqli_query($conn,$sql);
               
               echo "<ol type='1' start=\"$nosindex\">";
               for($i=1;$i<=$row['exa_nos'];$i++)
               {

                   echo '<li>';
                   single($i);
                   echo '</li>';
               }
                echo "</ol>";
               



                ?>
                    <input  type="submit" value="ادخل الاسئلة">
                </form>
                    
                    
                    
                    
                </div><!-- of the jwplayer col-->
               
            </div><!-- end of the main content row-->
            
          
            
            
            

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
