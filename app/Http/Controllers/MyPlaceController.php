<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\UserMessages;

class MyPlaceController extends Controller
{
    public array $currents = [
            '/'=>'',
            '/contact'=>'',
            '/about'=>'',
            '/category'=>'',
            '/single'=>''
        ];

    public function messages()
    {
        $messages = UserMessages::all();
        $url = $_SERVER['REQUEST_URI'];
        foreach ($messages as $message)
        {
            dump($message->message);
        }
        dump($url);

    }

    public function isCurrent()
    {
        $url = $_SERVER['REQUEST_URI'];

        foreach ($this->currents as $key => $current){

           if($key == $url)
           {
               $this->currents[$key] = 'current';

           }
           else{
               $this->currents[$key] = '';
           }
        }
    }
    public function main()
    {
        $this->isCurrent();
        $categories = Category::all();
        return view('index',
            ['categories' => $categories,
            'currents'=> $this->currents
                ]);

    }

    public function category()
    {
        $this->isCurrent();
        $categories = Category::all();
        return view('category', ['categories' => $categories,
            'currents'=> $this->currents
        ]);

    }

    public function contact()
    {
        $this->isCurrent();
        $categories = Category::all();
        return view("contact", ['categories' => $categories,
            'currents'=> $this->currents
        ]);

    }

    public function single()
    {
        $this->isCurrent();
        $categories = Category::all();
        return view("single-audio", ['categories' => $categories,
            'currents'=> $this->currents
        ]);

    }

    public function about()
    {
        $this->isCurrent();
        $categories = Category::all();
        return view('about', ['categories' => $categories,
            'currents'=> $this->currents
        ]);

    }


}
