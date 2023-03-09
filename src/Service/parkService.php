<?php 
namespace App\Service;

use Psr\Cache\CacheItemInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class parkService{
    function __construct(
        private HttpClientInterface $httpClient ,
        private CacheInterface $cache ,
    )
    {   
    }
    
    public function findAll():array{
        return $this->cache->get("mixes_data",function(CacheItemInterface $cacheItem){
            $cacheItem->expiresAfter(5);
            $response = $this->httpClient->request('GET','https://raw.githubusercontent.com/a21miguelsb/nationalParks/main/nationalParks.json');
            return $response->toArray();
        });
    }
}