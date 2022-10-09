<?php

namespace App\Contract;

interface SpeechRepository
{
     public function getSpeeches(): array;

     public function createSpeech(array $data): array;

     public function deleteSpeech(string $id): void;
}
