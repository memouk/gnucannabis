<?php

namespace app\models;

use Yii;

use yii\helpers\ArrayHelper;


/**
 * This is the model class for table "paises".
 *
 * @property int $id
 * @property string $nombre
 * @property int|null $regulacion_autocultivo
 *
 * @property Cultivos[] $cultivos
 */
class Paises extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paises';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['regulacion_autocultivo'], 'integer'],
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
            'regulacion_autocultivo' => 'Regulacion Autocultivo',
        ];
    }

    /**
     * Gets query for [[Cultivos]].
     *
     * @return \yii\db\ActiveQuery|CultivosQuery
     */
    public function getCultivos()
    {
        return $this->hasMany(Cultivos::className(), ['pais_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return PaisesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PaisesQuery(get_called_class());
    }
    public static function getListData()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'nombre');
    }

}
