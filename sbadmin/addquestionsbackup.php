<?php
$note="";
if(isset($_GET['error']))
{
    switch ($_GET['error'])
    {
        case "success":
           $note ='<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>تم!</strong> تمت عملية اضافة الامتحان جديد بنجاح.</div>';
            break;
        case "failed":
            $note='<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطأ!</strong> حدث خلل عند ادخال البيانات, يرجى اعادة المحاولة بشكل صحيح </div>';
            break;
        case "deleted":
           $note ='<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>تم!</strong> تم حذف الامتحان.</div>';
            break;
        case "failed":
            $note='<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطأ!</strong> حدث خلل عند حذف الامتحان, يرجى اعادة المحاولة بشكل صحيح </div>';
            break;
        default :
            $note ="";
            break;
            
    }
    
}
$examid=10;//to be replaced with the get value
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>صفحة الادارة </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS RTL-->
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/sb-admin-rtl.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bower_components/DataTables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="bower_components/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../bower_components/datetimepicker/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #loading
{ 
width: 100%; 
position: absolute;
}
#pagination li
{ 
list-style: none; 
float: right; 
margin-right: 16px; 
padding:5px; 
border:solid 1px #dddddd;
color:#0063DC; 
}
#pagination li:hover
{ 
color:#FF0084; 
cursor: pointer; 
}


    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">صفحة المشرف</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> تسجيل خروج</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                      
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> اسم المستخدم <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-home"></i> الصفحة الرئيسية</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i> لوحة التحكم</a>
                    </li>
                    <li>
                        <a href="adduser.php"><i class="fa fa-fw fa-plus-circle"></i> اضافة مستخدم</a>
                    </li>
                    
                    <li>
                        <a href="addcourse.php"><i class="fa fa-fw fa-book"></i> ادارة الكورسات</a>
                    </li>
                    <li>
                        <a href="addnews.php"><i class="fa fa-fw fa-plus-circle"></i>أضافة اخبار</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
أضافة امتحان جديد                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>
                                لوحة التحكم \
                                
أضافة امتحان                            </li>
                        </ol>
                       <?php echo $note;?>
                    </div>
                </div>
                <!-- /.row -->
              <?php
 require '../mysqlcon.php';
$per_page = 5; 
$page=1;
if(isset($_GET['page']))
{
$page=$_GET['page'];
}

$start = ($page-1)*$per_page;
$sql = "select * from exams where exa_id=$examid";
$result = mysqli_query($conn,$sql);

require '../phpfiles/multiplefunction.php';
require '../phpfiles/singlefunction.php';
$olnumbering=$start+1;
echo "<ol type='1' start=\"$olnumbering\">";
$row = mysqli_fetch_assoc($result);

for($i=$olnumbering;$i<=$row['exa_nom'];$i++)
{
    
    
    echo '<li>';
    multiple($olnumbering);
    echo '</li>';
}
 echo "</ol>";

$total=$row['exa_nos']+$row['exa_nom'];
if($olnumbering>$row['exa_nom']){
    echo "<ol type='1' start=\"$olnumbering\">";
    
for($i=$olnumbering;$i<=$total;$i++)
{
   
    echo '<li>';
    single($olnumbering);
    echo '</li>';
}
 echo "</ol>";
 }
 
 
 
?>

                
                
                
<?php
//include('config.php');

//Calculating no of pages
require '../mysqlcon.php';
$sql = "select que_id from questionss where que_exam_id=$examid union all select quem_id from questionsm where quem_exam_id=$examid";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$pages = ceil($count/$per_page)
?>

<div id="loading" ></div>
<div id="content" ></div>
<ul id="pagination">
<?php
//Pagination Numbers
for($i=1; $i<=$pages; $i++)
{
echo '<li id="'.$i.'">'."<a href=\"addquestions.php?page=$i\">$i</a>".'</li>';
}
?>
</ul>
              
               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/datetimepicker/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="bower_components/DataTables/media/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="../bower_components/datetimepicker/jquery.datetimepicker.full.js" type="text/javascript"></script>
    <script>
    jQuery.datetimepicker.setLocale('ar');
    jQuery('#start').datetimepicker({format:'Y-m-d H:i'});
    jQuery('#end').datetimepicker();

    $('#users-table').DataTable( {
        "ajax": {"url":"../phpfiles/examsjson.php","datatype":"jsonp"},
        
        "columnDefs": [ {
                    "targets": 0,
                    
                    "render": function ( data, type, full, meta ) {
                      return '<a href="'+'addquestions.php?id='+data+'">'+data+'</a>';
                    }
                  } ]
        
        
        
        
        
    } );
    
                            //Display Loading Image
                        function Display_Load()
                        {
                        $("#loading").fadeIn(900,0);
                        $("#loading").html("<img src="bigLoader.gif" />");
                        }
                        //Hide Loading Image
                        function Hide_Load()
                        {
                        $("#loading").fadeOut('slow');
                        };

                        //Default Starting Page Results
                        $("#pagination li:first")
                        .css({'color' : '#FF0084'}).css({'border' : 'none'});
                        Display_Load();
                        $("#content").load("pagination_data.php?page=1", Hide_Load());

                        //Pagination Click
                        $("#pagination li").click(function(){
                        Display_Load();
                        //CSS Styles
                        $("#pagination li")
                        .css({'border' : 'solid #dddddd 1px'})
                        .css({'color' : '#0063DC'});

                        $(this)
                        .css({'color' : '#FF0084'})
                        .css({'border' : 'none'});

                        //Loading Data
                        var pageNum = this.id;
                        $("#content").load("pagination_data.php?page=" + pageNum, Hide_Load());
                        });

    
    </script>
</body>

</html>

