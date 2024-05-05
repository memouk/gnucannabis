<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cultivos".
 *
 * @property int $id
 * @property string $nombre
 * @property int $tipo_cultivo_id
 * @property int|null $tipo_licencia_id
 * @property int $pais_id
 * @property string|null $ubicacion
 * @property int $metodo_cultivo_id
 *
 * @property CondicionesAmbientales[] $condicionesAmbientales
 * @property TiposCultivo $tipoCultivo
 * @property TiposLicencia $tipoLicencia
 * @property Paises $pais
 * @property MetodosCultivo $metodoCultivo
 * @property CultivosJardineros[] $cultivosJardineros
 * @property Jardineros[] $jardineros
 * @property Plantas[] $plantas
 */
class Cultivos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cultivos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'tipo_cultivo_id', 'pais_id', 'metodo_cultivo_id'], 'required'],
            [['tipo_cultivo_id', 'tipo_licencia_id', 'pais_id', 'metodo_cultivo_id'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['ubicacion'], 'string', 'max' => 200],
            [['tipo_cultivo_id'], 'exist', 'skipOnError' => true, 'targetClass' => TiposCultivo::className(), 'targetAttribute' => ['tipo_cultivo_id' => 'id']],
            [['tipo_licencia_id'], 'exist', 'skipOnError' => true, 'targetClass' => TiposLicencia::className(), 'targetAttribute' => ['tipo_licencia_id' => 'id']],
            [['pais_id'], 'exist', 'skipOnError' => true, 'targetClass' => Paises::className(), 'targetAttribute' => ['pais_id' => 'id']],
            [['metodo_cultivo_id'], 'exist', 'skipOnError' => true, 'targetClass' => MetodosCultivo::className(), 'targetAttribute' => ['metodo_cultivo_id' => 'id']],
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
            'tipo_cultivo_id' => 'Tipo Cultivo ID',
            'tipo_licencia_id' => 'Tipo Licencia ID',
            'pais_id' => 'Pais ID',
            'ubicacion' => 'Ubicacion',
            'metodo_cultivo_id' => 'Metodo Cultivo ID',
        ];
    }

    /**
     * Gets query for [[CondicionesAmbientales]].
     *
     * @return \yii\db\ActiveQuery|CondicionesAmbientalesQuery
     */
    public function getCondicionesAmbientales()
    {
        return $this->hasMany(CondicionesAmbientales::className(), ['cultivo_id' => 'id']);
    }

    /**
     * Gets query for [[TipoCultivo]].
     *
     * @return \yii\db\ActiveQuery|TiposCultivoQuery
     */
    public function getTipoCultivo()
    {
        return $this->hasOne(TiposCultivo::className(), ['id' => 'tipo_cultivo_id']);
    }

    /**
     * Gets query for [[TipoLicencia]].
     *
     * @return \yii\db\ActiveQuery|TiposLicenciaQuery
     */
    public function getTipoLicencia()
    {
        return $this->hasOne(TiposLicencia::className(), ['id' => 'tipo_licencia_id']);
    }

    /**
     * Gets query for [[Pais]].
     *
     * @return \yii\db\ActiveQuery|PaisesQuery
     */
    public function getPais()
    {
        return $this->hasOne(Paises::className(), ['id' => 'pais_id']);
    }

    /**
     * Gets query for [[MetodoCultivo]].
     *
     * @return \yii\db\ActiveQuery|MetodosCultivoQuery
     */
    public function getMetodoCultivo()
    {
        return $this->hasOne(MetodosCultivo::className(), ['id' => 'metodo_cultivo_id']);
    }

    /**
     * Gets query for [[CultivosJardineros]].
     *
     * @return \yii\db\ActiveQuery|CultivosJardinerosQuery
     */
    public function getCultivosJardineros()
    {
        return $this->hasMany(CultivosJardineros::className(), ['cultivo_id' => 'id']);
    }

    /**
     * Gets query for [[Jardineros]].
     *
     * @return \yii\db\ActiveQuery|JardinerosQuery
     */
    public function getJardineros()
    {
        return $this->hasMany(Jardineros::className(), ['id' => 'jardinero_id'])->viaTable('cultivos_jardineros', ['cultivo_id' => 'id']);
    }

    /**
     * Gets query for [[Plantas]].
     *
     * @return \yii\db\ActiveQuery|PlantasQuery
     */
    public function getPlantas()
    {
        return $this->hasMany(Plantas::className(), ['cultivo_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CultivosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CultivosQuery(get_called_class());
    }
}
