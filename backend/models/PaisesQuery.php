<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Paises]].
 *
 * @see Paises
 */
class PaisesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Paises[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Paises|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
