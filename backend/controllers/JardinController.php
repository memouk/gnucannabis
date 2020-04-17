<?php

namespace backend\controllers;

use Yii;
use app\models\Jardin;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\widgets\FileInput;
use yii\web\UploadedFile;
use Da\QrCode\QrCode;
/**
 * JardinController implements the CRUD actions for Jardin model.
 */
class JardinController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Jardin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Jardin::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jardin model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Jardin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Jardin();
        $model->fecha_creacion=date('Y-m-d H:i:s');
       
        $upload_image = \yii\web\UploadedFile::getInstance($model, 'filename');
        
    


        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $qrCode = (new QrCode('https://192.190.42.244/gnucanabis/backend/web/index.php?r=jardin%2Fview&id='.$model->idjardin))
            ->setSize(250)
            ->setMargin(5)
            ->useForegroundColor(0, 0, 0);
            $qr_name = "qrJardin".$model->idjardin.".png";
            $qrCode->writeFile('../uploads/'.$qr_name);
         
          if(!empty($upload_image)){
            //var_dump($model->idjardin);exit;
            $image_name = "jardin".$model->idjardin.".".$upload_image->getExtension();
            
            $model->filename = $image_name;
            $upload_image->saveAs('../uploads/' . $image_name);
            
             }

            return $this->redirect(['view', 'id' => $model->idjardin]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jardin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idjardin]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jardin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jardin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Jardin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Jardin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    public function actionUpload()

    {   

        $model = new Jardin;

        if (!empty($_POST)) {

            $model->image = $_POST['jardin']['filename'];

            $file = \yii\web\UploadedFile::getInstance($model, 'filename');

            var_dump($file);


            // You can then do the following

            if ($model->save()) {

                $file->saveAs('image/');

            }

            // its better if you relegate such a code to your model class

        }

        return $this->render('upload', ['model'=>$model]);

    }

    
    
}
