<?php

/**
 * FlowAccount_keys_inner Model
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
 * FlowAccount_keys_inner Model
 */
class FlowAccountKeysInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowAccount_keys_inner";
    protected static $_definition = [
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0]], 
        "public_key" => ["publicKey", "string", null, "getPublicKey", "setPublicKey", null, ["r" => 0]], 
        "sign_algo" => ["signAlgo", "float", null, "getSignAlgo", "setSignAlgo", null, ["r" => 0]], 
        "hash_algo" => ["hashAlgo", "float", null, "getHashAlgo", "setHashAlgo", null, ["r" => 0]], 
        "sequence_number" => ["sequenceNumber", "float", null, "getSequenceNumber", "setSequenceNumber", null, ["r" => 0]], 
        "revoked" => ["revoked", "bool", null, "getRevoked", "setRevoked", null, ["r" => 0]], 
        "weight" => ["weight", "float", null, "getWeight", "setWeight", null, ["r" => 0]]
    ];

    /**
     * FlowAccountKeysInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index Index of the public key.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get public_key
     *
     * @return string|null
     */
    public function getPublicKey(): ?string {
        return $this->_data["public_key"];
    }

    /**
     * Set public_key
     * 
     * @param string|null $public_key public_key
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPublicKey(?string $public_key) {
        return $this->_set("public_key", $public_key);
    }

    /**
     * Get sign_algo
     *
     * @return float|null
     */
    public function getSignAlgo(): ?float {
        return $this->_data["sign_algo"];
    }

    /**
     * Set sign_algo
     * 
     * @param float|null $sign_algo Type of signature algorithm. 2 - ECDSA_secp256k1
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignAlgo(?float $sign_algo) {
        return $this->_set("sign_algo", $sign_algo);
    }

    /**
     * Get hash_algo
     *
     * @return float|null
     */
    public function getHashAlgo(): ?float {
        return $this->_data["hash_algo"];
    }

    /**
     * Set hash_algo
     * 
     * @param float|null $hash_algo Type of hash algo. 3 - SHA3_256
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHashAlgo(?float $hash_algo) {
        return $this->_set("hash_algo", $hash_algo);
    }

    /**
     * Get sequence_number
     *
     * @return float|null
     */
    public function getSequenceNumber(): ?float {
        return $this->_data["sequence_number"];
    }

    /**
     * Set sequence_number
     * 
     * @param float|null $sequence_number Number of outgoing transactions for this public key.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSequenceNumber(?float $sequence_number) {
        return $this->_set("sequence_number", $sequence_number);
    }

    /**
     * Get revoked
     *
     * @return bool|null
     */
    public function getRevoked(): ?bool {
        return $this->_data["revoked"];
    }

    /**
     * Set revoked
     * 
     * @param bool|null $revoked revoked
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRevoked(?bool $revoked) {
        return $this->_set("revoked", $revoked);
    }

    /**
     * Get weight
     *
     * @return float|null
     */
    public function getWeight(): ?float {
        return $this->_data["weight"];
    }

    /**
     * Set weight
     * 
     * @param float|null $weight Weight of the key. 1000 means single signature necessary.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setWeight(?float $weight) {
        return $this->_set("weight", $weight);
    }
}
