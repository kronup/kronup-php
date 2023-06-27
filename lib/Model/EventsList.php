<?php

/**
 * Events_List Model
 *
 * @copyright (c) 2022-2023 kronup.io
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://php.kronup.io/
 *
 * NOTE: This class is auto-generated by Kronup
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * Events_List Model
 */
class EventsList extends AbstractModel {

    public const _D = null;
    protected static $_name = "Events_List";
    protected static $_definition = [
        "pageNumber" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", 1, ["r" => 0, "n" => [1]]], 
        "pageSize" => ["pageSize", "int", null, "getPageSize", "setPageSize", 1500, ["r" => 0, "n" => [1], "x" => [1500]]], 
        "total" => ["total", "int", null, "getTotal", "setTotal", null, ["r" => 0]], 
        "events" => ["events", "\Kronup\Model\Event[]", null, "getEvents", "setEvents", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * EventsList
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
     * Get total - Total number of events
     *
     * @return int|null
     */
    public function getTotal(): ?int {
        return $this->_data["total"];
    }

    /**
     * Set total - Total number of events
     * 
     * @param int|null $total Total number of events
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal($total) {
        return $this->_set("total", $total);
    }

    /**
     * Get events - Events
     *
     * @return \Kronup\Model\Event[]|null
     */
    public function getEvents(): ?array {
        return $this->_data["events"];
    }

    /**
     * Set events - Events
     * 
     * @param \Kronup\Model\Event[]|null $events Events
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEvents(?array $events) {
        return $this->_set("events", $events);
    }
}
