<?php
// src/Service/QrCodeGenerator.php

namespace App\Service;

use Endroid\QrCode\QrCode;

class QrCodeGenerator
{
    public function generateQrCode(string $data): string
    {
               $qrCode = new \Endroid\QrCode\QrCode($data); // Correct namespace
        $qrCode->setSize(300);

        return $qrCode->getData();
    }
}
