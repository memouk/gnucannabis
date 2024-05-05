<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cultivos_jardineros".
 *
 * @property int $cultivo_id
 * @property int $jardinero_id
 *
 * @property Cultivos $cultivo
 * @property Jardineros $jardinero
 */
class CultivosJardineros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cultivos_jardineros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cultivo_id', 'jardinero_id'], 'required'],
            [['cultivo_id', 'jardinero_id'], 'integer'],
            [['cultivo_id', 'jardinero_id'], 'unique', 'targetAttribute' => ['cultivo_id', 'jardinero_id']],
            [['cultivo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cultivos::className(), 'targetAttribute' => ['cultivo_id' => 'id']],
            [['jardinero_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jardineros::className(), 'targetAttribute' => ['jardinero_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cultivo_id' => 'Cultivo ID',
            'jardinero_id' => 'Jardinero ID',
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
     * Gets query for [[Jardinero]].
     *
     * @return \yii\db\ActiveQuery|JardinerosQuery
     */
    public function getJardinero()
    {
        return $this->hasOne(Jardineros::className(), ['id' => 'jardinero_id']);
    }

    /**
     * {@inheritdoc}
     * @return CultivosJardinerosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CultivosJardinerosQuery(get_called_class());
    }
}
