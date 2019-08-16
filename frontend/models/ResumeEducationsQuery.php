<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ResumeEducations]].
 *
 * @see ResumeEducations
 */
class ResumeEducationsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ResumeEducations[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ResumeEducations|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
