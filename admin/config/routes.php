<?php

route()->group('/api', function () {
    // discussions
    route()->get('/discussions', 'Admin\\Controller\\DiscussionsController@select');
    route()->get('/discussions/{id}', 'Admin\\Controller\\DiscussionsController@find');
    route()->post('/discussions', 'Admin\\Controller\\DiscussionsController@create');
    route()->patch('/discussions/{id}', 'Admin\\Controller\\DiscussionsController@patch');
    route()->delete('/discussions/{id}', 'Admin\\Controller\\DiscussionsController@delete');
    route()->get('/discussions/{id}/reply', 'Admin\\Controller\\DiscussionsController@reply');
    route()->get('/users/{id}/discussions', 'Admin\\Controller\\UserDiscussionsController@select');
    route()->get('/target/{id}/discussions', 'Admin\\Controller\\TargetDiscussionsController@select');
});
