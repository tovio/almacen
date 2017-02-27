<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property integer $id_producto
 * @property string $nombre
 * @property string $marca
 * @property string $modelo
 * @property string $precio
 * @property string $serial
 * @property integer $id_unidadmedida
 * @property integer $id_proveedor
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_producto'], 'required'],
            [['id_producto', 'id_unidadmedida', 'id_proveedor'], 'integer'],
            [['nombre', 'marca', 'modelo', 'precio', 'serial'], 'string', 'max' => 25],
            [['id_proveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedor::className(), 'targetAttribute' => ['id_proveedor' => 'id_proveedor']],
            [['id_unidadmedida'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadMedida::className(), 'targetAttribute' => ['id_unidadmedida' => 'id_unidadmedida']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_producto' => 'Id Producto',
            'nombre' => 'Nombre',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'precio' => 'Precio',
            'serial' => 'Serial',
            'id_unidadmedida' => 'Id Unidadmedida',
            'id_proveedor' => 'Id Proveedor',
        ];
    }
}
