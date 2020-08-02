<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Contenedores]].
 *
 * @see Contenedores
 */
class ContenedoresQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Contenedores[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Contenedores|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
