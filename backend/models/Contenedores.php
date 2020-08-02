<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%contenedores}}".
 *
 * @property int $id
 * @property string $descripcion
 */
class Contenedores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contenedores}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'descripcion'], 'required'],
            [['id'], 'integer'],
            [['descripcion'], 'string', 'max' => 45],
            [['id'], 'unique'],
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
     * @return ContenedoresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContenedoresQuery(get_called_class());
    }
}
