<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return View('pages.index');
    }

    public function legarraf()
    {
    	return View('pages.legarraf');
    }

    public function marsala()
    {
    	return View('pages.marsala');
    }

    public function boreal()
    {
    	return View('pages.boreal');
    }

    public function grillpoint()
    {
    	return View('pages.grillpoint');
    }

    public function lacura()
    {
    	return View('pages.lacura');
    }

    public function pistones()
    {
    	return View('pages.pistones');
    }
}