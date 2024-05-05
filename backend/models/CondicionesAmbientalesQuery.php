<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CondicionesAmbientales]].
 *
 * @see CondicionesAmbientales
 */
class CondicionesAmbientalesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CondicionesAmbientales[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CondicionesAmbientales|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
