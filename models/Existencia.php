<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "existencia".
 *
 * @property integer $id_existencia
 * @property integer $id_producto
 * @property integer $cantidad
 * @property string $status
 * @property string $observacion
 */
class Existencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'existencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_existencia'], 'required'],
            [['id_existencia', 'id_producto', 'cantidad'], 'integer'],
            [['status'], 'string', 'max' => 11],
            [['observacion'], 'string', 'max' => 50],
            [['id_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['id_producto' => 'id_producto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_existencia' => 'Id Existencia',
            'id_producto' => 'Id Producto',
            'cantidad' => 'Cantidad',
            'status' => 'Status',
            'observacion' => 'Observacion',
        ];
    }
}
