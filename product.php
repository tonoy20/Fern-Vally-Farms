<?php
include("header.php");
?>
<body>
    <div>
        <img class="cat_ban" src="images/categorybanner.png" alt="">
    </div>
    <div class="cat_nav">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="cat_nav_p">HOME // SHOP // <span class="cat_nav_span"> CBD HEMP FLOWER </span></p>
                </div>
                <div class="col-6">
                    <p class="cat_nav_p d-flex justify-content-between"><span class="cat_nav_span2">SORT BY:</span>Price - Lowest-Highest <select style=" background-color:rgb(240, 240, 240);  border: none;">
                        </select></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("product_middle.php");
    ?>
    <?php
    include("product_down.php");
    ?>
    <?php
    include("recom_product.php");
    ?>
    <?php 
    include("downPart.php");
    ?>
    <?php 
    include("footer.php");
    ?>
</body>
</html>