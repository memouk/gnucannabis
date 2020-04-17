<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jardin".
 *
 * @property int $idjardin
 * @property string $descripcion
 * @property string $fecha_creacion
 * @property string $fecha_finalizacion
 * @property int $tipo_jardin
 * @property string $filename
 * @property Plantum $plantum
 */
class Jardin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public static function tableName()
    {
        return 'jardin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'fecha_creacion', 'tipo_jardin'], 'required'],
            [['fecha_creacion', 'fecha_finalizacion'], 'safe'],
            [['tipo_jardin'], 'integer'],
            [['descripcion'], 'string', 'max' => 500],
            [['filename'], "file" , "skipOnEmpty" => true, "extensions" => "png, jpg"],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idjardin' => Yii::t('app', 'Idjardin'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'fecha_creacion' => Yii::t('app', 'Fecha Creacion'),
            'fecha_finalizacion' => Yii::t('app', 'Fecha Finalizacion'),
            'tipo_jardin' => Yii::t('app', 'Tipo Jardin'),
            'filename' => Yii::t('app', 'filename'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlantum()
    {
        return $this->hasOne(Plantum::className(), ['idplanta' => 'idjardin']);
    }

    /**
     * {@inheritdoc}
     * @return JardinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JardinQuery(get_called_class());
    }
    // public function upload() {
    //     $skipped = [];
    //     foreach ( $this->filename as $file ) {
    //         //var_dump($this->filename->extension);exit;
    //         if ( !$file->saveAs ( "memo.png" ) ) {
    //             $skipped[] = "File " . $file->baseName . " was not saved.";
    //         }
    //     }
    //     if ( !empty ( $skipped ) ) {
    //         Yii::$app->session->setFlash ( 'error' , implode ( "<br>" , $skipped ) );
    //     }
    // }
}
