@echo off
:: Diretórios para as entidades
set directories=bookings booking_extras routes vehicles vehicle_types vehicle_attributes vehicle_companies locations pricing_rules availability_rules drivers coupons geofence tax_rates email_accounts currencies

:: Loop para criar os diretórios e os arquivos
for %%d in (%directories%) do (
    mkdir resources\views\%%d
    type nul > resources\views\%%d\index.blade.php
    type nul > resources\views\%%d\create.blade.php
    type nul > resources\views\%%d\edit.blade.php
    type nul > resources\views\%%d\show.blade.php
)

echo Diretórios e arquivos de views criados com sucesso!
pause
