<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caracteristicas_semilla".
 *
 * @property int $id
 * @property int $planta_id
 * @property string|null $cepa
 * @property string|null $tipo_semilla
 * @property string $tipo_cannabis
 * @property float|null $porcentaje_thc
 * @property float|null $porcentaje_cbd
 * @property int|null $tiempo_floracion
 * @property float|null $rendimiento_interior
 * @property float|null $rendimiento_exterior
 * @property string|null $zonas_climaticas
 * @property string|null $efectos
 * @property string|null $sabor
 * @property string|null $aroma
 * @property string|null $dificultad_cultivo
 * @property string|null $tipo_strain
 * @property float|null $calificacion
 * @property string|null $descripcion_strain
 *
 * @property Plantas $planta
 */
class CaracteristicasSemilla extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'caracteristicas_semilla';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['planta_id', 'tipo_cannabis'], 'required'],
            [['planta_id', 'tiempo_floracion'], 'integer'],
            [['tipo_semilla', 'tipo_cannabis', 'dificultad_cultivo', 'descripcion_strain'], 'string'],
            [['porcentaje_thc', 'porcentaje_cbd', 'rendimiento_interior', 'rendimiento_exterior', 'calificacion'], 'number'],
            [['cepa', 'tipo_strain'], 'string', 'max' => 100],
            [['zonas_climaticas', 'efectos', 'sabor', 'aroma'], 'string', 'max' => 200],
            [['planta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plantas::className(), 'targetAttribute' => ['planta_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'planta_id' => 'Planta ID',
            'cepa' => 'Cepa',
            'tipo_semilla' => 'Tipo Semilla',
            'tipo_cannabis' => 'Tipo Cannabis',
            'porcentaje_thc' => 'Porcentaje Thc',
            'porcentaje_cbd' => 'Porcentaje Cbd',
            'tiempo_floracion' => 'Tiempo Floracion',
            'rendimiento_interior' => 'Rendimiento Interior',
            'rendimiento_exterior' => 'Rendimiento Exterior',
            'zonas_climaticas' => 'Zonas Climaticas',
            'efectos' => 'Efectos',
            'sabor' => 'Sabor',
            'aroma' => 'Aroma',
            'dificultad_cultivo' => 'Dificultad Cultivo',
            'tipo_strain' => 'Tipo Strain',
            'calificacion' => 'Calificacion',
            'descripcion_strain' => 'Descripcion Strain',
        ];
    }

    /**
     * Gets query for [[Planta]].
     *
     * @return \yii\db\ActiveQuery|PlantasQuery
     */
    public function getPlanta()
    {
        return $this->hasOne(Plantas::className(), ['id' => 'planta_id']);
    }

    /**
     * {@inheritdoc}
     * @return CaracteristicasSemillaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CaracteristicasSemillaQuery(get_called_class());
    }
}
