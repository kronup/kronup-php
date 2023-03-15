<?php

/**
 * Deep_Context_List Model
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
 * Deep_Context_List Model
 */
class DeepContextList extends AbstractModel {

    public const _D = null;
    protected static $_name = "Deep_Context_List";
    protected static $_definition = [
        "pageNumber" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", 1, ["r" => 0]], 
        "pageSize" => ["pageSize", "int", null, "getPageSize", "setPageSize", 100, ["r" => 0]], 
        "total" => ["total", "int", null, "getTotal", "setTotal", null, ["r" => 0]], 
        "items" => ["items", "\Kronup\Model\ValueItem[]", null, "getItems", "setItems", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * DeepContextList
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * Get total - Total
     *
     * @return int|null
     */
    public function getTotal(): ?int {
        return $this->_data["total"];
    }

    /**
     * Set total - Total
     * 
     * @param int|null $total Total
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal($total) {
        return $this->_set("total", $total);
    }

    /**
     * Get items - Value Items
     *
     * @return \Kronup\Model\ValueItem[]|null
     */
    public function getItems(): ?array {
        return $this->_data["items"];
    }

    /**
     * Set items - Value Items
     * 
     * @param \Kronup\Model\ValueItem[]|null $items Value Items
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setItems(?array $items) {
        return $this->_set("items", $items);
    }
}
