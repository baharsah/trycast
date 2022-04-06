<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Throttle implements FilterInterface
{
    /**
     * This is a demo implementation of using the Throttler class
     * to implement rate limiting for your application.
     *
     * @param array|null $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $throttler = Services::throttler();

        // Restrict an IP address to no more than 1 request
        // per second across the entire site.

        // for Cloudflare, change getIPAddress to CloudflareRayID

        // For future ratelimiting, we are using AS Number ratelimiting for block entire blocks of IP Address
        if(getenv("CLOUDFLARE_BACKEND") === 1){
            if ($throttler->check(md5($request->getCFRayID()), 60, MINUTE) === false) {
            return Services::response()->setStatusCode(429);
            log_message('warning' , '{cfcode} Ratelimited' , ['cfcode' => request->getCFRayID()]);
                 }
                 
            }else{ 

            if ($throttler->check(md5($request->getIPAddress()), 60, MINUTE) === false) {
                return Services::response()->setStatusCode(429);
                log_message('warning' , '{ip} Ratelimited' , ['ip' => request->getIPAddress()]);
            }

        }
    }

    /**
     * We don't have anything to do here.
     *
     * @param array|null $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // ...
    }
}