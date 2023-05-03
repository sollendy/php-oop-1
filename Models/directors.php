<?php 
class Directors {
    public $director;
    function __construct(string $director) {
        $this->director = $director;
    }
    public function scopriRegista() {
        return "{$this->director}";
    }
}