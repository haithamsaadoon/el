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
        <link href="sbadmin/bower_components/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
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
          <?php
        session_start();
        
          
       if(!isset($_SESSION['use_id'])) echo '  <div id="navbar" class="navbar-collapse collapse">
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
      </div>';
      
       
       else{
            echo '<div id="navbar" class="navbar-collapse collapse">
            <form method="post" action="logouthandler.php" class="navbar-form navbar-left" role="form">
            <div class="form-group">
            <span style="color:white;">اهلا وسهلا</span>
            </div>
            <div class="form-group">
               <span style="color:white;"> بك في نظام التعليم الاليكتروني</span>
            </div>
            <button type="submit" class="btn btn-success">تسجيل خروج</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>';
       }
                  ?>
    </nav>
<div class="container">

    <div style="width:100%; background-color:#F00;height:245px;	background-image:url(img/training.jpg)">
        <h3 style="float: right;color: white;padding-right: 40px;padding-top: 50px;">
             نظام التعليم الأليكتروني متاح اينما تكون
</h3>
        <h3 style="float: left;color: white;padding-left: 40px;padding-top:50px;">
            
            eLearning is available everywhere
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
        <li role="presentation" class="active"><a href="index.php">الصفحة الرئيسية </a></li>
        <?php
        require './phpfiles/ullideps.php';
        ?>
 
        </ul>
        </div>
        
          <div class="col-md-9" style="background-color: white;width: 850px;margin-top: 10px">
            <div class="row">
                <div class="col-md-12">
              
              <br/>
                    <div class="table-responsive" style="overflow: hidden">
                                    <table id="users-table" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>تحميل  
                                                    <br/>
                                                       
                                                    ملف المادة</th>
                                                <th>عنوان الكورس</th>
                                                <th>اسم التدريسي</th>
                                                <th>رابط الامتحانات</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                    </table>
                    </div>
                    
                    
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

        <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="bower_components/DataTables/media/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        
    <script src="sbadmin/js/plugins/morris/raphael.min.js" type="text/javascript"></script>
    <script src="sbadmin/js/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="sbadmin/js/plugins/morris/morris-data.js" type="text/javascript"></script>
    <script src="sbadmin/bower_components/DataTables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="sbadmin/bower_components/DataTables/media/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script src="js/main.js"></script>
        <script src="js/carousal.js"></script>
        
        <script>
            <?php
            $depid=$_GET['depid'];
            $stage=$_GET['stage'];
            ?>
    
    $('#users-table').DataTable( {
        "ajax": {"url":"phpfiles/coursesviewjson.php?<?php echo "depid=$depid&stage=$stage";?>","datatype":"jsonp"},
        
        "columnDefs": [ {
                    "targets": 0,
                    
                    "render": function ( data, type, full, meta ) {
                      return '<a href="'+'sbadmin/downloadpdf.php?id='+data+'">'+'<img height="30px" width="30px" src="img/pdf.png">'+'</a>';
                    }
                  },
                  {
                    "targets": 3,
                    
                    "render": function ( data, type, full, meta ) {
                      return '<a href="'+'examdetail.php?id='+data+'">'+'<img height="30px" width="30px" src="img/exam.png">'+'</a>';
                    }
                  }
                    ]
                
    } );
    
    </script>
      
    </body>
    
</html>
