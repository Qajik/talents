<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ResumeVolunteer]].
 *
 * @see ResumeVolunteer
 */
class ResumeVolunteerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ResumeVolunteer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ResumeVolunteer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
