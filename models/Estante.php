<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estante".
 *
 * @property integer $id_estante
 * @property string $area
 * @property string $categoria
 * @property integer $id_almacen
 */
class Estante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_estante'], 'required'],
            [['id_estante', 'id_almacen'], 'integer'],
            [['area', 'categoria'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estante' => 'Id Estante',
            'area' => 'Area',
            'categoria' => 'Categoria',
            'id_almacen' => 'Id Almacen',
        ];
    }
}
