<?php

/**
 * Service_Accounts_List Model
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
 * Service_Accounts_List Model
 */
class ServiceAccountsList extends AbstractModel {

    public const _D = null;
    protected static $_name = "Service_Accounts_List";
    protected static $_definition = [
        "pageNumber" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", 1, ["r" => 0, "n" => [1]]], 
        "pageSize" => ["pageSize", "int", null, "getPageSize", "setPageSize", 500, ["r" => 0, "n" => [1], "x" => [1500]]], 
        "total" => ["total", "int", null, "getTotal", "setTotal", null, ["r" => 0]], 
        "serviceAccounts" => ["serviceAccounts", "\Kronup\Model\ServiceAccount[]", null, "getServiceAccounts", "setServiceAccounts", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * ServiceAccountsList
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
     * Get total - Total number of service accounts
     *
     * @return int|null
     */
    public function getTotal(): ?int {
        return $this->_data["total"];
    }

    /**
     * Set total - Total number of service accounts
     * 
     * @param int|null $total Total number of service accounts
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal($total) {
        return $this->_set("total", $total);
    }

    /**
     * Get serviceAccounts - Service Accounts
     *
     * @return \Kronup\Model\ServiceAccount[]|null
     */
    public function getServiceAccounts(): ?array {
        return $this->_data["serviceAccounts"];
    }

    /**
     * Set serviceAccounts - Service Accounts
     * 
     * @param \Kronup\Model\ServiceAccount[]|null $service_accounts Service Accounts
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setServiceAccounts(?array $service_accounts) {
        return $this->_set("serviceAccounts", $service_accounts);
    }
}
