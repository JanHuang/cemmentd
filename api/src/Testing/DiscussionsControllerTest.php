<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace Testing;

class DiscussionsControllerTest extends ApiTestCase
{
    public function testDiscussions()
    {
        $request = $this->request('GET', '/api/discussions');
        $response = $this->handleRequest($request);
        $json = json_decode($response->getBody(), true);
        $this->assertCount(1, $json['data']);
    }

    public function testDiscussion()
    {
        $request = $this->request('GET', '/api/discussions/1');
        $response = $this->handleRequest($request);
        $json = json_decode($response->getBody(), true);
        $this->assertEquals(1, $json['id']);
    }

    public function testAddDiscussion()
    {
        $request = $this->request('POST', '/api/discussions');
        $response = $this->handleRequest($request, [
            'title' => '测试标题',
            'content' => '回复'
        ]);
        $this->equalsStatus($response, 201);
        $request = $this->request('GET', '/api/discussions');
        $response = $this->handleRequest($request);
        $json = json_decode($response->getBody(), true);
        $this->assertCount(2, $json['data']);
    }

    public function testReplyDiscussion()
    {
        $request = $this->request('POST', '/api/discussions');
        $response = $this->handleRequest($request, [
            'reply_id' => 1,
            'content' => '回复'
        ]);
        $json = json_decode($response->getBody(), true);
        $this->assertEquals(1, $json['reply_id']);
        $this->assertEquals(3, $json['id']);
        $request = $this->request('GET', '/api/discussions/1/reply');
        $response = $this->handleRequest($request);
        $json = json_decode($response->getBody(), true);
        $this->assertCount(2, $json['data']);
    }

    public function testUserDiscussion()
    {
        $request = $this->request('POST', '/api/discussions');
        $response = $this->handleRequest($request, [
            'user_id' => 1,
            'reply_id' => 1,
            'content' => '回复'
        ]);
        $this->equalsStatus($response, 201);
        $request = $this->request('GET', '/api/users/1/discussions');
        $response = $this->handleRequest($request);
        $json = json_decode($response->getBody(), true);
        $this->assertCount(2, $json['data']);
    }

    public function testTargetDiscussion()
    {
        $request = $this->request('POST', '/api/discussions');
        $response = $this->handleRequest($request, [
            'target_id' => 1,
            'reply_id' => 1,
            'content' => '回复'
        ]);
        $this->equalsStatus($response, 201);
        $request = $this->request('GET', '/api/target/1/discussions');
        $response = $this->handleRequest($request);
        $json = json_decode($response->getBody(), true);
        $this->assertCount(1, $json['data']);
    }
}
