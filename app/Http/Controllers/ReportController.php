<?php

namespace App\Http\Controllers;

use App\Services\Decorators\CustomStyleDecorator;
use Illuminate\Http\Request;
use App\Services\ReportBase;
use App\Services\Decorators\HeaderDecorator;
use App\Services\Decorators\BorderDecorator;
use App\Services\Decorators\ColorDecorator;
use App\Services\Decorators\FooterDecorator;
use App\Services\Decorators\MarginDecorator;
use App\Services\Decorators\FontDecorator;

class ReportController extends Controller
{
    /**
     * Exibe o formulário para a geração do relatório.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        return view('formulario_report');
    }

    /**
     * Gera o relatório com base nas preferências do usuário e no conteúdo fornecido.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function generateReport(Request $request){
        $reportContent = "
            <h2 style='text-align:center;'>Relatório Completo de Análise Financeira</h2>
            <p>O presente relatório oferece uma análise detalhada dos dados financeiros e operacionais da organização, incluindo as principais métricas financeiras do período.</p>

            <h3>Indicadores Econômicos</h3>
            <p>Uma visão geral dos principais indicadores financeiros e operacionais da empresa.</p>
            <table style='width: 100%; border-collapse: collapse;'>
                <thead>
                    <tr>
                        <th style='border: 1px solid #000; padding: 10px; text-align: left;'>#</th>
                        <th style='border: 1px solid #000; padding: 10px; text-align: left;'>Descrição</th>
                        <th style='border: 1px solid #000; padding: 10px; text-align: right;'>Valor (R$)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style='border: 1px solid #000; padding: 10px;'>1</td>
                        <td style='border: 1px solid #000; padding: 10px;'>Receita Operacional</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 50,000.00</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid #000; padding: 10px;'>2</td>
                        <td style='border: 1px solid #000; padding: 10px;'>Custo de Operações</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 30,000.00</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid #000; padding: 10px;'>3</td>
                        <td style='border: 1px solid #000; padding: 10px;'>Lucro Bruto</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 20,000.00</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid #000; padding: 10px;'>4</td>
                        <td style='border: 1px solid #000; padding: 10px;'>Lucro Líquido</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 12,000.00</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid #000; padding: 10px;'>5</td>
                        <td style='border: 1px solid #000; padding: 10px;'>EBITDA</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 15,000.00</td>
                    </tr>
                </tbody>
            </table>

            <h3>Comparação com o Período Anterior</h3>
            <p>Aqui, comparamos as métricas de desempenho com o mesmo período do ano anterior.</p>
            <table style='width: 100%; border-collapse: collapse;'>
                <thead>
                    <tr>
                        <th style='border: 1px solid #000; padding: 10px; text-align: left;'>Métrica</th>
                        <th style='border: 1px solid #000; padding: 10px; text-align: right;'>Ano Anterior (R$)</th>
                        <th style='border: 1px solid #000; padding: 10px; text-align: right;'>Este Ano (R$)</th>
                        <th style='border: 1px solid #000; padding: 10px; text-align: right;'>Variação (%)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style='border: 1px solid #000; padding: 10px;'>Receita Operacional</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 45,000.00</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 50,000.00</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>+11.11%</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid #000; padding: 10px;'>Lucro Bruto</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 18,000.00</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>R$ 20,000.00</td>
                        <td style='border: 1px solid #000; padding: 10px; text-align: right;'>+11.11%</td>
                    </tr>
                </tbody>
            </table>
        ";

        $report = new ReportBase($reportContent);

        if ($request->input('header')) {
            $report = new HeaderDecorator($report, $request->input('header_text', 'Relatório - Análise Financeira'));
        }

        if ($request->input('border')) {
            $report = new BorderDecorator($report);
        }

        if ($request->input('color')) {
            $report = new ColorDecorator($report, $request->input('color_value', 'black'));
        }

        if ($request->input('footer')) {
            $footerText = $request->input('footer_text');
            $report = new FooterDecorator($report, $footerText);
        }

        if ($request->input('margin')) {
            $report = new MarginDecorator($report, $request->input('margin_value', '10px'));
        }

        if ($request->input('font')) {
            $report = new FontDecorator($report, $request->input('font_value', 'Arial'));
        }

        if ($request->input('custom_style')) {
            $report = new CustomStyleDecorator($report, $request->input('custom_style'));
        }

        $finalReport = $report->render();

        return response($finalReport)->header('Content-Type', 'text/html');
    }
}
