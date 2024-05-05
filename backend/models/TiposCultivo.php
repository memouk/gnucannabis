<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos_cultivo".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 *
 * @property Cultivos[] $cultivos
 */
class TiposCultivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipos_cultivo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['descripcion'], 'string'],
            [['nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[Cultivos]].
     *
     * @return \yii\db\ActiveQuery|CultivosQuery
     */
    public function getCultivos()
    {
        return $this->hasMany(Cultivos::className(), ['tipo_cultivo_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return TiposCultivoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TiposCultivoQuery(get_called_class());
    }
}
