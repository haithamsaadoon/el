<?php
$note="";
if(isset($_GET['error']))
{
    switch ($_GET['error'])
    {
        case "success":
           $note ='<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>تم!</strong> تمت عملية اضافة مستخدم جديد بنجاح.</div>';
            break;
        case "failed":
            $note='<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطأ!</strong> حدث خلل عند ادخال البيانات, يرجى اعادة المحاولة بشكل صحيح </div>';
            break;
        default :
            $note ="";
            break;
            
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page </title>

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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <a href="adduser.php"><i class="fa fa-fw fa-plus-circle"></i> اضافة مسنخدم</a>
                    </li>
                    <li>
                        <a href="addcourse.html"><i class="fa fa-fw fa-book"></i> ادارة الكورسات</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li class="active">
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
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
                            أضافة مستخدم جديد
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>
                                لوحة التحكم \
                                
                                اضافة مستخدم
                            </li>
                        </ol>
                       <?php echo $note;?>
                    </div>
                </div>
                <!-- /.row -->
                <form role="form" class="form-inline" method="post" action="adduserhandler.php">
                    <div class="row">

                        <div class="col-lg-12">
                        
                                    <div class="input-group">
                                        <span class="input-group-addon">1</span>
                                        <input name="first" type="text" class="form-control" id="first" placeholder="الأسم الاول">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">2</span>
                                        <input name="second" type="text" class="form-control" id="second" placeholder="الأسم الثاني">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">3</span>
                                        <input name="third" type="text" class="form-control" id="last" placeholder="الأسم الثالث">
                                    </div>
                            <br/>
                            <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input name="use_username" type="text" class="form-control" id="first" placeholder="اسم المستخدم">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

                                        <input name="use_password" type="password" class="form-control" id="second" placeholder="كلمة المرور">
                                    </div>
                            
                            <br/>
                            <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                                        <select name="dep_id" class="form-control">
                                            <option value="">اختر القسم</option>
                                            <?php
                                            require '../phpfiles/selectdep.php';
                                            ?>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                                        <select name="stage" class="form-control">
                                            <option value="">اختر المرحلة</option>
                                            <option value="1">المرحلة الأولى</option>
                                            <option value="1">المرحلة الثانية</option>
                                            <option value="1">المرحلة الثالثة</option>
                                            <option value="1">المرحلة الرابعة</option>
                                            <option value="1">المرحلة الخامسة</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                                        <select name="role" class="form-control" >
                                            <option value="">اختر الدور</option>
                                            <option value="prof">استاذ</option>
                                            <option value="student">طالب </option>
                                            <option value="admin">مدير موقع</option>
                                        </select>
                                    </div>
                            <br/>
                            <br/>
                            
                                  
                                  <button type="submit" class="btn btn-default">اضافة</button>
                       
                        </div>


                    </div>
                     
                </form>   
                    
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-users"></i> أسماء المستخدمين</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive" style="overflow: hidden">
                                    <table id="users-table" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>الرقم الرمزي 
                                                    <br/>
                                                       
                                                    (لحذف المستخدم) </th>
                                                <th>الاسم</th>
                                                <th>الوظيفة</th>
                                                <th>القسم</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="bower_components/DataTables/media/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    
    <script>
    
    $('#users-table').DataTable( {
        "ajax": {"url":"../phpfiles/usersjson.php","datatype":"jsonp"},
        
        "columnDefs": [ {
                    "targets": 0,
                    
                    "render": function ( data, type, full, meta ) {
                      return '<a href="'+'deleteuser.php?id='+data+'">'+data+'</a>';
                    }
                  } ]
        
        
        
        
        
    } );
    
    </script>
</body>

</html>

