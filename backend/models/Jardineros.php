<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jardineros".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $email
 * @property int|null $user_id
 *
 * @property CultivosJardineros[] $cultivosJardineros
 * @property Cultivos[] $cultivos
 * @property User $user
 * @property Procedimientos[] $procedimientos
 */
class Jardineros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jardineros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['user_id'], 'integer'],
            [['nombre', 'email'], 'string', 'max' => 100],
            [['email'], 'unique'],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'email' => 'Email',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[CultivosJardineros]].
     *
     * @return \yii\db\ActiveQuery|CultivosJardinerosQuery
     */
    public function getCultivosJardineros()
    {
        return $this->hasMany(CultivosJardineros::className(), ['jardinero_id' => 'id']);
    }

    /**
     * Gets query for [[Cultivos]].
     *
     * @return \yii\db\ActiveQuery|CultivosQuery
     */
    public function getCultivos()
    {
        return $this->hasMany(Cultivos::className(), ['id' => 'cultivo_id'])->viaTable('cultivos_jardineros', ['jardinero_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[Procedimientos]].
     *
     * @return \yii\db\ActiveQuery|ProcedimientosQuery
     */
    public function getProcedimientos()
    {
        return $this->hasMany(Procedimientos::className(), ['jardinero_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return JardinerosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JardinerosQuery(get_called_class());
    }
}
