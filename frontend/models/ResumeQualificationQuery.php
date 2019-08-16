<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ResumeQualification]].
 *
 * @see ResumeQualification
 */
class ResumeQualificationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ResumeQualification[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ResumeQualification|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
