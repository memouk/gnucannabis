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
 * @property string $fechaFloracion
 * @property string $fechaCosecha
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
            [['fechaGerminacion', 'fechaPlantacion', 'fechaTrasplante','fechaFloracion','fechaCosecha'], 'safe'],
            [['idsemilla', 'contenedor'], 'required'],
            [['descripcion', 'idAbono'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idplanta' => Yii::t('app', 'Idplanta'),
            'tipo' => Yii::t('app', 'Sexo'),
            'fechaGerminacion' => Yii::t('app', 'Fecha Germinacion'),
            'fechaPlantacion' => Yii::t('app', 'Fecha Plantacion'),
            'idjardin' => Yii::t('app', 'Jardin'),
            'idsemilla' => Yii::t('app', 'Semilla'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'contenedor' => Yii::t('app', 'Contenedor'),
            'fechaTrasplante' => Yii::t('app', 'Fecha Trasplante'),
            'idRiego' => Yii::t('app', 'Id Riego'),
            'idAbono' => Yii::t('app', 'Id Abono'),
            'fechaFloracion' => Yii::t('app', 'Fecha inicio Floracion'),
            'fechaCosecha' => Yii::t('app', 'Fecha Cosecha'),
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
    public function getJardin()
    {
        return $this->hasOne(Jardin::className(), ['idjardin' => 'idjardin']);
    }
    public function getSexo()
    {
        return $this->hasOne(Sexo::className(), ['idsexo' => 'tipo']);
    }
}
