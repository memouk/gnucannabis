<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tipoCultivo}}".
 *
 * @property int $idtipoCultivo
 * @property string $cultivo
 */
class TipoCultivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipoCultivo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtipoCultivo', 'cultivo'], 'required'],
            [['idtipoCultivo'], 'integer'],
            [['cultivo'], 'string', 'max' => 45],
            [['idtipoCultivo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtipoCultivo' => Yii::t('app', 'Idtipo Cultivo'),
            'cultivo' => Yii::t('app', 'Cultivo'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipoCultivoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipoCultivoQuery(get_called_class());
    }
}
