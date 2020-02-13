<?php
//test
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontroler extends Controller
{
    public function imiona(Request $data)
    {
        if($data->isMethod('post'))
        {
            if($data->ilosc > 0)
            {
                session(['ilosc'=>$data->ilosc]);
                return view('imiona');
            }
            else
            {
                return redirect('/');
            }
        }
        else if($data->isMethod('get'))
        {
            if(session('ilosc') > 0)
            {
                return view('imiona')->with('ilosc', session('ilosc'));
            }
            else
            {
                return redirect('/');
            }
        }
    }

    public function losuj($arr)
    {
        for($i=0; $i<count($arr); $i++)
        {
            $arr2[$i]=$arr[$i];
        }
        shuffle($arr2);
        $rdm=array_rand($arr2, count($arr));
        for($i=0; $i<count($arr); $i++)
        {
            $arr[$i] = $arr2[$rdm[$i]];
        }
        return $arr;
    }

    public function losowanie(Request $data)
    {
        for($i=0; $i<session('ilosc'); $i++)
        {
            $arr[0][$i] = $data->$i;
        }
        
        $arr[1]=$this->losuj($arr[0]);

        for($i=0; $i<count($arr[1]); $i++)
        {
            if($arr[0][$i] == $arr[1][$i])
            {
                $i=-1;
                $arr[1]=$this->losuj($arr[0]);
            }
        }
        return view('koniec')->with('arr', $arr[0])->with('arr2', $arr[1]);
    }
}
