<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Sexo]].
 *
 * @see Sexo
 */
class SexoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Sexo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Sexo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
