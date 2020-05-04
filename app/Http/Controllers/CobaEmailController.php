<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mail\CobaEmail;
use Illuminate\Support\Facades\Mail;

class CobaEmailController extends Controller
{
	public function index(){

		Mail::to("testing@example.com")->send(new CobaEmail());

		return "Email berhasil dikirim";

	}

}
