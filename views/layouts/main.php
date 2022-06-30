<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" >
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <header class="header__container">
            <div class="header__content">
                <div class="header__content-wrapper container">

                        <div class="header__logo-institute-img">
                            <?= Html::img('@web/img/header/logo_institut.png', ['class' => 'header__logo-institute-img', 'alt' => 'Логотип НИИ Эпидемиологии']) ?>
                        </div>
                        <div class="header__logo-institute-title">
                            ФБУН Центральный НИИ Эпидемиологии Роспотребнадзора
                        </div>

                </div>
            </div>
        </header>

        <main role="main">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
                <?= $content ?>
        </main>

        <footer class="footer mt-auto py-3 text-muted">
            <div class="container">
                <p class="float-left">&copy; My Company <?= date('Y') ?></p>
                <p class="float-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
