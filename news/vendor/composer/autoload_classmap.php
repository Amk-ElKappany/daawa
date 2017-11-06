<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'ButterflyEffect\\News\\Controllers\\Admin\\NewsController' => $baseDir . '/src/Controllers/Admin/NewsController.php',
    'ButterflyEffect\\News\\Controllers\\Admin\\NewscategoriesController' => $baseDir . '/src/Controllers/Admin/NewscategoriesController.php',
    'ButterflyEffect\\News\\Controllers\\Frontend\\NewsController' => $baseDir . '/src/Controllers/Frontend/NewsController.php',
    'ButterflyEffect\\News\\Controllers\\Frontend\\NewscategoriesController' => $baseDir . '/src/Controllers/Frontend/NewscategoriesController.php',
    'ButterflyEffect\\News\\Database\\Seeds\\NewsTableSeeder' => $baseDir . '/database/seeds/NewsTableSeeder.php',
    'ButterflyEffect\\News\\Database\\Seeds\\NewscategoriesTableSeeder' => $baseDir . '/database/seeds/NewscategoriesTableSeeder.php',
    'ButterflyEffect\\News\\Handlers\\News\\NewsDataHandler' => $baseDir . '/src/Handlers/News/NewsDataHandler.php',
    'ButterflyEffect\\News\\Handlers\\News\\NewsDataHandlerInterface' => $baseDir . '/src/Handlers/News/NewsDataHandlerInterface.php',
    'ButterflyEffect\\News\\Handlers\\News\\NewsEventHandler' => $baseDir . '/src/Handlers/News/NewsEventHandler.php',
    'ButterflyEffect\\News\\Handlers\\News\\NewsEventHandlerInterface' => $baseDir . '/src/Handlers/News/NewsEventHandlerInterface.php',
    'ButterflyEffect\\News\\Handlers\\Newscategory\\NewscategoryDataHandler' => $baseDir . '/src/Handlers/Newscategory/NewscategoryDataHandler.php',
    'ButterflyEffect\\News\\Handlers\\Newscategory\\NewscategoryDataHandlerInterface' => $baseDir . '/src/Handlers/Newscategory/NewscategoryDataHandlerInterface.php',
    'ButterflyEffect\\News\\Handlers\\Newscategory\\NewscategoryEventHandler' => $baseDir . '/src/Handlers/Newscategory/NewscategoryEventHandler.php',
    'ButterflyEffect\\News\\Handlers\\Newscategory\\NewscategoryEventHandlerInterface' => $baseDir . '/src/Handlers/Newscategory/NewscategoryEventHandlerInterface.php',
    'ButterflyEffect\\News\\Models\\News' => $baseDir . '/src/Models/News.php',
    'ButterflyEffect\\News\\Models\\NewsParagraphs' => $baseDir . '/src/Models/NewsParagraphs.php',
    'ButterflyEffect\\News\\Models\\Newscategory' => $baseDir . '/src/Models/Newscategory.php',
    'ButterflyEffect\\News\\Providers\\NewsServiceProvider' => $baseDir . '/src/Providers/NewsServiceProvider.php',
    'ButterflyEffect\\News\\Providers\\NewscategoryServiceProvider' => $baseDir . '/src/Providers/NewscategoryServiceProvider.php',
    'ButterflyEffect\\News\\Repositories\\News\\NewsRepository' => $baseDir . '/src/Repositories/News/NewsRepository.php',
    'ButterflyEffect\\News\\Repositories\\News\\NewsRepositoryInterface' => $baseDir . '/src/Repositories/News/NewsRepositoryInterface.php',
    'ButterflyEffect\\News\\Repositories\\Newscategory\\NewscategoryRepository' => $baseDir . '/src/Repositories/Newscategory/NewscategoryRepository.php',
    'ButterflyEffect\\News\\Repositories\\Newscategory\\NewscategoryRepositoryInterface' => $baseDir . '/src/Repositories/Newscategory/NewscategoryRepositoryInterface.php',
    'ButterflyEffect\\News\\Validator\\News\\NewsValidator' => $baseDir . '/src/Validator/News/NewsValidator.php',
    'ButterflyEffect\\News\\Validator\\News\\NewsValidatorInterface' => $baseDir . '/src/Validator/News/NewsValidatorInterface.php',
    'ButterflyEffect\\News\\Validator\\Newscategory\\NewscategoryValidator' => $baseDir . '/src/Validator/Newscategory/NewscategoryValidator.php',
    'ButterflyEffect\\News\\Validator\\Newscategory\\NewscategoryValidatorInterface' => $baseDir . '/src/Validator/Newscategory/NewscategoryValidatorInterface.php',
    'ButterflyEffect\\News\\Widgets\\News' => $baseDir . '/src/Widgets/News.php',
    'ButterflyEffect\\News\\Widgets\\Newscategory' => $baseDir . '/src/Widgets/Newscategory.php',
    'CreateNewsParagraphsTable' => $baseDir . '/database/migrations/2017_04_04_063747_create_news_paragraphs_table.php',
    'CreateNewsTable' => $baseDir . '/database/migrations/2017_04_04_062624_create_news_table.php',
    'CreateNewscategoriesTable' => $baseDir . '/database/migrations/2017_04_04_061045_create_newscategories_table.php',
);
