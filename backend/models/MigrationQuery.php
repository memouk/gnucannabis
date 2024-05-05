<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Migration]].
 *
 * @see Migration
 */
class MigrationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Migration[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Migration|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
