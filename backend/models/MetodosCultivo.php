<?php

namespace app\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "metodos_cultivo".
 *
 * @property int $id
 * @property string $nombre
 *
 * @property Cultivos[] $cultivos
 */
class MetodosCultivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metodos_cultivo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * Gets query for [[Cultivos]].
     *
     * @return \yii\db\ActiveQuery|CultivosQuery
     */
    public function getCultivos()
    {
        return $this->hasMany(Cultivos::className(), ['metodo_cultivo_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return MetodosCultivoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MetodosCultivoQuery(get_called_class());
    }
    public static function getListData()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'nombre');
    }
}
