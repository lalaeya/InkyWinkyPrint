<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;

class EmailsController extends AppController
{
    public function sendToCustomer($packageId)
    {
        $this->loadModel('Packages');
        $package = $this->Packages->get($packageId, [
            'contain' => ['Customers']
        ]);

        $customerEmail = $package->cus->cus_email;
        $customerName = $package->cus->cus_fname;

        // Configure Gmail Transport (kalau belum buat di app.php, boleh hardcode sini juga)
        TransportFactory::setConfig('gmail', [
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'username' => 'yourcompanyemail@gmail.com', // Ganti dengan email company
            'password' => 'yourappspecificpassword',    // Guna app password dari Gmail
            'className' => 'Smtp',
            'tls' => true,
        ]);

        $mailer = new Mailer('default');
        $mailer->setTransport('gmail')
            ->setFrom(['yourcompanyemail@gmail.com' => 'InkyWinky'])
            ->setTo($customerEmail)
            ->setSubject('Order Confirmation from InkyWinky')
            ->setEmailFormat('html')
            ->setViewVars([
                'name' => $customerName,
                'package' => $package
            ])
            ->viewBuilder()
            ->setTemplate('order_confirmation'); // templates/email/html/order_confirmation.php

        if ($mailer->deliver()) {
            $this->Flash->success('Email sent successfully to customer.');
        } else {
            $this->Flash->error('Failed to send email.');
        }

        return $this->redirect($this->referer());
    }
}
