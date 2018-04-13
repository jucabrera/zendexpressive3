<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class PhpCommunitiesCreateHandler implements RequestHandlerInterface
{
    /**
     * {@inheritDoc}
     */
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        $dbname = "php_communities";
        $dbuser = "talk";
        $dbpass = "123456";
        $host = "localhost";
        $db = new \PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass);
        
         $data = json_decode($request->getBody()->getContents(),true);
        
        $community = $data['name'];
        
 $stmt = $db->prepare('insert into php_communities (name) values (:name)');
    $stmt->bindParam(':name',$community);   
    $stmt->execute();
    $data['id'] = $db->lastInsertId();    
    
        return new JsonResponse(['message'=>"ok", 'data'=>$data]);
    }
}
