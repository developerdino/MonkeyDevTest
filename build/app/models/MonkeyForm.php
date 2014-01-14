<?php namespace Monkey\Models;

class MonkeyForm extends BaseModel {

    protected $table = 'monkeyform';

    protected $fillable = array(
    	'firstName',
		'lastName',
		'email',
		'phone',
		'address',
		'suburb',
		'state',
		'postcode',
		'enquiryType',
		'productName',
		'productSize',
		'useByDate',
		'batchCode',
		'enquiry',
    );

    protected static $rules = array(
        'firstName'   => 'required',
		'lastName'    => 'required',
		'email'       => 'required|email',
		'phone'       => 'required',
		'address'     => 'required',
		'suburb'      => 'required',
		'state'       => 'required',
		'postcode'    => 'required',
		'enquiryType' => 'required',
		'productName' => 'required_if:enquiryType,"Product complaint"',
		'productSize' => 'required_if:enquiryType,"Product complaint"',
		'useByDate'   => 'required_if:enquiryType,"Product complaint"',
		'batchCode'   => 'required_if:enquiryType,"Product complaint"',
    );

}