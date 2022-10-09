<?php

declare(strict_types=1);

namespace App\Controller;

use App\Contract\SpeechRepository;
use App\Request\CreateSpeechRequest;
use Hyperf\Di\Annotation\Inject;
use Psr\Http\Message\ResponseInterface;

class SpeechController extends AbstractController
{
    #[Inject]
    protected SpeechRepository $speechRepository;

    public function index(): ResponseInterface
    {
        $speeches = $this->speechRepository->getSpeeches();

        return $this->response->json($speeches);
    }

    public function store(CreateSpeechRequest $request): ResponseInterface
    {
        $speech = $this->speechRepository->createSpeech($request->validated());

        return $this->response->json($speech);
    }

    public function destroy(string $id): ResponseInterface
    {
        $this->speechRepository->deleteSpeech($id);

        return $this->response->json(['message' => 'Speech deleted.']);
    }
}
