<?php

namespace Leonardomanrich\Cpanelwhm\Modules\Fileman;

use Leonardomanrich\Cpanelwhm\Requests\Request;

//TODO TERMINAR

/**
 * @link https://documentation.cpanel.net/display/DD/UAPI+Modules+-+Fileman
 */
class Fileman extends Request
{

    /**
     * @link https://documentation.cpanel.net/display/DD/UAPI+Functions+-+Fileman%3A%3Alist_files
     *
     * @param string $path
     * @param string $types
     * @param bool $limit_to_list
     * @param string $only_these_files
     * @param bool $show_hidden
     * @param bool $check_for_leaf_directories
     * @param string $mime_types
     * @param string $raw_mime_types
     * @param bool $include_mime
     * @param bool $include_hash
     * @param bool $include_permissions
     * @return Request
     */
    public function list_files(
        string $path,
        string $types = 'dir|file',
        bool   $limit_to_list = false,
        string $only_these_files = '',
        bool   $show_hidden = false,
        bool   $check_for_leaf_directories = false,
        string $mime_types = '',
        string $raw_mime_types = '',
        bool   $include_mime = false,
        bool   $include_hash = false,
        bool   $include_permissions = false
    ): Request
    {

        return $this->setMethod('GET')->setPath("Fileman/list_files")->addQueryParams([
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
     * @param string $path
     * @param bool $dir_sonly
     * @param bool $list_all
     * @param boolean $html
     * @return Request
     */
    public function autocompletedir(
        string $path,
        bool   $dir_sonly = true,
        bool   $list_all = false,
        bool   $html = true
    ): Request
    {
        return $this->setMethod('GET')->setPath("Fileman/autocompletedir")->addQueryParams([
            'path' => $path,
            'dirs_only' => $dir_sonly,
            'list_all' => $list_all,
            'html' => $html
        ]);
    }

    /**
     * @link https://documentation.cpanel.net/display/DD/UAPI+Functions+-+Fileman%3A%3Aget_file_content
     *
     * @param string $path
     * @param string $file
     * @param string $from_charset
     * @param string $to_charset
     * @param bool $update_html_document_encoding
     * @return Request
     */
    public function get_file_content(
        string $path,
        string $file,
        string $from_charset = '_DETECT_',
        string $to_charset = '_LOCALE_',
        bool   $update_html_document_encoding = true,

    ): Request
    {
        return $this->setMethod('GET')->setPath("Fileman/get_file_content")->addQueryParams([
            'dir' => $path,
            'file' => $file,
            'from_charset' => $from_charset,
            'to_charset' => $to_charset,
            'update_html_document_encoding' => $update_html_document_encoding
        ]);
    }
}
