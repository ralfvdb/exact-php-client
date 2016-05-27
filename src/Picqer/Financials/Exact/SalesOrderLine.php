<?php namespace Picqer\Financials\Exact;

class SalesOrderLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'AmountDC',
        'AmountFC',
        'Description',
        'Division',
        'ID',
        'OrderID',
        'Item',
        'ItemCode',
        'ShopOrder',
        'ItemDescription',
        'DeliveryDate',
        'Quantity',
        'QuantityDelivered',
        'QuantityInvoiced',
        'VATCode',
        'VATPercentage',
        'VATAmount',
        'Notes',
        'LineNumber',
        'NetPrice',
        'UnitPrice'

    ];

    protected $url = 'salesorder/SalesOrderLines';

}