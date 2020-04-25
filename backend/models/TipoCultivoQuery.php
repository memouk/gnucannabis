<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TipoCultivo]].
 *
 * @see TipoCultivo
 */
class TipoCultivoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TipoCultivo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TipoCultivo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
