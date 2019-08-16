<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Files}}".
 *
 * @property int $IdFiles
 * @property string $Name
 * @property string $Path
 * @property string $Type
 * @property string $RelatedTable
 * @property int $idRelation
 * @property string $CreatedAt
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Files}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Path', 'RelatedTable'], 'string'],
            [['idRelation'], 'integer'],
            [['CreatedAt'], 'safe'],
            [['Type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdFiles' => Yii::t('app', 'Id Files'),
            'Name' => Yii::t('app', 'Name'),
            'Path' => Yii::t('app', 'Path'),
            'Type' => Yii::t('app', 'Type'),
            'RelatedTable' => Yii::t('app', 'Related Table'),
            'idRelation' => Yii::t('app', 'Id Relation'),
            'CreatedAt' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return FilesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FilesQuery(get_called_class());
    }
}
