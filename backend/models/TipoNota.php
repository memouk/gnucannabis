<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tipoNota}}".
 *
 * @property int $idtipoNota
 * @property string $descripcion
 */
class TipoNota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipoNota}}';
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
            'idtipoNota' => Yii::t('app', 'Idtipo Nota'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipoNotaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipoNotaQuery(get_called_class());
    }
}
