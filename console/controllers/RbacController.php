<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // agrega el permiso "createPost"
        
        $indexJardin = $auth->createPermission('indexJardin');
        $indexJardin->description = 'ver Jardin';
        $auth->add($indexJardin);

        // agrega el rol "author" y le asigna el permiso "createPost"
        

        // agrega el rol "admin" y le asigna el permiso "updatePost"
        // más los permisos del rol "author"
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $indexJardin);

        // asigna roles a usuarios. 1 y 2 son IDs devueltos por IdentityInterface::getId()
        // usualmente implementado en tu modelo User.
        
        $auth->assign($admin, 1);
    }
}