<?php

/**
 * BchTx_vout_inner Model
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
 * BchTx_vout_inner Model
 */
class BchTxVoutInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "BchTx_vout_inner";
    protected static $_definition = [
        "value" => ["value", "float", null, "getValue", "setValue", null, ["r" => 0]], 
        "n" => ["n", "float", null, "getN", "setN", null, ["r" => 0]], 
        "script_pub_key" => ["scriptPubKey", "\Tatum\Model\BchTxVoutInnerScriptPubKey", null, "getScriptPubKey", "setScriptPubKey", null, ["r" => 0]]
    ];

    /**
     * BchTxVoutInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get value
     *
     * @return float|null
     */
    public function getValue(): ?float {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param float|null $value value
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?float $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get n
     *
     * @return float|null
     */
    public function getN(): ?float {
        return $this->_data["n"];
    }

    /**
     * Set n
     * 
     * @param float|null $n n
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setN(?float $n) {
        return $this->_set("n", $n);
    }

    /**
     * Get script_pub_key
     *
     * @return \Tatum\Model\BchTxVoutInnerScriptPubKey|null
     */
    public function getScriptPubKey(): ?\Tatum\Model\BchTxVoutInnerScriptPubKey {
        return $this->_data["script_pub_key"];
    }

    /**
     * Set script_pub_key
     * 
     * @param \Tatum\Model\BchTxVoutInnerScriptPubKey|null $script_pub_key script_pub_key
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setScriptPubKey(?\Tatum\Model\BchTxVoutInnerScriptPubKey $script_pub_key) {
        return $this->_set("script_pub_key", $script_pub_key);
    }
}