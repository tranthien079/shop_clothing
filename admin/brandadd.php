<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/sp.css">
    <title>Thương hiệu sản phẩm</title>
</head>
<?php include '../classses/brand.php' ?>
<?php
    $brand = new brand();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $brandName = $_POST['brandName'];
        $insertBrand = $brand->insert_brand($brandName);
    }
?>
<body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">
        <?php include './inc/header.php' ?>
        <main>
            <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <div class="activity-header">
                        <h3>Thêm thương hiệu sản phẩm</h3>
                    </div>
                    <?php
                        if(isset($insertBrand)){
                                echo $insertBrand;
                            }
                        ?>
                    <form action="brandadd.php" method="post">
                    <table class="form" style="border-collapse: inherit;">					
                        <tr>
                            <td>
                                <input type="text" name="brandName" placeholder="Thêm thương hiệu " class="medium" style="width: 50%;text-align: center;padding: 10px;border-radius: 6px;font-size: 20px;" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" style="padding: 10px 20px;border-radius: 6px;color: #fff;background: #323434;" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
            </section>
        </main>
    </div>
</body>
</html>