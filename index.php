<?php
$active = 'Trang chủ';
include("includes/header.php");
?>

<!--Bat dau Slide-->
<div class="container" id="slider">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <?php
                $get_slides = "select * from slider LIMIT 0,1";
                $run_slider = mysqli_query($conn, $get_slides);
                while ($row_slides = mysqli_fetch_array($run_slider)) {
                    $slide_name = $row_slides['slider_name'];
                    $slide_image = $row_slides['slider_image'];
                    echo "
                            <div class='item active'>
                                <img style='width:1100px;height:490px;' src='admin_area/slides_images/$slide_image'>
                            </div>
                            ";
                }

                $get_slides = "select * from slider LIMIT 1,2";
                $run_slider = mysqli_query($conn, $get_slides);
                while ($row_slides = mysqli_fetch_array($run_slider)) {
                    $slide_name = $row_slides['slider_name'];
                    $slide_image = $row_slides['slider_image'];
                    echo "
                            <div class='item'>
                                <img style='width:1100px;height:490px;' src='admin_area/slides_images/$slide_image'>
                            </div>
                            ";
                }

                ?>
            </div>
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Truoc</span>
            </a>

            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Sau</span>
            </a>
        </div>
    </div>
</div>
<!--Ket thuc Slide-->

<!--Bat dau khung Hot deal-->
<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>HOT DEAL</h2>
            </div>
        </div>
    </div>
</div>
<!--Ket thuc khung Hot deal-->

<!--Bat dau content cua hot deal-->
<div id="content" class="container">
    <div class="row">

        <?php
        getPro();
        ?>
    </div>
</div>
<!--Ket thuc content cua hot deal-->
<?php
include("includes/footer.php");
?>
<script src="js/jquery-331.js"></script>
<script src="js/boostrap-337.js"></script>
</body>

</html>