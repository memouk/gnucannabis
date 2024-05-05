<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[FotosProcedimiento]].
 *
 * @see FotosProcedimiento
 */
class FotosProcedimientoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return FotosProcedimiento[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return FotosProcedimiento|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
