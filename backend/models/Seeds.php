<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%seeds}}".
 *
 * @property int $idseed
 * @property string $name
 * @property int $bank
 * @property int $seedType
 * @property string $purchaseDate
 * @property int $feminized
 * @property int $yield
 * @property string $Climate
 * @property string $floweringTime
 * @property string $height
 * @property int $cbd
 */
class Seeds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%seeds}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bank', 'seedType', 'feminized', 'yield', 'cbd'], 'integer'],
            [['feminized'], 'required'],
            [['name', 'purchaseDate', 'Climate', 'floweringTime', 'height'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idseed' => Yii::t('app', 'Idseed'),
            'name' => Yii::t('app', 'Nombre'),
            'bank' => Yii::t('app', 'Banco'),
            'seedType' => Yii::t('app', 'tipo Semilla'),
            'purchaseDate' => Yii::t('app', 'fecha de compra'),
            'feminized' => Yii::t('app', 'Feminized'),
            'yield' => Yii::t('app', 'Yield'),
            'Climate' => Yii::t('app', 'Climate'),
            'floweringTime' => Yii::t('app', 'Flowering Time'),
            'height' => Yii::t('app', 'Height'),
            'cbd' => Yii::t('app', 'Cbd'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return SeedsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SeedsQuery(get_called_class());
    }
}
