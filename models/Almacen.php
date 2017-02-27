<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "almacen".
 *
 * @property integer $id_almacen
 * @property string $nombre
 * @property string $encargado
 */
class Almacen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'almacen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_almacen'], 'required'],
            [['id_almacen'], 'integer'],
            [['nombre', 'encargado'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_almacen' => 'Id Almacen',
            'nombre' => 'Nombre',
            'encargado' => 'Encargado',
        ];
    }
}
