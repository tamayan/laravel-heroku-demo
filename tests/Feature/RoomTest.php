<?php

namespace Tests\Feature;

use App\Room;
use Exception;
use Tests\TestCase;

class RoomTest extends TestCase
{
    private const SINGLE = 'single';

    private const SEMI_DOUBLE = 'semi-double';

    private const DOUBLE = 'double';

    private const SWEET_ROOM = 'sweet-room';

    /**
     * A basic feature test example.
     *
     * @return void
     * @throws Exception
     */
    public function test_Success_Single()
    {
        $room = new Room(self::SINGLE, 1);

        $this->assertInstanceOf(Room::class, $room);
        $this->assertSame(self::SINGLE, $room->getType());
        $this->assertSame(1, $room->getCount());
    }

    public function test_Fail_single_none() {
        $this->expectException(Exception::class);
        // 0人をセットしてエラーとなる
        new Room(self::SINGLE, 0);
    }

    public function test_Fail_single_limit() {
        $this->expectException(Exception::class);
        // 上限が1人なのでエラーとなる
        new Room(self::SINGLE, 1);
    }
}
