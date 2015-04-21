<?php class λ{protected $r = [];public function __construct($args = null) {global $argv;$this->args = $args === null ?
    array_splice($argv, 1) : $args;}function cfg($k,$v=null){$c=&$this->$k;if($v===null)return is_callable($c)?
    ($c=$c($this)):$c;$c=$v;return $this;}function add($r, $c) {$this->r[] = ['r' => explode(' ', $r), 'c' => $c];}
    function run(){foreach ($this->r as $e) $m = []; foreach ($e['r'] as $r) foreach ($this->args as $arg)
        if (preg_match('#' . $r . '#', $arg, $match)) foreach ($match as $k => $v) !is_int($k) && $m[$k] = $v;
        $m && call_user_func($e['c'], [$m]);}}
