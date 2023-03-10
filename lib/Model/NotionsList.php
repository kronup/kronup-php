<?php

/**
 * Notions_List Model
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
 * Notions_List Model
 */
class NotionsList extends AbstractModel {

    public const _D = null;
    protected static $_name = "Notions_List";
    protected static $_definition = [
        "pageSize" => ["pageSize", "int", null, "getPageSize", "setPageSize", null, ["r" => 0]], 
        "pageNumber" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", null, ["r" => 0]], 
        "notions" => ["notions", "\Kronup\Model\Notion[]", null, "getNotions", "setNotions", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * NotionsList
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get pageSize - Page size
     *
     * @return int|null
     */
    public function getPageSize(): ?int {
        return $this->_data["pageSize"];
    }

    /**
     * Set pageSize - Page size
     * 
     * @param int|null $page_size Page size
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageSize($page_size) {
        return $this->_set("pageSize", $page_size);
    }

    /**
     * Get pageNumber - Page number
     *
     * @return int|null
     */
    public function getPageNumber(): ?int {
        return $this->_data["pageNumber"];
    }

    /**
     * Set pageNumber - Page number
     * 
     * @param int|null $page_number Page number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageNumber($page_number) {
        return $this->_set("pageNumber", $page_number);
    }

    /**
     * Get notions - 
     *
     * @return \Kronup\Model\Notion[]|null
     */
    public function getNotions(): ?array {
        return $this->_data["notions"];
    }

    /**
     * Set notions - 
     * 
     * @param \Kronup\Model\Notion[]|null $notions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNotions(?array $notions) {
        return $this->_set("notions", $notions);
    }
}
