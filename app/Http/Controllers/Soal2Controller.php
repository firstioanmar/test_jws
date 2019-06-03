<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal2Controller extends Controller
{
    public function index(Request $request)
    {
      // mengambil data yang dikirmkan
      $sort_query = $request->sort_query;
      // syarat jika $sort_query ada
      if (!empty($sort_query)) {
        // syarat jika data sort berupa 1 maka akan di urutkan secara ascending
        if ($request->sort == '1') {
          sort($sort_query);
        }
        // jika tidak maka akan di urutkan secara Descending
        else {
          rsort($sort_query);
        }

        // menghitung jumlah data
        $arr_len = count($sort_query);
      }

      return view('test_jws.soal2', compact('sort_query', 'arr_len'));
    }
}
