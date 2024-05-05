<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[EtapasPlanta]].
 *
 * @see EtapasPlanta
 */
class EtapasPlantaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return EtapasPlanta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return EtapasPlanta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
