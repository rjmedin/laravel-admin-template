<?php

namespace App\Services;

use GuzzleHttp\Client;

class DiscordService
{
    protected $webhookUrl;

    public function __construct()
    {
        $this->webhookUrl = config('services.discord.webhook_url');
    }

    public function sendMessage(string $title, string $message)
    {
        $client = new Client;

        $payload = [
            'embeds' => [
                [
                    'title' => $title,
                    'description' => $message,
                    'color' => hexdec('FF0000'),
                ],
            ],
        ];

        $client->post($this->webhookUrl, [
            'json' => $payload,
        ]);
    }
}
