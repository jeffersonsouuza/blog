<?php

namespace app\Core;

class CurrenteDate {
    private $data;

    public function __construct() {
        $this->data = new DateTime(); // Utiliza a classe DateTime do PHP
    }

    public function getDiaSemana() {
        $diasSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
        return $diasSemana[(int)$this->data->format('w')]; // 'w' retorna o índice do dia da semana (0 para Domingo, 6 para Sábado)
    }

    public function getDia() {
        return (int)$this->data->format('d'); // 'd' retorna o dia do mês com dois dígitos (01 a 31)
    }

    public function getMes() {
        $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
        return $meses[(int)$this->data->format('n') - 1]; // 'n' retorna o número do mês sem zero à esquerda (1 a 12)
    }

    public function getAno() {
        return (int)$this->data->format('Y'); // 'Y' retorna o ano com quatro dígitos
    }

    public function getHoras() {
        return (int)$this->data->format('H'); // 'H' retorna a hora no formato 24 horas (00 a 23)
    }

    public function getPeriodoDoDia() {
        $periodoDoDia = [
            [18, 'Boa noite'],
            [12, 'Boa tarde'],
            [6,  'Bom dia'],
            [0,  'Uau, madrugador']
        ];

        foreach ($periodoDoDia as $periodo) {
            if ($this->getHoras() >= $periodo[0]) {
                return $periodo[1];
            }
        }
    }

    public function getDataCompleta() {
        return $this->getDiaSemana() . ', ' . $this->getDia() . ' de ' . $this->getMes() . ' de ' . $this->getAno();
    }
}

?>
