<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TRADE\Models;

use AlibabaCloud\Tea\Model;

class QueryPriceRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    // 商品主数据编码
    /**
     * @var string
     */
    public $commodityCode;

    // 租户ID，和租户名称二选一必填
    /**
     * @var string
     */
    public $tenantId;

    // 8位租户名，和租户ID二选一必选
    /**
     * @var string
     */
    public $tenantName;

    // 商品数量，不传则默认1
    /**
     * @var int
     */
    public $quantity;

    // 业务发生时间，不传则默认当前时间
    /**
     * @var string
     */
    public $bizTime;

    // 订购周期，基于周期定价的商品必填
    /**
     * @var OrderDuration
     */
    public $orderDuration;

    // 商品规格列表，按实际商品定义的和价格相关的属性传入
    // 1.续费询价不需要传
    // 2.变配询价需要传入变化的规格属性
    /**
     * @var CommodityOrderAttribute[]
     */
    public $commodityOrderAttrs;

    // 币种，元：CNY，不传默认CNY
    /**
     * @var string
     */
    public $currency;

    // 优惠券ID
    /**
     * @var string
     */
    public $couponId;

    // 不填默认为NEW；NEW：新购；RENEW：续费；MODIFY：变配
    /**
     * @var string
     */
    public $orderType;

    // 实例ID，续费/变配场景必传
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'authToken'           => 'auth_token',
        'commodityCode'       => 'commodity_code',
        'tenantId'            => 'tenant_id',
        'tenantName'          => 'tenant_name',
        'quantity'            => 'quantity',
        'bizTime'             => 'biz_time',
        'orderDuration'       => 'order_duration',
        'commodityOrderAttrs' => 'commodity_order_attrs',
        'currency'            => 'currency',
        'couponId'            => 'coupon_id',
        'orderType'           => 'order_type',
        'instanceId'          => 'instance_id',
    ];

    public function validate()
    {
        Model::validateRequired('commodityCode', $this->commodityCode, true);
        Model::validatePattern('bizTime', $this->bizTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}([Z]|([\\.]\\d{1,9})?[\\+]\\d{2}[\\:]?\\d{2})');
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->commodityCode) {
            $res['commodity_code'] = $this->commodityCode;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['tenant_name'] = $this->tenantName;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->bizTime) {
            $res['biz_time'] = $this->bizTime;
        }
        if (null !== $this->orderDuration) {
            $res['order_duration'] = null !== $this->orderDuration ? $this->orderDuration->toMap() : null;
        }
        if (null !== $this->commodityOrderAttrs) {
            $res['commodity_order_attrs'] = [];
            if (null !== $this->commodityOrderAttrs && \is_array($this->commodityOrderAttrs)) {
                $n = 0;
                foreach ($this->commodityOrderAttrs as $item) {
                    $res['commodity_order_attrs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }
        if (null !== $this->couponId) {
            $res['coupon_id'] = $this->couponId;
        }
        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['commodity_code'])) {
            $model->commodityCode = $map['commodity_code'];
        }
        if (isset($map['tenant_id'])) {
            $model->tenantId = $map['tenant_id'];
        }
        if (isset($map['tenant_name'])) {
            $model->tenantName = $map['tenant_name'];
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['biz_time'])) {
            $model->bizTime = $map['biz_time'];
        }
        if (isset($map['order_duration'])) {
            $model->orderDuration = OrderDuration::fromMap($map['order_duration']);
        }
        if (isset($map['commodity_order_attrs'])) {
            if (!empty($map['commodity_order_attrs'])) {
                $model->commodityOrderAttrs = [];
                $n                          = 0;
                foreach ($map['commodity_order_attrs'] as $item) {
                    $model->commodityOrderAttrs[$n++] = null !== $item ? CommodityOrderAttribute::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }
        if (isset($map['coupon_id'])) {
            $model->couponId = $map['coupon_id'];
        }
        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }

        return $model;
    }
}
