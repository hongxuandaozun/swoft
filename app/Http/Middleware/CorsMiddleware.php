<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2020/3/20
 * Time: 13:57
 */

namespace App\Http\Middleware;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Swoft\Bean\Annotation\Mapping\Bean;
use Swoft\Context\Context;
use Swoft\Http\Server\Contract\MiddlewareInterface;
/**
 * @Bean()
*/
class CorsMiddleware implements MiddlewareInterface
{
    /**
     * @param  ServerRequestInterface $request
     * @param  RequestHandlerInterface $handler
     * @return ResponseInterface
     * @inheritdoc
    */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {

        if($request->getMethod()=='OPTIONS'){
            $response = Context::mustGet()->getResponse();
        }else{
            $response = $handler->handle($request);
        }
        return $this->configResponse($response);
    }

    private function configResponse(ResponseInterface $response){
        return $response->withHeader('Access-Control-Allow-Origin', 'http://mysite')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    }
}
