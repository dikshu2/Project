<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
<body>
<!-- header -->
<?php
include 'header.php'
?>

<section class="product">
    <div class="row py-3">
        <div class="col-lg-3  py-3 text-center">
            <form action="manage_cart.php" method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="image/pomegranate.png" class="" height="220px"alt="" srcset="">
                    </div>
                </div>
                <h6>Pomegranate</h6>
                <p>Rs60 per kg</p>
                <button type="submit" name="Add_To_Cart" class="btn4">Add to cart</button>
                <input type="hidden" name="Item_Name" value="Pomegranate">
                <input type="hidden" name="Price" value="60">
            </form>
        </div>

        <div class="col-lg-3 py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/strawberry.jpg" class="" height="220px" alt="" srcset="">
                </div>
            </div>
            <h6>Strawberry</h6>
            <p>Rs70 per kg</p>
            <button type="submit"class="btn4">Add to cart</button>
        </div>

        <div class="col-lg-3 py-3  text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/apple.png" class="" height="220px" alt="" srcset="">
                </div>
            </div>
            <h6>Apple</h6>
            <p>Rs60 per kg</p>
            <button type="submit"class="btn4">Add to cart</button>
        </div>

        <div class="col-lg-3  py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/mango.png" class="" height="220px" alt="" srcset="">
                </div>
            </div>
            <h6>Mango </h6>
            <p>Rs50 per kg</p>
            <button type="submit"class="btn4">Add to cart</button>
        </div>
            
        <div class="col-lg-3  py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/kiwi.png" class=""height="220px"  alt="" srcset="">
                </div>
            </div>
            <h6>Kiwi</h6>
            <p>Rs90 per kg</p>
            <button type="submit"class="btn4">Add to cart</button>
        </div>

        <div class="col-lg-3  py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/guava.png" class=""height="220px" alt="" srcset="">
                </div>
            </div>
            <h6>Guava</h6>
            <p>Rs80 per kg</p>
            <button type="submit"class="btn4">Add to cart</button>
        </div>

        <div class="col-lg-3 py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/orange.png" class=""height="220px" alt="" srcset="">
                </div>
            </div>
            <h6>Orange</h6>
            <p>Rs40 per kg</p>
            <button type="submit"class="btn4">Add to cart</button>
        </div>

        <div class="col-lg-3 py-3 text-center">
            <div class="card border-2 bg-light mb-2">
                <div class="card-body">
                    <img src="image/black-grapes.png" class=""height="220px" alt="" srcset="">
                </div>
            </div>
            <h6>Black Grapes</h6>
            <p>Rs70 per kg</p>
            <button type="submit"class="btn4">Add to cart</button>
        </div>
            
    </div>
        
</section>

<!-- footer -->
<?php
include 'footer.php'
?>    

</body>
</html>

