<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rcc_activity".
 *
 * @property int $id
 * @property string $activity_name 活动名称
 * @property string $activity_desc 活动简述
 * @property string $activity_time 活动时间
 * @property string $activity_reg_time 报名时间
 * @property int $activity_integral 赠积分数量
 * @property string $activity_location
 * @property int $activity_enrollment 报名人数
 * @property string $activity_image 活动图片
 * @property int $activity_status 1 报名中 2举行中 3已结束
 */
class RccActivity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rcc_activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_name', 'activity_desc', 'activity_time', 'activity_reg_time', 'activity_integral', 'activity_location', 'activity_image'], 'required'],
            [['activity_integral', 'activity_enrollment', 'activity_status'], 'integer'],
            [['activity_name', 'activity_desc', 'activity_time', 'activity_reg_time', 'activity_location', 'activity_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'activity_name' => 'Activity Name',
            'activity_desc' => 'Activity Desc',
            'activity_time' => 'Activity Time',
            'activity_reg_time' => 'Activity Reg Time',
            'activity_integral' => 'Activity Integral',
            'activity_location' => 'Activity Location',
            'activity_enrollment' => 'Activity Enrollment',
            'activity_image' => 'Activity Image',
            'activity_status' => 'Activity Status',
        ];
    }
}
