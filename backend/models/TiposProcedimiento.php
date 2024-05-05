<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos_procedimiento".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 *
 * @property Procedimientos[] $procedimientos
 */
class TiposProcedimiento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipos_procedimiento';
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
     * Gets query for [[Procedimientos]].
     *
     * @return \yii\db\ActiveQuery|ProcedimientosQuery
     */
    public function getProcedimientos()
    {
        return $this->hasMany(Procedimientos::className(), ['tipo_procedimiento_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return TiposProcedimientoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TiposProcedimientoQuery(get_called_class());
    }
}
