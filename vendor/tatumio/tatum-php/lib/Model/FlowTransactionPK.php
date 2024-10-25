<?php

/**
 * FlowTransactionPK Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * FlowTransactionPK Model
 */
class FlowTransactionPK extends AbstractModel {

    public const _D = null;
    public const CURRENCY_FLOW = 'FLOW';
    public const CURRENCY_FUSD = 'FUSD';
    protected static $_name = "FlowTransactionPK";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount", null, ["r" => 1, "nl" => 18, "xl" => 18]], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency", null, ["r" => 1, "e" => 1]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 18, "xl" => 18]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]]
    ];

    /**
     * FlowTransactionPK
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
    public function getCurrencyAllowableValues(): array {
        return [
            self::CURRENCY_FLOW,
            self::CURRENCY_FUSD,
        ];
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount(): string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string $account Blockchain account to send from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccount(string $account) {
        return $this->_set("account", $account);
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Type of asset to send
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency(string $currency) {
        return $this->_set("currency", $currency);
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to Blockchain address to send assets
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key Secret for account. Secret, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
