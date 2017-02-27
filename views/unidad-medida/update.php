<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidad_medida */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Unidad Medida',
]) . $model->id_unidadmedida;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unidad Medidas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_unidadmedida, 'url' => ['view', 'id' => $model->id_unidadmedida]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="unidad-medida-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
