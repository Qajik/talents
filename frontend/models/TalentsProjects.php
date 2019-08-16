<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%TalentsProjects}}".
 *
 * @property int $IdTalentsProjects
 * @property int $idUsers
 * @property string $Title
 * @property string $Description
 * @property string $VidioUrls
 * @property int $State
 * @property string $CreatedAt
 */
class TalentsProjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%TalentsProjects}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idUsers', 'Title', 'Description'], 'required'],
            [['idUsers', 'State'], 'integer'],
            [['Description', 'VidioUrls'], 'string'],
            [['CreatedAt'], 'safe'],
            [['Title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdTalentsProjects' => Yii::t('app', 'Id Talents Projects'),
            'idUsers' => Yii::t('app', 'Id Users'),
            'Title' => Yii::t('app', 'Title'),
            'Description' => Yii::t('app', 'Description'),
            'VidioUrls' => Yii::t('app', 'Vidio Urls'),
            'State' => Yii::t('app', 'State'),
            'CreatedAt' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TalentsProjectsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TalentsProjectsQuery(get_called_class());
    }
}
