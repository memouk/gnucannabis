<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos_producto".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 *
 * @property Productos[] $productos
 */
class TiposProducto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipos_producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['descripcion'], 'string'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[Productos]].
     *
     * @return \yii\db\ActiveQuery|ProductosQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['tipo_producto_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return TiposProductoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TiposProductoQuery(get_called_class());
    }
}
