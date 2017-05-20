<?php

route()->group('/api', function () {
    // discussions
    route()->get('/discussions', 'DiscussionsController@select');
    route()->get('/discussions/{id}', 'DiscussionsController@find');
    route()->post('/discussions', 'DiscussionsController@create');
    route()->patch('/discussions/{id}', 'DiscussionsController@patch');
    route()->delete('/discussions/{id}', 'DiscussionsController@delete');
    route()->get('/discussions/{id}/reply', 'DiscussionsController@reply');
    route()->get('/users/{id}/discussions', 'UserDiscussionsController@select');
    route()->get('/target/{id}/discussions', 'TargetDiscussionsController@select');
});
