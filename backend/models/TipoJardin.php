<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tipo_jardin}}".
 *
 * @property int $id
 * @property string $descripcion
 */
class TipoJardin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipo_jardin}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['descripcion'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipoJardinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipoJardinQuery(get_called_class());
    }
}
