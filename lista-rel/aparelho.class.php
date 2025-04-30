<?php
class Aparelho
{
    public function __construct(private string $aparelho = "") {}

    public function getAparelho()
    {
        return $this->aparelho;
    }
}
?>