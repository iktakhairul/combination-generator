<?php

namespace App\Http\Controllers;

use App\Http\Requests\Combination\CombinationRequest;
use Illuminate\View\View;

class CombinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */

    public function index()
    {
        $outputs = '';
        return view('combination');
    }

    /**
     * The function that return combination of string char by defined length.
     *
     *@param CombinationRequest $request
     *@return null
     */

    public function combination(CombinationRequest $request)
    {
        $outputs = $this->combinations($request['number'], str_split($request['string']));
        $oldValue['number'] = $request['number'];
        $oldValue['string'] = $request['string'];

        return view('combination', compact('outputs', 'oldValue'));
    }

    /**
     * The function that return combination of string char by defined length.
     *
     *@param $combination
     *@param $array
     * @return array
     */
    function combinations($combination, $array)
    {

        $array_len = count($array);
        $combination = intval($combination);
        if ($combination > $array_len)
        {
            $p = 0;
        }
        elseif ($array_len == $combination)
        {
            $p = 1;
        }
        else {
            if ($combination >= $array_len - $combination)
            {
                $l = $combination+1;
                for ($count = $l+1 ; $count <= $array_len ; $count++)
                    $l *= $count;
                $mount  = 1;
                for ($count = 2 ; $count <= $array_len-$combination ; $count++)
                    $mount *= $count;
            }
            else {
                $l = ($array_len-$combination) + 1;
                for ($count = $l+1 ; $count <= $array_len ; $count++)
                    $l *= $count;
                $mount  = 1;
                for ($count = 2 ; $count <= $combination ; $count++)
                    $mount *= $count;
            }
        }

        if(!isset($p)){ $p = $l/$mount ; }

        $outputs = array_fill(0, $p, array_fill(0, $combination, '') );

        $temporary = array();
        for ($count = 0 ; $count < $combination ; $count++)
            $temporary[$count] = $count;

        $outputs[0] = $temporary;
        for ($count = 1 ; $count < $p ; $count++)
        {
            if ($temporary[$combination-1] != count($array)-1)
            {
                $temporary[$combination-1]++;
            }
            else {
                $xx = -1;
                for ($count_j = $combination-2 ; $count_j >= 0 ; $count_j--)
                    if ($temporary[$count_j]+1 != $temporary[$count_j+1])
                    {
                        $xx = $count_j;
                        break;
                    }

                if ($xx == -1)
                    break;

                $temporary[$xx]++;
                for ($count_j = $xx+1 ; $count_j < $combination ; $count_j++)
                    $temporary[$count_j] = $temporary[$xx]+$count_j-$xx;
            }
            $outputs[$count] = $temporary;
        }
        for ($count = 0 ; $count < $p ; $count++) {
            for ($count_j = 0; $count_j < $combination; $count_j++) {
                $outputs[$count][$count_j] = $array[$outputs[$count][$count_j]];
            }
        }

        return $outputs;
    }
}
