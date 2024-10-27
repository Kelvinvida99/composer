<?php

namespace app\business;

use app\interfaces\DataInterface;
use app\interfaces\ExcelInterface;

class GeneratorExcel {
    private DataInterface $repository;
    private ExcelInterface $excel;

    public function __construct(DataInterface $repository, ExcelInterface $excel)
    {
        $this->repository = $repository;
        $this->excel = $excel;
    }

    public function generator(string $filePath)
    {
        $data = $this->repository->get();
    }
}