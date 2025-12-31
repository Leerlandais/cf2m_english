<?php

namespace model\Mapping;

use model\Abstract\AbstractMapping;

class EnglishUserMapping extends AbstractMapping
{
private int $english_user_id;
private string $english_user_name;
private string $english_user_firstname;
private string $english_user_username;
private string $english_user_email;
private string $english_user_password;
private string $english_user_roles;
private int $english_user_course;
private bool $english_user_active;

    public function isEnglishUserActive(): bool
    {
        return $this->english_user_active;
    }

    public function setEnglishUserActive(bool $english_user_active): void
    {
        $this->english_user_active = $english_user_active;
    }

    public function getEnglishUserCourse(): int
    {
        return $this->english_user_course;
    }

    public function setEnglishUserCourse(int $english_user_course): void
    {
        $this->english_user_course = $english_user_course;
    }

    public function getEnglishUserRoles(): string
    {
        return $this->english_user_roles;
    }

    public function setEnglishUserRoles(string $english_user_roles): void
    {
        $this->english_user_roles = $english_user_roles;
    }

    public function getEnglishUserPassword(): string
    {
        return $this->english_user_password;
    }

    public function setEnglishUserPassword(string $english_user_password): void
    {
        $this->english_user_password = $english_user_password;
    }

    public function getEnglishUserEmail(): string
    {
        return $this->english_user_email;
    }

    public function setEnglishUserEmail(string $english_user_email): void
    {
        $this->english_user_email = $english_user_email;
    }

    public function getEnglishUserUsername(): string
    {
        return $this->english_user_username;
    }

    public function setEnglishUserUsername(string $english_user_username): void
    {
        $this->english_user_username = $english_user_username;
    }

    public function getEnglishUserFirstname(): string
    {
        return $this->english_user_firstname;
    }

    public function setEnglishUserFirstname(string $english_user_firstname): void
    {
        $this->english_user_firstname = $english_user_firstname;
    }

    public function getEnglishUserName(): string
    {
        return $this->english_user_name;
    }

    public function setEnglishUserName(string $english_user_name): void
    {
        $this->english_user_name = $english_user_name;
    }

    public function getEnglishUserId(): int
    {
        return $this->english_user_id;
    }

    public function setEnglishUserId(int $english_user_id): void
    {
        $this->english_user_id = $english_user_id;
    }


}