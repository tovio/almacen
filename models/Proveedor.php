<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedor".
 *
 * @property integer $id_proveedor
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $rif
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proveedor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'direccion', 'telefono', 'rif'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_proveedor' => 'Id Proveedor',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'rif' => 'Rif',
        ];
    }

    /**
     * @inheritdoc
     * @return ProveedorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProveedorQuery(get_called_class());
    }
}
