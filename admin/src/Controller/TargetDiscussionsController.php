<?php

namespace Admin\Controller;


use FastD\Http\Response;
use FastD\Http\ServerRequest;

class TargetDiscussionsController
{
    public function select(ServerRequest $request)
    {
        $discussions = model('discussions')->findTargetDiscussions($request->getAttribute('id'));

        return json($discussions);
    }
}