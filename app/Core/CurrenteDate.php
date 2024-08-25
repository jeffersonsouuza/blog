<?php

namespace app\Core;

use DateTime;

class CurrenteDate {
    private DateTime $data;
    private array $lang;

    public function __construct() {
        global $lang;
        require_once 'app/Core/languageHandler.php';

        $this->data = new DateTime();
        $this->lang = $lang;
    }

    public function getDiaSemana() {
        $diasSemana = [
            $this->lang['Sunday'], $this->lang['Monday'], $this->lang['Tuesday'], $this->lang['Wednesday'],
            $this->lang['Thursday'], $this->lang['Friday'], $this->lang['Saturday']
        ];
        return $diasSemana[(int)$this->data->format('w')];
    }

    public function getDia() {
        return (int)$this->data->format('d');
    }

    public function getMes() {
        $meses = [
            $this->lang['January'], $this->lang['February'], $this->lang['March'], $this->lang['April'],
            $this->lang['May'], $this->lang['June'], $this->lang['July'], $this->lang['August'], $this->lang['September'],
            $this->lang['October'], $this->lang['November'], $this->lang['December']];
        return $meses[(int)$this->data->format('n') - 1];
    }

    public function getAno() {
        return (int)$this->data->format('Y');
    }

    public function getHoras() {
        return (int)$this->data->format('H');
    }

    public function getPeriodoDoDia() {
        $periodoDoDia = [
            [18, $this->lang['good-evening']],
            [12, $this->lang['good-afternoon']],
            [6,  $this->lang['good-morning']],
            [0,  $this->lang['early-riser']]
        ];

        foreach ($periodoDoDia as $periodo) {
            if ($this->getHoras() >= $periodo[0]) {
                return $periodo[1];
            }
        }
    }

    public function getDataCompletaPtBR() {
        return $this->getDiaSemana() . ', ' . $this->getDia() . ' de ' . $this->getMes() . ' de ' . $this->getAno();
    }

    public function getDataCompletaEN() {
        return $this->getMes() . ' ' . $this->getDia() . 'th, ' . $this->getAno();
    }
}
