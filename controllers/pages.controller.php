<?php
/**
 * Created by PhpStorm.
 * User: Infinity
 * Date: 12/26/2016
 * Time: 6:54 AM
 */

class PagesController extends Controller{

    public function index()
    {
        $this->data['test_content'] = "Here will be the list";
    }

    //the functions used here will be the parameters of the controller
    // like site.com/pages/view, and the index will be simply site.com/pages
    public function view()
    {
        $params = App::getRouter()->getParams();
        if(isset($params[0]))
        {
            $alias = strtolower($params[0]);

            $this->data['content'] = "Here will be the pages with '$alias' alias";
        }
    }


}