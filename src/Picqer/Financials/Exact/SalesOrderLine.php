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
        'ShopOrder',
        'ItemDescription',
        'DeliveryDate',
        'Quantity',
        'VATCode',
        'VATPercentage',
        'Notes',
        'LineNumber',

    ];

    protected $url = 'salesorder/SalesOrderLines';

}