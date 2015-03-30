<?php

return [
    // Mapping an interface to an implementation
    'repositories\contracts\iVehicleRepository' => DI\object('repositories\implementation\VehicleRepository')
];
