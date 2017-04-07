<?php

route()->group('/api', function () {
    // discussions
    route()->get('/discussions', 'DiscussionsController@select');
    route()->get('/discussions/{id}', 'DiscussionsController@find');
    route()->post('/discussions', 'DiscussionsController@create');
    route()->patch('/discussions/{id}', 'DiscussionsController@patch');
    route()->delete('/discussions/{id}', 'DiscussionsController@delete');
    route()->get('/discussions/reply/{id}', 'DiscussionsController@reply');
    route()->get('/discussions/user/{id}', 'UserDiscussionsController@select');
    route()->get('/discussions/target/{id}', 'TargetDiscussionsController@select');
});
