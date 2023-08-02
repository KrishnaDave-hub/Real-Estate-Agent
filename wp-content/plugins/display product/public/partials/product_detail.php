<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap-reboot.min.css" integrity="sha512-OGIUn1RUUYIrr7oDnv8nV5QHFXj1fGDmT+qpcVvDdxkzsnQYhiikXow06DDNneSYAeLVShIuVCCAsdLv4SPkvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div id="product_detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product_images">
                        <div class="Frame">
                            <div class="slider slider-single">
                                <?php 
                                    foreach ($images as $key => $value) { ?>
                                        <div class="item">
                                            <img src="<?= $value['image_name']?>"/>
                                        </div>        
                                <?php } ?>
                            </div>
                            <div class="slider slider-nav">
                                <!-- <div class="item"> -->
                                <?php 
                                    foreach ($images as $key => $value) { ?>
                                        <div class="item">
                                            <img src="<?= $value['image_name']?>"/>
                                        </div>        
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product_description">
                        <div class="product_title">
                            <h2><?php echo $row['typeProp']?></h2>
                        </div>
                        <div class="product_price">
                            <h4>₹<?php echo $row['price'] ?></h4>
                        </div>
                    <table class="product_des table table-bordered">
                        <tbody>
                            <tr>
                                <th>Type Of Property</th>
                                <td><?php echo $row['typeProp']?></td>
                            </tr>
                            <tr>
                                <th>Property Status</th>
                                <td><?php echo $row['product_name']?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><?php echo $row['city']?></td>
                            </tr>
                            <tr>
                                <th>Area</th>
                                <td><?php echo $row['area']?></td>
                            </tr>
                            <tr>
                                <th>Yard Area</th>
                                <td><?php echo $row['yards']?></td>
                            </tr>
                            <tr>
                                <th>Carpet Area</th>
                                <td><?php echo $row['carpet']?></td>
                            </tr>
                        <?php
                            if ($row['typeProp'] == 'House') { ?>
                                <tr>
                                    <th>Type Of House</th>
                                    <td><?php echo $row['typeHome']?></td>
                                </tr>
                                <tr>
                                    <th>How Old The Construction Is?</th>
                                    <td><?php echo $row['cons_old']?></td>
                                </tr>
                                <tr>
                                    <th>Total Number Of Bedrooms</th>
                                    <td><?php echo $row['bedrooms']?></td>
                                </tr>
                                <tr>
                                    <th>Total Number Of Bathroom</th>
                                    <td><?php echo $row['bathrooms']?></td>
                                </tr>
                                <tr>
                                    <th>Four Wheel Parking</th>
                                    <td><?php echo $row['kms']?></td>
                                </tr>
                                <tr>
                                    <th>Elevator (Lift) </th>
                                    <td><?php echo $row['lift']?></td>
                                </tr>
                                <tr>
                                    <th>Furniture </th>
                                    <td><?php echo $row['furniture']?></td>
                                </tr>
                            <?php } elseif ($row['typeProp']=='Office') {?>
                                <tr>
                                    <th>How Old The Construction Is?</th>
                                    <td><?php echo $row['cons_old']?></td>
                                </tr>
                                <tr>
                                    <th>Is Bathroom Available </th>
                                    <td><?php echo $row['bathrooms']?></td>
                                </tr>
                                <tr>
                                    <th>Four Wheel Parking</th>
                                    <td><?php echo $row['kms']?></td>
                                </tr>
                                <tr>
                                    <th>Do There Is Elevator (Lift) </th>
                                    <td><?php echo $row['lift']?></td>
                                </tr>
                                <tr>
                                    <th>Do There Is Furniture </th>
                                    <td><?php echo $row['furniture']?></td>
                                </tr>
                            <?php } ?>
                                <tr>
                                    <th>Is It Road Facing?</th>
                                    <td><?php echo $row['roadFacing']?></td>
                                </tr>
                                <tr>
                                    <th>24*7 Water Supply</th>
                                    <td><?php echo $row['water']?></td>
                                </tr>
                                <tr>
                                    <th>CCTV Camera</th>
                                    <td><?php echo $row['cctv']?></td>
                                </tr>
                                <tr>
                                    <th>Other Details </th>
                                    <td><?php echo $row['other']?></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div class="forMore">
                            <a href="tel:+919484647525" target="blank" class="links">For More Inquery About This</a>
                            <a href="https://wa.me/+9484645141/?text=Hellokrishna%20there!%0A12345" target="blank" class="links">For More Inquery</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- <script type="text/javascript" src="public/js/slider.js"></script> -->
    <script>
        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            adaptiveHeight:true,
            infinite:   true,
            useTransform: true,
            speed: 200,
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        });

        $('.slider-nav')
            .on('init', function(event, slick) {
                $('.slider-nav .slick-slide.slick-current').addClass('is-active');
            })
            .slick({
                slidesToShow: 3,
                slidesToScroll:1,
                arrows: false,
                dots: true,
                focusOnSelect: true,
                infinite: false,
                accessibility: true
                // responsive: [{
                //     breakpoint: 1024,
                //     settings: {
                //         slidesToShow: 5,
                //         slidesToScroll: 5,
                //     }
                // }, {
                //     breakpoint: 640,
                //     settings: {
                //         slidesToShow: 4,
                //         slidesToScroll: 4,
                //     }
                // }, {
                //     breakpoint: 420,
                //     settings: {
                //         slidesToShow: 3,
                //         slidesToScroll: 3,
                // }
                // }]
            });
            $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
                $('.slider-nav').slick('slickGoTo', currentSlide);
                var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
                $('.slider-nav .slick-slide.is-active').removeClass('is-active');
                $(currrentNavSlideElem).addClass('is-active');
            });
            $('.slider-nav').on('click', '.slick-slide', function(event) {
                event.preventDefault();
                var goToSingleSlide = $(this).data('slick-index');

                $('.slider-single').slick('slickGoTo', goToSingleSlide);
            });
    </script>
</body>
</html>