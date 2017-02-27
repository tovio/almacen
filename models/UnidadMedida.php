<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidad_medida".
 *
 * @property integer $id_unidadmedida
 * @property string $nombre
 */
class UnidadMedida extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidad_medida';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_unidadmedida'], 'required'],
            [['id_unidadmedida'], 'integer'],
            [['nombre'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_unidadmedida' => 'Id Unidadmedida',
            'nombre' => 'Nombre',
        ];
    }
}
