<?php

namespace Leonardomanrich\Cpanelwhm\Modules\Fileman;

use Leonardomanrich\Cpanelwhm\Requests\Request;

//TODO TERMINAR
/**
 * @link https://documentation.cpanel.net/display/DD/UAPI+Modules+-+Fileman
 * Undocumented class
 */
class Fileman extends Request
{

    /**
     * @link https://documentation.cpanel.net/display/DD/UAPI+Functions+-+Fileman%3A%3Alist_files
     * 
     * Undocumented function
     *
     * @param string $path
     * @param string $types
     * @param boolean $limit_to_list
     * @param string $only_these_files
     * @param boolean $show_hidden
     * @param boolean $check_for_leaf_directories
     * @param string $mime_types
     * @param string $raw_mime_types
     * @param boolean $include_mime
     * @param boolean $include_hash
     * @param boolean $include_permissions
     * @return Request
     */
    //TODO documentar aqui
    public function list_files(
        string $path,
        string $types = 'dir|file',
        bool $limit_to_list = false,
        string $only_these_files = '',
        bool $show_hidden = false,
        bool $check_for_leaf_directories = false,
        string $mime_types = '',
        string $raw_mime_types = '',
        bool $include_mime = false,
        bool $include_hash = false,
        bool $include_permissions = false
    ) {

        return $this->setMethod('GET')->setPath("Fileman/list_files")->addBody([
            'dir' => $path,
            'types' => $types,
            'limit_to_list' => $limit_to_list,
            'only_these_files' => $only_these_files,
            'show_hidden' => $show_hidden,
            'check_for_leaf_directories' => $check_for_leaf_directories,
            'mime_types' => $mime_types,
            'raw_mime_types' => $raw_mime_types,
            'include_mime' => $include_mime,
            'include_hash' => $include_hash,
            'include_permissions' => $include_permissions
        ]);
    }

    /**
     * @link https://documentation.cpanel.net/display/DD/UAPI+Functions+-+Fileman%3A%3Aautocompletedir
     * 
     * Undocumented function
     *
     * @param string $path
     * @param string $dir_sonly
     * @param string $list_all
     * @param boolean $html
     * @return void
     */
    //TODO documentar aqui
    public static function autocompletedir(string $path, bool $dir_sonly = true, bool $list_all = false, bool $html = true): Request
    {
        /* return new Request(
            "GET",
            "Fileman/autocompletedir",
            [],
            [
                'path' => $path,
                'dirs_only' => $dir_sonly,
                'list_all' => $list_all,
                'html' => $html
            ]
        ); */

        return $this->setMethod('GET')->setPath("Fileman/autocompletedir")->addBody([
            'path' => $path,
            'dirs_only' => $dir_sonly,
            'list_all' => $list_all,
            'html' => $html
        ]);
    }


    /**
     * Undocumented function
     *
     * @param string $path
     * @param string $file
     * @param string $from_charset
     * @param string $to_charset
     * @param boolean $update_html_document_encoding
     * @return Request
     */
    //TODO documentar aqui
    public static function get_file_content(
        string $path,
        string $file,
        string $from_charset = '_DETECT_',
        string $to_charset = '_LOCALE_',
        bool $update_html_document_encoding = true,

    ): Request {
        return $this->setMethod('GET')->setPath("Fileman/get_file_content")->addBody([
            'dir' => $path,
            'file' => $file,
            'from_charset' => $from_charset,
            'to_charset' => $to_charset,
            'update_html_document_encoding' => $update_html_document_encoding
        ]);
    }
}
