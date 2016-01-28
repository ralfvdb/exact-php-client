<?php namespace Picqer\Financials\Exact;

class GoodsDeliveryLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchNumbers',
        'Created',
        'Creator',
        'CreatorFullName',
        'DeliveryDate',
        'Description',
        'Division',
        'EntryID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'QuantityDelivered',
        'QuantityOrdered',
        'SalesOrderLineID',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'SerialNumbers',
        'StorageLocation',
        'TrackingNumber',
        'Unitcode'
    ];

    protected $url = 'salesorder/GoodsDeliveryLines';

}