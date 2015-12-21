<?php namespace Picqer\Financials\Exact;

class GoodsDelivery extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'EntryID';

    protected $goodDeliveryLines = [ ];

    protected $fillable = [
        'Division',
        'Created',
        'Document',
        'TrackingNumber',
        'Description',
        'Remarks',
        'DeliveryAccount',
        'DeliveryAccountCode',
        'DeliveryAccountName',
        'DeliveryAddress',
        'DeliveryContact',
        'DeliveryContactPersonFullName',
        'DeliveryDate',
        'DeliveryNumber',
        'ShippingMethod',
        'ShippingMethodCode',
        'ShippingMethodDescription',
        'GoodsDeliveryLines'
    ];


    public function addItem(array $array)
    {
        if ( ! isset( $this->attributes['GoodsDeliveryLines'] ) || $this->attributes['GoodsDeliveryLines'] == null) {
            $this->attributes['GoodsDeliveryLines'] = [ ];
        }
        if ( ! isset( $array['LineNumber'] )) {
            $array['LineNumber'] = count($this->attributes['GoodsDeliveryLines']) + 1;
        }
        $this->attributes['GoodsDeliveryLines'][] = $array;
    }


    protected $url = 'salesorder/GoodsDeliveries';

}