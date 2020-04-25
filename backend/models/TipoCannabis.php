<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tipoCannabis}}".
 *
 * @property int $idtipoCannabis
 * @property string $tipo
 */
class TipoCannabis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipoCannabis}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtipoCannabis', 'tipo'], 'required'],
            [['idtipoCannabis'], 'integer'],
            [['tipo'], 'string', 'max' => 45],
            [['idtipoCannabis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtipoCannabis' => Yii::t('app', 'Idtipo Cannabis'),
            'tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipoCannabisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipoCannabisQuery(get_called_class());
    }
}
