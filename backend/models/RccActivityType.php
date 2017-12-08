<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rcc_activity_type".
 *
 * @property int $id
 * @property string $activity_type
 */
class RccActivityType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_activity_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'activity_type'], 'required'],
            [['id'], 'integer'],
            [['activity_type'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'activity_type' => 'Activity Type',
        ];
    }
}
