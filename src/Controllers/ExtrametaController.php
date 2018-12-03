<?php

namespace Codiiv\Extrameta\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Codiiv\Extrameta\Models\Usermeta;
use Codiiv\Extrameta\Models\Postmeta;

class ExtrametaController extends Controller
{
  public function __construct()
  {
      // $this->middleware('auth');
  }

}
