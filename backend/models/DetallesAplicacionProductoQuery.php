<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DetallesAplicacionProducto]].
 *
 * @see DetallesAplicacionProducto
 */
class DetallesAplicacionProductoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return DetallesAplicacionProducto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return DetallesAplicacionProducto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
