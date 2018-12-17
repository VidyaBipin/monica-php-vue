<?php

namespace Tests\Unit\Services\Instance\Geolocalization;

use App\Models\Contact\Address;
use Tests\TestCase;
use App\Exceptions\MissingParameterException;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Services\Instance\Geolocalization\GetGPSCoordinateFromAddress;

class GetGPSCoordinateFromAddressTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_returns_null_if_geolocation_is_disabled()
    {
        config(['monica.enable_geolocation' => false]);

        $address = factory(Address::class)->create();

        $request = [
            'account_id' => $address->account_id,
            'address_id' => $address->id,
        ];

        $addressService = new GetGPSCoordinateFromAddress;
        $address = $addressService->execute($request);

        $this->assertNull($address);
    }

    public function test_it_gets_gps_coordinates()
    {
        config(['monica.enable_geolocation' => true]);

        $address = factory(Address::class)->create();

        $request = [
            'account_id' => $address->account_id,
            'address_id' => $address->id,
        ];

        $addressService = new GetGPSCoordinateFromAddress;
        $address = $addressService->execute($request);

        $this->assertDatabaseHas('addresses', [
            'id' => $address->id,
        ]);

        $this->assertInstanceOf(
            Address::class,
            $address
        );
    }

    public function test_it_returns_null_if_address_is_garbage()
    {
        config(['monica.enable_geolocation' => true]);

        $address = factory(Address::class)->create([
            'country' => 'ewqr',
            'street' => '',
            'city' => 'sieklopekznqqq',
            'postal_code' => '',
        ]);

        $request = [
            'account_id' => $address->account_id,
            'address_id' => $address->id,
        ];

        $addressService = new GetGPSCoordinateFromAddress;
        $address = $addressService->execute($request);

        $this->assertNull($address);
    }

    public function test_it_fails_if_wrong_parameters_are_given()
    {
        $request = [
            'account_id' => 111,
        ];

        $this->expectException(MissingParameterException::class);

        $addressService = new GetGPSCoordinateFromAddress;
        $address = $addressService->execute($request);
    }
}
