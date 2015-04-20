<?php
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Гостевая книга!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-sm-6">
                <p><a class="btn btn-default" href="<?= Yii::$app->urlManager->createUrl(['/message/create'])?>">Отправить сообщение &raquo;</a></p>
            </div>
            <div class="col-sm-6">
                <p><a class="btn btn-default" href="<?= Yii::$app->urlManager->createUrl(['/message/index'])?>">Просмотреть сообщения &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
