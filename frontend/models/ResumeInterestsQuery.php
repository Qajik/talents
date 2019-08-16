<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ResumeInterests]].
 *
 * @see ResumeInterests
 */
class ResumeInterestsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ResumeInterests[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ResumeInterests|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
