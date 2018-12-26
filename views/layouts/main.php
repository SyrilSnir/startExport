<?php 
use app\assets\AppAsset;


AppAsset::register($this);
$this->beginPage(); 
?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
<meta charset="UTF-8">
<title>StartExport</title>
<?php $this->head(); ?>
<body>
<?php $this->beginBody(); ?>

<nav class="navbar navbar-expand navbar-light se-nav">
        <a id="header-nav-brand" class="navbar-brand" href="/"><img src="/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>    <!--
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Projects <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>-->
        <img src="/img/social.png" alt="" class="social" width="150">
    </nav>
    <?php if ($this->params['requestPoll']): ?>
    <div id="btn-poll-container" class="" style="top: 295px;">
        <a id="se-main-page" class="se-btn" href="/poll">Пройти опрос</a>
    </div>
    <?php endif; ?>
    
        <div class="container-fluid">
        <?=$content ?>    
        </div>
    <footer>     
            <div class="brand">
                <a class="navbar-brand" href=""><img src="/img/logo.png" width="150" alt=""></a>
            </div>
        <div class="partners"><a href="/partners">Наши партнеры</a></div>
            <div class="social">
                <img src="/img/social_footer.png" width="150" alt="">
            </div>
        </div>
    </footer>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
