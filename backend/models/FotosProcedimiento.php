<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fotos_procedimiento".
 *
 * @property int $id
 * @property int $procedimiento_id
 * @property string $foto
 *
 * @property Procedimientos $procedimiento
 */
class FotosProcedimiento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fotos_procedimiento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['procedimiento_id', 'foto'], 'required'],
            [['procedimiento_id'], 'integer'],
            [['foto'], 'string'],
            [['procedimiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Procedimientos::className(), 'targetAttribute' => ['procedimiento_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'procedimiento_id' => 'Procedimiento ID',
            'foto' => 'Foto',
        ];
    }

    /**
     * Gets query for [[Procedimiento]].
     *
     * @return \yii\db\ActiveQuery|ProcedimientosQuery
     */
    public function getProcedimiento()
    {
        return $this->hasOne(Procedimientos::className(), ['id' => 'procedimiento_id']);
    }

    /**
     * {@inheritdoc}
     * @return FotosProcedimientoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FotosProcedimientoQuery(get_called_class());
    }
}
