<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Lastest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Nostrud irure id ad ex ipsum ullamco aliquip dolor qui laboris occaecat.
                 Enim ad ut tempor laborum ipsum duis reprehenderit voluptate ipsum est elit sit.
                 Excepteur exercitation laborum officia ex dolore consectetur mollit ipsum velit id ex velit ipsum voluptate. Eiusmod ullamco sunt nostrud anim aute veniam.
                 Incididunt excepteur quis ullamco magna commodo adipisicing sunt.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Nostrud irure id ad ex ipsum ullamco aliquip dolor qui laboris occaecat.
                 Enim ad ut tempor laborum ipsum duis reprehenderit voluptate ipsum est elit sit.
                 Excepteur exercitation laborum officia ex dolore consectetur mollit ipsum velit id ex velit ipsum voluptate.
                 Eiusmod ullamco sunt nostrud anim aute veniam. Incididunt excepteur quis ullamco magna commodo adipisicing sunt.'
            ]
        ]
    ]);
});

// Route::get('/hello', function(){
//     return response('<h1>Hello World</h1>', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });
// Podemos personalizar o header do response

// Route::get('/posts/{id}', function(int $id){
//     // dd($id);
//     // dd mata o programa nessa linha e serve para debugar
//     // ddd($id);
//     // ddd faz o mesmo que o dd mas exibe todo o codigo e a linha que parou
//     return response('Post '.$id);
// })->where('id', '[0-9]+');
// Podemos criar condicores para acesso as rotas, caso nao atenda retornara 404

// Route::get('/search', function(Request $request){
//     // dd($request);
//     return $request->name. ' '. $request->city;
// });

