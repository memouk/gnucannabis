<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalles_aplicacion_producto".
 *
 * @property int $id
 * @property int $procedimiento_id
 * @property int $producto_id
 * @property float|null $cantidad
 *
 * @property Procedimientos $procedimiento
 * @property Productos $producto
 */
class DetallesAplicacionProducto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detalles_aplicacion_producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['procedimiento_id', 'producto_id'], 'required'],
            [['procedimiento_id', 'producto_id'], 'integer'],
            [['cantidad'], 'number'],
            [['procedimiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Procedimientos::className(), 'targetAttribute' => ['procedimiento_id' => 'id']],
            [['producto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['producto_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'procedimiento_id' => 'Procedimiento ID',
            'producto_id' => 'Producto ID',
            'cantidad' => 'Cantidad',
        ];
    }

    /**
     * Gets query for [[Procedimiento]].
     *
     * @return \yii\db\ActiveQuery|ProcedimientosQuery
     */
    public function getProcedimiento()
    {
        return $this->hasOne(Procedimientos::className(), ['id' => 'procedimiento_id']);
    }

    /**
     * Gets query for [[Producto]].
     *
     * @return \yii\db\ActiveQuery|ProductosQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Productos::className(), ['id' => 'producto_id']);
    }

    /**
     * {@inheritdoc}
     * @return DetallesAplicacionProductoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DetallesAplicacionProductoQuery(get_called_class());
    }
}
