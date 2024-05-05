<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property string $nombre
 * @property int $tipo_producto_id
 * @property string|null $descripcion
 *
 * @property DetallesAplicacionProducto[] $detallesAplicacionProductos
 * @property TiposProducto $tipoProducto
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'tipo_producto_id'], 'required'],
            [['tipo_producto_id'], 'integer'],
            [['descripcion'], 'string'],
            [['nombre'], 'string', 'max' => 100],
            [['tipo_producto_id'], 'exist', 'skipOnError' => true, 'targetClass' => TiposProducto::className(), 'targetAttribute' => ['tipo_producto_id' => 'id']],
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
            'tipo_producto_id' => 'Tipo Producto ID',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[DetallesAplicacionProductos]].
     *
     * @return \yii\db\ActiveQuery|DetallesAplicacionProductoQuery
     */
    public function getDetallesAplicacionProductos()
    {
        return $this->hasMany(DetallesAplicacionProducto::className(), ['producto_id' => 'id']);
    }

    /**
     * Gets query for [[TipoProducto]].
     *
     * @return \yii\db\ActiveQuery|TiposProductoQuery
     */
    public function getTipoProducto()
    {
        return $this->hasOne(TiposProducto::className(), ['id' => 'tipo_producto_id']);
    }

    /**
     * {@inheritdoc}
     * @return ProductosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductosQuery(get_called_class());
    }
}
