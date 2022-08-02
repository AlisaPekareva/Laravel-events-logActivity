<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller

{

    /**

     * Создание нового контроллера.

     *

     * @return void

     */

    public function __construct()

    {


    }

    /**

     * Вывод панели управления приложения.

     *

     * @return \Illuminate\Http\Response

     */

    public function myTestAddToLog()

    {

        \LogActivity::addToLog('differents events on this page .');

        dd('log insert successfully.');

    }


    /**

     * Вывод панели управления приложения.

     *

     * @return \Illuminate\Http\Response

     */

    public function logActivity()

    {

        $logs = \LogActivity::logActivityLists();

        return view('logActivity',compact('logs'));

    }

}
