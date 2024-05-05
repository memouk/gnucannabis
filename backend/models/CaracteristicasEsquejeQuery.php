<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CaracteristicasEsqueje]].
 *
 * @see CaracteristicasEsqueje
 */
class CaracteristicasEsquejeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CaracteristicasEsqueje[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CaracteristicasEsqueje|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
