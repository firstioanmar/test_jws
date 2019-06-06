<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal2Controller extends Controller
{
    public function index(Request $request)
    {
      // mengambil data yang dikirimkan
      $sort_query = $request->sort_query;

      if (!empty($sort_query)) {
        // menghitun=g jumlah data
        $arr_len = count($sort_query);

        for ($i=0; $i < $arr_len - 1; $i++) {
          for ($j=$i+1; $j < $arr_len; $j++) {
            $x = $i;
            //cek jika 1 maka ascending
            if ($request->sort == 1) {
              if ($sort_query[$x]>$sort_query[$j]) {
                $x = $j;
              }
            }
            else {
              if ($sort_query[$x]<$sort_query[$j]) {
                $x = $j;
              }
            }
            $y = $sort_query[$x];
            $sort_query[$x] = $sort_query[$i];
            $sort_query[$i] = $y;
          }
        }
      }

      return view('test_jws.soal2', compact('sort_query', 'arr_len'));
    }

    // public function bubble_sort(Request $request)
    // {
    //   // mengambil data yang dikirimkan
    //   $sort_query = $request->sort_query;
    //
    //   if (!empty($sort_query)) {
    //     // menghitun=g jumlah data
    //     $arr_len = count($sort_query);
    //
    //     for ($i=0; $i < $arr_len - 1; $i++) {
    //       for ($j=$i+1; $j < $arr_len; $j++) {
    //         $x = $i;
    //         //cek
    //         if ($request->sort == 1) {
    //           if ($sort_query[$x]>$sort_query[$j]) {
    //             $x = $j;
    //           }
    //         }
    //         else {
    //           if ($sort_query[$x]>$sort_query[$j]) {
    //             $x = $j;
    //           }
    //         }
    //         $y = $sort_query[$x];
    //         $sort_query[$x] = $sort_query[$i];
    //         $sort_query[$i] = $y;
    //       }
    //     }
    //   }
    //
    //   return redirect('/soal2', compact('sort_query', 'arr_len'));
    // }
}
