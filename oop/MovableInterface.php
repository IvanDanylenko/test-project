<?php

interface MovableInterface
{
    /**
     * Get info
     * @return mixed
     */
    public function info();
    /**
     * Start engine
     * @return mixed
     */
    public function start();

    /**
     * Stop engine
     * @return mixed
     */
    public function stop();

    /**
     * Increase speed
     * @param int $unit
     * @return mixed
     */
    public function up(int $unit);

    /**
     * Decrease speed
     * @param int $unit
     * @return mixed
     */
    public function down(int $unit);
}
