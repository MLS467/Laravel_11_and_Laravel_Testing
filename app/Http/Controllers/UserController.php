<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController
{
    public function queries(Request $req)
    {
        // Example of using the request object

        $result = DB::table('users')->get();

        // $result = DB::table('users')
        //     ->where('id', '2')
        //     ->get();

        // $result = DB::table('users')->first();


        // $result = DB::table('users')->insert([
        //     'name' => 'batata',
        //     'email' => 'batata@potato.com',
        //     'password' => 'password'
        // ]);

        // $updated = DB::table('users')
        //     ->where('id', '2')
        //     ->update(['name' => 'Bolado']);

        // if ($updated) {
        //     echo "Atualizado com sucesso!";
        //     return response()->json($result);
        // }

        // $delete = DB::table('users')
        //     ->where('id', '2')
        //     ->delete();

        // if ($delete)
        //     return response()->json($result);

        return response()->json($result);

        // return "erro ao deletar!";
    }
}