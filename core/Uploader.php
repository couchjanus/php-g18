<?php

trait Uploader
{
	private function check_file_array($file) {
        return isset($file['error'])
            && !empty($file['name'])
            && !empty($file['type'])
            && !empty($file['tmp_name'])
            && !empty($file['size']);
    }
	public function transform($files)
	{
		$tmp = [];
		for ($i = 0; $i < count($files["name"]); $i++) {
			array_push($tmp, [
				"name" => $files["name"][$i],
				"tmp_name" => $files["tmp_name"][$i],
				"size" => $files["size"][$i],
				"type" => $files["type"][$i],
				"error" => $files["error"][$i]
			]);
		}
		return $tmp;
	}
	public function upload($file)
	{
		$filename = '';
        if($this->check_file_array($file)) {
            if(is_uploaded_file($file["tmp_name"])) {
                $filename = sha1(mt_rand(1, 9999) . $file['name'] . uniqid()) . time();
				move_uploaded_file($file["tmp_name"], UPLOADDIR .'/'. $filename);
	        } else {
				throw new Exception('Upload: Can\'t upload file.');
			}
		}else {
			throw new Exception('Upload: Can\'t upload file.');
		}
		return $filename;
	}
}