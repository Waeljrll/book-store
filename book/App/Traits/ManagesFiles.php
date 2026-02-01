<?php


namespace App\Traits;

trait ManagesFiles
{
    private static $uploadDir = "Public/upload";

    public static function uploadFile(array $file, ?string $uploadFolder = null, $allowedExt = ['jpg', 'png', 'gif', 'pdf']): ?string
    {
        $fileName = $file['name'];
        $extFile = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        

        if (!in_array($extFile, $allowedExt)) {
            return null;
        }

        $realPath = realpath(__DIR__ . "/../../") . "/" . self::$uploadDir;

        if (isset($uploadFolder)) {
            $pathFolder = $realPath . "/" . $uploadFolder;
        } else {
            $pathFolder = $realPath;
        }

        if (!is_dir($pathFolder)) {
            mkdir($pathFolder, 0775, true);
        }

        $pathFolder = $pathFolder . "/" . $fileName;
        
        if (move_uploaded_file($file['tmp_name'], $pathFolder)) {
            if ($uploadFolder) {
                return self::$uploadDir . "/" . $uploadFolder . "/" . $fileName;
            }
            return self::$uploadDir . "/" . $fileName;
        }

        return null;
    }
}