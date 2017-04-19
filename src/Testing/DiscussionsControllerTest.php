<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace Testing;

use Controller\DiscussionsController;
use FastD\TestCase;

class DiscussionsControllerTest extends TestCase
{
    public function testDiscussions()
    {
        $request = $this->request('GET', '/api/discussions');
        $response = $this->handleRequest($request);
//        echo $response->getBody();
    }

    public function testDiscussion()
    {
        $request = $this->request('GET', '/api/discussions/1');
        $response = $this->handleRequest($request);
//        echo $response->getBody();
    }

    public function testAddDiscussion()
    {
        $request = $this->request('POST', '/api/discussions');
        $response = $this->handleRequest($request, [
            'title' => '测试标题',
            'content' => '回复'
        ]);
        $request = $this->request('GET', '/api/discussions');
        $response = $this->handleRequest($request);
//        echo $response->getBody();
    }

    public function testReplyDiscussion()
    {
        $request = $this->request('POST', '/api/discussions');
        $response = $this->handleRequest($request, [
            'reply_id' => 1,
            'content' => '回复'
        ]);
        $request = $this->request('GET', '/api/discussions/reply/1');
        $response = $this->handleRequest($request);
    }

    public function testUserDiscussion()
    {
        $request = $this->request('POST', '/api/discussions');
        $response = $this->handleRequest($request, [
            'user_id' => 1,
            'reply_id' => 1,
            'content' => '回复'
        ]);
        $request = $this->request('GET', '/api/discussions/user/1');
        $response = $this->handleRequest($request);
        echo $response;
    }

    public function testTargetDiscussion()
    {
        $request = $this->request('POST', '/api/discussions');
        $response = $this->handleRequest($request, [
            'target_id' => 1,
            'reply_id' => 1,
            'content' => '回复'
        ]);
        $request = $this->request('GET', '/api/discussions/target/1');
        $response = $this->handleRequest($request);
        echo $response;
    }
}
