<?php

class DataCompare{
    public bool $hasCsvHead;
    public $data;

    public function __construct(bool $hasCsvHead){
        $this->hasCsvHead = $hasCsvHead;
    }

    public function readDataFromFile(string $nazwaPliku): bool{
        $this->data = [];
        $file = fopen($nazwaPliku, 'r');

        if($this->hasCsvHead){
            $head = explode(',', trim(fgets($file)));
            $this->data = array_fill_keys($head, '');

            $data = explode(',', trim(fgets($file)));
            foreach($data as $key => $value){
                $int = intval($value);
                if($int != 0){
                    $this->data[$head[$key]] = $int;
                    continue;
                }
                if($value == 'false'){
                    $this->data[$head[$key]] = false;
                    continue;
                }
                $this->data[$head[$key]] = $value;
            }
        } else {
            $this->data = '';
            while(!feof($file)){
                $line = fgets($file);
                $data = explode(',', trim($line));

                foreach ($data as $d){
                    $int = intval($d);
                    if($int != 0){
                        $this->data .= $int . ',';
                        continue;
                    }
                    if($d == 'false'){
                        $this->data .= false . ',';
                        continue;
                    }
                    $this->data .= "'".$d."',";
                }
                $this->data = substr($this->data, 0, -1);
                $this->data .= "\n";
            }
            $this->data = trim($this->data);
        }

        fclose($file);
        return true;
    }

}