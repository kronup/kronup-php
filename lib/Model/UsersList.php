<?php

/**
 * Users_List Model
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
 * Users_List Model
 */
class UsersList extends AbstractModel {

    public const _D = null;
    protected static $_name = "Users_List";
    protected static $_definition = [
        "pageNumber" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", 1, ["r" => 0, "n" => [1]]], 
        "pageSize" => ["pageSize", "int", null, "getPageSize", "setPageSize", 500, ["r" => 0, "n" => [1], "x" => [1500]]], 
        "total" => ["total", "int", null, "getTotal", "setTotal", null, ["r" => 0]], 
        "users" => ["users", "\Kronup\Model\User[]", null, "getUsers", "setUsers", null, ["r" => 0, "c" => 1]], 
        "usersMax" => ["usersMax", "int", null, "getUsersMax", "setUsersMax", null, ["r" => 0]]
    ];

    /**
     * UsersList
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
     * Get total - Total number of users
     *
     * @return int|null
     */
    public function getTotal(): ?int {
        return $this->_data["total"];
    }

    /**
     * Set total - Total number of users
     * 
     * @param int|null $total Total number of users
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal($total) {
        return $this->_set("total", $total);
    }

    /**
     * Get users - Users
     *
     * @return \Kronup\Model\User[]|null
     */
    public function getUsers(): ?array {
        return $this->_data["users"];
    }

    /**
     * Set users - Users
     * 
     * @param \Kronup\Model\User[]|null $users Users
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUsers(?array $users) {
        return $this->_set("users", $users);
    }

    /**
     * Get usersMax - Maximum number of users for this organization
     *
     * @return int|null
     */
    public function getUsersMax(): ?int {
        return $this->_data["usersMax"];
    }

    /**
     * Set usersMax - Maximum number of users for this organization
     * 
     * @param int|null $users_max Maximum number of users for this organization
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUsersMax($users_max) {
        return $this->_set("usersMax", $users_max);
    }
}
