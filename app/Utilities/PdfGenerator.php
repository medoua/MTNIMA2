<?php

namespace App\Utilities;

use TCPDF;

class PdfGenerator
{
    protected $pdf;

    public function __construct()
    {
        $this->pdf = new TCPDF();
        $this->pdf->setPrintHeader(false);
        $this->pdf->setPrintFooter(false);
    }

    public function generatePDF($view, $data = [])
    {
        $html = view($view, $data)->render();
        $this->pdf->AddPage();
        $this->pdf->writeHTML($html, true, false, true, false, '');
    }

    public function output($filename)
    {
        $this->pdf->Output($filename, 'I');
    }
}
