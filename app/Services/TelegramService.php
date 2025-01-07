<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    protected $botToken;

    protected $chatId;

    // Ya no es necesario inyectar botToken y chatId
    public function __construct()
    {
        // Obtener los valores directamente de las variables de entorno
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
    }

    public function sendMessage($chatId, $message)
    {
        $response = Http::post("https://api.telegram.org/bot{$this->botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        return $response->json();
    }

    public function sendMessageToMultiple(array $chatIds, $message)
    {
        foreach ($chatIds as $chatId) {
            $this->sendMessageToChat($chatId, $message);
        }
    }

    private function sendMessageToChat($chatId, $message)
    {
        Http::post("https://api.telegram.org/bot{$this->botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);
    }
}
