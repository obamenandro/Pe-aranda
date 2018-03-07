<?php

App::uses('Component', 'Controller');
App::uses('Model', 'Model');

class ImageComponent extends Component {

    /**
    * Save image file in an appropriate location in accordance with the environment
    *
    * When your environment is local, an image is saved in the local file system.
    * If it's staging or production, an image is saved in Amazon S3 Bucket.
    *
    * @param String $tmp_image_file_name Temporary image uploaded in tmp directory
    * @param String $dir Directory of imagesd
    * @return String Image file name
    */
    public function save($tmp_image_file_name, $dir, $ext, $newFilename = null) {
        $file_name = $newFilename ?: $this->generateImageFileName();
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        $file_name = rtrim($file_name, '.');
        $ext       = '.'. ltrim($ext, '.');
        move_uploaded_file($tmp_image_file_name,  $dir . $file_name . $ext);

        return $file_name.$ext;
    }

    /**
    * Generate image file name
    *
    * @return String MD5 hashed current timestamp with millisecond
    */
    private function generateImageFileName() {
        return md5(microtime(true)) . '.';
    }
}
