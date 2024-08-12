<?php

namespace LinkORB\Buckaroo\SOAP;

class Body
{
	public $Currency;
	public $AmountDebit;
	public $AmountCredit;
	public $Invoice;
	public $Order;
	public $Description;
	public $ClientIP;
	public $CustomerName;
	public $ReturnURL;
	public $ReturnURLCancel;
	public $ReturnURLError;
	public $ReturnURLReject;
	public $OriginalTransactionKey;
	public $StartRecurrent;
	public $Services;
	public $CustomParameters;
	public $AdditionalParameters;
	public $RefundInfo;
	public $Transaction;
	public $ContinueOnIncomplete;
	public $PushURL;
	public $PushURLFailure;
}
