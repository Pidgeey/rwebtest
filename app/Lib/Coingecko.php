<?php

namespace App\Lib;

use Illuminate\Support\Facades\Http;

/**
 * Coingecko librairie
 */
class Coingecko
{
    private static string $baseUrl = "https://api.coingecko.com/api/v3";

    const METHOD_GET = 'GET';

    /**
     * Vérifie si le service est up
     *
     * @return string
     */
    public static function ping(): array
    {
        $route = '/ping';
        return self::sendRequest($route);
    }

    /**
     * Récupère la liste du marché des coins
     *
     * @param array $parameters
     * @return array
     */
    public static function coinMarket(array $parameters = []): array
    {
        $parameters = [
            'vs_currency' => $parameters['vs_currency'] ?? 'eur',
            'ids' => $parameters['ids'] ?? null,
            'category' => $parameters['category'] ?? null,
            'order' => $parameters['order'] ?? 'market_cap_desc',
            'per_page' => $parameters['per_page'] ?? 100,
            'page' => $parameters['page'] ?? 1,
            'sparkline' => $parameters['sparkline'] ?? false,
            'price_change_percentage' => $parameters['price_change_percentage'] ?? null,
        ];

        $route = "/coins/markets?vs_currency={$parameters['vs_currency']}";

        return self::sendRequest(self::setParamtersToUrl($route, $parameters));
    }

    /**
     * Récupère les données d'un coin selon son identifiant
     *
     * @param string $id
     * @return array
     */
    public static function coin(string $id): array
    {
        $route = "/coins/{$id}";

        return self::sendRequest($route);
    }

    /**
     * Query search
     *
     * @param string $query
     * @return array
     */
    public static function search(string $query): array
    {
        $route = "/search?query={$query}";

        return self::sendRequest($route);
    }

    /**
     * Créer une requête vers le service
     *
     * @param string $route
     * @param string $method
     * @return array
     *
     * @note: Je fais le choix d'être évolutif dans cette méthode, même si le test ne me demandera
     * d'utiliser que des routes utilisant la méthode GET.
     */
    private static function sendRequest(string $route, string $method = self::METHOD_GET): array
    {
        $fullUrl = self::$baseUrl.$route;

        $response = match ($method) {
            self::METHOD_GET => Http::get($fullUrl),
        };

        return $response->json();
    }

    /**
     * Set les paramètres sur une url en prévision d'une requête
     *
     * @param string $url
     * @param array $parameters
     * @return string
     */
    private static function setParamtersToUrl(string $url, array $parameters): string
    {
        foreach ($parameters as $parameter => $value) {
            if ($value) {
                $url = sprintf("%s&%s=%s", $url, $parameter, $value);
            }
        }

        return $url;
    }
}
