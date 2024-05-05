<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calidades_producto".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property Cosechas[] $cosechas
 */
class CalidadesProducto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calidades_producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
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
        ];
    }

    /**
     * Gets query for [[Cosechas]].
     *
     * @return \yii\db\ActiveQuery|CosechasQuery
     */
    public function getCosechas()
    {
        return $this->hasMany(Cosechas::className(), ['calidad_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CalidadesProductoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CalidadesProductoQuery(get_called_class());
    }
}
