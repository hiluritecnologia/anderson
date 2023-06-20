<?php

/**
 * SolanaBlockReward Model
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
 * SolanaBlockReward Model
 */
class SolanaBlockReward extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaBlockReward";
    protected static $_definition = [
        "commission" => ["commission", "string", 'nullable', "getCommission", "setCommission", null, ["r" => 0]], 
        "lamports" => ["lamports", "float", null, "getLamports", "setLamports", null, ["r" => 0]], 
        "post_balance" => ["postBalance", "float", null, "getPostBalance", "setPostBalance", null, ["r" => 0]], 
        "pubkey" => ["pubkey", "string", null, "getPubkey", "setPubkey", null, ["r" => 0]], 
        "reward_type" => ["rewardType", "string", null, "getRewardType", "setRewardType", null, ["r" => 0]]
    ];

    /**
     * SolanaBlockReward
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get commission
     *
     * @return string|null
     */
    public function getCommission(): ?string {
        return $this->_data["commission"];
    }

    /**
     * Set commission
     * 
     * @param string|null $commission commission
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCommission(?string $commission) {
        return $this->_set("commission", $commission);
    }

    /**
     * Get lamports
     *
     * @return float|null
     */
    public function getLamports(): ?float {
        return $this->_data["lamports"];
    }

    /**
     * Set lamports
     * 
     * @param float|null $lamports lamports
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLamports(?float $lamports) {
        return $this->_set("lamports", $lamports);
    }

    /**
     * Get post_balance
     *
     * @return float|null
     */
    public function getPostBalance(): ?float {
        return $this->_data["post_balance"];
    }

    /**
     * Set post_balance
     * 
     * @param float|null $post_balance post_balance
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPostBalance(?float $post_balance) {
        return $this->_set("post_balance", $post_balance);
    }

    /**
     * Get pubkey
     *
     * @return string|null
     */
    public function getPubkey(): ?string {
        return $this->_data["pubkey"];
    }

    /**
     * Set pubkey
     * 
     * @param string|null $pubkey pubkey
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPubkey(?string $pubkey) {
        return $this->_set("pubkey", $pubkey);
    }

    /**
     * Get reward_type
     *
     * @return string|null
     */
    public function getRewardType(): ?string {
        return $this->_data["reward_type"];
    }

    /**
     * Set reward_type
     * 
     * @param string|null $reward_type reward_type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRewardType(?string $reward_type) {
        return $this->_set("reward_type", $reward_type);
    }
}