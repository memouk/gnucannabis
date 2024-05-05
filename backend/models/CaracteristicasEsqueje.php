<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caracteristicas_esqueje".
 *
 * @property int $id
 * @property int $planta_id
 * @property int|null $num_nudos
 * @property float|null $longitud
 *
 * @property Plantas $planta
 */
class CaracteristicasEsqueje extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'caracteristicas_esqueje';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['planta_id'], 'required'],
            [['planta_id', 'num_nudos'], 'integer'],
            [['longitud'], 'number'],
            [['planta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plantas::className(), 'targetAttribute' => ['planta_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'planta_id' => 'Planta ID',
            'num_nudos' => 'Num Nudos',
            'longitud' => 'Longitud',
        ];
    }

    /**
     * Gets query for [[Planta]].
     *
     * @return \yii\db\ActiveQuery|PlantasQuery
     */
    public function getPlanta()
    {
        return $this->hasOne(Plantas::className(), ['id' => 'planta_id']);
    }

    /**
     * {@inheritdoc}
     * @return CaracteristicasEsquejeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CaracteristicasEsquejeQuery(get_called_class());
    }
}
