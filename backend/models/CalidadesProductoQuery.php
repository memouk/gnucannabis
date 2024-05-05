<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CalidadesProducto]].
 *
 * @see CalidadesProducto
 */
class CalidadesProductoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CalidadesProducto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CalidadesProducto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
