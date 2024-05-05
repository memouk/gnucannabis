<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "procedimientos".
 *
 * @property int $id
 * @property int $planta_id
 * @property int $jardinero_id
 * @property int $tipo_procedimiento_id
 * @property string $fecha
 * @property string|null $nota
 *
 * @property DetallesAplicacionProducto[] $detallesAplicacionProductos
 * @property FotosProcedimiento[] $fotosProcedimientos
 * @property Plantas $planta
 * @property Jardineros $jardinero
 * @property TiposProcedimiento $tipoProcedimiento
 */
class Procedimientos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'procedimientos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['planta_id', 'jardinero_id', 'tipo_procedimiento_id', 'fecha'], 'required'],
            [['planta_id', 'jardinero_id', 'tipo_procedimiento_id'], 'integer'],
            [['fecha'], 'safe'],
            [['nota'], 'string'],
            [['planta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plantas::className(), 'targetAttribute' => ['planta_id' => 'id']],
            [['jardinero_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jardineros::className(), 'targetAttribute' => ['jardinero_id' => 'id']],
            [['tipo_procedimiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => TiposProcedimiento::className(), 'targetAttribute' => ['tipo_procedimiento_id' => 'id']],
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
            'jardinero_id' => 'Jardinero ID',
            'tipo_procedimiento_id' => 'Tipo Procedimiento ID',
            'fecha' => 'Fecha',
            'nota' => 'Nota',
        ];
    }

    /**
     * Gets query for [[DetallesAplicacionProductos]].
     *
     * @return \yii\db\ActiveQuery|DetallesAplicacionProductoQuery
     */
    public function getDetallesAplicacionProductos()
    {
        return $this->hasMany(DetallesAplicacionProducto::className(), ['procedimiento_id' => 'id']);
    }

    /**
     * Gets query for [[FotosProcedimientos]].
     *
     * @return \yii\db\ActiveQuery|FotosProcedimientoQuery
     */
    public function getFotosProcedimientos()
    {
        return $this->hasMany(FotosProcedimiento::className(), ['procedimiento_id' => 'id']);
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
     * Gets query for [[Jardinero]].
     *
     * @return \yii\db\ActiveQuery|JardinerosQuery
     */
    public function getJardinero()
    {
        return $this->hasOne(Jardineros::className(), ['id' => 'jardinero_id']);
    }

    /**
     * Gets query for [[TipoProcedimiento]].
     *
     * @return \yii\db\ActiveQuery|TiposProcedimientoQuery
     */
    public function getTipoProcedimiento()
    {
        return $this->hasOne(TiposProcedimiento::className(), ['id' => 'tipo_procedimiento_id']);
    }

    /**
     * {@inheritdoc}
     * @return ProcedimientosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProcedimientosQuery(get_called_class());
    }
}
