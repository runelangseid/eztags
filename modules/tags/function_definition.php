<?php

$FunctionList = array();

$FunctionList['tag'] = array( 'name'        => 'tag',
                              'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                      'method' => 'fetchTag' ),
                              'parameters'  => array( array( 'name'     => 'tag_id',
                                                             'type'     => 'integer',
                                                             'required' => true ),
                                                      array( 'name'     => 'language',
                                                             'type'     => 'string',
                                                             'required' => false,
                                                             'default'  => false ) ) );

$FunctionList['tags_by_keyword'] = array( 'name'        => 'tags_by_keyword',
                                          'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                                  'method' => 'fetchTagsByKeyword' ),
                                          'parameters'  => array( array( 'name'     => 'keyword',
                                                                         'type'     => 'string',
                                                                         'required' => true ),
                                                                  array( 'name'     => 'language',
                                                                         'type'     => 'string',
                                                                         'required' => false,
                                                                         'default'  => false ) ) );

$FunctionList['tag_by_remote_id'] = array( 'name'        => 'tag_by_remote_id',
                                           'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                                   'method' => 'fetchTagByRemoteID' ),
                                           'parameters'  => array( array( 'name'     => 'remote_id',
                                                                          'type'     => 'string',
                                                                          'required' => true ),
                                                                   array( 'name'     => 'language',
                                                                          'type'     => 'string',
                                                                          'required' => false,
                                                                          'default'  => false ) ) );

$FunctionList['tag_by_url'] = array( 'name'        => 'tag_by_url',
                                     'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                             'method' => 'fetchTagByUrl' ),
                                     'parameters'  => array( array( 'name'     => 'url',
                                                                    'type'     => 'string',
                                                                    'required' => true ),
                                                             array( 'name'     => 'language',
                                                                    'type'     => 'string',
                                                                    'required' => false,
                                                                    'default'  => false ) ) );

$FunctionList['list'] = array( 'name'        => 'list',
                               'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                       'method' => 'fetchTagTree' ),
                               'parameters'  => array( array( 'name'     => 'parent_tag_id',
                                                              'type'     => 'integer',
                                                              'required' => true ),
                                                       array( 'name'     => 'sort_by',
                                                              'type'     => 'array',
                                                              'required' => false,
                                                              'default'  => array() ),
                                                       array( 'name'     => 'offset',
                                                              'type'     => 'integer',
                                                              'required' => false,
                                                              'default'  => false ),
                                                       array( 'name'     => 'limit',
                                                              'type'     => 'integer',
                                                              'required' => false,
                                                              'default'  => false ),
                                                       array( 'name'     => 'depth',
                                                              'type'     => 'integer',
                                                              'required' => false,
                                                              'default'  => 1 ),
                                                       array( 'name'     => 'depth_operator',
                                                              'type'     => 'string',
                                                              'required' => false,
                                                              'default'  => 'le' ),
                                                       array( 'name'     => 'include_synonyms',
                                                              'type'     => 'bool',
                                                              'required' => false,
                                                              'default'  => false ),
                                                       array( 'name'     => 'language',
                                                              'type'     => 'string',
                                                              'required' => false,
                                                              'default'  => false ) ) );

$FunctionList['list_count'] = array( 'name'        => 'list_count',
                                     'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                             'method' => 'fetchTagTreeCount' ),
                                     'parameters'  => array( array( 'name'     => 'parent_tag_id',
                                                                    'type'     => 'integer',
                                                                    'required' => true ),
                                                             array( 'name'     => 'depth',
                                                                    'type'     => 'integer',
                                                                    'required' => false,
                                                                    'default'  => 1 ),
                                                             array( 'name'     => 'depth_operator',
                                                                    'type'     => 'string',
                                                                    'required' => false,
                                                                    'default'  => 'le' ),
                                                             array( 'name'     => 'include_synonyms',
                                                                    'type'     => 'bool',
                                                                    'required' => false,
                                                                    'default'  => false ),
                                                             array( 'name'     => 'language',
                                                                    'type'     => 'string',
                                                                    'required' => false,
                                                                    'default'  => false ) ) );

$FunctionList['tree'] = array( 'name'        => 'tree',
                               'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                       'method' => 'fetchTagTree' ),
                               'parameters'  => array( array( 'name'     => 'parent_tag_id',
                                                              'type'     => 'integer',
                                                              'required' => true ),
                                                       array( 'name'     => 'sort_by',
                                                              'type'     => 'array',
                                                              'required' => false,
                                                              'default'  => array() ),
                                                       array( 'name'     => 'offset',
                                                              'type'     => 'integer',
                                                              'required' => false,
                                                              'default'  => false ),
                                                       array( 'name'     => 'limit',
                                                              'type'     => 'integer',
                                                              'required' => false,
                                                              'default'  => false ),
                                                       array( 'name'     => 'depth',
                                                              'type'     => 'integer',
                                                              'required' => false,
                                                              'default'  => false ),
                                                       array( 'name'     => 'depth_operator',
                                                              'type'     => 'string',
                                                              'required' => false,
                                                              'default'  => false ),
                                                       array( 'name'     => 'include_synonyms',
                                                              'type'     => 'bool',
                                                              'required' => false,
                                                              'default'  => false ),
                                                       array( 'name'     => 'language',
                                                              'type'     => 'string',
                                                              'required' => false,
                                                              'default'  => false ) ) );

$FunctionList['tree_count'] = array( 'name'        => 'tree_count',
                                     'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                             'method' => 'fetchTagTreeCount' ),
                                     'parameters'  => array( array( 'name'     => 'parent_tag_id',
                                                                    'type'     => 'integer',
                                                                    'required' => true ),
                                                             array( 'name'     => 'depth',
                                                                    'type'     => 'integer',
                                                                    'required' => false,
                                                                    'default'  => false ),
                                                             array( 'name'     => 'depth_operator',
                                                                    'type'     => 'string',
                                                                    'required' => false,
                                                                    'default'  => false ),
                                                             array( 'name'     => 'include_synonyms',
                                                                    'type'     => 'bool',
                                                                    'required' => false,
                                                                    'default'  => false ),
                                                             array( 'name'     => 'language',
                                                                    'type'     => 'string',
                                                                    'required' => false,
                                                                    'default'  => false ) ) );

$FunctionList['latest_tags'] = array( 'name'        => 'latest_tags',
                                      'call_method' => array( 'class'  => 'eZTagsFunctionCollection',
                                                              'method' => 'fetchLatestTags' ),
                                      'parameters'  => array( array( 'name'     => 'parent_tag_id',
                                                                     'type'     => 'integer',
                                                                     'required' => false,
                                                                     'default'  => false ),
                                                              array( 'name'     => 'limit',
                                                                     'type'     => 'integer',
                                                                     'required' => false,
                                                                     'default'  => 0 ),
                                                              array( 'name'     => 'language',
                                                                     'type'     => 'string',
                                                                     'required' => false,
                                                                     'default'  => false ) ) );
