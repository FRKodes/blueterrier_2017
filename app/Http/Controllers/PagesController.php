<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		return View('pages.index');
	}

	public function index_en()
	{
		return View('pages.en.index');
	}

	public function legarraf()
	{
		return View('pages.legarraf');
	}

	public function legarraf_en()
	{
		return View('pages.legarraf_en');
	}

	public function marsala()
	{
		return View('pages.marsala');
	}

	public function marsala_en()
	{
		return View('pages.marsala_en');
	}

	public function boreal()
	{
		return View('pages.boreal');
	}

	public function boreal_en()
	{
		return View('pages.boreal_en');
	}

	public function transpadex()
	{
		return View('pages.transpadex');
	}

	public function transpadex_en()
	{
		return View('pages.transpadex_en');
	}

	public function lacura()
	{
		return View('pages.lacura');
	}

	public function pistones()
	{
		return View('pages.pistones');
	}

	public function pistones_en()
	{
		return View('pages.pistones_en');
	}

	public function wys()
	{
		return View('pages.wys');
	}

	public function wys_en()
	{
		return View('pages.wys_en');
	}

	public function gyb()
	{
		return View('pages.gyb');
	}

	public function gyb_en()
	{
		return View('pages.gyb_en');
	}

	public function selcon()
	{
		return View('pages.selcon');
	}

	public function selcon_en()
	{
		return View('pages.selcon_en');
	}

	public function codimuba()
	{
		return View('pages.codimuba');
	}

	public function codimuba_en()
	{
		return View('pages.codimuba_en');
	}

	public function loscamachos()
	{
		return View('pages.loscamachos');
	}


	public function loscamachos_en()
	{
		return View('pages.loscamachos_en');
	}
	
	public function mmm()
	{
		return View('pages.mmm');
	}

	public function vely()
	{
		return View('pages.vely');
	}

	public function estrategias()
	{
		return View('pages.estrategias');
	}

	public function brian_eno()
	{
		return View('pages.brian_eno');
	}

	public function arte_diseno()
	{
		return View('pages.arte_diseno');
	}

	public function redes_sociales_crecimiento()
	{
		return View('pages.redes_sociales_crecimiento');
	}

	public function procrastinacion()
	{
		return View('pages.procrastinacion');
	}

	public function sendmail()
	{
		Mail::send('emails.contacto-email', [], function($message)
		{
			$message->to('tony@blueterrier.mx', 'blue Terrier')->cc('diego@blueterrier.mx')->subject('Contacto desde blueterrier.mx');
		});
	}
}
