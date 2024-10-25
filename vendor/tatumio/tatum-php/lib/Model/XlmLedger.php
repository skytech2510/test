<?php

/**
 * XlmLedger Model
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
 * XlmLedger Model
 */
class XlmLedger extends AbstractModel {

    public const _D = null;
    protected static $_name = "XlmLedger";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "paging_token" => ["paging_token", "string", null, "getPagingToken", "setPagingToken", null, ["r" => 0]], 
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "sequence" => ["sequence", "float", null, "getSequence", "setSequence", null, ["r" => 0]], 
        "successful_transaction_count" => ["successful_transaction_count", "float", null, "getSuccessfulTransactionCount", "setSuccessfulTransactionCount", null, ["r" => 0]], 
        "failed_transaction_count" => ["failed_transaction_count", "float", null, "getFailedTransactionCount", "setFailedTransactionCount", null, ["r" => 0]], 
        "operation_count" => ["operation_count", "float", null, "getOperationCount", "setOperationCount", null, ["r" => 0]], 
        "closed_at" => ["closed_at", "string", null, "getClosedAt", "setClosedAt", null, ["r" => 0]], 
        "total_coins" => ["total_coins", "string", null, "getTotalCoins", "setTotalCoins", null, ["r" => 0]], 
        "fee_pool" => ["fee_pool", "string", null, "getFeePool", "setFeePool", null, ["r" => 0]], 
        "base_fee_in_stroops" => ["base_fee_in_stroops", "float", null, "getBaseFeeInStroops", "setBaseFeeInStroops", null, ["r" => 0]], 
        "base_reserve_in_stroops" => ["base_reserve_in_stroops", "float", null, "getBaseReserveInStroops", "setBaseReserveInStroops", null, ["r" => 0]], 
        "max_tx_set_size" => ["max_tx_set_size", "float", null, "getMaxTxSetSize", "setMaxTxSetSize", null, ["r" => 0]], 
        "protocol_version" => ["protocol_version", "float", null, "getProtocolVersion", "setProtocolVersion", null, ["r" => 0]], 
        "header_xdr" => ["header_xdr", "string", null, "getHeaderXdr", "setHeaderXdr", null, ["r" => 0]]
    ];

    /**
     * XlmLedger
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id A unique identifier for this ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get paging_token
     *
     * @return string|null
     */
    public function getPagingToken(): ?string {
        return $this->_data["paging_token"];
    }

    /**
     * Set paging_token
     * 
     * @param string|null $paging_token A cursor value for use in pagination.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPagingToken(?string $paging_token) {
        return $this->_set("paging_token", $paging_token);
    }

    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash A hex-encoded SHA-256 hash of this ledger’s XDR-encoded form.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
    }

    /**
     * Get sequence
     *
     * @return float|null
     */
    public function getSequence(): ?float {
        return $this->_data["sequence"];
    }

    /**
     * Set sequence
     * 
     * @param float|null $sequence The sequence number of this ledger, and the parameter used in Horizon calls that require a ledger number.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSequence(?float $sequence) {
        return $this->_set("sequence", $sequence);
    }

    /**
     * Get successful_transaction_count
     *
     * @return float|null
     */
    public function getSuccessfulTransactionCount(): ?float {
        return $this->_data["successful_transaction_count"];
    }

    /**
     * Set successful_transaction_count
     * 
     * @param float|null $successful_transaction_count The number of successful transactions in this ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSuccessfulTransactionCount(?float $successful_transaction_count) {
        return $this->_set("successful_transaction_count", $successful_transaction_count);
    }

    /**
     * Get failed_transaction_count
     *
     * @return float|null
     */
    public function getFailedTransactionCount(): ?float {
        return $this->_data["failed_transaction_count"];
    }

    /**
     * Set failed_transaction_count
     * 
     * @param float|null $failed_transaction_count The number of failed transactions in this ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFailedTransactionCount(?float $failed_transaction_count) {
        return $this->_set("failed_transaction_count", $failed_transaction_count);
    }

    /**
     * Get operation_count
     *
     * @return float|null
     */
    public function getOperationCount(): ?float {
        return $this->_data["operation_count"];
    }

    /**
     * Set operation_count
     * 
     * @param float|null $operation_count The number of operations applied in this ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOperationCount(?float $operation_count) {
        return $this->_set("operation_count", $operation_count);
    }

    /**
     * Get closed_at
     *
     * @return string|null
     */
    public function getClosedAt(): ?string {
        return $this->_data["closed_at"];
    }

    /**
     * Set closed_at
     * 
     * @param string|null $closed_at An ISO 8601 formatted string of when this ledger was closed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setClosedAt(?string $closed_at) {
        return $this->_set("closed_at", $closed_at);
    }

    /**
     * Get total_coins
     *
     * @return string|null
     */
    public function getTotalCoins(): ?string {
        return $this->_data["total_coins"];
    }

    /**
     * Set total_coins
     * 
     * @param string|null $total_coins The total number of lumens in circulation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotalCoins(?string $total_coins) {
        return $this->_set("total_coins", $total_coins);
    }

    /**
     * Get fee_pool
     *
     * @return string|null
     */
    public function getFeePool(): ?string {
        return $this->_data["fee_pool"];
    }

    /**
     * Set fee_pool
     * 
     * @param string|null $fee_pool The sum of all transaction fees.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeePool(?string $fee_pool) {
        return $this->_set("fee_pool", $fee_pool);
    }

    /**
     * Get base_fee_in_stroops
     *
     * @return float|null
     */
    public function getBaseFeeInStroops(): ?float {
        return $this->_data["base_fee_in_stroops"];
    }

    /**
     * Set base_fee_in_stroops
     * 
     * @param float|null $base_fee_in_stroops The fee the network charges per operation in a transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseFeeInStroops(?float $base_fee_in_stroops) {
        return $this->_set("base_fee_in_stroops", $base_fee_in_stroops);
    }

    /**
     * Get base_reserve_in_stroops
     *
     * @return float|null
     */
    public function getBaseReserveInStroops(): ?float {
        return $this->_data["base_reserve_in_stroops"];
    }

    /**
     * Set base_reserve_in_stroops
     * 
     * @param float|null $base_reserve_in_stroops The reserve the network uses when calculating an account’s minimum balance.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseReserveInStroops(?float $base_reserve_in_stroops) {
        return $this->_set("base_reserve_in_stroops", $base_reserve_in_stroops);
    }

    /**
     * Get max_tx_set_size
     *
     * @return float|null
     */
    public function getMaxTxSetSize(): ?float {
        return $this->_data["max_tx_set_size"];
    }

    /**
     * Set max_tx_set_size
     * 
     * @param float|null $max_tx_set_size The maximum number of transactions validators have agreed to process in a given ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMaxTxSetSize(?float $max_tx_set_size) {
        return $this->_set("max_tx_set_size", $max_tx_set_size);
    }

    /**
     * Get protocol_version
     *
     * @return float|null
     */
    public function getProtocolVersion(): ?float {
        return $this->_data["protocol_version"];
    }

    /**
     * Set protocol_version
     * 
     * @param float|null $protocol_version The protocol version that the Stellar network was running when this ledger was committed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProtocolVersion(?float $protocol_version) {
        return $this->_set("protocol_version", $protocol_version);
    }

    /**
     * Get header_xdr
     *
     * @return string|null
     */
    public function getHeaderXdr(): ?string {
        return $this->_data["header_xdr"];
    }

    /**
     * Set header_xdr
     * 
     * @param string|null $header_xdr A base64 encoded string of the raw LedgerHeader xdr struct for this ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeaderXdr(?string $header_xdr) {
        return $this->_set("header_xdr", $header_xdr);
    }
}