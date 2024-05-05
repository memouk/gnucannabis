<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cultivos]].
 *
 * @see Cultivos
 */
class CultivosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cultivos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cultivos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
