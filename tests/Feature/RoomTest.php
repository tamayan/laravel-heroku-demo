<?php

namespace Tests\Feature;

use App\Room;
use Exception;
use Tests\TestCase;

class RoomTest extends TestCase
{
    private const SINGLE = 'single';

    private const SEMI_DOUBLE = 'semi-double';

    /**
     * @throws Exception
     */
    public function test_success_single()
    {
        $room = new Room(self::SINGLE, 1);

        $this->assertInstanceOf(Room::class, $room);
        $this->assertSame(self::SINGLE, $room->getType());
        $this->assertSame(1, $room->getCount());
    }

    public function test_fail_single_none() {
        $this->expectException(Exception::class);
        // 0人をセットしてエラーとなる
        new Room(self::SINGLE, 0);
    }

    public function test_fail_single_limit() {
        $this->expectException(Exception::class);
        // 上限が1人なのでエラーとなる
        new Room(self::SINGLE, 2);
    }

    /**
     * @throws Exception
     */
    public function test_success_semi_double() {
        $room = new Room(self::SEMI_DOUBLE, 2);

        $this->assertInstanceOf(Room::class, $room);
        $this->assertSame(self::SEMI_DOUBLE, $room->getType());
        $this->assertSame(2, $room->getCount());
    }

    public function test_Fail_semi_double_none() {
        $this->expectException(Exception::class);
        // 上限が1人なのでエラーとなる
        new Room(self::SEMI_DOUBLE, 0);
    }

    public function test_Fail_semi_double_limit() {
        $this->expectException(Exception::class);
        // 上限が2人なのでエラーとなる
        new Room(self::SEMI_DOUBLE, 3);
    }
}
