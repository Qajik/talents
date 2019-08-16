<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ResumeAwards]].
 *
 * @see ResumeAwards
 */
class ResumeAwardsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ResumeAwards[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ResumeAwards|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
