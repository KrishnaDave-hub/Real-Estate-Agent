<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap-reboot.min.css" integrity="sha512-OGIUn1RUUYIrr7oDnv8nV5QHFXj1fGDmT+qpcVvDdxkzsnQYhiikXow06DDNneSYAeLVShIuVCCAsdLv4SPkvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="product_list">
        <div class="container">
            <div class='row'>        
                <?php
                    foreach ($product as $row) {
                    echo "<div class='col-lg-4 col-md-6 col-sm-12 my-3'>
                        <section class='card'>
                            <figure>
                                <div class='img-overlay'>
                                    <img src='" . $row['feature_image'] . "'>
                                    <div class='overlay'>
                                        <a href='".get_site_url()."/elementor-504/?id=".$row['id']."''>
                                        view property</a>
                                    </div>
                                </div>
                                <figcaption>".$row['product_name']."</figcaption>
                            </figure>
                            <div class='card-content'>
                                <div class='icons-home'>
                                    <div class='name-icon'>
                                        <span>bedrooms</span>
                                        <div class='icon'>
                                            <i class='fas fa-bed'></i>
                                            <span>3</span>
                                        </div>
                                    </div>
                                    <div class='name-icon'>
                                        <span>bathrooms</span>
                                        <div class='icon'>
                                            <i class='fas fa-sink'></i>
                                            <span>2</span>
                                        </div>
                                    </div>
                                    <div class='name-icon'>
                                        <span>area</span>
                                        <div class='icon'>
                                            <i class='fas fa-vector-square'></i>
                                            <span>".$row['carpet']."</span>
                                        </div>
                                    </div>
                                </div>
                                <div class='price'>
                                    <span>For ".$row['product_name']."</span>
                                    <span>₹ ".$row['price']."</span>
                                </div>            
                        </section>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>