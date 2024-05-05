<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TiposCultivo]].
 *
 * @see TiposCultivo
 */
class TiposCultivoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TiposCultivo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TiposCultivo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
