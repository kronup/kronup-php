<?php

/**
 * Notions_List Model
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://php.kronup.com/
 *
 * NOTE: This class is auto-generated by Kronup
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
        "pageNumber" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", 1, ["r" => 0, "n" => [1]]], 
        "pageSize" => ["pageSize", "int", null, "getPageSize", "setPageSize", 500, ["r" => 0, "n" => [1], "x" => [1500]]], 
        "total" => ["total", "int", null, "getTotal", "setTotal", null, ["r" => 0]], 
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
     * Get pageNumber - Pagination: page number
     *
     * @return int|null
     */
    public function getPageNumber(): ?int {
        return $this->_data["pageNumber"];
    }

    /**
     * Set pageNumber - Pagination: page number
     * 
     * @param int|null $page_number Pagination: page number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageNumber($page_number) {
        return $this->_set("pageNumber", $page_number);
    }

    /**
     * Get pageSize - Pagination: page size
     *
     * @return int|null
     */
    public function getPageSize(): ?int {
        return $this->_data["pageSize"];
    }

    /**
     * Set pageSize - Pagination: page size
     * 
     * @param int|null $page_size Pagination: page size
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageSize($page_size) {
        return $this->_set("pageSize", $page_size);
    }

    /**
     * Get total - Total number of notions
     *
     * @return int|null
     */
    public function getTotal(): ?int {
        return $this->_data["total"];
    }

    /**
     * Set total - Total number of notions
     * 
     * @param int|null $total Total number of notions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal($total) {
        return $this->_set("total", $total);
    }

    /**
     * Get notions - Notions
     *
     * @return \Kronup\Model\Notion[]|null
     */
    public function getNotions(): ?array {
        return $this->_data["notions"];
    }

    /**
     * Set notions - Notions
     * 
     * @param \Kronup\Model\Notion[]|null $notions Notions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNotions(?array $notions) {
        return $this->_set("notions", $notions);
    }
}
