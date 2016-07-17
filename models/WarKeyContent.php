<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "war_key_content".
 *
 * @property integer $content_id
 * @property string $content_text
 * @property integer $content_status
 * @property integer $key_id
 */
class WarKeyContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'war_key_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_text', 'key_id'], 'required'],
            [['content_text'], 'string'],
            [['content_status', 'key_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'content_id' => '自增id',
            'content_text' => '回复内容',
            'content_status' => '状态：1文本，2图文',
            'key_id' => 'Key ID',
        ];
    }
}
