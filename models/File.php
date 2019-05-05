<?php


namespace app\models;


use yii\helpers\FileHelper;
use yii\web\UploadedFile;

class File
{
    public static function getUploadedFile(Activity $model, $attr)
    {
        return UploadedFile::getInstance($model, $attr);
    }

    public static function getFileName(UploadedFile $file)
    {
        return md5(date("Y-m-d_H-i") . $file->getExtension());
    }

    public static function getFilePath($filename)
    {
        FileHelper::createDirectory(\Yii::getAlias('@webroot/img'));

        return \Yii::getAlias("@webroot/img/" . $filename);
    }

    public static function saveUploadedFile(UploadedFile $file, $path) : bool
    {
        return $file->saveAs($path);
    }
}