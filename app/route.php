<?php

$app->router->get('',[HomeController::class ,'index']);
$app->router->get('/home',[HomeController::class ,'index']);

$app->router->get('/about-us','about-us');
$app->router->get('/factory','factory');

$app->router->get('/try','try');

$app->router->get('/products',[productsController::class, 'productsPage']);
$app->router->get('/product/{productIdentify}',[productsController::class, 'productSingle']);

$app->router->get('/iconic-projects',[projectsController::class, 'projectsPage']);
$app->router->get('/sales-network',[networkController::class, 'networkPage']);


$app->router->get('/blog',[BlogController::class, 'blogPage']);
$app->router->get('/blog/{blogIdentify}',[BlogController::class, 'blogSingle']);

$app->router->get('/faq',[FaqsController::class, 'faqsPage']);
$app->router->get('/contact','contact');
$app->router->post('/contact',[ClientsController::class, 'clientsContact']);



// Authentication Pages
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/activate/{activateId}', [AuthController::class, 'activateAccount']);
$app->router->get('/reset-password/{token}', [AuthController::class, 'resetPassword']);

$app->router->get('/forget-password', [AuthController::class, 'forget']);
$app->router->post('/forget-password-send', [AuthController::class, 'forgetPassword']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/admin', [AuthController::class, 'dashboard']);


#admin panel
$app->router->resource('admin/campaign', 'campaign',CampaignController::class);
$app->router->resource('admin/products', 'products',ProductsController::class);
$app->router->resource('admin/projects', 'projects',ProjectsController::class);
$app->router->resource('admin/faqs', 'faqs',FaqsController::class);
$app->router->resource('admin/clients', 'clients',ClientsController::class);

$app->router->resource('admin/blog', 'blog',BlogController::class);

$app->router->resource('admin/network', 'network',NetworkController::class);
