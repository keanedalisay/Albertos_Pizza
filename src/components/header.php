<header class="header">
    <div class="container container--header">
        <a href="/"><img class="header__logo" src="/assets/images/albertos-pizza-logo.png"
                alt="The Alberto's Pizza official logo. Redirects to the home page." class="header__logo-image"></a>
        <nav class="header__nav">
            <button class="menu_btn" data-js="menu_btn">
                Menu <img class="menu_btn__icon" data-js="menu_btn_icon"
                    src="/assets/icons/iconmonstr-caret-down-circle-filled.svg" alt="">
            </button>
            <menu class="links links--menu_desktop">
                <li class="links__link"><a href="/orders">Your Orders</a></li>
                <li class="links__link"><a href="/products">Our Products</a></li>
                <?php
                // Check if user is logged in
                if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])):
                    // If user is logged in
                    ?>
                    <li class="links__link"><a href="/account">Your Account</a></li>
                    <li class="links__link"><a href="/account/logout">Log Out</a></li>
                <?php else: ?>
                    <!-- If user is not logged in -->
                    <li class="links__link"><a href="/account/log-in">Log-In</a></li>
                    <li class="links__link"><a href="/account/sign-up">Sign-Up</a></li>
                <?php endif; ?>
            </menu>
            <a class="cart_link" href="/account/cart">
                <img class="cart_link__icon" src="/assets/icons/iconmonstr-basket-6.svg"
                    alt="Access your product cart.">
                <small class="cart_link__count" data-js="cart_count">
                    <?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?> </small>
            </a>
            <menu class="links links--menu_mobile" data-js="menu_mobile">
                <li class="links__link"><a href="/account/sign-up">Sign-up for a new account</a></li>
                <li class="links__link"><a href="/account/log-in">Log-in to your account</a></li>
                <li class="links__link"><a href="/products">View and order our products</a></li>
                <li class="links__link"><a href="/cart">Check your cart</a></li>
                <li class="links__link"><a href="/orders">View your orders</a></li>
            </menu>
        </nav>
    </div>
</header>

</header>