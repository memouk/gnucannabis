<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TipoJardin]].
 *
 * @see TipoJardin
 */
class TipoJardinQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TipoJardin[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TipoJardin|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
