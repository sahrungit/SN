<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $nip
 * @property string $nama
 * @property string $jurusan
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'jurusan'], 'required'],
            [['nama', 'jurusan'], 'string', 'max' => 20, ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama' => 'Nama',
            'jurusan' => 'Jurusan',
        ];
    }
}
