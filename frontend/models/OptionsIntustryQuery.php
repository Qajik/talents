<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OptionsIntustry]].
 *
 * @see OptionsIntustry
 */
class OptionsIntustryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OptionsIntustry[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OptionsIntustry|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
