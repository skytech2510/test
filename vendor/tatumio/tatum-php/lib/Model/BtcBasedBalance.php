<?php

/**
 * BtcBasedBalance Model
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
 * BtcBasedBalance Model
 */
class BtcBasedBalance extends AbstractModel {

    public const _D = null;
    protected static $_name = "BtcBasedBalance";
    protected static $_definition = [
        "incoming" => ["incoming", "string", null, "getIncoming", "setIncoming", null, ["r" => 0]], 
        "outgoing" => ["outgoing", "string", null, "getOutgoing", "setOutgoing", null, ["r" => 0]]
    ];

    /**
     * BtcBasedBalance
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get incoming
     *
     * @return string|null
     */
    public function getIncoming(): ?string {
        return $this->_data["incoming"];
    }

    /**
     * Set incoming
     * 
     * @param string|null $incoming Total sum of the assets that arrives to the address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIncoming(?string $incoming) {
        return $this->_set("incoming", $incoming);
    }

    /**
     * Get outgoing
     *
     * @return string|null
     */
    public function getOutgoing(): ?string {
        return $this->_data["outgoing"];
    }

    /**
     * Set outgoing
     * 
     * @param string|null $outgoing Total sum of the assets that leaves from the address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOutgoing(?string $outgoing) {
        return $this->_set("outgoing", $outgoing);
    }
}
