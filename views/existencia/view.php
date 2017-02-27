<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Existencia */

$this->title = $model->id_existencia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Existencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="existencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_existencia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_existencia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_existencia',
            'id_producto',
            'cantidad',
            'status',
            'observacion',
        ],
    ]) ?>

</div>
