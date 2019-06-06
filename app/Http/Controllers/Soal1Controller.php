<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal1Controller extends Controller
{
    public function index(Request $request)
    {
      // mengambil data yang dikirimkan
      $search_query = urlencode($request->search_duplicate);

      //  syarat jika $search_query ada
      if (!empty($search_query)) {
        //mengubah data dari string ke array
        $arr = str_split($search_query);
        //melakukan looping data sebanyak nilai array
        foreach (array_count_values($arr) as $value => $x) {
          // syarat jika ada data pada array lebih dari satu maka di nyatakan sama(duplikasi)
          if ($x > 1) {
            $duplicate = $value;
            // berhenti jika sudah bertemu dengan dupikasi pertama
            break;
          }
        }

      }

      return view('test_jws.soal1', compact('duplicate'));

    }
}
