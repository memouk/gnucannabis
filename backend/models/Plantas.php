<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "plantas".
 *
 * @property int $id
 * @property string $codigo_qr
 * @property int $cultivo_id
 * @property int $etapa_id
 * @property float|null $altura
 * @property float|null $peso
 * @property float|null $diametro_tallo
 * @property int|null $num_hojas
 * @property string|null $color_hojas
 * @property string $tipo_origen
 * @property int|null $planta_madre_id
 * @property string|null $proveedor
 * @property string|null $fecha_germinacion
 * @property string|null $fecha_plantacion
 * @property string|null $fecha_floracion
 * @property string|null $fecha_cosecha
 * @property int|null $semilla_id
 *
 * @property CaracteristicasEsqueje[] $caracteristicasEsquejes
 * @property Cosechas[] $cosechas
 * @property Semillas $semilla
 * @property Cultivos $cultivo
 * @property EtapasPlanta $etapa
 * @property Plantas $plantaMadre
 * @property Plantas[] $plantas
 * @property Procedimientos[] $procedimientos
 */
class Plantas extends \yii\db\ActiveRecord 
{
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        // TODO: Implement findIdentity() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        // TODO: Implement getId() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plantas';
    }
    // public static function findIdentityByAccessToken($token, $type = null)
    // {
    //     return static::findOne(['auth_key' => $token]);
    // }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo_qr', 'cultivo_id', 'etapa_id', 'tipo_origen'], 'required'],
            [['cultivo_id', 'etapa_id', 'num_hojas', 'planta_madre_id', 'semilla_id'], 'integer'],
            [['altura', 'peso', 'diametro_tallo'], 'number'],
            [['tipo_origen'], 'string'],
            [['fecha_germinacion', 'fecha_plantacion', 'fecha_floracion', 'fecha_cosecha'], 'safe'],
            [['codigo_qr', 'color_hojas'], 'string', 'max' => 50],
            [['proveedor'], 'string', 'max' => 100],
            [['codigo_qr'], 'unique'],
            [['semilla_id'], 'exist', 'skipOnError' => true, 'targetClass' => Semillas::className(), 'targetAttribute' => ['semilla_id' => 'id']],
            [['cultivo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cultivos::className(), 'targetAttribute' => ['cultivo_id' => 'id']],
            [['etapa_id'], 'exist', 'skipOnError' => true, 'targetClass' => EtapasPlanta::className(), 'targetAttribute' => ['etapa_id' => 'id']],
            [['planta_madre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plantas::className(), 'targetAttribute' => ['planta_madre_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo_qr' => 'Codigo Qr',
            'cultivo_id' => 'Cultivo ID',
            'etapa_id' => 'Etapa ID',
            'altura' => 'Altura',
            'peso' => 'Peso',
            'diametro_tallo' => 'Diametro Tallo',
            'num_hojas' => 'Num Hojas',
            'color_hojas' => 'Color Hojas',
            'tipo_origen' => 'Tipo Origen',
            'planta_madre_id' => 'Planta Madre ID',
            'proveedor' => 'Proveedor',
            'fecha_germinacion' => 'Fecha Germinacion',
            'fecha_plantacion' => 'Fecha Plantacion',
            'fecha_floracion' => 'Fecha Floracion',
            'fecha_cosecha' => 'Fecha Cosecha',
            'semilla_id' => 'Semilla ID',
        ];
    }

    /**
     * Gets query for [[CaracteristicasEsquejes]].
     *
     * @return \yii\db\ActiveQuery|CaracteristicasEsquejeQuery
     */
    public function getCaracteristicasEsquejes()
    {
        return $this->hasMany(CaracteristicasEsqueje::className(), ['planta_id' => 'id']);
    }

    /**
     * Gets query for [[Cosechas]].
     *
     * @return \yii\db\ActiveQuery|CosechasQuery
     */
    public function getCosechas()
    {
        return $this->hasMany(Cosechas::className(), ['planta_id' => 'id']);
    }

    /**
     * Gets query for [[Semilla]].
     *
     * @return \yii\db\ActiveQuery|SemillasQuery
     */
    public function getSemilla()
    {
        return $this->hasOne(Semillas::className(), ['id' => 'semilla_id']);
    }

    /**
     * Gets query for [[Cultivo]].
     *
     * @return \yii\db\ActiveQuery|CultivosQuery
     */
    public function getCultivo()
    {
        return $this->hasOne(Cultivos::className(), ['id' => 'cultivo_id']);
    }

    /**
     * Gets query for [[Etapa]].
     *
     * @return \yii\db\ActiveQuery|EtapasPlantaQuery
     */
    public function getEtapa()
    {
        return $this->hasOne(EtapasPlanta::className(), ['id' => 'etapa_id']);
    }

    /**
     * Gets query for [[PlantaMadre]].
     *
     * @return \yii\db\ActiveQuery|PlantasQuery
     */
    public function getPlantaMadre()
    {
        return $this->hasOne(Plantas::className(), ['id' => 'planta_madre_id']);
    }

    /**
     * Gets query for [[Plantas]].
     *
     * @return \yii\db\ActiveQuery|PlantasQuery
     */
    public function getPlantas()
    {
        return $this->hasMany(Plantas::className(), ['planta_madre_id' => 'id']);
    }

    /**
     * Gets query for [[Procedimientos]].
     *
     * @return \yii\db\ActiveQuery|ProcedimientosQuery
     */
    public function getProcedimientos()
    {
        return $this->hasMany(Procedimientos::className(), ['planta_id' => 'id']);
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
