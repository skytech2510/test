<?php

/**
 * FlowMintedMultipleResult Model
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
 * FlowMintedMultipleResult Model
 */
class FlowMintedMultipleResult extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowMintedMultipleResult";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 0]], 
        "token_id" => ["tokenId", "string[]", 'uint256', "getTokenId", "setTokenId", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * FlowMintedMultipleResult
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_id
     *
     * @return string|null
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string|null $tx_id Transaction ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(?string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get token_id
     *
     * @return string[]|null
     */
    public function getTokenId(): ?array {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string[]|null $token_id token_id
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(?array $token_id) {
        return $this->_set("token_id", $token_id);
    }
}
