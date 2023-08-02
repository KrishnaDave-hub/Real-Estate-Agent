<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap-reboot.min.css" integrity="sha512-OGIUn1RUUYIrr7oDnv8nV5QHFXj1fGDmT+qpcVvDdxkzsnQYhiikXow06DDNneSYAeLVShIuVCCAsdLv4SPkvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="admin_list_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h3>Car List</h3>
                    </div>
                </div>
                <input class="form_control" type="hidden" name="ajax_url" id="ajax_url" value="<?= admin_url('admin-ajax.php', null); ?>">
                <div class="col-lg-12 list_page">
                    <table class="product_des table table-bordered">
                        <thead>
                            <th>Property ID</th>
                            <th>Property Type</th>
                            <th>City</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($product as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['typeProp']?></td>
                                        <td><?= $row['city']?></td>
                                        <td>
                                            <input class="form_control" type="hidden" name="ajax_url" id="ajax_url" value="<?= admin_url('admin-ajax.php', null); ?>">
                                            <a class="links" href="admin.php?page=Update-product&id=<?= $row['id'];?>">Edit</a>
                                        </td>
                                        <td>
                                            <a class="links" onclick="propDelete(<?= $row['id'] ?>);" href="javascript:void(0)">Delete</a>
                                        </td>
                                    </tr>
                              <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>