<?php
require_once './mysqlcon.php';
$news="";
$sql = "SELECT * FROM news order by new_date desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $newsid=1;
    while($row = $result->fetch_assoc()) {
       $news[$newsid][1]=$row["new_id"];
       $news[$newsid][2]=$row["new_title"];
       $news[$newsid][3]=$row["new_short"];
       $news[$newsid][4]=$row["new_detail"];
       $news[$newsid][5]=$row["new_date"];
       $newsid++;
    }
} else {
    echo "";
}

?>


<div class="container">
    	
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" style="width:100%">
      
        <div class="item active" >
            <img width="770" height="393" alt="no image" src="sbadmin/downloadimage.php?id=<?php echo $news[1][1];?>" >
           <div class="carousel-caption">
               <h4><a href="viewnews.php?id=<?php echo $news[1][1];?>"><?php echo $news[1][2];?></a></h4>
            <p> <?php echo $news[1][3];?>
                <a class="label label-primary" href="viewnews.php?id=<?php echo $news[1][1];?>" target="_blank">تفاصيل الخبر ..</a>
            </p>
            
            
          </div>
        </div><!-- End Item -->
 
         <div class="item" >
            <img width="770" height="393" src="sbadmin/downloadimage.php?id=<?php echo $news[1][1];?>" >
           <div class="carousel-caption">
               <h4><a href="viewnews.php?id=<?php echo $news[2][1];?>"><?php echo $news[2][2];?></a></h4>
            <p> <?php echo $news[2][3];?>
                <a class="label label-primary" href="viewnews.php?id=<?php echo $news[2][1];?>" target="_blank">تفاصيل الخبر ..</a>
            </p>
            
            
          </div>
        </div><!-- End Item -->
        
        <div class="item" >
            <img width="770" height="393" src="sbadmin/downloadimage.php?id=<?php echo $news[1][1];?>" >
           <div class="carousel-caption">
               <h4><a href="viewnews.php?id=<?php echo $news[3][1];?>"><?php echo $news[3][2];?></a></h4>
            <p> <?php echo $news[3][3];?>
                <a class="label label-primary" href="viewnews.php?id=<?php echo $news[3][1];?>" target="_blank">تفاصيل الخبر ..</a>
            </p>
            
            
          </div>
        </div><!-- End Item -->
        
        <div class="item" >
            <img width="770" height="393" src="sbadmin/downloadimage.php?id=<?php echo $news[1][1];?>" >
           <div class="carousel-caption">
               <h4><a href="viewnews.php?id=<?php echo $news[4][1];?>"><?php echo $news[4][2];?></a></h4>
            <p> <?php echo $news[4][3];?>
                <a class="label label-primary" href="viewnews.php?id=<?php echo $news[4][1];?>" target="_blank">تفاصيل الخبر ..</a>
            </p>
            
            
          </div>
        </div><!-- End Item -->

        <div class="item" >
            <img width="770" height="393" src="sbadmin/downloadimage.php?id=<?php echo $news[1][1];?>" >
           <div class="carousel-caption">
               <h4><a href="viewnews.php?id=<?php echo $news[5][1];?>"><?php echo $news[5][2];?></a></h4>
            <p> <?php echo $news[5][3];?>
                <a class="label label-primary" href="viewnews.php?id=<?php echo $news[5][1];?>" target="_blank">تفاصيل الخبر ..</a>
            </p>
            
            
          </div>
        </div><!-- End Item -->
                
      </div><!-- End Carousel Inner -->


    <ul class="list-group col-sm-3">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>الزي الموحد
</h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>ندوة علمية بخصوص حقيبة برمجية للأمتحان الألكتروني</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>أطلاق وثائق الخريجيين</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>أعلان الى طلبة قسم هندسة تقنيات الحاسوب
</h4></li>
      <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>الى طلبة طب الاسنان الغير مستوفين للتدريب الصيفي</h4></li>
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
    
    