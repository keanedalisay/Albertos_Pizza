<footer class="footer">
    <div class="container container--footer">
        <?php 
        // Check if user is logged in
        $logged_in = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
        ?>

        <menu class="links links--footer">
            <?php if($logged_in): ?>
                <!-- If user is logged in -->
                <li class="links__link"><a href="/account">Your Account</a></li>
                <li class="links__link"><a href="/cart">Your Cart</a></li>
            <?php else: ?>
                <!-- If user is not logged in -->
                <li class="links__link"><a href="/account/sign-up">Sign-Up</a></li>
                <li class="links__link"><a href="/account/log-in">Log-In</a></li>
            <?php endif; ?>
            
            <li class="links__link"><a href="/orders">Your Orders</a></li>
            <li class="links__link"><a href="/products/pizzas/regular">View our Pizza's</a></li>
            <li class="links__link"><a href="/products/sides">View our Side Meals</a></li>
            <li class="links__link"><a href="/about">About Alberto's Pizza</a></li>
            
            <?php if($logged_in): ?>
                <!-- If user is logged in -->
                <li class="links__link"><a href="/account/logout">Log Out</a></li>
            <?php endif; ?>
        </menu>
        <div>
            <a class="footer__social_link" href="https://www.facebook.com/albertospizza"><img src="/assets/icons/iconmonstr-facebook-4.svg" alt=""> Follow us on Facebook</a>      
            <small class="footer__notice">Copyright © 2024 Alberto’s Pizza. All rights reserved.</small>
        </div>
    </div>
</footer>
