<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%sexo}}".
 *
 * @property int $idsexo
 * @property string $sexo
 */
class Sexo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%sexo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idsexo'], 'required'],
            [['idsexo'], 'integer'],
            [['sexo'], 'string', 'max' => 45],
            [['idsexo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idsexo' => Yii::t('app', 'Idsexo'),
            'sexo' => Yii::t('app', 'Sexo'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return SexoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SexoQuery(get_called_class());
    }
}
