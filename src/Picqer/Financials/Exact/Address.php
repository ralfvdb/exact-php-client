<?php namespace Picqer\Financials\Exact;

class Address extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountIsSupplier',
        'AccountName',
        'AddressLine1',
        'AddressLine2',
        'AddressLine3',
        'City',
        'Contact',
        'ContactName',
        'Country',
        'CountryName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Fax',
        'FreeBoolField_01',
        'FreeBoolField_02',
        'FreeBoolField_03',
        'FreeBoolField_04',
        'FreeBoolField_05',
        'FreeDateField_01',
        'FreeDateField_02',
        'FreeDateField_03',
        'FreeDateField_04',
        'FreeDateField_05',
        'FreeNumberField_01',
        'FreeNumberField_02',
        'FreeNumberField_03',
        'FreeNumberField_04',
        'FreeNumberField_05',
        'FreeTextField_01',
        'FreeTextField_02',
        'FreeTextField_03',
        'FreeTextField_04',
        'FreeTextField_05',
        'Mailbox',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NicNumber',
        'Notes',
        'Phone',
        'PhoneExtension',
        'Postcode',
        'State',
        'StateDescription',
        'Type',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription'
    ];

    protected $url = 'crm/Addresses';

}
