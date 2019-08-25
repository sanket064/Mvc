<?php

Class Invoices
{
  public static function getoc($invoicenumber)
  {
    $invoicenumber = isset($_GET['invoiceNumber']);

    $invoice = mysqli_fetch_assoc(mysqli_query(Db::connect(), "SELECT * FROM invoices WHERE nInvoiceNumber='".$invoicenumber."'"));

    return $invoice;
  }

  public static function show($invoicenumber)
  {
    $invoicenumber = $_GET['invoiceNumber'];

    $orderedItems = mysqli_query(Db::connect(), "SELECT * FROM invoices_products WHERE  nInvoiceNumber='".$invoicenumber."'");

    return $orderedItems;
  }
}

