<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OptionsSegment]].
 *
 * @see OptionsSegment
 */
class OptionsSegmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OptionsSegment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OptionsSegment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
