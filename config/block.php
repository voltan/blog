<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */
return array(
    'recent-post' => array(
        'title' => _a('Recent posts'),
        'description' => _a('Recent posts list'),
        'render' => array('block', 'recentPost'),
        'template' => 'recent-post',
        'config' => array(
            'topic-id' => array(
                'title' => _a('Category'),
                'description' => '',
                'edit' => 'Module\News\Form\Element\Topic',
                'filter' => 'string',
                'value' => 0,
            ),
            'number' => array(
                'title' => _a('Number'),
                'description' => '',
                'edit' => 'text',
                'filter' => 'number_int',
                'value' => 5,
            ),
            'show-time' => array(
                'title' => _a('Show time'),
                'description' => '',
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 1,
            ),
            'show-topic' => array(
                'title' => _a('Show topic'),
                'description' => '',
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 1,
            ),
            'show-hits' => array(
                'title' => _a('Show hits'),
                'description' => '',
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 1,
            ),
            'show-summary' => array(
                'title' => _a('Show summary'),
                'description' => '',
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 1,
            ),
            'show-morelink' => array(
                'title' => _a('Show more link'),
                'description' => '',
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 0,
            ),
            'block-effect' => array(
                'title' => _a('Use block effects'),
                'description' => _a('Use block effects or set custom effect on theme'),
                'edit' => 'checkbox',
                'filter' => 'number_int',
                'value' => 1,
            ),
        ),
    ),
);