<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ResumeExperiences]].
 *
 * @see ResumeExperiences
 */
class ResumeExperiencesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ResumeExperiences[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ResumeExperiences|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
