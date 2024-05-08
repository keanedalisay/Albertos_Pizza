<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Home</title>
    <link rel="stylesheet" href="/public/styles/global.css">
    <link rel="stylesheet" href="/public/styles/products.css">
    <link rel="shortcut icon"  href="/public/assets/icons/albertos-pizza-mascot.png" />
    <script src="/public/scripts/global.js" defer></script> 
</head>
<body>
<div class="background-image"></div>
<?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
<div class="main">
    <div class="main__title" id="main__1">
        <h2 class="main__title-text">Browse our assortment of pizzas!</h2>
    </div>

    </div>
    <div class="main__button" id="main__1">
        <h4 class="main__button-title">Regular Pizza's</h4>
        <div class="main__button-image"><img src="/public/assets/icons/iconmonstr-arrow-right-circle-filled.svg" class="main-odernow-button"></div> 
    </div>
    <div class="main__button" id="main__1">
        <h4 class="main__button-title">Spicy Pizza's</h4>
        <div class="main__button-image"><img src="/public/assets/icons/iconmonstr-arrow-right-circle-filled.svg" class="main-odernow-button"></div> 
    </div>
    <div class="main__button" id="main__1">
        <h4 class="main__button-title">For Kids Pizza's</h4>
        <div class="main__button-image"><img src="/public/assets/icons/iconmonstr-arrow-right-circle-filled.svg" class="main-odernow-button"></div> 
    </div>    
</div>
<div class="main__subtitle">   
<h2 class="main__subtitle-text">And below are pizza’s our customers love!</h2>
<div class="Featured__line1"></div>
</div>
<div class="Pizza" id="Pizza1">
    <div class="Pizza_box">
        <div class="Pizza_box_image" id="all"></div>
        <div class="Pizza_box_heading">ALL PEPPERONI</div>
        <div class="Pizza_box_heading2">9-inch with Quickmelt starts at ₱160</div>
        <div class="Pizza_box_subheading">Pork pepperoni with hot sauce.</div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>
    <div class="Pizza_box">       
        <div class="Pizza_box_image" id="supreme"></div>
        <div class="Pizza_box_heading">PIZZA SUPREME</div>
        <div class="Pizza_box_heading2">9-inch with Quickmelt and
            Mozarella starts at ₱125</div>
        <div class="Pizza_box_subheading">Pork pepperoni, bacon, mushroom, onions, pineapple tidbits, black olives, and green bell peppers.</div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>

    <div class="Pizza_box">
        <div class="Pizza_box_image" id="ham"></div>
        <div class="Pizza_box_heading">HAM DELIGHT</div>
        <div class="Pizza_box_heading2">9-inch with Quickmelt starts at ₱125</div>
        <div class="Pizza_box_subheading">All ham</div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>
</div>
<div class="Pizza" id="Pizza2">
    <div class="Pizza_box" >
        <div class="Pizza_box_image" id="hawa"></div>
        <div class="Pizza_box_heading">HAWAIIAN</div>
        <div class="Pizza_box_heading2">9-inch with Quickmelt and Mozarella starts at ₱125</div>
        <div class="Pizza_box_subheading">Ham, bacon, pineapple tidbits, mushroom, onions, and green bell pepper.</div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>
    <div class="Pizza_box" >
        <div class="Pizza_box_image" id="royal"></div>
        <div class="Pizza_box_heading">ROYAL FLUSH</div>
        <div class="Pizza_box_heading2">11-inch with Quickmelt and Mozarella starts at ₱290</div>
        <div class="Pizza_box_subheading">Cheese krainer, pork pepperoni, hungarian sausage, ham sausage, hotdog, chicken hotdog, hamonado, ground beef, chicken minced, tuna flakes, ham.</div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>
</div>

</div>
<div class="main__subtitle">   
<h2 class="main__subtitle-text">Pair your pizza’s with our side products!</h2>
<div class="Featured__line2"></div>
<div class="main__button" id="main__4">
    <h4 class="main__button-title">For Kids Pizza's</h4>
    <div class="main__button-image"><img src="/public/assets/icons/iconmonstr-arrow-right-circle-filled.svg" class="main-odernow-button"></div> 
</div>    
</div>
<div class="Pizza" id="Pizza1">
    <div class="Pizza_box">
        <div class="Pizza_box_image" id="halo"></div>
        <div class="Pizza_box_heading">HALO-HALO</div>
        <div class="Pizza_box_heading2">Starts at ₱68</div>
        <div class="Pizza_box_addtocart">add to cart</div>

    </div>
    <div class="Pizza_box">       
        <div class="Pizza_box_image" id="ice"></div>
        <div class="Pizza_box_heading">ICE SCREAM SUNDAE</div>
        <div class="Pizza_box_heading2">Starts at ₱98</div>
        <div class="Pizza_box_addtocart">add to cart</div>
    </div>

    <div class="Pizza_box">
        <div class="Pizza_box_image" id="sphag"></div>
        <div class="Pizza_box_heading">ALBETO'S SPAGHETTI</div>
        <div class="Pizza_box_heading2">Starts at ₱57</div>
        <div class="Pizza_box_addtocart">add to cart</div>

    </div>
</div>
<?php require_once dirname(__DIR__, 1)."/components/footer.php" ?>

</body>
</html>
    