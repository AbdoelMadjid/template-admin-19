<?php

namespace Common;

class File {

	public $_exif = null;

	private $_mime_types = array(
        '.txt' => 'text/plain',
        '.htm' => 'text/html',
        '.html' => 'text/html',
        '.php' => 'text/html',
        '.css' => 'text/css',
        '.js' => 'application/javascript',
        '.json' => 'application/json',
        '.xml' => 'application/xml',
        '.swf' => 'application/x-shockwave-flash',
        '.flv' => 'video/x-flv',

        // images
        '.png' => 'image/png',
        '.jpe' => 'image/jpeg',
        '.jpeg' => 'image/jpeg',
        '.jpg' => 'image/jpeg',
        '.gif' => 'image/gif',
        '.bmp' => 'image/bmp',
        '.ico' => 'image/vnd.microsoft.icon',
        '.tiff' => 'image/tiff',
        '.tif' => 'image/tiff',
        '.svg' => 'image/svg+xml',
        '.svgz' => 'image/svg+xml',

        // archives
        '.zip' => 'application/zip',
        '.rar' => 'application/x-rar-compressed',
        '.exe' => 'application/x-msdownload',
        '.msi' => 'application/x-msdownload',
        '.cab' => 'application/vnd.ms-cab-compressed',

        // audio/video
        '.mp3' => 'audio/mpeg',
        '.qt' => 'video/quicktime',
        '.mov' => 'video/quicktime',
        '.wmv' => 'video/x-ms-wmv',
        '.mp4' => 'video/mp4',
        '.mp4a' => 'audio/mp4',
        '.mpeg' => 'video/mpeg',

        // adobe
        '.pdf' => 'application/pdf',
        '.psd' => 'image/vnd.adobe.photoshop',
        '.ai' => 'application/postscript',
        '.eps' => 'application/postscript',
        '.ps' => 'application/postscript',
        '.tiff' => 'image/tiff',

        // ms office
        '.doc' => 'application/msword',
        '.rtf' => 'application/rtf',
        '.xls' => 'application/vnd.ms-excel',
        '.xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        '.docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        '.ppt' => 'application/vnd.ms-powerpoint',

        // open office
        '.odt' => 'application/vnd.oasis.opendocument.text',
        '.ods' => 'application/vnd.oasis.opendocument.spreadsheet',
    );

	/**
	 * default structure of the validations array
	 * @var array
	 */
	private $_validations = array(
		'extension' => array(),
		'category' => array(),
		'size' => 200,
		'custom' => null
	);

	private $_default_properties = array(
		'name' => '',
		'tmp_name' => '',
		'size' => 0,
		'error' => UPLOAD_ERR_OK,
		'extension' => ''
	);

	// custom filtered errors
	const UPLOAD_ERR_EXTENSION_FILTER = 100;
	const UPLOAD_ERR_CATEGORY_FILTER = 101;
	const UPLOAD_ERR_SIZE_FILTER = 102;

	/**
	 * errors container array
	 * @var array
	 */
	private $_errors = array();

	/**
	 * error messages container array
	 * @var array
	 */
	private $_error_messages = array(
		UPLOAD_ERR_OK => "There is no error, the file uploaded with success.",
		UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive in php.ini.",
		UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.",
		UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded.",
		UPLOAD_ERR_NO_FILE => "No file was uploaded.",
		UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.",
		UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk. Introduced in PHP 5.1.0.",
		UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop;examining the list of loaded extensions with phpinfo() may help. Introduced in PHP 5.2.0.",
		self::UPLOAD_ERR_EXTENSION_FILTER => "File type not allowed",
		self::UPLOAD_ERR_CATEGORY_FILTER => "File not allowed",
		self::UPLOAD_ERR_SIZE_FILTER => "File size not allowed"
	);

	/**
	 * initialize the File class
	 * @param array $properties        file data
	 * @param array $validations validation array
	 */
	public function __construct($properties, $validations = array()) {
		$this->_validations = self::_set_array_defaults($this->_validations, $validations);
		$this->_default_properties = self::_set_array_defaults($this->_default_properties, $properties);

		// set this instance's properties from the provided data
		foreach ($this->_default_properties as $key => $value) {
			$this->{$key} = $value;
		}

		// get the file info and add them as this instance's properties
		$info = $this->get_info();
		foreach ($info as $key => $info) {
			$this->{$key} = $info;
		}

		// see if Exif class exists and if it's an image file
		if (class_exists('Exif') && $this->tmp_name) {
			switch ($this->extension) {
				case '.jpg':
				case '.jpeg':
				case '.tiff':
					$this->_exif = new Exif($this->tmp_name);
					break;
			}
		}
	}

	/**
	 * set the default values to an input array
	 * @param array $default_structure  the default structure of the array
	 * @param array $array_value        the input value
	 * @param string $set_to_key_if_fail set to a default key if failed to set appropriate value
	 */
	private static function _set_array_defaults($default_structure, $array_value, $set_to_key_if_fail = "") {
        if ($set_to_key_if_fail != "") {
            if (!is_array($array_value) || !isset($array_value[$set_to_key_if_fail])) {
                if (isset($default_structure[$set_to_key_if_fail]))
                    $default_structure[$set_to_key_if_fail] = $array_value;

                return $default_structure;
            }
        }

        foreach ($array_value as $key => $value) {
			$default_structure[$key] = $value;
        }
        return $default_structure;
    }

    /**
     * put the tmp_name somewhere
     * @param  string $dest_path the destination path
     * @param  string $filename  the filename, leave blank to use the upload's name
     * @return boolean           true if success, otherwise false
     */
	public function put($dest_path, $filename = '') {
		if (is_dir($dest_path)) {
			if (!$filename) $filename = $this->name;
			return move_uploaded_file($this->tmp_name, $dest_path.'/'.$filename);
		} return false;
	}

	/**
	 * get error messages
	 * @param  boolean $return_str should it return an string or array
	 * @return string/array        returns the error string or errors array
	 */
	public function get_error($return_str = true) {
		$messages = $this->_error_messages;
		$errors = array_map(function($error) use ($messages) {
			if (isset($messages[$error])) return $messages[$error];
			else return is_int($error) ? 'Unknown File Error' : $error;

		}, $this->_errors);
		return $return_str ? implode('; ', $errors) : $errors;
	}

	/**
	 * set the error message of the error type
	 * @param int $error_num 	error type
	 * @param string $message   error message
	 */
	public function set_error_message($error_num, $message = '') {
		$this->_error_messages[$error_num] = $message;
	}

	/**
	 * validate the file
	 * @return boolean true if valid, otherwise false
	 */
	public function validate() {
		if ($this->error !== UPLOAD_ERR_OK) {
			$this->_errors[] = $this->error;
		}

		// filter size
		$def_size_filter = array(
			'max' => 200, // 200 MB
			'min' => 0,
			'unit' => 'MB',
			'message' => '[size (kb): '.$this->size.'] '.$this->_error_messages[self::UPLOAD_ERR_SIZE_FILTER]
		);
		$size_filter = self::_set_array_defaults($def_size_filter, $this->_validations['size'], 'max');
		$this->set_error_message(self::UPLOAD_ERR_SIZE_FILTER, $size_filter['message']);

		$get_actual_size = function($size, $unit) {
			switch (strtolower($unit)) {
				case 'mb':
					$size = $size * 1048576;
					break;
				case 'kb':
					$size = $size * 1024;
				case 'gb':
					$size = $size * 1073741824;
			}
			return $size;
		};
		$max_actual_size = $get_actual_size($size_filter['max'], $size_filter['unit']);
		$min_actual_size = $get_actual_size($size_filter['min'], $size_filter['unit']);

		if ($this->size > $max_actual_size || $this->size < $min_actual_size)
			$this->_errors[] = self::UPLOAD_ERR_SIZE_FILTER;

		// filter extension
		if ($this->_validations['extension']) {
			$def_ext_filter = array(
				'is' => array(),
				'not' => array(),
				'message' => '[extension: '.$this->extension.'] '.$this->_error_messages[self::UPLOAD_ERR_EXTENSION_FILTER]
			);
			$ext_filter = self::_set_array_defaults($def_ext_filter, $this->_validations['extension'], 'is');
			$this->set_error_message(self::UPLOAD_ERR_EXTENSION_FILTER, $ext_filter['message']);

			if (!is_array($ext_filter['is'])) $ext_filter['is'] = array($ext_filter['is']);
			if (!is_array($ext_filter['not'])) $ext_filter['not'] = array($ext_filter['not']);

			if (!in_array($this->extension, $ext_filter['is']) || in_array($this->extension, $ext_filter['not']))
				$this->_errors[] = self::UPLOAD_ERR_EXTENSION_FILTER;
		}


		// filter category
		if ($this->_validations['category']) {
			$def_cat_filter = array(
				'is' => array(),
				'not' => array(),
				'message' => '[category: '.$this->category.'] '.$this->_error_messages[self::UPLOAD_ERR_CATEGORY_FILTER]
			);
			$cat_filter = self::_set_array_defaults($def_cat_filter, $this->_validations['category'], 'is');
			$this->set_error_message(self::UPLOAD_ERR_CATEGORY_FILTER, $cat_filter['message']);

			if (!is_array($cat_filter['is'])) $cat_filter['is'] = array($cat_filter['is']);
			if (!is_array($cat_filter['not'])) $cat_filter['not'] = array($cat_filter['not']);

			if (!in_array($this->category, $cat_filter['is']) || in_array($this->category, $cat_filter['not']))
				$this->_errors[] = self::UPLOAD_ERR_CATEGORY_FILTER;
		}

		if ($this->_validations['custom']) {
			$custom_validations = is_array($this->_validations['custom']) ? $this->_validations['custom'] : array($this->_validations['custom']);
			foreach ($custom_validations as $validation) {
				$result = $this->_validations['custom']($this);
				if ($result != '' && $result !== true && $result !== null) {
					$this->_errors[] = $result;
				}
			}

		}

		return !$this->_errors;
	}

	/**
	 * get the exif GPS data (if the file is an image)
	 * @return array array of lat/lng if success, otherwise false
	 */
	public function get_exif_gps() {
		return $this->_exif ? $this->_exif->get_gps() : false;
	}

	/**
	 * get the exif data (if the file is an image)
	 * @return array array of exif info if success, otherwise false
	 */
	public function get_exif() {
		return $this->_exif ? $this->_exif->get_data() : false;
	}

	/**
	 * is category
	 * @param  string  $category test if the file is this category
	 * @return boolean           true if it is, otherwise false
	 */
	public function is($category) {
		return $category == $this->category;
	}

	/**
	 * get the file info evaluated from the $name property
	 * @return stdClass  file info
	 */
	public function get_info($icon_prefix = 'octicon') {
		preg_match('/\.[^\.]+$/i', $this->name, $ext);
		preg_match('/\.\w+/i', isset($ext[0]) ? $ext[0] : '', $ext);

        $return = new \stdClass;
        $extension = isset($ext[0]) ? $ext[0] : '';
        $category = "";
        switch (strtolower($extension)) {
            case '.pdf':
            case '.doc':
            case '.rtf':
            case '.txt':
            case '.docx':
            case '.xls':
            case '.xlsx':
                $category = 'document';
                break;
            case '.png':
            case '.jpg':
            case '.jpeg':
            case '.gif':
            case '.bmp':
            case '.psd':
            case '.tif':
            case '.tiff':
                $category = 'image';
                break;
            case '.mp3':
            case '.wav':
            case '.wma':
            case '.m4a':
            case '.m3u':
                $category = 'audio';
                break;
            case '.3g2':
            case '.3gp':
            case '.asf':
            case '.asx':
            case '.avi':
            case '.flv':
            case '.m4v':
            case '.mov':
            case '.mp4':
            case '.mpg':
            case '.srt':
            case '.swf':
            case '.vob':
            case '.wmv':
                $category = 'video';
                break;
            case '.css':
            case '.php':
            case '.php3':
            case '.sql':
            case '.cs':
            case '.html':
            case '.less':
            case '.xml':
            	$category = 'code';
            	break;
            case '.zip':
            case '.gzip':
            case '.7z':
            case '.tar':
            case '.rar':
            	$category = 'compressed';
            	break;
            default:
                $category = 'other';
                break;
        }

        $return->extension = $extension;
        $return->category = $category;
        $return->type = isset($this->_mime_types[$extension]) ? $this->_mime_types[$extension] : 'application/octet-stream';

        return $return;
	}

	public function get_mime_type() {
		return mime_content_type($this->tmp_name);
	}

	/**
	 * get base64_encode of the file
	 * @return string base64 encoded string
	 */
	public function get_base64() {
		return base64_encode(file_get_contents($this->tmp_name));
	}

	/**
	 * format the size of the file to a readable string
	 * @return string formatted file size
	 */
	public function format_size() {
		$bytes = $this->size;

        if ($bytes >= 1073741824) {
            $format = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $format = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $format = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $format = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $format = $bytes . ' byte';
        } else {
            $format = '0 bytes';
        }

        return $format;
	}

}


?>