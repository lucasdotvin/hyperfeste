<?php

declare(strict_types=1);

namespace App\Repository;

use App\Contract\SpeechRepository as Contract;
use App\Model\Speech;
use Ramsey\Uuid\Uuid;

class SpeechRepository implements Contract
{
    public function getSpeeches(): array
    {
        $speeches = Speech::query()
            ->get();

        return $speeches->toArray();
    }

    public function createSpeech(array $data): array
    {
        $data['id'] = Uuid::uuid4();

        $speech = Speech::create($data);

        return $speech->toArray();
    }

    public function deleteSpeech(string $id): void
    {
        Speech::query()
            ->where('id', $id)
            ->limit(1)
            ->delete();
    }
}
