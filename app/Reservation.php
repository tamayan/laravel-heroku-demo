<?php

namespace App;

class Reservation
{
    public function __construct(
        private string $lastName,
        private string $firstName,
        private string $email,
        private string $phone,
        private string $checkin,
        private int $days,
        private Room $room
    )
    {
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getCheckin(): string
    {
        return $this->checkin;
    }

    /**
     * @return int
     */
    public function getDays(): int
    {
        return $this->days;
    }

    /**
     * @return Room
     */
    public function getRoom(): Room
    {
        return $this->room;
    }
}
