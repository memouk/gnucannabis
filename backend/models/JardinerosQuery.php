<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jardineros]].
 *
 * @see Jardineros
 */
class JardinerosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Jardineros[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Jardineros|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
