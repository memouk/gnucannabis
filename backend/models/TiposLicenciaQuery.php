<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TiposLicencia]].
 *
 * @see TiposLicencia
 */
class TiposLicenciaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TiposLicencia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TiposLicencia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
