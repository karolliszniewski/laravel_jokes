<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Joke;

class FetchJokes extends Command
{
    protected $signature = 'jokes:fetch';
    protected $description = 'Fetch jokes from the API and store them in the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'User-Agent' => 'My Laravel App (https://github.com/karolliszniewski/laravel_jokes)'
        ])->get('https://icanhazdadjoke.com/search', [
            'limit' => 100
        ]);

        if ($response->successful()) {
            $data = $response->json();

            $this->info('API Response: ' . print_r($data, true));

            if (isset($data['results']) && is_array($data['results'])) {
                foreach ($data['results'] as $joke) {
                    if (isset($joke['joke'])) {
                        Joke::updateOrCreate(
                            ['joke' => $joke['joke']],
                            ['joke' => $joke['joke']]
                        );
                    }
                }

                $this->info('Jokes fetched and stored successfully.');
            } else {
                $this->error('The "results" key was not found in the API response or it is not an array.');
            }
        } else {
            $this->error('Failed to fetch jokes. HTTP status: ' . $response->status());
            $this->error('Response Body: ' . $response->body());
        }
    }
}
