<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TiposProducto]].
 *
 * @see TiposProducto
 */
class TiposProductoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TiposProducto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TiposProducto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
