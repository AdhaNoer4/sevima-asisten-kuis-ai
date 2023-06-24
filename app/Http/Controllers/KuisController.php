<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class KuisController extends Controller
{
    public function index()
    {
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'PHP is',
            'max_tokens' => 20,
            'temperature' => 0,
            'n' => 1
        ]);
        echo $result['choices'][0]['text'];
    }
}
