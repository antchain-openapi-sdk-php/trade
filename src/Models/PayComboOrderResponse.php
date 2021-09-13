<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TRADE\Models;

use AlibabaCloud\Tea\Model;

class PayComboOrderResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 页面支付地址
    /**
     * @var string
     */
    public $payUrl;

    // 支付订单号
    /**
     * @var string
     */
    public $payOrderId;

    // 支付状态，
    // SUCCESS：已支付;
    // INIT：未支付;
    // PROCESS：支付中;
    // CANCEL：取消支付;
    /**
     * @var string
     */
    public $payStatus;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'payUrl'     => 'pay_url',
        'payOrderId' => 'pay_order_id',
        'payStatus'  => 'pay_status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->payUrl) {
            $res['pay_url'] = $this->payUrl;
        }
        if (null !== $this->payOrderId) {
            $res['pay_order_id'] = $this->payOrderId;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PayComboOrderResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['pay_url'])) {
            $model->payUrl = $map['pay_url'];
        }
        if (isset($map['pay_order_id'])) {
            $model->payOrderId = $map['pay_order_id'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        return $model;
    }
}
