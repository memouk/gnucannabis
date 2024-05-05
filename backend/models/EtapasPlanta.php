<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etapas_planta".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property Plantas[] $plantas
 */
class EtapasPlanta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etapas_planta';
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
     * Gets query for [[Plantas]].
     *
     * @return \yii\db\ActiveQuery|PlantasQuery
     */
    public function getPlantas()
    {
        return $this->hasMany(Plantas::className(), ['etapa_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return EtapasPlantaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EtapasPlantaQuery(get_called_class());
    }
}
