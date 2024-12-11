#!/bin/bash

entities=("bookings" "booking_extras" "routes" "vehicles" "vehicle_types" "vehicle_attributes" "vehicle_companies" "locations" "pricing_rules" "availability_rules" "drivers" "coupons" "geofence" "tax_rates" "email_accounts" "currencies")

for entity in "${entities[@]}"; do
    mkdir -p resources/views/$entity
    touch resources/views/$entity/index.blade.php
    touch resources/views/$entity/create.blade.php
    touch resources/views/$entity/edit.blade.php
    touch resources/views/$entity/show.blade.php
done

echo "Diretórios e arquivos de views criados com sucesso!"
