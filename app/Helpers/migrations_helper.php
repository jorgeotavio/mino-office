<?php

if (!function_exists('generateTimestamps')) {
    function generateTimestamps()
    {
        $timestamps = [
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ]
        ];
        return $timestamps;
    }
}
