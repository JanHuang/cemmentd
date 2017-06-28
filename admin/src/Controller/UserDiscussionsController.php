<?php

namespace Admin\Controller;


use FastD\Http\Response;
use FastD\Http\ServerRequest;

class UserDiscussionsController
{
    public function select(ServerRequest $request)
    {
        $id = $request->getAttribute('id');

        $discussions = model('discussions')->findUserDiscussions(empty($id) ? 0 : $id);

        return json($discussions);
    }
}