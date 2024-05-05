<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tipos_licencia".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 *
 * @property Cultivos[] $cultivos
 */
class TiposLicencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipos_licencia';
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
        return $this->hasMany(Cultivos::className(), ['tipo_licencia_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return TiposLicenciaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TiposLicenciaQuery(get_called_class());
    }
    public static function getListData()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'nombre');
    }
}
