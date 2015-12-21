<?php namespace Picqer\Financials\Exact;

class GoodsDeliveryLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'DeliveryDate',
        'Description',
        'Division',
        'ID',
        'EntryID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'SalesOrderLineID',
        'Unitcode',
        'QuantityDelivered',
        'QuantityOrdered',
        'Notes',
        'LineNumber',
        'TrackingNumber',
        'SerialNumbers',

    ];

    protected $url = 'salesorder/GoodsDeliveryLines';

}