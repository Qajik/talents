<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UsersDetails]].
 *
 * @see UsersDetails
 */
class UsersDetailsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return UsersDetails[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return UsersDetails|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
