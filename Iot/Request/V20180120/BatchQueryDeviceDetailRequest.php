<?php
/**
 * Created by zy@pupupula.com
 * User: Zhangyu
 * Date: 2019/8/2
 * Time: 4:42 PM
 */

namespace Octopusz\Iot\Request\V20180120;
use Octopusz\Iot\Core\RpcAcsRequest;

class BatchQueryDeviceDetailRequest extends RpcAcsRequest
{
    function __construct()
    {
        parent::__construct('Iot', '2019-08-02', 'BatchQueryDeviceDetail');
        $this->setMethod('POST');
    }

    private  $DeviceNames;

    private  $productKey;

    public function getDeviceName() {
        return $this->DeviceNames;
    }

    public function setDeviceNames($DeviceNames) {
        $this->DeviceNames = $DeviceNames;
        for ($i = 0; $i < count($DeviceNames); $i ++) {
            $this->queryParameters["DeviceName.".($i+1)] = $DeviceNames[$i];
        }
    }

    public function getProductKey() {
        return $this->productKey;
    }

    public function setProductKey($productKey) {
        $this->productKey = $productKey;
        $this->queryParameters["ProductKey"]=$productKey;
    }
}