<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TipoCannabis]].
 *
 * @see TipoCannabis
 */
class TipoCannabisQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TipoCannabis[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TipoCannabis|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
