<?php
namespace Test\Framework;


use Framework\App;
use GuzzleHttp\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;

class TestApp extends TestCase {

    public function testBlog(){
        $app=new App();
        $request =new ServerRequest('GET','/blog');
        $response=$app->run($request);
        $this->assertContains('<h1>Bonjour ::Blog</h1>',(string)$response->getBody());
        $this->assertEquals(200,$response->getStatusCode());
    }
}