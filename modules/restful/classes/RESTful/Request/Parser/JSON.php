<?php defined('SYSPATH') or die('No direct script access.');

/**
 * JSON Request Data Parser class for application/json mime-type.
 *
 * @package     RESTful
 * @category    Parsers
 * @author      Michał Musiał
 * @copyright   (c) 2012 Michał Musiał
 */
class RESTful_Request_Parser_JSON implements RESTful_Request_IParser
{
    /**
     * @param   string  $data
     * @return  mixed
     */
    static public function parse($request_body)
    {
    	$post_data = file_get_contents('php://input');
		parse_str($post_data, $post);
		return $post;
    	var_dump($request_body);
        $decoded = json_decode($request_body);
        var_dump($decoded);
        return (json_last_error() === JSON_ERROR_NONE) ? $decoded : FALSE;
    }
}
