<?
    session_start();
    include "../lib/dbconn.php";
    //state query
    $state_sql = "select * from canada_state";
	$state_result = mysql_query($state_sql, $connect);
    $state_total_record = mysql_num_rows($state_result);
   
    if (mysql_error()) {
        die(mysql_error());
    }	  
    
?>
<!-- The Modal -->
<div id="modal_canada" class="modal">
   <!-- Modal content -->
   <div class="modal-content">
    <p class="country">CANADA</p>
    <div id="chartdiv_canada"></div>
        <div id="state" class="content-container">
<?		
    for ($i=0; $i < $state_total_record; $i++)                    
    {
        mysql_data_seek($state_result, $i);       
        $state_row = mysql_fetch_array($state_result);       

        $state_id      = $state_row[state_id];
        $state_title   = $state_row[state_title];
        $state_pic     = $state_row[pic];
        $state_detail  = $state_row[detail];
        $state_resource= $state_row[resource];
?>
            <div id ="<?= $state_id ?>" class="div_state">
                <?= $state_pic ?>
                    <p class = "state-title"><?= $state_title ?></p>
                    <p class = "state-resource">
                        <a href="#" onClick="window.open('<?= $state_resource ?>', '_blank')">
                            <?= $state_resource ?>
                        </a>
                    </p>
                    <p class = "state-detail"><?= $state_detail ?></p>

                <div id = "btn_<?= $state_id ?>" class="btn_state">
<?
    //city query
    $city_sql = "select * from canada_city where state_id='".$state_id."'";
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
                </div><!-- id:btn_state_code end -->
<?
    for ($j=0; $j < $city_total_record; $j++)                    
    {
        mysql_data_seek($city_result, $j);       
        $city_row      = mysql_fetch_array($city_result);   
        $city_id       = $city_row[city_id];
        $city_detail   = $city_row[detail];
        
?>
        <div id = "ct_<?= $city_id  ?>" class="container city-content">
            <p><?= $city_detail ?></p>

            <!-- slider start -->
            <div class="slideshow-container" id="slide_<?= $city_id  ?>">
           
<?

    //place query
    $place_sql = "select * from canada_place where city_id='".$city_id."'" ;
    $place_result = mysql_query($place_sql, $connect);
    $place_total_record = mysql_num_rows($place_result);

    for ($k=0; $k < $place_total_record; $k++)                    
    {
        mysql_data_seek($place_result, $k);       
        $place_row = mysql_fetch_array($place_result);       
            
        $place_title   = $place_row[place_title];
        $place_pic     = $place_row[pic];
        $place_resource= $place_row[resource];
?>   

                <div class="mySlides slideGroup_<?= $city_id ?>">
                    <?= $place_pic ?>
                    <p class = "city-title text"><?= $place_title ?></p>
                    <p class = "place-resource">
                        <a href="#" onClick="window.open('<?= $place_resource ?>', '_blank')">
                            <?= $place_resource ?>
                        </a>
                    </p>
                </div>
                
<?
    }
?>
                <a class="prev" onclick="moveSlides('slideGroup_<?= $city_id ?>', -1)">&#10094;</a>
                <a class="next" onclick="moveSlides('slideGroup_<?= $city_id ?>', 1)">&#10095;</a>
            </div>
                <br>
                <div id="dot_<?= $city_id ?>">
<? 
    for ($k= 0; $k < $place_total_record; $k++)           
    {
?>
                    <span class="dot slideGroup_<?= $city_id ?>" onclick="currentSlide('slideGroup_<?= $city_id ?>', <?=$k?>)"></span> 
<?  
    }
?>
                </div>
                <script>
                showSlides("slideGroup_<?= $city_id ?>", 0);
                </script>
        </div><!--container city-content-->
<?
    }
?>
            </div><!-- id:state_code end -->
<?
    }
?>
        </div><!-- id:state end -->
        <div id="ct_top">
            <input id="scrollTop" class = "btn_top" type="image" src="../img/up.png"  width="70" height="70">
        </div>
    </div><!--modal-content-->
</div><!--modal_Canada-->