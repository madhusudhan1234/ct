<?php

$router->get('', 'HomeController@index');

$router->get('api/payment-methods', 'API\PaymentMethodsController@index');
$router->get('api/products', 'API\ProductsController@index');
$router->post('api/order', 'API\OrderController@store');