<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CaracteristicasSemilla]].
 *
 * @see CaracteristicasSemilla
 */
class CaracteristicasSemillaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CaracteristicasSemilla[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CaracteristicasSemilla|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
