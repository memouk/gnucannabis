<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "migration".
 *
 * @property string $version
 * @property int|null $apply_time
 */
class Migration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'migration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['version'], 'required'],
            [['apply_time'], 'integer'],
            [['version'], 'string', 'max' => 180],
            [['version'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'version' => 'Version',
            'apply_time' => 'Apply Time',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MigrationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MigrationQuery(get_called_class());
    }
}
