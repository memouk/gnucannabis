<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%plantas}}".
 *
 * @property int $idplanta
 * @property int $tipo
 * @property string $fechaGerminacion
 * @property string $fechaPlantacion
 * @property int $idjardin
 * @property int $idsemilla
 * @property string $descripcion
 * @property int $contenedor
 * @property string $fechaTrasplante
 * @property int $idRiego
 * @property string $idAbono
 */
class Plantas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%plantas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'idjardin', 'idsemilla', 'contenedor', 'idRiego'], 'integer'],
            [['fechaGerminacion', 'fechaPlantacion', 'fechaTrasplante'], 'safe'],
            [['idsemilla', 'contenedor', 'fechaTrasplante'], 'required'],
            [['descripcion', 'idAbono'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idplanta' => Yii::t('app', 'Idplanta'),
            'tipo' => Yii::t('app', 'Tipo'),
            'fechaGerminacion' => Yii::t('app', 'Fecha Germinacion'),
            'fechaPlantacion' => Yii::t('app', 'Fecha Plantacion'),
            'idjardin' => Yii::t('app', 'Idjardin'),
            'idsemilla' => Yii::t('app', 'Idsemilla'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'contenedor' => Yii::t('app', 'Contenedor'),
            'fechaTrasplante' => Yii::t('app', 'Fecha Trasplante'),
            'idRiego' => Yii::t('app', 'Id Riego'),
            'idAbono' => Yii::t('app', 'Id Abono'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PlantasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlantasQuery(get_called_class());
    }
}
