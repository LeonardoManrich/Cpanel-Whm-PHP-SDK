<?php

namespace Leonardomanrich\Cpanelwhm\Modules\WHMCS;

use Leonardomanrich\Cpanelwhm\Requests\Request;

//TODO terminar

/**
 * @link https://developers.whmcs.com/api/api-index/
 * @name Orders
 */
class Orders extends Request
{
    /**
     * @link https://developers.whmcs.com/api-reference/acceptorder/
     *
     * @param int $orderid
     * @param int|null $serverid
     * @param string|null $serviceusername
     * @param string|null $servicepassword
     * @param string|null $registrar
     * @param bool $sendregistrar
     * @param bool $autosetup
     * @param bool $sendemail
     * @return Orders
     */
    public function acceptOrder(
        int     $orderid,
        ?int    $serverid,
        ?string $serviceusername,
        ?string $servicepassword,
        ?string $registrar,
        ?bool   $sendregistrar,
        ?bool   $autosetup,
        ?bool   $sendemail
    ): Orders
    {
        return $this->setMethod('POST')->setPath('')->addFormParams([
            'action' => 'AcceptOrder',
            'orderid' => $orderid,
            'serverid' => $serverid,
            'serviceusername' => $serviceusername,
            'servicepassword' => $servicepassword,
            'registrar' => $registrar,
            'sendregistrar' => $sendregistrar,
            'autosetup' => $autosetup,
            'sendemail' => $sendemail
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/addorder/
     *
     * @param int $clientid
     * @param string $paymentmethod
     * @param array|null $pid
     * @param array|null $domain
     * @param array|null $billingcycle
     * @param array|null $domaintype
     * @param array|null $regperiod
     * @param array|null $idnlanguage
     * @param array|null $eppcode
     * @param string|null $nameserver1
     * @param string|null $nameserver2
     * @param string|null $nameserver3
     * @param string|null $nameserver4
     * @param string|null $nameserver5
     * @param array|null $customfields
     * @param array|null $configoptions
     * @param array|null $priceoverride
     * @param string|null $promocode
     * @param bool|null $promooverride
     * @param int|null $affid
     * @param bool|null $noinvoice
     * @param bool|null $noinvoiceemail
     * @param bool|null $noemail
     * @param array|null $addons
     * @param array|null $hostname
     * @param array|null $ns1prefix
     * @param array|null $ns2prefix
     * @param array|null $rootpw
     * @param int|null $contactid
     * @param array|null $dnsmanagement
     * @param array|null $domainfields
     * @param array|null $emailforwarding
     * @param array|null $idprotection
     * @param array|null $domainpriceoverride
     * @param array|null $domainrenewoverride
     * @param array|null $domainrenewals
     * @param string|null $clientip
     * @param int|null $addonid
     * @param int|null $serviceid
     * @param array|null $addonids
     * @param array|null $serviceids
     * @return Orders
     */
    public function addOrder(
        int     $clientid,
        string  $paymentmethod,
        ?array  $pid,
        ?array  $domain,
        ?array  $billingcycle,
        ?array  $domaintype,
        ?array  $regperiod,
        ?array  $idnlanguage,
        ?array  $eppcode,
        ?string $nameserver1,
        ?string $nameserver2,
        ?string $nameserver3,
        ?string $nameserver4,
        ?string $nameserver5,
        ?array  $customfields,
        ?array  $configoptions,
        ?array  $priceoverride,
        ?string $promocode,
        ?bool   $promooverride,
        ?int    $affid,
        ?bool   $noinvoice,
        ?bool   $noinvoiceemail,
        ?bool   $noemail,
        ?array  $addons,
        ?array  $hostname,
        ?array  $ns1prefix,
        ?array  $ns2prefix,
        ?array  $rootpw,
        ?int    $contactid,
        ?array  $dnsmanagement,
        ?array  $domainfields,
        ?array  $emailforwarding,
        ?array  $idprotection,
        ?array  $domainpriceoverride,
        ?array  $domainrenewoverride,
        ?array  $domainrenewals,
        ?string $clientip,
        ?int    $addonid,
        ?int    $serviceid,
        ?array  $addonids,
        ?array  $serviceids
    ): Orders
    {
        return $this->setMethod('POST')->setPath('')->addFormParams([
            'action' => 'AddOrder',
            'clientid' => $clientid,
            'paymentmethod' => $paymentmethod,
            'pid' => $pid,
            'domain' => $domain,
            'billingcycle' => $billingcycle,
            'domaintype' => $domaintype,
            'regperiod' => $regperiod,
            'idnlanguage' => $idnlanguage,
            'eppcode' => $eppcode,
            'nameserver1' => $nameserver1,
            'nameserver2' => $nameserver2,
            'nameserver3' => $nameserver3,
            'nameserver4' => $nameserver4,
            'nameserver5' => $nameserver5,
            'customfields' => $customfields,
            'configoptions' => $configoptions,
            'priceoverride' => $priceoverride,
            'promocode' => $promocode,
            'promooverride' => $promooverride,
            'affid' => $affid,
            'noinvoice' => $noinvoice,
            'noinvoiceemail' => $noinvoiceemail,
            'noemail' => $noemail,
            'addons' => $addons,
            'hostname' => $hostname,
            'ns1prefix' => $ns1prefix,
            'ns2prefix' => $ns2prefix,
            'rootpw' => $rootpw,
            'contactid' => $contactid,
            'dnsmanagement' => $dnsmanagement,
            'domainfields' => $domainfields,
            'emailforwarding' => $emailforwarding,
            'idprotection' => $idprotection,
            'domainpriceoverride' => $domainpriceoverride,
            'domainrenewoverride' => $domainrenewoverride,
            'domainrenewals' => $domainrenewals,
            'clientip' => $clientip,
            'addonid' => $addonid,
            'serviceid' => $serviceid,
            'addonids' => $addonids,
            'serviceids' => $serviceids
        ]);
    }


    /**
     * @link https://developers.whmcs.com/api-reference/cancelorder/
     *
     * @param int $orderid
     * @param bool $cancelsub
     * @param bool $noemail
     * @return Orders
     */
    public function cancelOrder(
        int   $orderid,
        ?bool $cancelsub,
        ?bool $noemail
    ): Orders
    {
        return $this->setMethod('POST')->setPath('')->addFormParams([
            'action' => 'CancelOrder',
            'orderid' => $orderid,
            'cancelsub' => $cancelsub,
            'noemail' => $noemail
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deleteorder/
     *
     * @param int $orderid
     * @return Orders
     */
    public function deleteOrder(int $orderid): Orders
    {
        return $this->setMethod('POST')->setPath('')->addFormParams([
            'action' => 'DeleteOrder',
            'orderid' => $orderid
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/fraudorder/
     *
     * @param int $orderid
     * @param bool|null $cancelsub
     * @return Orders
     */
    public function fraudOrder(int $orderid, ?bool $cancelsub): Orders
    {
        return $this->setMethod('POST')->setPath('')->addFormParams([
            'action' => 'FraudOrder',
            'orderid' => $orderid,
            'cancelsub' => $cancelsub
        ]);
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getorders/
     *
     * @param int|null $limitstart
     * @param int|null $limitnum
     * @param int|null $id
     * @param int|null $userid
     * @param int|null $requestor_id
     * @param string|null $status
     * @return Orders
     */
    public function getOrders(
        ?int    $limitstart,
        ?int    $limitnum,
        ?int    $id,
        ?int    $userid,
        ?int    $requestor_id,
        ?string $status
    ): Orders
    {
        return $this->setMethod('POST')->setPath('')->addFormParams([
            'action' => 'GetOrders',
            'limitstart' => $limitstart,
            'limitnum' => $limitnum,
            'id' => $id,
            'userid' => $userid,
            'requestor_id' => $requestor_id,
            'status' => $status
        ]);
    }
}