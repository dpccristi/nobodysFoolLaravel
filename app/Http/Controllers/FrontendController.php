<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $page = view('homepage.index');
        return view("layout", [
            'content' => $page
        ]);
    }

    public function product()
    {

        $products = [];
        array_push($products, [
            'img' => 'https://t7.rbxcdn.com/8e3aa99c9184ffe248a4d973d499d0d6',
            'title' => 'Mac',
            'description' => 'The same can even be said for the people who love to work at
Apple. Even employees cant put it into words.',

        ]);
        array_push($products, [
            'img' => 'https://t7.rbxcdn.com/a0698f9c542c084978e9cf5a73ab91d6',
            'title' => 'Dell',
            'description' => 'This is beyond rational. This is a belief. It\'s
no accident that the culture at Apple is often described as a cult.',

        ]);
        array_push($products, [
            'img' => '/images/imagebot7.png',
            'title' => 'Honda ',
            'description' => 'People with Apple laptop computers,
for example, love opening them up while sitting in an airport.
 ',

        ]);
        array_push($products, [
            'img' => '/images/2006484.png',
            'title' => 'Ferrari',
            'description' => 'Products with a clear sense of WHY give people a way to tell the
outside world who they are and what they believe.  ',

        ]);

        $page = view('products.index', [
            'elements' => $products
        ]);

        return view("layout", [
            'content' => $page
        ]);
    }

    public function redirect()
    {
        $path = '/';

        return response()->redirectTo($path);
    }

    public function location()
    {

        $coordinates = [
            'lat' => 46.3787373,
            'lng' => 26.9583889

        ];

        $page = view('l', [
            'coordinates' => $coordinates
        ]);

        return view("layout", [
            'content' => $page,


        ]);


    }


}
