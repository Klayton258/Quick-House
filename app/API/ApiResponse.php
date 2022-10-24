<?php

namespace App\API;

use DateTime;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Psy\Formatter\Formatter;

// use PDF;

class ApiResponse
{
    public static function responseMessage($message, $code, $data = '')
    {
        return
            [
                'msg' => $message,
                'code' => $code,
                'data' => $data
            ];
    }

    public function stockreminder()
    {


        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHtml($this->products_pdf());

        return $pdf->stream();
    }

    function products_pdf()
    {
        $dateTime = new DateTime();

        $products =  DB::table('products')
            ->where('quantity', '<', 20)
            ->get();

        $output =  ' <!DOCTYPE html>
                    <html>
                        <head>
                    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
                </style>
        </head>
        <body>

        <h2>STOCK ALERT</h2> <br>
        <h3>date: </h3> '. $dateTime.'
        <table>
        <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        </tr>';

        foreach ($products as $product) {

            $output .= '  <tr>
            <td>' . $product->product_name . '</td>
            <td> ' . $product->price . '</td>
            <td style="color: red">' . $product->quantity . '</td>
            </tr>';
        }
        $output .= '
        </table>

        </body>
        </html>';

        return $output;
    }
}
