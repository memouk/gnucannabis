<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%notas}}".
 *
 * @property int $id
 * @property string $descripcion
 * @property int $idJardin
 * @property string $fecha
 * @property int $tipo
 */
class Notas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%notas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idJardin', 'fecha', 'tipo'], 'required'],
            [['idJardin', 'tipo'], 'integer'],
            [['fecha'], 'safe'],
            [['descripcion'], 'string', 'max' => 500],
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
            'idJardin' => Yii::t('app', 'Id Jardin'),
            'fecha' => Yii::t('app', 'Fecha'),
            'tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return NotasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NotasQuery(get_called_class());
    }
}
