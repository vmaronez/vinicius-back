<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
class GitHubController extends Controller
{
	public function store()
	{
		$username = request()->username;
        $res = Http::get("https://api.github.com/users/$username");
		$data = $res->json();

        $this->saveJson($data);
	}

    private function saveJson($data)
    {
        $arquivo = 'data.json';
        $json = json_encode($data);
        $file = fopen(public_path($arquivo),'w');
        fwrite($file, $json);
        fclose($file);
    }
}
