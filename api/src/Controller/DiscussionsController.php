<?php

namespace Controller;


use FastD\Http\Response;
use FastD\Http\ServerRequest;

class DiscussionsController
{
    public function create(ServerRequest $request)
    {
        $discussion = model('discussions')->create($request->getParsedBody());

        return json($discussion, Response::HTTP_CREATED);
    }

    public function patch(ServerRequest $request)
    {
        parse_str($request->getBody(), $data);

        $discussion = model('discussions')->patch($request->getAttribute('id'), $data);

        return json($discussion);
    }

    public function delete(ServerRequest $request)
    {
        model('discussions')->delete($request->getAttribute('id'));

        return json([], Response::HTTP_NO_CONTENT);
    }

    public function find(ServerRequest $request)
    {
        $discussion = model('discussions')->find($request->getAttribute('id'));

        return json($discussion);
    }

    public function select(ServerRequest $request)
    {
        $query = $request->getQueryParams();

        $discussions = model('discussions')->select(isset($query['p']) ? $query['p'] : 1);

        return json($discussions);
    }

    public function reply(ServerRequest $request)
    {
        $query = $request->getQueryParams();

        $id = $request->getAttribute('id');

        $discussions = model('discussions')->findReplyDiscussions(empty($id) ? 0 : $id, isset($query['p']) ? $query['p'] : 1);

        return json($discussions);
    }
}