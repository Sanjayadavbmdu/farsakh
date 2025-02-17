<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateContent
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Check if the response is HTML
        if (strpos($response->headers->get('Content-Type'), 'text/html') !== false) {
            $targetLang = $request->session()->get('locale', 'es'); // Default to Spanish

            // Translate the content
            $translator = new GoogleTranslate();
            $translator->setTarget($targetLang);

            $content = $response->getContent();

            try {
                $translatedContent = $translator->translate($content);
                $response->setContent($translatedContent);
            } catch (\Exception $e) {
                // Handle translation errors (log or ignore)
                Log::error('Translation error: ' . $e->getMessage());
            }
        }

        return $response;
    }
}