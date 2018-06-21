<?php

return [
    // Base data
    'data-yacht'            => [  'default_table'   => 'public.property_yacht'
                                , 'model'           => 'Yacht'],

    'data-broker'           => [  'default_table'   => 'mod_fusionfw.organisation'
                                , 'model'           => 'Broker'],

    'data-broker-address'   => [  'default_table'   => 'mod_fusionfw.organisation_address'
                                , 'model'           => 'Address'
                                , 'parent'          => 'Broker'],

    // Builder includes: Naval Architect / New Build / Interior Design / Exterior / Refitter
    'data-builder'          => [  'default_table'   => 'system.property_yacht_builder'
                                , 'model'           => 'Builder'
                                , 'parent'          => 'builder'],

    // Builder includes: Naval Architect / New Build / Interior Design / Exterior / Refitter
    'data-builder-address'  => [  'default_table'   => 'system.property_yacht_builder_address'
                                , 'model'           => 'Address'
                                , 'parent'          => 'Builder'],

    // Now we can get specific data using correct mapping ID's
    'data-model'            => [  'default_table'   => 'system.property_yacht_model'
                                , 'model'           => 'Yachtmodel'],

    // Now we can get specific data using correct mapping ID's
    'data-group'            => [  'default_table'   => 'mod_fusionfw.organisation_group'
                                , 'model'           => 'Group'],

    // Now we can get specific data using correct mapping ID's
    'data-country'          => [  'default_table'   => 'mod_fusionfw.country'
                                , 'model'           => 'Country'],

    // Now we can get specific data using correct mapping ID's
    'data-yacht-image'      => [  'default_table'   => 'public.property_description_resource'
                                , 'model'           => 'Multimedia'],

];