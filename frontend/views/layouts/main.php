<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    // Checkijng if its home page //site/index
    $controller = Yii::$app->controller;
    $default_controller = Yii::$app->defaultRoute;
    $isHome = (($controller->id === $default_controller) && ($controller->action->id === $controller->defaultAction)) ? true : false;

    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if($isHome){
        $menuItems = [
            ['label' => 'About Us', 'url' => '#about-section', 'class' => 'nav-link'],
            ['label' => 'Talents', 'url' => '#talents-section', 'class' => 'nav-link'],
            ['label' => 'Company', 'url' => '#companies-section', 'class' => 'nav-link'],
            ['label' => 'Statistics', 'url' => '#statistics-section', 'class' => 'nav-link'],
            ['label' => 'Contact', 'url' => '#contact-section', 'class' => 'nav-link'],
        ];
    }
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->Email . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    ?>

<!-- starting home top navigation -->
<?php 
$contentContainerClass = 'container'; 
if($isHome){
$contentContainerClass = "container-fluid"; 
?>
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <div class="site-logo mr-auto w-25">
        <a href="#home-section">
            <img src="/frontend/web/img/main-top-logo.png" alt="talents logo">
        </a>
      </div>
      <div class="mx-auto text-center">
        <nav class="site-navigation position-relative text-right site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0" role="navigation">
          
          <?
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right .site-menu'],
                'items' => $menuItems,
            ]);
            NavBar::end();
          ?>
        </nav>
      </div>
    </div>
  </div>
</header>
<?php } ?>
<!-- ending home top navigation -->
<div class=<?= $contentContainerClass; ?>>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
</div>

<footer class="bg-black">
  <div class="container">
    
    <div class="row pt-3 text-center">
      <div class="col-md-12">
        <div>
        <p>
           &copy;<?= date('Y') ?>
        </p>
        </div>
      </div>
      
    </div>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
