<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use App;

class BarcodeController extends Controller
{

    public function printBarcode() {
        abort_if(Gate::denies('print_barcodes'), 403);

        return view('product::barcode.index');
    }

}
