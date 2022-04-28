<?php

$arr = [
    'name' => 'ahmet',
    'surname' => 'citak',
    'age' => 27,
    'hobbies' => [
        'software',
        'basketball',
        'music',
        'jobs' => [
            'uber',
            'delivery'
        ]
    ]
];


function recursiveExample($cur_key,$arr)
{
    foreach($arr as $key => $val)
    {
        if($cur_key == $key)
        {
            return $val;
        }
        if(is_array($val))
        {
            return recursiveExample($cur_key,$val);
        }
    }
}

print_r(recursiveExample('jobs',$arr));


?>