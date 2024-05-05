<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventario".
 *
 * @property int $id
 * @property int $cosecha_id
 * @property float $cantidad
 *
 * @property Cosechas $cosecha
 */
class Inventario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cosecha_id', 'cantidad'], 'required'],
            [['cosecha_id'], 'integer'],
            [['cantidad'], 'number'],
            [['cosecha_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cosechas::className(), 'targetAttribute' => ['cosecha_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cosecha_id' => 'Cosecha ID',
            'cantidad' => 'Cantidad',
        ];
    }

    /**
     * Gets query for [[Cosecha]].
     *
     * @return \yii\db\ActiveQuery|CosechasQuery
     */
    public function getCosecha()
    {
        return $this->hasOne(Cosechas::className(), ['id' => 'cosecha_id']);
    }

    /**
     * {@inheritdoc}
     * @return InventarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InventarioQuery(get_called_class());
    }
}
