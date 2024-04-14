<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Home</title>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="shortcut icon"  href="assets/icons/albertos_pizza_mascot.png" />
    <script src="scripts/global.js" defer></script> 
</head>
<body>

<?php require_once dirname(__DIR__, 1)."/components/header.php" ?>
    
<div class="background"></div>
<div class="main">
    <div class="main__title" id="main__1">
        <h1 class="main__title-text">Experience the unforgettable taste of</h1>
    </div>
    <div class="main__image" id="main__1"><img src="assets/images/albertos_pizza_banner.png" class="main__logo-image"></div>
    <div class="main__subtitle" id="main__1">
        <h2 class="main__subtitle-text">a flavor you’ll crave again and again.</h2>
    </div>
    <div class="main__button" id="main__1">
        <h4 class="main__button-title">Ordernow</h4>
        <div class="main__button-image"><img src="assets/icons/iconmonstr-arrow-right-circle-filled.svg" class="main-odernow-button"></div> 
    </div>
</div>
    
<div class="Featured">
    <div class="Featured__line1"></div>
    <h2 class="Featured__title">Featured Pizza's</h2>
    <div class="Featured__line1"></div>
</div>

<div class="Pizza" id="Pizza1">
    <div class="Pizza_box">
        <div class="Pizza_box_image" id="aloha"></div>
        <div class="Pizza_box_heading">Aloha</div>
        <div class="Pizza_box_heading2">9-inch with Quickmelt starts at ₱115</div>
        <div class="Pizza_box_subheading">Lots of pineapples, ham sausage, mushroom, and green bell pepper.</div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>
    <div class="Pizza_box">       
        <div class="Pizza_box_image" id="marina"></div>
        <div class="Pizza_box_heading">PIZZA D’ MARINA</div>
        <div class="Pizza_box_heading2">11-inch with Quickmelt and
            Mozarella starts at ₱290</div>
        <div class="Pizza_box_subheading">Spanish sardines, tuna flakes, crab
    stick, anchovies, shrimp, carrots,
    pickles, onions, and tomatoes. </div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>

    <div class="Pizza_box">
        <div class="Pizza_box_image" id="supreme"></div>
        <div class="Pizza_box_heading">PIZZA SUPREME</div>
        <div class="Pizza_box_heading2">9-inch with Quickmelt starts at ₱125</div>
        <div class="Pizza_box_subheading">Pork pepperoni, bacon, mushroom, onions, pineapple tidbits, black olives, and green bell    peppers.</div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>
</div>
<div class="Pizza" id="Pizza2">
    <div class="Pizza_box" >
        <div class="Pizza_box_image" id="royal"></div>
        <div class="Pizza_box_heading">ROYAL FLUSH</div>
        <div class="Pizza_box_heading2">11-inch with Quickmelt and Mozarella starts at ₱290</div>
        <div class="Pizza_box_subheading">Pork pepperoni, bacon, mushroom, onions, pineapple tidbits, black olives, and green bell peppers.</div>
        <div class="Pizza_box_addtocart">add to cart</div>
        <div class="Pizza_box_customize">customize</div>
    </div>
</div>

<?php require_once dirname(__DIR__, 1)."/components/footer.php" ?>

</body>
</html>
    