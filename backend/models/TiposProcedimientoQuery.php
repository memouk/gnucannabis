<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TiposProcedimiento]].
 *
 * @see TiposProcedimiento
 */
class TiposProcedimientoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TiposProcedimiento[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TiposProcedimiento|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
