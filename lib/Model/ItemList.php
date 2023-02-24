<?php

/**
 * ItemList Model
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
 * ItemList Model
 */
class ItemList extends AbstractModel {

    public const _D = null;
    protected static $_name = "ItemList";
    protected static $_definition = [
        "pageSize" => ["pageSize", "int", null, "getPageSize", "setPageSize", null, ["r" => 0]], 
        "pageNumber" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", null, ["r" => 0]], 
        "items" => ["items", "\Kronup\Model\Item[]", null, "getItems", "setItems", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * ItemList
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get pageSize
     *
     * @return int|null
     */
    public function getPageSize(): ?int {
        return $this->_data["pageSize"];
    }

    /**
     * Set pageSize
     * 
     * @param int|null $page_size Page size
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageSize($page_size) {
        return $this->_set("pageSize", $page_size);
    }

    /**
     * Get pageNumber
     *
     * @return int|null
     */
    public function getPageNumber(): ?int {
        return $this->_data["pageNumber"];
    }

    /**
     * Set pageNumber
     * 
     * @param int|null $page_number Page number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageNumber($page_number) {
        return $this->_set("pageNumber", $page_number);
    }

    /**
     * Get items
     *
     * @return \Kronup\Model\Item[]|null
     */
    public function getItems(): ?array {
        return $this->_data["items"];
    }

    /**
     * Set items
     * 
     * @param \Kronup\Model\Item[]|null $items
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setItems(?array $items) {
        return $this->_set("items", $items);
    }
}