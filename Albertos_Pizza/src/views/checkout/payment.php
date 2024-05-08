<?php

require_once (dirname(__DIR__, 3) . "/vendor/autoload.php");

\Stripe\Stripe::setApiKey("sk_test_51OtfhgAT4czfQ1Emwf1ivxGOUSR7Q9BVC6GYFHvkufQG9FnWVxFL9qM8skwa9BKCPHCr5Cu4mN0z0MmtZ08htdyB007fLDpHMv");
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost';

$checkout_session = \Stripe\Checkout\Session::create([
  /**
   * This creates a Stripe checkout session to process your payment.
   * 
   * You will have to fill in details about your payment medium. Either
   * debit or credit cards, or digital wallets like Paypal or G-Cash (Stripe does not 
   * support G-Cash).
   * 
   * 'line_items' is where we will put the individual products purchased 
   * by the user, each property denoting the details like the name or price 
   * of the product.
  */
  'line_items' => [
    [
      'price_data' => [ 
        'currency' => 'php',
        'product_data' => [
          'name' => 'Stubborn Attachments',
          'images' => ['https://i.imgur.com/EHyR2nP.png']
        ],
        'unit_amount' => 10000,
      ],
      'quantity' => 1,
    ],
    [
      'price_data' => [
        'currency' => 'php',
        'product_data' => [
          'name' => 'Stubborn Attachments',
          'images' => ['https://i.imgur.com/EHyR2nP.png']
        ],
        'unit_amount' => 10000,
      ],
      'quantity' => 1,
    ]
  ],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/orders',
  'cancel_url' => $YOUR_DOMAIN . '/checkout/contact-info',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);