<?php

/**
 * Implementation of NotificationSubscriptions API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * API for NotificationSubscriptions
 */
class NotificationSubscriptionsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Notification subscriptions";

    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionBalance $create_subscription_balance 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionBalance($create_subscription_balance, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_balance
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionContractLogEvent $create_subscription_contract_log_event 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionContractLogEvent($create_subscription_contract_log_event, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_contract_log_event
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionIncoming $create_subscription_incoming 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionIncoming($create_subscription_incoming, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_incoming
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionInterval $create_subscription_interval 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionInterval($create_subscription_interval, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_interval
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionKMSError $create_subscription_kms_error 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionKMSError($create_subscription_kms_error, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_kms_error
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionKMSSuccess $create_subscription_kms_success 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionKMSSuccess($create_subscription_kms_success, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_kms_success
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionMultiTokenTransferEvent $create_subscription_multi_token_transfer_event 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionMultiTokenTransferEvent($create_subscription_multi_token_transfer_event, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_multi_token_transfer_event
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionNftTransferEvent $create_subscription_nft_transfer_event 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionNftTransferEvent($create_subscription_nft_transfer_event, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_nft_transfer_event
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionNotification $create_subscription_notification 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionNotification($create_subscription_notification, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_notification
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionPartialTradeMatch $create_subscription_partial_trade_match 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionPartialTradeMatch($create_subscription_partial_trade_match, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_partial_trade_match
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionPending $create_subscription_pending 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionPending($create_subscription_pending, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_pending
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionTradeMatch $create_subscription_trade_match 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionTradeMatch($create_subscription_trade_match, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_trade_match
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionTxInTheBlock $create_subscription_tx_in_the_block 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscriptionTxInTheBlock($create_subscription_tx_in_the_block, $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $create_subscription_tx_in_the_block
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Cancel existing subscription
     *
     * @param string $id Subscription ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deleteSubscription($id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/subscription/{id}";
        $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "DELETE", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            )
        );
    }
    
    /**
     * Disable HMAC webhook digest
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function disableWebHookHmac() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/subscription";
        $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "DELETE", $rPath, $rPath, [], $rHeaders, []
            )
        );
    }
    
    /**
     * Enable HMAC webhook digest
     *
     * @param \Tatum\Model\HmacWebHook $hmac_web_hook 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function enableWebHookHmac($hmac_web_hook) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/subscription";
        $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "PUT", $rPath, $rPath, [], $rHeaders, [], $hmac_web_hook
            )
        );
    }
    
    /**
     * List all executed webhooks
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain the next page of data.
     * @param string|null $direction Direction of sorting
     * @param bool|null $failed Flag indicating whether the webhook was successful or not
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\WebHook[]
     */
    public function getAllWebhooks($page_size, $offset = null, $direction = null, $failed = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getAllWebhooks, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getAllWebhooks, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/subscription/webhook";
        /** @var \Tatum\Model\WebHook[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "direction" => isset($direction) ? S::toQueryValue($direction) : null,
                    "failed" => isset($failed) ? S::toQueryValue($failed) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\WebHook[]"
        );
            
        return $result;
    }
    
    /**
     * Count of found entities for get webhook request
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain the next page of data.
     * @param string|null $direction Direction of sorting
     * @param bool|null $failed Flag indicating whether the webhook was successful or not
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EntitiesCount
     */
    public function getAllWebhooksCount($page_size, $offset = null, $direction = null, $failed = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getAllWebhooksCount, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getAllWebhooksCount, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/subscription/webhook/count";
        /** @var \Tatum\Model\EntitiesCount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "direction" => isset($direction) ? S::toQueryValue($direction) : null,
                    "failed" => isset($failed) ? S::toQueryValue($failed) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\EntitiesCount"
        );
            
        return $result;
    }
    
    /**
     * Obtain report for subscription
     *
     * @param string $id Subscription ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GetSubscriptionReport200Response
     */
    public function getSubscriptionReport($id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/subscription/report/{id}";
        /** @var \Tatum\Model\GetSubscriptionReport200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\GetSubscriptionReport200Response"
        );
            
        return $result;
    }
    
    /**
     * List all active subscriptions
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|null $address Value for filtering by address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Subscription[]
     */
    public function getSubscriptions($page_size, $offset = null, $address = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getSubscriptions, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getSubscriptions, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/subscription";
        /** @var \Tatum\Model\Subscription[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "address" => isset($address) ? S::toQueryValue($address) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Subscription[]"
        );
            
        return $result;
    }
    
    /**
     * Count of found entities for get webhook request
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|null $address Value for filtering by address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EntitiesCount
     */
    public function getSubscriptionsCount($page_size, $offset = null, $address = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getSubscriptionsCount, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getSubscriptionsCount, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/subscription/count";
        /** @var \Tatum\Model\EntitiesCount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "address" => isset($address) ? S::toQueryValue($address) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\EntitiesCount"
        );
            
        return $result;
    }
    
}
