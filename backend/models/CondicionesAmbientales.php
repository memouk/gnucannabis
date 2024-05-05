<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "condiciones_ambientales".
 *
 * @property int $id
 * @property int $cultivo_id
 * @property string $fecha
 * @property float|null $temperatura
 * @property float|null $humedad
 * @property string|null $luz
 *
 * @property Cultivos $cultivo
 */
class CondicionesAmbientales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'condiciones_ambientales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cultivo_id', 'fecha'], 'required'],
            [['cultivo_id'], 'integer'],
            [['fecha'], 'safe'],
            [['temperatura', 'humedad'], 'number'],
            [['luz'], 'string', 'max' => 50],
            [['cultivo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cultivos::className(), 'targetAttribute' => ['cultivo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cultivo_id' => 'Cultivo ID',
            'fecha' => 'Fecha',
            'temperatura' => 'Temperatura',
            'humedad' => 'Humedad',
            'luz' => 'Luz',
        ];
    }

    /**
     * Gets query for [[Cultivo]].
     *
     * @return \yii\db\ActiveQuery|CultivosQuery
     */
    public function getCultivo()
    {
        return $this->hasOne(Cultivos::className(), ['id' => 'cultivo_id']);
    }

    /**
     * {@inheritdoc}
     * @return CondicionesAmbientalesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CondicionesAmbientalesQuery(get_called_class());
    }
}
