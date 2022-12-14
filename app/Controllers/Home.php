<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('kepul');
	}

	public function about()
	{
		return view('about');
	}

	public function barang()
	{
		
		$data['semua'] = [
			[
				'nama1' => 'Cup Plastik',
				'harga' => 'Rp. 1.000 - 2.000/Kg'
			],
			[
				'nama' => 'Cup Plastik',
				'harga' => 'Rp. 1.000 - 2.000/Kg'
			],
			[
				'nama' => 'Cup Plastik',
				'harga' => 'Rp. 1.000 - 2.000/Kg'
			]
		];
		return view('barang', $data);
		
	}
	public function tentang()
	{
		return view('tentang');
	}
	public function trolley()
	{
		return view('trolley');
	}
	public function login()
	{
		return view('login');
	}
	public function signup()
	{
		return view('signup');
	}
}
