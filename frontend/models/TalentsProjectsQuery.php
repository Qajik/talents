<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TalentsProjects]].
 *
 * @see TalentsProjects
 */
class TalentsProjectsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TalentsProjects[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TalentsProjects|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
