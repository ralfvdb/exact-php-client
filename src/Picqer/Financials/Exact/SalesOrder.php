<?php namespace Picqer\Financials\Exact;

class SalesOrder extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'OrderID';

    protected $saleOrderLines = [ ];

    protected $fillable = [
        'OrderID',
        'AmountDC',
        'AmountFC',
        'ApprovalStatus',
        'ApprovalStatusDescription',
        'Approved',
        'Approver',
        'ApproverFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'DeliverTo',
        'DeliverToContactPerson',
        'DeliverToContactPersonFullName',
        'DeliverToName',
        'DeliveryDate',
        'DeliveryStatus',
        'DeliveryStatusDescription',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'InvoiceStatus',
        'InvoiceStatusDescription',
        'InvoiceTo',
        'InvoiceToContactPerson',
        'InvoiceToContactPersonFullName',
        'InvoiceToName',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderDate',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentReference',
        'Remarks',
        'SalesOrderLines',
        'Salesperson',
        'SalespersonFullName',
        'ShippingMethod',
        'ShippingMethodDescription',
        'Status',
        'StatusDescription',
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'WarehouseCode',
        'WarehouseDescription',
        'WarehouseID',
        'YourRef'
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