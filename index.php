<?php

include 'db_connection.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '/':
        require __DIR__ . '/views/home.php';
        break;

    case '/products':
        require __DIR__ . '/views/products.php';
        break;

    case '/auth':
        require __DIR__ . '/views/auth.php';
        break;

    case '/checkout':
        require __DIR__ . '/views/checkout.php';
        break;

    case '/contact':
        require __DIR__ . '/views/contact.php';
        break;

    case '/about':
        require __DIR__ . '/views/about-us.php';
        break; 
    case '/blog':
        require __DIR__ . '/views/blog.php';
        break;  
    case '/testimonials':
        require __DIR__ . '/views/testimonials.php';
        break;   
    case '/terms':
        require __DIR__ . '/views/terms.php';
        break; 
    case '/product-details':
        require __DIR__ . '/views/product-details.php';
        break;  
    case '/blog-details':
        require __DIR__ . '/views/blog-details.php';
        break;       
    case '/emp_list':
        require __DIR__ . '/views/emp_list.php';
        break; 
    case '/product_list':
        require __DIR__ . '/views/product_list.php';
        break;  
    case '/admin':
        require __DIR__ . '/views/admin.php';
        break;  
    case '/message_list':
        require __DIR__.'/views/message_list.php';  
        break;
    case '/add_emp':
        require __DIR__.'/views/add_emp.php';
        break;
    case '/add_product':
        require __DIR__.'/views/add_product.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>