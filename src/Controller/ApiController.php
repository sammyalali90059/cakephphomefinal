<?php

namespace App\Controller;

use App\Model\Table\PetsTable;
use Cake\Http\Response;
use Cake\Http\ServerRequest;

class ApiController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }


}  