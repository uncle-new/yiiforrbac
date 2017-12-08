<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RccUser */

$this->title = 'Create Rcc User';
$this->params['breadcrumbs'][] = ['label' => 'Rcc Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rcc-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
