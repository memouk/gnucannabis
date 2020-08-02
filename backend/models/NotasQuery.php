<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Notas]].
 *
 * @see Notas
 */
class NotasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Notas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Notas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
