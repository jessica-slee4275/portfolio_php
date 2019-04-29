<?
    session_start();
    include "../../lib/dbconn.php";
    //state query
    $state_sql = "select * from usa_state";
	$state_result = mysql_query($state_sql, $connect);
    $state_total_record = mysql_num_rows($state_result);
   
    if (mysql_error()) {
        die(mysql_error());
    }	  
    
?>
<!-- The Modal -->
<div id="modal_usa" class="modal"><!-- 1 start -->
    <!-- Modal content -->
    <div class="modal-content"><!-- 2 start -->
    <p class="country">USA</p>
    <input class="btn_close" type="image" src="../../img/map/btn_close.png">
    <div id="chartdiv_usa"></div>
        <div id="state" class="content-container"> <!-- 3 start -->
<?		
    for ($i=0; $i < $state_total_record; $i++)                    
    {
        mysql_data_seek($state_result, $i);       
        $state_row = mysql_fetch_array($state_result);       

        $state_id      = $state_row[state_id];
        $state_title   = $state_row[state_title];
        $state_pic     = str_replace("../img", "../../img", $state_row[pic]);
        $state_detail  = $state_row[detail];
        $state_resource= $state_row[resource];
?>
            <div id ="<?= $state_id ?>" class="div_state"><!-- 4 start -->
                    <?= $state_pic ?>
                    <p class = "state-title"><?= $state_title ?></p>
                    <p class = "state-resource">
                        <a href="#" onClick="window.open('<?= $state_resource ?>', '_blank')">
                            <?= $state_resource ?>
                        </a>
                    </p>
                    <p class = "state-detail"><?= $state_detail ?></p>
                <div id = "btn_<?= $state_id ?>" class="btn_state"><!-- 5 start -->
<?
    
    //city query
    $city_sql = "select * from usa_city where state_id ='".$state_id."'";
    $city_result = mysql_query($city_sql, $connect);
    $city_total_record = mysql_num_rows($city_result);
    for ($j=0; $j < $city_total_record; $j++)                    
    {
        mysql_data_seek($city_result, $j);       
        $city_row      = mysql_fetch_array($city_result);  
        $city_id       = $city_row[city_id ];
        $city_title    = $city_row[city_title];
?>
                    <button id ="<?= $city_id ?>" data-city="<?= $city_id ?>" class = "button btn_city btn_select"><?= $city_title ?></button>
                    
<?
    }
?>
                </div><!-- id:btn_state_id end --><!-- 5 end -->
<?  
    for ($j=0; $j < $city_total_record; $j++)                    
    {
        mysql_data_seek($city_result, $j);       
        $city_row      = mysql_fetch_array($city_result);   
        $city_id       = $city_row[city_id];
        $city_detail   = $city_row[detail];
        
?>
        <div id = "ct_<?= $city_id  ?>" class="container city-content"><!-- 6 start -->
            <p><?= $city_detail ?></p>

            <!-- slider start -->
            <div class="slideshow-container" id="slide_<?= $city_id  ?>"><!-- 7 start -->
           
<?

    //place query
    $place_sql = "select * from usa_place where city_id='".$city_id."'" ;
    $place_result = mysql_query($place_sql, $connect);
    $place_total_record = mysql_num_rows($place_result);

    for ($k=0; $k < $place_total_record; $k++)                    
    {
        mysql_data_seek($place_result, $k);       
        $place_row = mysql_fetch_array($place_result);       
            
        $place_title   = $place_row[place_title];
        $place_pic     = str_replace("../img", "../../img", $place_row[pic]);
        $place_resource= $place_row[resource];
?>   

                <div class="mySlides slideGroup_<?= $city_id ?>"><!-- 8 start -->
                    <?= $place_pic ?>
                    <p class = "city-title text"><?= $place_title ?></p>
                    <p class = "place-resource">
                        <a href="#" onClick="window.open('<?= $place_resource ?>', '_blank')">
                            <?= $place_resource ?>
                        </a>
                    </p>
                </div><!-- 8 end -->
<?
    }
?>
                <a class="prev" onclick="moveSlides('slideGroup_<?= $city_id ?>', -1)">&#10094;</a>
                <a class="next" onclick="moveSlides('slideGroup_<?= $city_id ?>', 1)">&#10095;</a>
            </div><!-- 7 end -->
                <br>
                <div style="text-align:center" id="dot_<?= $city_id ?>"><!-- 9 start -->
<? 
    for ($k= 0; $k < $place_total_record; $k++)           
    {
?>
                    <span class="dot slideGroup_<?= $city_id ?>" onclick="currentSlide('slideGroup_<?= $city_id ?>', <?=$k?>)"></span> 
<?
    }
?>
                </div><!-- 9 end -->
                <script>
                showSlides("slideGroup_<?= $city_id ?>", 0);
                </script>
        </div><!--container city-content--><!-- 6 end -->
<?
    }
?>


            </div><!-- id:state_id end --><!-- 4 end -->
<?
    }
?>
        </div><!-- id:state end --><!-- 3 end -->
        <div id="ct_top">
            <input class = "btn_top" type="image" src="../../img/up.png">
        </div>
    </div><!--modal-content--><!-- 2 end -->
</div><!--modal_USA--><!-- 1 end -->