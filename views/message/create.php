<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Message */

$this->title = Yii::t('app', 'Создание сообщения');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Сообщения'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
