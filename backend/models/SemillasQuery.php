<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Semillas]].
 *
 * @see Semillas
 */
class SemillasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Semillas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Semillas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
