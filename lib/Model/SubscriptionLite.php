<?php

/**
 * SubscriptionLite Model
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
 * SubscriptionLite Model
 */
class SubscriptionLite extends AbstractModel {

    public const _D = null;
    public const STATUS_ON_TRIAL = 'on_trial';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_PAST_DUE = 'past_due';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_UNPAID = 'unpaid';
    public const STATUS_PAUSED = 'paused';
    public const STATUS_EXPIRED = 'expired';
    protected static $_name = "SubscriptionLite";
    protected static $_definition = [
        "subscriptionId" => ["subscriptionId", "float", null, "getSubscriptionId", "setSubscriptionId", null, ["r" => 0, "n" => [1]]], 
        "status" => ["status", "string", null, "getStatus", "setStatus", null, ["r" => 0, "e" => 1]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 0]], 
        "orderId" => ["orderId", "float", null, "getOrderId", "setOrderId", null, ["r" => 0, "n" => [1]]], 
        "orderFeatureId" => ["orderFeatureId", "float", null, "getOrderFeatureId", "setOrderFeatureId", null, ["r" => 0, "n" => [1]]], 
        "productId" => ["productId", "float", null, "getProductId", "setProductId", null, ["r" => 0, "n" => [1]]], 
        "variantId" => ["variantId", "float", null, "getVariantId", "setVariantId", null, ["r" => 0, "n" => [1]]], 
        "customerId" => ["customerId", "float", null, "getCustomerId", "setCustomerId", null, ["r" => 0, "n" => [1]]], 
        "cardBrand" => ["cardBrand", "string", null, "getCardBrand", "setCardBrand", null, ["r" => 0]], 
        "cardLast4" => ["cardLast4", "string", null, "getCardLast4", "setCardLast4", null, ["r" => 0]], 
        "renewsAt" => ["renewsAt", "string", null, "getRenewsAt", "setRenewsAt", null, ["r" => 0]], 
        "endsAt" => ["endsAt", "string", null, "getEndsAt", "setEndsAt", null, ["r" => 0]], 
        "trialEndsAt" => ["trialEndsAt", "string", null, "getTrialEndsAt", "setTrialEndsAt", null, ["r" => 0]], 
        "createdAt" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updatedAt" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]], 
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]]
    ];

    /**
     * SubscriptionLite
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getStatusAllowableValues(): array {
        return [
            self::STATUS_ON_TRIAL,
            self::STATUS_ACTIVE,
            self::STATUS_PAST_DUE,
            self::STATUS_CANCELLED,
            self::STATUS_UNPAID,
            self::STATUS_PAUSED,
            self::STATUS_EXPIRED,
        ];
    }

    /**
     * Get subscriptionId - Subscription ID
     *
     * @return float|null
     */
    public function getSubscriptionId(): ?float {
        return $this->_data["subscriptionId"];
    }

    /**
     * Set subscriptionId - Subscription ID
     * 
     * @param float|null $subscription_id Subscription ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSubscriptionId($subscription_id) {
        return $this->_set("subscriptionId", $subscription_id);
    }

    /**
     * Get status - 
     *
     * @return string|null
     */
    public function getStatus(): ?string {
        return $this->_data["status"];
    }

    /**
     * Set status - 
     * 
     * @param string|null $status
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStatus($status) {
        return $this->_set("status", $status);
    }

    /**
     * Get url - Update payment method URL
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url - Update payment method URL
     * 
     * @param string|null $url Update payment method URL
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl($url) {
        return $this->_set("url", $url);
    }

    /**
     * Get orderId - Order ID
     *
     * @return float|null
     */
    public function getOrderId(): ?float {
        return $this->_data["orderId"];
    }

    /**
     * Set orderId - Order ID
     * 
     * @param float|null $order_id Order ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrderId($order_id) {
        return $this->_set("orderId", $order_id);
    }

    /**
     * Get orderFeatureId - Order Feature ID
     *
     * @return float|null
     */
    public function getOrderFeatureId(): ?float {
        return $this->_data["orderFeatureId"];
    }

    /**
     * Set orderFeatureId - Order Feature ID
     * 
     * @param float|null $order_feature_id Order Feature ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrderFeatureId($order_feature_id) {
        return $this->_set("orderFeatureId", $order_feature_id);
    }

    /**
     * Get productId - Product ID
     *
     * @return float|null
     */
    public function getProductId(): ?float {
        return $this->_data["productId"];
    }

    /**
     * Set productId - Product ID
     * 
     * @param float|null $product_id Product ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProductId($product_id) {
        return $this->_set("productId", $product_id);
    }

    /**
     * Get variantId - Variant ID
     *
     * @return float|null
     */
    public function getVariantId(): ?float {
        return $this->_data["variantId"];
    }

    /**
     * Set variantId - Variant ID
     * 
     * @param float|null $variant_id Variant ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVariantId($variant_id) {
        return $this->_set("variantId", $variant_id);
    }

    /**
     * Get customerId - Customer ID
     *
     * @return float|null
     */
    public function getCustomerId(): ?float {
        return $this->_data["customerId"];
    }

    /**
     * Set customerId - Customer ID
     * 
     * @param float|null $customer_id Customer ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustomerId($customer_id) {
        return $this->_set("customerId", $customer_id);
    }

    /**
     * Get cardBrand - Card brand
     *
     * @return string|null
     */
    public function getCardBrand(): ?string {
        return $this->_data["cardBrand"];
    }

    /**
     * Set cardBrand - Card brand
     * 
     * @param string|null $card_brand Card brand
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCardBrand($card_brand) {
        return $this->_set("cardBrand", $card_brand);
    }

    /**
     * Get cardLast4 - Card last 4 digits
     *
     * @return string|null
     */
    public function getCardLast4(): ?string {
        return $this->_data["cardLast4"];
    }

    /**
     * Set cardLast4 - Card last 4 digits
     * 
     * @param string|null $card_last4 Card last 4 digits
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCardLast4($card_last4) {
        return $this->_set("cardLast4", $card_last4);
    }

    /**
     * Get renewsAt - Renews timestamp
     *
     * @return string|null
     */
    public function getRenewsAt(): ?string {
        return $this->_data["renewsAt"];
    }

    /**
     * Set renewsAt - Renews timestamp
     * 
     * @param string|null $renews_at Renews timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRenewsAt($renews_at) {
        return $this->_set("renewsAt", $renews_at);
    }

    /**
     * Get endsAt - End timestamp
     *
     * @return string|null
     */
    public function getEndsAt(): ?string {
        return $this->_data["endsAt"];
    }

    /**
     * Set endsAt - End timestamp
     * 
     * @param string|null $ends_at End timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEndsAt($ends_at) {
        return $this->_set("endsAt", $ends_at);
    }

    /**
     * Get trialEndsAt - Trial end timestamp
     *
     * @return string|null
     */
    public function getTrialEndsAt(): ?string {
        return $this->_data["trialEndsAt"];
    }

    /**
     * Set trialEndsAt - Trial end timestamp
     * 
     * @param string|null $trial_ends_at Trial end timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTrialEndsAt($trial_ends_at) {
        return $this->_set("trialEndsAt", $trial_ends_at);
    }

    /**
     * Get createdAt - Created timestamp
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string {
        return $this->_data["createdAt"];
    }

    /**
     * Set createdAt - Created timestamp
     * 
     * @param string|null $created_at Created timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreatedAt($created_at) {
        return $this->_set("createdAt", $created_at);
    }

    /**
     * Get updatedAt - Updated timestamp
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string {
        return $this->_data["updatedAt"];
    }

    /**
     * Set updatedAt - Updated timestamp
     * 
     * @param string|null $updated_at Updated timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUpdatedAt($updated_at) {
        return $this->_set("updatedAt", $updated_at);
    }

    /**
     * Get id - Organization ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Organization ID
     * 
     * @param string|null $id Organization ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }
}
