<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "war_user".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_password
 * @property string $user_avatar
 * @property string $user_email
 * @property string $user_phone
 * @property integer $user_grade
 * @property integer $user_ctime
 * @property integer $user_utime
 * @property integer $user_status
 */
class WarUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'war_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_grade', 'user_ctime', 'user_utime', 'user_status'], 'integer'],
            [['user_name'], 'string', 'max' => 45],
            [['user_password'], 'string', 'max' => 32],
            [['user_avatar', 'user_email'], 'string', 'max' => 100],
            [['user_phone'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '自增id',
            'user_name' => '用户登录名称',
            'user_password' => '用户密码',
            'user_avatar' => '头像',
            'user_email' => '邮箱',
            'user_phone' => '用户电话',
            'user_grade' => '等级',
            'user_ctime' => '用户创建时间',
            'user_utime' => '跟新时间',
            'user_status' => 'User Status',
        ];
    }
}
