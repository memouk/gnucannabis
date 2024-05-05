<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cosechas".
 *
 * @property int $id
 * @property int $planta_id
 * @property string $fecha_inicio
 * @property string|null $fecha_fin
 * @property float|null $peso_inicial
 * @property float|null $peso_final
 * @property int $calidad_id
 *
 * @property Plantas $planta
 * @property CalidadesProducto $calidad
 * @property Inventario[] $inventarios
 */
class Cosechas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cosechas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['planta_id', 'fecha_inicio', 'calidad_id'], 'required'],
            [['planta_id', 'calidad_id'], 'integer'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['peso_inicial', 'peso_final'], 'number'],
            [['planta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plantas::className(), 'targetAttribute' => ['planta_id' => 'id']],
            [['calidad_id'], 'exist', 'skipOnError' => true, 'targetClass' => CalidadesProducto::className(), 'targetAttribute' => ['calidad_id' => 'id']],
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
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'peso_inicial' => 'Peso Inicial',
            'peso_final' => 'Peso Final',
            'calidad_id' => 'Calidad ID',
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
     * Gets query for [[Calidad]].
     *
     * @return \yii\db\ActiveQuery|CalidadesProductoQuery
     */
    public function getCalidad()
    {
        return $this->hasOne(CalidadesProducto::className(), ['id' => 'calidad_id']);
    }

    /**
     * Gets query for [[Inventarios]].
     *
     * @return \yii\db\ActiveQuery|InventarioQuery
     */
    public function getInventarios()
    {
        return $this->hasMany(Inventario::className(), ['cosecha_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CosechasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CosechasQuery(get_called_class());
    }
}
