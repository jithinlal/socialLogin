<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Socialite;
use App\SocialAccountService;

class SocialAuthController extends Controller
{
	public function redirect($provider)
	{
		return Socialite::driver($provider)->redirect();
	}

	public function callback(SocialAccountService $service, $provider)
	{
		$user = $service->createOrGetUser(Socialite::driver($provider));
		auth()->login($user);

		return redirect()->to('/home');
	}
}
