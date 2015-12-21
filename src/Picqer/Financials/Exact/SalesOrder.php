<?php namespace Picqer\Financials\Exact;

class SalesOrder extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'OrderID';

    protected $saleOrderLines = [ ];

    protected $fillable = [
        'Division',
        'Currency',
        'Created',
        'Approved',
        'OrderDate',
        'OrderedBy',
        'OrderedByName',
        'OrderNumber',
        'Document',
        'YourRef',
        'PaymentCondition',
        'PaymentConditionDescription',
        'ExternalLinkDescription',
        'Description',
        'Remarks',
        'Status',
        'DeliverTo',
        'DeliverToName',
        'DeliveryDate',
        'DeliveryStatus',
        'DeliveryStatusDescription',
        'AmountDC',
        'AmountFC',
        'SalesOrderLines'
    ];


    public function addItem(array $array)
    {
        if ( ! isset( $this->attributes['SalesOrderLines'] ) || $this->attributes['SalesOrderLines'] == null) {
            $this->attributes['SalesOrderLines'] = [ ];
        }
        if ( ! isset( $array['LineNumber'] )) {
            $array['LineNumber'] = count($this->attributes['SalesOrderLines']) + 1;
        }
        $this->attributes['SalesOrderLines'][] = $array;
    }


    protected $url = 'salesorder/SalesOrders';

}