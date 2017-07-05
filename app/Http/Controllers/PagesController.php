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

	public function transpadex()
	{
		return View('pages.transpadex');
	}

	public function lacura()
	{
		return View('pages.lacura');
	}

	public function pistones()
	{
		return View('pages.pistones');
	}

	public function sendmail()
	{
		Mail::send('emails.contacto-email', [], function($message)
		{
			$message->to('tony@blueterrier.mx', 'blue Terrier')->cc('berna@blueterrier.mx')->cc('diego@blueterrier.mx')->subject('Contacto desde blueterrier.mx');
		});
	}
}
