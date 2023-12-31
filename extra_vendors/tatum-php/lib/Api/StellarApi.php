<?php

/**
 * Implementation of Stellar API
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
 * API for Stellar
 */
class StellarApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Stellar";

    /**
     * Send XLM from address to address
     *
     * @param \Tatum\Model\TransferXlmBlockchain $transfer_xlm_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function transferXlmBlockchain($transfer_xlm_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/xlm/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $transfer_xlm_blockchain
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send XLM from address to address
     *
     * @param \Tatum\Model\TransferXlmBlockchainAsset $transfer_xlm_blockchain_asset 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function transferXlmBlockchainAsset($transfer_xlm_blockchain_asset) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/xlm/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $transfer_xlm_blockchain_asset
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send XLM from address to address
     *
     * @param \Tatum\Model\TransferXlmBlockchainKMS $transfer_xlm_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function transferXlmBlockchainKMS($transfer_xlm_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/xlm/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $transfer_xlm_blockchain_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send XLM from address to address
     *
     * @param \Tatum\Model\TransferXlmBlockchainKMSAsset $transfer_xlm_blockchain_kms_asset 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function transferXlmBlockchainKMSAsset($transfer_xlm_blockchain_kms_asset) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/xlm/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $transfer_xlm_blockchain_kms_asset
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Create / Update / Delete XLM trust line
     *
     * @param \Tatum\Model\TrustLineXlmBlockchain $trust_line_xlm_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function trustLineXlmBlockchain($trust_line_xlm_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/xlm/trust";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $trust_line_xlm_blockchain
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Create / Update / Delete XLM trust line
     *
     * @param \Tatum\Model\TrustLineXlmBlockchainKMS $trust_line_xlm_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function trustLineXlmBlockchainKMS($trust_line_xlm_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/xlm/trust";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $trust_line_xlm_blockchain_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Broadcast signed XLM transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function xlmBroadcast($broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/xlm/broadcast";
        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Get XLM Account info
     *
     * @param string $account Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XlmAccount
     */
    public function xlmGetAccountInfo($account) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/xlm/account/{account}";
        /** @var \Tatum\Model\XlmAccount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["account" => $account]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\XlmAccount"
        );
            
        return $result;
    }
    
    /**
     * Get XLM Account transactions
     *
     * @param string $account Address of XLM account.
     * @param string|null $pagination Paging token from the last transaction gives you next page
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XlmTx[]
     */
    public function xlmGetAccountTx($account, $pagination = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/xlm/account/tx/{account}";
        /** @var \Tatum\Model\XlmTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["account" => $account]), $rPath, [
                    "pagination" => isset($pagination) ? S::toQueryValue($pagination) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\XlmTx[]"
        );
            
        return $result;
    }
    
    /**
     * Get actual XLM fee
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function xlmGetFee() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/xlm/fee";
        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get XLM Blockchain Information
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XlmLedger
     */
    public function xlmGetLastClosedLedger() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/xlm/info";
        /** @var \Tatum\Model\XlmLedger $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\XlmLedger"
        );
            
        return $result;
    }
    
    /**
     * Get XLM Blockchain Ledger by sequence
     *
     * @param string $sequence Sequence of the ledger.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XlmLedger
     */
    public function xlmGetLedger($sequence) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/xlm/ledger/{sequence}";
        /** @var \Tatum\Model\XlmLedger $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["sequence" => $sequence]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\XlmLedger"
        );
            
        return $result;
    }
    
    /**
     * Get XLM Blockchain Transactions in Ledger
     *
     * @param string $sequence Sequence of the ledger.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XlmTx[]
     */
    public function xlmGetLedgerTx($sequence) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/xlm/ledger/{sequence}/transaction";
        /** @var \Tatum\Model\XlmTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["sequence" => $sequence]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\XlmTx[]"
        );
            
        return $result;
    }
    
    /**
     * Get XLM Transaction by hash
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XlmTx
     */
    public function xlmGetTransaction($hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/xlm/transaction/{hash}";
        /** @var \Tatum\Model\XlmTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\XlmTx"
        );
            
        return $result;
    }
    
    /**
     * Generate XLM account
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XlmWallet
     */
    public function xlmWallet() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/xlm/account";
        /** @var \Tatum\Model\XlmWallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), self::PKG, "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\XlmWallet"
        );
            
        return $result;
    }
    
}
