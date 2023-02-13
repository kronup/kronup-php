<?php

/**
 * userList_200_response Model
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://kronup.com/
 *
 * NOTE: This class is auto-generated by kronup.com
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * userList_200_response Model
 */
class UserList200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "userList_200_response";
    protected static $_definition = [
        "page_size" => ["pageSize", "int", null, "getPageSize", "setPageSize", null, ["r" => 0]], 
        "page_number" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", null, ["r" => 0]], 
        "data" => ["data", "\Kronup\Model\User[]", null, "getData", "setData", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * UserList200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get page_size
     *
     * @return int|null
     */
    public function getPageSize(): ?int {
        return $this->_data["page_size"];
    }

    /**
     * Set page_size
     * 
     * @param int|null $page_size Page size
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageSize( $page_size) {
        return $this->_set("page_size", $page_size);
    }

    /**
     * Get page_number
     *
     * @return int|null
     */
    public function getPageNumber(): ?int {
        return $this->_data["page_number"];
    }

    /**
     * Set page_number
     * 
     * @param int|null $page_number Page number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageNumber( $page_number) {
        return $this->_set("page_number", $page_number);
    }

    /**
     * Get data
     *
     * @return \Kronup\Model\User[]|null
     */
    public function getData(): ?array {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Kronup\Model\User[]|null $data data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?array $data) {
        return $this->_set("data", $data);
    }
}
